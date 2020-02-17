# php 微框架(带database版)
# 介绍
因开发公司的微服务网关（服务粘合层，暴露HTTP接口共前端调用），要求程序尽可能轻简快速。由于喜欢Laravel层次分明的设计模式和实用的功能，又喜欢Slim的轻量级和快速响应。于是参考Laravel的核心思想编写了一个类似Slim这样的微框架，自用于公司业务，代码也简单轻量容易根据应用场景做二次开发。框架极简但是响应速度快（初始化到启动完成1ms）。

# 框架功能:
- 1.利用反射机制自动解决依赖注入。
- 2.路由器
- 3.控制器
- 4.数据库DB组件
- 5.包装器(中间件)
- 6.事件监听系统
- 7.服务提供者
- 8.服务容器
- 9.代理
- 10.Config配置
- 11.Log日志
- 12.HTTP request组件
- 13.参数过滤器
- 14.Whoops友好异常提示

# 框架运行流程:
#### 请求->入口文件->框架引擎初始化环境(环境配置，异常处理注册，日志服务注册，服务提供者注册，代理服务注册，启动服务提供者)->解析http请求实例化Request类->服务容器注册绑定Request实例以供后续使用->路由寻址响应目标（如控制器方法）->前置路由包装器进行一系列前置处理动作（如过滤拦截，日志，事件监听等）->响应目标作出响应结果（包括业务逻辑，事件监听等）->后置路由包装器进行一系列后置处理动作（如日志记录，事件监听等）->完成

#  简单介绍使用:
## 入口文件:
框架入口文件位于public/index.php，使用者可以自行修改入口文件位置。
## 框架初始化文件:
框架初始化工作在文件bootstrap/app.php中完成，由入口文件public/index.php引入:
bootstrap/app.php初始化工作:
```php
//引入自动加载器
require '../vendor/autoload.php';

//实例框架核心引擎
$app = new \App\Core\Application;

//框架初始化
$app->boot();

return $app;
```
public/index.php请求入口:
```php
//引入初始化脚本并获得框架核心引擎
$app = require '../bootstrap/app.php';

//获得当前请求封装类实例
$request = \Bobby\Component\Http\Request\InstanceFactory::make();

//根据请求路由寻址并进行一系列处理工作，响应结果
$app->responsePipeline($request);
```
## 路由:
框架路由统一在app/route/route.php定义,示例:
```php
//引入route组件代理类
use Bobby\Component\Proxy\Route;
use Bobby\Component\Proxy\Request;

//定义get方法请求路由,响应动作可以为闭包执行或控制器方法,此处是闭包*
Route::get('/', function(){
 	echo '<h1 style="position:fixed;left:0;right:0;top:0;bottom:0;margin:auto;width:100%;height:30px;text-align:center;">
	do(9 ^ v ^)9 { Bobby :D\'s frame work started ; } while( 6 _ 6 )
	</h1>';
});

//定义任意方法请求路由,响应动作可以为闭包执行或控制器方法,此处是控制器,以下同理
Route::any('/example/{name}/{id}', 'ExampleController::iocExample')->wrappers(['example', 'before', 'after']);

//定义post方法请求路由
Route::post('/{member}/member', function($member, \StdClass $std) {*
	var_dump(Request::post(), Request::filter('post'), $member, $std);*
});

//路由组定义,路由组即同组的路由会享有共同的配置,路由组可嵌套
Route::group(['wrappers' => ['before', 'example']], function($route) {

	$route->group(['wrappers' => 'after'], function($route) {

		$route->get('/home', function(){

			//事件监听系统
			\Bobby\Component\Proxy\Event::fire(new \App\Event\Example("Event mode example </br>"));

			echo 'This is home .</br>';*
		});

	});
});
```

默认路由文件:
所有路由都定义在位于 app/Route/route.php 目录下的路由文件中，这些文件通过框架自动加载，相应逻辑位于 Bobby/Component/Provider/RouteProvider 类。路由定义文件可以在app/Config/app.php文件中修改route项修改。

有效的路由方法:

我们可以注册路由来响应任何 HTTP 请求动作：
- Route::get($uri, $callback);
- Route::post($uri, $callback);
- Route::put($uri, $callback);
- Route::delete($uri, $callback);
- Route::any($uri, $callback);

