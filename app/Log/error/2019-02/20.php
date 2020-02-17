[2019-02-20 12:03:45]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 138
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(138): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 138, Array)
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make(Object(Closure))
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(195): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#4 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(143): Bobby\Component\Container\Container->build(Object(Closure), Array)
#5 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#6 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#7 {main}

[2019-02-20 12:06:52]  ,error code: 0 error message:Object of class Closure could not be converted to string in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 141
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(141): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(4096, 'Object of class...', '/var/www/html/B...', 141, Array)
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('\\Bobby\\Contract...')
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Provider/RouteProvider.php(19): App\Core\Application->make('\\Bobby\\Contract...')
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#4 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#5 /var/www/html/BobbysApiFrameWork/bootstrap/app.php(6): App\Core\Application->boot()
#6 /var/www/html/BobbysApiFrameWork/public/index.php(3): require('/var/www/html/B...')
#7 {main}

[2019-02-20 12:08:57]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 138
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(138): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 138, Array)
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make(Object(Closure))
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(195): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#4 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(143): Bobby\Component\Container\Container->build(Object(Closure), Array)
#5 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#6 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#7 {main}

[2019-02-20 12:11:16]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 138
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(138): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 138, Array)
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make(Object(Closure))
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(195): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#4 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(143): Bobby\Component\Container\Container->build(Object(Closure), Array)
#5 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#6 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#7 {main}

[2019-02-20 01:13:41]  ,error code: 0 error message:Undefined variable: query in /var/www/html/BobbysApiFrameWork/app/Route/route.php line 59
#0 /var/www/html/BobbysApiFrameWork/app/Route/route.php(59): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/html/B...', 59, Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Resolver.php(25): Bobby\Component\Provider\RouteProvider->{closure}()
#2 /var/www/html/BobbysApiFrameWork/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\AfterExample->handle(Object(Closure))
#4 /var/www/html/BobbysApiFrameWork/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\Example->handle(Object(Closure))
#6 /var/www/html/BobbysApiFrameWork/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#7 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\BeforeExample->handle(Object(Closure))
#8 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#9 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#10 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#11 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#12 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#13 {main}

[2019-02-20 01:15:49]  ,error code: 1049 error message:SQLSTATE[HY000] [1049] Unknown database 'test' in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/Mysql/Connection/SingleConnection.php line 25
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/Mysql/Connection/SingleConnection.php(25): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/Mysql/Instance.php(102): Bobby\Component\Database\Mysql\Connection\SingleConnection->Bobby\Component\Database\Mysql\Connection\{closure}()
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/Mysql/Instance.php(52): Bobby\Component\Database\Mysql\Instance->makeConnector(Object(Closure))
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/SqlBuilder.php(286): Bobby\Component\Database\Mysql\Instance->query('SELECT * FROM t...', Array, Object(Closure))
#4 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/SqlBuilder.php(301): Bobby\Component\Database\SqlBuilder->select()
#5 /var/www/html/BobbysApiFrameWork/app/Route/route.php(60): Bobby\Component\Database\SqlBuilder->find()
#6 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Resolver.php(25): Bobby\Component\Provider\RouteProvider->{closure}()
#7 /var/www/html/BobbysApiFrameWork/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#8 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\AfterExample->handle(Object(Closure))
#9 /var/www/html/BobbysApiFrameWork/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#10 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\Example->handle(Object(Closure))
#11 /var/www/html/BobbysApiFrameWork/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#12 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\BeforeExample->handle(Object(Closure))
#13 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#14 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#15 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#16 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#17 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#18 {main}

[2019-02-20 01:18:16]  ,error code: HY000 error message:SQLSTATE[HY000]: General error: 1221 Incorrect usage of UNION and LIMIT in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/Mysql/Instance.php line 58
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/Mysql/Instance.php(58): PDOStatement->execute(Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/SqlBuilder.php(286): Bobby\Component\Database\Mysql\Instance->query('SELECT * FROM t...', Array, Object(PDO))
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Database/SqlBuilder.php(301): Bobby\Component\Database\SqlBuilder->select()
#3 /var/www/html/BobbysApiFrameWork/app/Route/route.php(60): Bobby\Component\Database\SqlBuilder->find()
#4 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Resolver.php(25): Bobby\Component\Provider\RouteProvider->{closure}()
#5 /var/www/html/BobbysApiFrameWork/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#6 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\AfterExample->handle(Object(Closure))
#7 /var/www/html/BobbysApiFrameWork/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#8 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\Example->handle(Object(Closure))
#9 /var/www/html/BobbysApiFrameWork/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#10 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\BeforeExample->handle(Object(Closure))
#11 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#12 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#13 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#14 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#15 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#16 {main}

