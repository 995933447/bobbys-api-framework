[2019-02-19 11:13:13]  ,error code: 404 error message:Route 404 Not Found in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Base.php line 168
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/test/admin/')
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-02-19 11:13:28]  ,error code: 404 error message:Route 404 Not Found in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Base.php line 168
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/welcome')
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-02-19 11:22:21]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/app/Core/Application.php line 150
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(150): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 150, Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#4 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#5 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Proxy/Proxy.php(27): App\Core\Application->make('DB')
#6 /var/www/html/BobbysApiFrameWork/app/Route/route.php(33): Bobby\Component\Proxy\Proxy::__callStatic('table', Array)
#7 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Resolver.php(25): Bobby\Component\Provider\RouteProvider->{closure}()
#8 /var/www/html/BobbysApiFrameWork/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#9 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\AfterExample->handle(Object(Closure))
#10 /var/www/html/BobbysApiFrameWork/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\Example->handle(Object(Closure))
#12 /var/www/html/BobbysApiFrameWork/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#13 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\BeforeExample->handle(Object(Closure))
#14 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#15 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#16 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#17 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#18 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#19 {main}

[2019-02-19 11:28:32]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/app/Core/Application.php line 151
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(151): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 151, Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#4 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(156): Bobby\Component\Container\Container->make('DB')
#5 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Proxy/Proxy.php(27): App\Core\Application->make('DB')
#6 /var/www/html/BobbysApiFrameWork/app/Route/route.php(33): Bobby\Component\Proxy\Proxy::__callStatic('table', Array)
#7 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Resolver.php(25): Bobby\Component\Provider\RouteProvider->{closure}()
#8 /var/www/html/BobbysApiFrameWork/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#9 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\AfterExample->handle(Object(Closure))
#10 /var/www/html/BobbysApiFrameWork/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\Example->handle(Object(Closure))
#12 /var/www/html/BobbysApiFrameWork/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#13 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\BeforeExample->handle(Object(Closure))
#14 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#15 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#16 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(216): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#17 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(176): App\Core\Application->throughWrappers(Array, Object(Closure))
#18 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#19 {main}

[2019-02-19 11:30:00]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/app/Core/Application.php line 151
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(151): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 151, Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#4 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(156): Bobby\Component\Container\Container->make('DB')
#5 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Proxy/Proxy.php(27): App\Core\Application->make('DB')
#6 /var/www/html/BobbysApiFrameWork/app/Route/route.php(33): Bobby\Component\Proxy\Proxy::__callStatic('table', Array)
#7 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Resolver.php(25): Bobby\Component\Provider\RouteProvider->{closure}()
#8 /var/www/html/BobbysApiFrameWork/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#9 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\AfterExample->handle(Object(Closure))
#10 /var/www/html/BobbysApiFrameWork/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\Example->handle(Object(Closure))
#12 /var/www/html/BobbysApiFrameWork/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#13 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\BeforeExample->handle(Object(Closure))
#14 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#15 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#16 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(216): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#17 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(176): App\Core\Application->throughWrappers(Array, Object(Closure))
#18 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#19 {main}

[2019-02-19 11:42:17]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/app/Core/Application.php line 150
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(150): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 150, Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#4 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#5 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Proxy/Proxy.php(27): App\Core\Application->make('DB')
#6 /var/www/html/BobbysApiFrameWork/app/Route/route.php(32): Bobby\Component\Proxy\Proxy::__callStatic('table', Array)
#7 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Route/Resolver.php(25): Bobby\Component\Provider\RouteProvider->{closure}()
#8 /var/www/html/BobbysApiFrameWork/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#9 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\AfterExample->handle(Object(Closure))
#10 /var/www/html/BobbysApiFrameWork/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\Example->handle(Object(Closure))
#12 /var/www/html/BobbysApiFrameWork/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#13 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(40): App\Wrapper\BeforeExample->handle(Object(Closure))
#14 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#15 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#16 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#17 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#18 /var/www/html/BobbysApiFrameWork/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#19 {main}

[2019-02-19 11:44:48]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/app/Core/Application.php line 150
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(150): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 150, Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#4 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#5 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#6 {main}

[2019-02-19 11:48:00]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/app/Core/Application.php line 150
#0 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(150): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 150, Array)
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#4 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#5 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#6 {main}

[2019-02-19 11:49:13]  ,error code: -1 error message:Class DB does not exist in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 197
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(197): ReflectionClass->__construct('DB')
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('DB', Array)
#2 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#3 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#4 {main}

[2019-02-19 11:49:33]  ,error code: -1 error message:Class DB does not exist in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 197
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(197): ReflectionClass->__construct('DB')
#1 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('DB', Array)
#2 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#3 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#4 {main}

[2019-02-19 11:52:08]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 137
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(137): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 137, Array)
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make(Object(Closure))
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#4 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#5 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#6 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#7 {main}

[2019-02-19 11:52:10]  ,error code: 0 error message:Illegal offset type in isset or empty in /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php line 137
#0 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(137): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'Illegal offset ...', '/var/www/html/B...', 137, Array)
#1 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make(Object(Closure))
#2 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(112): App\Core\Application->make(Object(Closure), Array)
#3 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#4 /var/www/html/BobbysApiFrameWork/vendor/yangzhouhong/bobbysoop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#5 /var/www/html/BobbysApiFrameWork/app/Core/Application.php(155): Bobby\Component\Container\Container->make('DB')
#6 /var/www/html/BobbysApiFrameWork/public/index.php(4): App\Core\Application->make('DB')
#7 {main}