$callback可以是闭包或者控制器方法,控制器方法定义格式为 不带命名空间的控制器类名::方法名。控制器一般位于 \App\Controller\ 命名空间或子空间下,按照psr4标准,即在app/Controller或者其子目录下。可以在app/Config/app.php文件中修改route项,包括路由定义文件以及路由缓存配置可在其中修改。

路由参数:
有时我们需要在路由中获取 URI 请求参数。例如，如果要从 URL 中获取用户ID，需要通过如下方式定义路由参数：

```php
Route::get('user/{id}', function ($id) {
	return 'User ' . $id;
});
```
这样我们在浏览器中访问 http://blog.test/user/1，就会得到以下输出：
User 1

可以根据需要在路由中定义多个路由参数：
```php
Route::get('posts/{post}/comments/{comment}', function ($post, $comment) {
	return $post . '-' . $comment;
});
```
根据上面的示例，路由参数需要通过花括号{}进行包裹，这些参数在路由被执行时会被传递到路由的闭包或控制器。路由参数可以由正则表达式限制特定规则,如{post:[A-Za-z]+}为$post不得为空且必须是字母,也可以自定义相应正则使其为可选参数。

路由分组:
路由分组的目的是让我们在多个路由中共享相同的路由属性，比如中间件和命名空间等，这样的话我们定义了大量的路由时就不必为每一个路由单独定义属性。共享属性以数组的形式作为第一个参数被传递给 Route::group 方法:
```php
//路由组定义
Route::group(['wrappers' => ['before', 'example']], function($route) {
	//以下两个路由将经过同样的中间件:before和example中间件

	$route->get('/home', function(){
		echo 'This is home .</br>';*
	});
	$route->post('/welcome', function(){
		echo 'Welcome .</br>';*
	});
	
});
```

## 控制器:
*示例：*
```php
namespace App\Controller;

use Bobby\Component\Proxy\Request; //Request组件的门面
use Bobby\Contract\Config\Config; //Config契约

/**
 * 控制器示例代码
 */
class ExampleController
{
	public function iocExample($name, $id, \StdClass $std, $default = 'ioc')
	{
	   	var_dump($name, $id, $std, $default, Request::get());
	}
}
```
控制器方法可自动注入路由参数,类,或者服务容器绑定的契约实现和代理,如参数没有在路由uri中定义还可以使用默认值。

## 数据库
数据库由Bobby/Component/Database组件完成。可直接使用代理类Bobby\Component\Proxy\DB操作,示例:
数据库配置:
应用的数据库配置位于 app/config/database.php。在该文件中你可以定义所有的数据库连接，并指定哪个连接是默认连接。该文件中提供了所有支持数据库系统的配置示例。
return [
    
    'default' => 'mysql', //默认使用的数据库连接

    //数据库连接列表
    'connections' => [

        'mysql' => [

            'driver' => 'mysql',        //数据库驱动
            'host' => '127.0.0.1:3306', //连接主机
            'user' => 'root',           //用户名
            'password' => '',           //密码
            'database' => 'test',       //数据库
            'charset' => 'utf8mb4',     //字符集
            'prefix' => '',             //表前缀
            'timeout' => 1,             //连接超时时间，false表示无限制
            'error_mode' => 2,          //0 静默模式,默认的出错了不管;1 警告模式,如果出错了就会报出警告;2 异常模式,如果出错会采用异常来处理（PDOException） 
            'pconnect' => true,         //是否开启长连接
        ]

    ]

];
有时候你希望使用专门数据库连接做查询，有专门数据库连接做插入、更新和删除。

想要知道如何配置读/写连接，可以参考下面这个例子：
```php
return [
    
    'default' => 'mysql', //默认使用的数据库连接

    //数据库连接列表
    'connections' => [

        'mysql' => [

            'driver' => 'mysql',        //数据库驱动
            'user' => 'root',           //用户名
            'password' => '',           //密码
            'database' => 'test',       //数据库
            'charset' => 'utf8mb4',     //字符集
            'prefix' => '',             //表前缀
            'timeout' => 1,             //连接超时时间，false表示无限制
            'error_mode' => 2,          //0 静默模式,默认的出错了不管;1 警告模式,如果出错了就会报出警告;2 异常模式,如果出错会采用异常来处理（PDOException） 
            'pconnect' => true,         //是否开启长连接

            //读写分离配置
             'read' => [

                [
                    'host' => '127.0.0.2:3306',
                ],
                [
                     'host' => '127.0.0.3:3306',
                     'user' => 'admin',
                     'password' => '123456'
                ]

             ],

             'write' => [
		[
		     'host' => '127.0.0.2:3306',
		],
             ]

        ]

    ]

];
```

注意我们在配置数组中新增了2个键：read、write，read 和 write 这两个键对应值都有一个包含单个键“host”的数组，而其所映射的 IP 值分别就是读连接和写连接，读/写连接的其它数据库配置项都共用主数组配置。如果我们想要覆盖主数组中的配置，只需要将相应配置项放到 read 和 write 数组中即可。在读写数据时会从提供的 IP 中随机选一个进行连接。

数据库操作使用代理Bobby\Component\Proxy\DB:
```php
use Bobby\Component\Proxy\DB;
```
使用不同数据库连接：
使用多个数据库连接的时候，可以通过 DB 代理上的 connectRead或connectWrite 方法访问不同连接：
$users = DB::connectRead()->select(...);
甚至还可以用make方法指定数据库配置：
$users = DB::make('mysql2')->connectRead()->select(...);

运行原生 SQL 查询
配置好数据库连接后，就可以使用 DB 门面来运行查询。DB 门面为每种操作提供了相应方法：select, update, insert, delete。
```php
$users = DB::query('select * from users where active = ?', [1]);
DB::insert('insert into users (id, name) values (?, ?)', [1, 'Bobby']);
$affected = DB::update('update users set votes = 100 where name = ?', ['Bobby']);
$deleted = DB::delete('delete from users where id = ?', [1]);
```
开启事务:
```php
$connector = DB::connectWrite();
DB::query('begin', [], $connector);
#do something
DB::query('commit', [], $connector);
```
查询构建器:数据库查询构建器提供了一个方便的流接口用于创建和执行数据库查询。查询构建器可以用于执行应用中绝大部分数据库操作。

指定一张表:
```php
$user = DB::table('user');
```

从一张表中取出所有行
```php
DB::table('users')->select();
```
从一张表中取出一行
```php
DB::table('users')->find();
```

聚合函数
查询构建器还提供了多个聚合方法，如count, max, min, average 和 sum，你可以在构造查询之后调用这些方法：
```php
$users = DB::table('users')->count();

$price = DB::table('orders')->max('price');
```
```php
当然，你可以联合其它查询子句和聚合函数来构建查询：

$price = DB::table('orders')
                ->where('finalized', 1)
                ->average('price');
```

当然，我们并不总是想要获取数据表的所有列，使用 column 方法，你可以为查询指定自定义的 column 子句：
```php
$users = DB::table('users')->column(['name', 'email as user_email'])->select();
```
你可以通过原生sql指定column：
```php
$users = DB::table('users')->columnRaw('name, email as user_email')->select();
```
可以用子查询作为column：
```php
$users = DB::table('users')->columnSub(function($query) {
  $query->table('config')->find();
})->select();
//或者
$query = DB::table('config')->find();
DB::table('users')->columnSub($query)->select();
```

distinct 方法允许你强制查询返回不重复的结果集：
```php
$users = DB::table('users')->distinct()->select();
```

Where 子句
简单 Where 子句
使用查询构建器上的 where 方法可以添加 where 子句到查询中，调用where 最基本的方式需要传递3个参数，第一个参数是列名，第二个参数是任意一个数据库系统支持的操作符，第三个参数是该列要比较的值,你可以传递第四个参数指定连接类型。

例如，下面是一个验证“votes”列的值是否等于 100 的查询：
```php
$users = DB::table('users')->where('votes', '=', 100)->select();
```

为了方便，如果你只是简单比较列值和给定数值是否相等，可以将数值直接作为where 方法的第二个参数：
```php
$users = DB::table('users')->where('votes', 100)->select();
```

当然，你还可以使用其它操作符来编写 where 子句：
```php
$users = DB::table('users')
            ->where('votes', '>=', 100)
            ->select();

$users = DB::table('users')
            ->where('votes', '<>', 100)
            ->find();
	    
$user = DB::table('users')
	    ->where('name', '=', 'john')
	    ->find();
	    
$user = DB::table('users')
	    ->where('name', 'john')
	    ->find();
	    
$users = DB::table('users')
            ->where('name', 'like', 'T%')
	    ->where('status', 1)
            ->select();
	    
//复杂where条件
$user = DB::table('users')
	    ->where(function($query) {
	       $query->where(id, 2)->where('name', 'born');
	    })
	    ->find();

//子查询作为where条件
$users = DB::table('users')
	     ->where('name', 'in', function($query) {
	     	$query->table('orders')->where('goods', 'apple')->column('name');
	     })
	     ->select();
//或者
$query = DB::table('orders')->where('goods', 'apple')->column('name');
$users = DB::table('users')->where('name', 'in', $query)->select();
```
还可以传递条件数组到 where 方法：
```php
$users = DB::table('users')->where([
    ['status', '=', '1'],
    ['name', 'john'],
    ['subscribed', '<>', '1', 'or'],
])->select();
```
or 语句
你可以通过方法链将多个 where 约束链接到一起，也可以添加 or where子句到查询：
```php
$users = DB::table('users')
             ->where('votes', '>', 100)
             ->where('name', '=' ,'John', 'or')
             ->select();
```

in 语句:
```php
$users = DB::table('users')
             ->where('name', 'in', ['John', 'or'])
             ->select();
```

原生where:
```php
$users = DB::table('users')
             ->whereRaw('name in (?, ?)', ['John', 'or'])
             ->select();
```
join查询:
```php
$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id', 'LEFT')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->column('users.*', 'contacts.phone', 'orders.price')
            ->find();

//join添加and条件子句
$users = DB::table('users')
            ->join('contacts', function($query) {
		$query->on('orders', 'users.id', '=', 'orders.user_id')
		->and('users.id', '=', 2);
            }, null, null, 'LEFT')
            ->select();
```
group by分组：
```php
$users = DB::table('users')->groupBy(['sex', 'tall'])->having('age', '=', '18')->select();
```
having筛选：
```php
$users = DB::table('users')->groupBy(['sex', 'tall'])->having('age', '=', '18')->select();
//或者
$users = DB::table('users')->groupBy(['sex', 'tall'])->having('age', '18')->select();

//可以通过原生sql进行having筛选
$users = DB::table('users')->groupBy(['sex', 'tall'])->havingRaw('age = ?', [18])->select();
```
order by排序
```php
DB::table('users')->select()->orderBy('id', 'ASC')->orderBy('score', 'DESC')->select();

//你也可以通过原生sql指定排序方式:
DB::table('users')->select()->orderByRaw('id ASC, score, DESC')->select();
```
offset和limit查询:
```php
DB::table('users')->offset(5)->limit(10)->select();
```
union查询:
```php
$query = DB::table('users')->where('id', 10)->find();
DB::table('users')->union($query)->find();

//union all查询
$query = DB::table('users')->where('id', '<',10)->select();
DB::table('users')->union($query)->find();
```
insert插入:
```php
DB::table('users')->insert(['name' => 'john', 'sex' => 'man']);
//批量插入
DB::table('users')->insert(
	  [	
	    ['name' => 'john', 'sex' => 'man'],
	    ['name' => 'venis', 'sex' => 'woman']
	   ]
	);
```
update更新:
```php
DB::table('users')->where('id', 15)->update(['nickname' => 'rabbit']);
```
更多api请查看Bobby\Component\Database\SqlBuilder类。

## 包装器
包装器为过滤进入应用的 HTTP 请求提供了一套便利的机制。例如，验证用户是否经过认证（如登录），如果用户没有经过认证，包装器会将用户重定向到登录页面，而如果用户已经经过认证，中间件就会允许请求继续往前进入下一步操作。

定义包装器在APP\Provider\WrapperProvider中定义，即位于app/Provider/WrapperProvider.php中，只需要将包装器的键名和执行中间件的类添加到$wrap属性中以及将包装器名称添加到$provide中即可：
```php
namespace App\Provider;

use Bobby\Component\Provider\WrapperProvider as Provider;

/**
 * 包装器服务提供者
 */
class WrapperProvider extends Provider
{
	public $isDeffer = true;

	protected $wrap = [
		'example' => '\\App\\Wrapper\\Example',
		'before' => '\\App\\Wrapper\\BeforeExample',
		'after' => '\\App\\Wrapper\\AfterExample',
	];

	public $provide = ['example', 'before', 'after'];

}
```
请求之前/之后的包装器
一个包装器是请求前还是请求后执行取决于中间件本身。比如，以下中间件会在请求处理前执行一些任务：
```php

namespace App\Wrapper;

use Closure;

class BeforeWrapper
{
    public function handle(Closure $next)
    {
        // 执行动作

        return $next($request);
    }
}
```
而下面这个中间件则会在请求处理后执行其任务：

```php

namespace App\Wrapper;

use Closure;

class AfterMiddleware
{
    public function handle(Closure $next)
    {
        return $next($request);
	
	// 执行动作
    }
}
```
包装器参数
包装器还可以接收额外的自定义参数并且可以给参数赋予默认值，例如，如果应用需要在执行给定动作之前验证认证用户是否拥有指定的角色，可以创建一个 CheckRole 来接收角色名作为额外参数。

额外的包装器参数会在 $next 参数之后传入中间件：
```php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * 处理输入请求
     */
    public function handle(Closure $next, $role, $manager = 'all')
    {
        if ($mamager !== $role) {
            // Redirect...
        }

        return $next($request);
    }

}
```
定义路由时候使用包装器：
```php
Route::any('/example/{name}/{id}', 'ExampleController::iocExample')->wrappers(['example', 'before', 'after']);
Route::group(['wrappers' => ['before', 'example']], function($route) {
	$route->get('/home', function(){			
	});
});
```
在包装器名称后面跟:表示给包装器传参，多个参数用,隔开:
```php
Route::any('/example/{name}/{id}', 'ExampleController::iocExample')->wrappers(['example:admin', 'before:18', 'after:12, john']);//按参数定义顺序传入
```
## 事件监听系统
事件提供了简单的观察者模式实现，允许你订阅和监听应用中的事件。事件类默认存放在 app/Events 目录，监听器存放在 app/Listeners。当然你可以根据自己需要放到只想要的位置，只要在App\Provider\EventProvider中的$listen属性注册即可：
```php 
namespace App\Provider;

use Bobby\Component\Provider\EventProvider as Provider;

/**
 * 事件系统服务提供者
 */
class EventProvider extends Provider
{
	protected $listen = [
		'YourNameSpace\\Example' => 'YourNameSpace\\Example'
	];

	public function register()
	{
		parent::register();
	}

	public function boot()
	{
		parent::boot();
	}
}
```
定义事件示例:
```php
namespace App\Event;

/**
 * 事件定义示例代码
 */
class Example
{

	public $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

}
```
监听器定义示例:
```php
namespace App\Listener;

use App\Event\Example as Event;

/**
 * 事件监听器示例代码
 */
class Example
{

	public function handle(Event $event)
	{
		echo $event->data . '</br>';
	}

}
```
触发事件监听使用代理\Bobby\Component\Proxy\Event:
```php
\Bobby\Component\Proxy\Event::fire(new \App\Event\Example("Event mode example"));
```
## 系统配置Config类代理
\Bobby\Component\Proxy\Config代理可用于访问定义的配置项,配置文件位于app/Config目录下,你可以在里面添加自己定义的配置文件。如:
```php
use \Bobby\Component\Proxy\Config;
//获取app\Config\app.php里的'foo'配置
Config::get('app.foo');
//设置默认返回值
Config::get('app.foo', 'bar');
//临时设置app\Config\database里面的connections的mysql的host配置:
Config::set('database.connections.mysql.host', '192.169.2.5');
```

## http Request类代理
\Bobby\Component\Proxy\Request代理可用于http请求参数相关操作,http请求类对外接口:
```php
/**
 * http请求接口类
 */
interface Request
{
    /**
     * [get 获取GET数据]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function get($name = null, $defaultValue = null);

    /**
     * [post 获取POST数据]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function post($name = null, $defaultValue = null);

    /**
     * [files 获取$_FILES参数]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function files($name = null, $defaultValue = null);

    /**
     * [coockie 获取cookie数据]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function coockie($name = null, $defaultValue = null);

    /**
     * [server 获取环境变量$_SERVER数据]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function server($name = null, $defaultValue = null);

    /**
     * [getPHPInput 获取原始的POST包体]
     * @param  [type] $paramterName [description]
     * @param  [type] $defaultValue [description]
     * @return [type]               [description]
     */
    public function getPHPInput($paramterName = null, $defaultValue = null);

    /**
     * [http 获得所有http请求参数]
     * @return [type] [description]
     */
    public function http();

    /**
     * [header 获得请求头]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function header($name = null);

    /**
     * [uri 获得当前请求URI，不包括GET参数]
     * @return [type] [description]
     */
    public function uri();

    /**
     * [uriWithQuery 获得当前请求完整URI，包括GET参数]
     * @return [type] [description]
     */
    public function uriWithQuery();

    /**
     * [method 获得当前请求方法]
     * @return [type] [description]
     */
    public function method();

    /**
     * [time 获得当前请求时间]
     * @return [type] [description]
     */
    public function time();

    /**
     * [setGlobalFilter 设置全局的过滤方法]
     * @param array $callbacks [description]
     */
    public function setGlobalFilter(array $callbacks);

    /**
     * [filter 返回并过滤相应数据]
     * @param  string     $name      [description]
     * @param  array|null $callbacks [description]
     * @param  boolean    $append    [description]
     * @return [type]                [description]
     */
    public function filter(string $name, array $callbacks = null, $append = true);

}
```
如:
获取$_GET的foo参数
```php
\Bobby\Component\Proxy\Request::get('foo');
```
获取$_GET的foo参数,没有则返回bar
```php
\Bobby\Component\Proxy\Request::get('foo'，'bar');
```
获取所有$_POST,$_COOKIE,$_SERVER：
```php
\Bobby\Component\Proxy\Request::post();
\Bobby\Component\Proxy\Request::cookie();
\Bobby\Component\Proxy\Request::server();
```
获取$_SERVER数据，键名统一用小写，组件内部已经做了小写转化:
```php
echo \Bobby\Component\Proxy\Request::server('method');
```
返回当前请求uri
```php
\Bobby\Component\Proxy\Request::uri();
```
获取过滤后的请求参数
```php
\Bobby\Component\Proxy\Request::filter('post.foo', ['trim', 'htmlspacialchar']); //获得试用trim和htmlspacialchar过滤后的$_POST['foo'],过滤
函数名写入到第二个参数数组中,不添加过滤函数则不做任何处理;
```
也可以定义全局过滤函数
```php
\Bobby\Component\Proxy\Request::setGlobalFilter(['trim', 'strtolower', 'ucfirst']);
\Bobby\Component\Proxy\Request::filter('post.foo'); //自动为$_POST['foo']用trim和strtolower和ucfirst函数过滤
\Bobby\Component\Proxy\Request::filter('get.foo', ['htmlspecialchar']);全局函数和指定函数htmlspecialchar叠加过滤
```
## 错误处理和log日志
所有异常都由类都由Bobby\Component\Bootstrap\ExceptionHandle处理，对本地开发而言，你应该设置config/app.php配置 debug 值为 true。在生产环境，该值应该被设置为 false。如果在生产环境被设置为 true，就有可能将一些敏感的配置值暴露给终端用户。如果config/app.php配置
log项的record_exception为true，当发生错误时候将记录错日志到config/app.php的log项的path所配置的目标目录中。你可以编写日志组件代理类，在你想要的地方做你想要的日志处理。日志组件是Bobby\Component\Bootstrap\LogHandle类，使用方法可自行阅读源码。

## 服务容器和服务提供者
### 服务容器
服务容器是一个用于管理类依赖和执行依赖注入的强大工具。通过把一个服务类绑定到服务容器中，在需要时从服务容器中解析出来并注入到需要使用依赖的类中，可以达到解耦依赖的作用。通过服务容器绑定服务名称和服务实现，在使用服务实现时我们只需要知道服务名称，而不需要知道底层的服务实现，这样我们的底层实现只要实现了规定的契约（接口或者抽象），我们就可以在不修改上层业务代码的情况下随意去替换服务的实现组件。除此以外，服务容器可以根据反射机制自动解决所有服务依赖。
以下以\App\Core\Application为例，该类是框架的核心殷勤，继承\Bobby\Component\Container\Container容器类：
```php
$app = new \App\Core\Application;
```
简单的绑定:
```php
$app->bind('HelpSpot\API', function ($app) {
    return new HelpSpot\API($app->make('HttpClient'));
});
```
绑定一个单例:
```php
app->singleton('HelpSpot\API', function ($app) {
    return new HelpSpot\API($app->make('HttpClient'));
});
```
绑定实例，你还可以使用 instance 方法绑定一个已存在的对象实例到容器，随后调用容器将总是返回给定的实例：
```php
$api = new HelpSpot\API(new HttpClient);
$this->app->instance('HelpSpot\API', $api);
```
绑定接口到实现，服务容器的一个非常强大的功能是其绑定接口到实现。我们假设有一个 EventPusher 接口及其实现类 RedisEventPusher ，编写完该接口的 RedisEventPusher 实现后，就可以将其注册到服务容器：
```php
$app->bind(
    'App\Contracts\EventPusher', 
    'App\Services\RedisEventPusher'
);
```
解析服务：
```php
$api = $app->make('HelpSpot\Api');
$api->json(['username' => 'john']);
```
容器绑定一般以服务的契约作为服务名称，这样可以很直观地分析得到服务实现是哪个契约的实现。契约可以理解为服务实现的接口或者抽象类，用于规范服务实现的使用方法。
### 服务提供者
服务提供者是框架启动的中心，所有的应用以及所有核心服务类绑定到服务容器都是在服务提供者中完成的。所有服务提供者都包含两个方法： register 和 boot 。在 register 方法中，你唯一要做的事情就是绑定服务到服务容器，不要尝试在该方法中注册事件监听器，路由或者任何其它功能。
register 方法。正如前面所提到的，在 register 方法中只绑定服务到服务容器，而不要做其他事情，否则，一不小心就可能用到一个尚未被加载的服务提供者提供的服务：
```php

namespace App\Provider;

use Riak\Connection;
use Bobby\Contract\Provider\Provider;

class RiakServiceProvider extends Provider{
    /**
     * 在容器中注册绑定.
     *
     * @return void
     */
    public function register()
    {
        $this->container->singleton(Connection::class, function ($app) {
            return new Connection(config('riak'));
        });
    }
}
```
boot 方法。用于框架一些启动初始化处理：

```php

namespace App\Provider;

use Bobby\Contract\Provider\Provider;

class ComposerServiceProvider extends Provider{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->container->make('view')->build('home.html', function () {
            //
        });
    }
}
```
延迟加载服务提供者。如果你的服务仅仅只是在需要特定的请求中使用，你可以选择延迟加载该绑定直到注册绑定的服务真的需要时再加载，延迟加载这样的一个提供者将会提升应用的性能，因为它不会在每次请求时都从文件系统加载。
```php
<?php

namespace App\Providers;

use Riak\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider{
    /**
     * 服务提供者加是否延迟加载,默认为false
     *
     * @var bool
     */
    protected $isDeffer = true;
    
    /**
      * [$provide 绑定延迟加载的服务名称数组]
      * @var [type]
     */
     public $provide = [Connection::class];

    /**
     * 注册服务提供者
     *
     * @return void
     */
    public function register()
    {
        $this->container->singleton(Connection::class, function ($app) {
            return new Connection($app['config']['riak']);
        });
    }

}
```
延迟加载的服务提供者会在make使用服务时再执行register和boot方法。除了make触发延迟加载外还可以通过事件监听触发延时加载。
```php

namespace App\Providers;

use Riak\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider{
    /**
     * 服务提供者加是否延迟加载,默认为false
     *
     * @var bool
     */
    protected $isDeffer = true;
    
    /**
      * [$provide 绑定延迟加载的服务名称数组]
      * @var [type]
     */
     public $provide = [Connection::class];
    
    /**
     * [$events 触发延迟加载的事件]
     * @var [type] 
     */
     public $events = ['login', 'email'];

    /**
     * 注册服务提供者
     *
     * @return void
     */
    public function register()
    {
        $this->container->singleton(Connection::class, function ($app) {
            return new Connection($app['config']['riak']);
        });
    }

}
```
你可以通过监听事件名称触发延时加载服务提供者的注册和启动：
```php
\Bobby\Component\Proxy\Event::fire('login');
//或者
\Bobby\Component\Proxy\Event::fire('email');
```
### 代理
代理为应用服务容器中的绑定类提供了一个「静态」接口，用于代理操作容器中绑定的类，使用代理使你可以不知道服务的底层实现是谁，只需要底层的实现类实现了相关的契约和被容器绑定即可通过契约规范的api使用，可以很好的解耦应用的业务依赖。
定义一个代理需要实现Bobby\Contract\Proxy\Proxy接口和继承Bobby\Contract\Proxy\Proxy,并实现一个getProxySubject方法:
```php
use App\Proxy;
use Bobby\Contract\Proxy\Proxy as ProxyContract;
use Bobby\Contract\Proxy\Proxy;
/**
 * 配置类代理
 */
class Log extends Proxy implements ProxyContract
{
	public static function getProxySubject()
	{
		//返回需要代理的容器绑定的服务名称
		return 'Log';
	}
}
```
使用代理:
```php
\App\Proxy\Log::debug('test');
```

*框架无DB版： https://github.com/995933447/BobbysMicroFrameWork*
