[2019-01-13 11:12:48]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:13:25]  ,error code: 0 error message:Undefined index: App\Event\Example in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php line 49
#0 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php(49): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined index...', '/var/www/html/b...', 49, Array)
#1 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Proxy/Proxy.php(29): Bobby\Component\Event\Handle->fire('App\\Event\\Examp...')
#2 /var/www/html/bobbysframe/app/Route/route.php(25): Bobby\Component\Proxy\Proxy::__callStatic('fire', Array)
#3 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Resolver.php(22): Bobby\Component\Provider\RouteProvider->{closure}()
#4 /var/www/html/bobbysframe/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#5 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\AfterExample->handle(Object(Closure))
#6 /var/www/html/bobbysframe/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#7 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\Example->handle(Object(Closure))
#8 /var/www/html/bobbysframe/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#9 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\BeforeExample->handle(Object(Closure))
#10 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(14): call_user_func(Object(Closure))
#12 /var/www/html/bobbysframe/app/Core/Application.php(179): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#13 /var/www/html/bobbysframe/app/Core/Application.php(139): App\Core\Application->throughWrappers(Array, Object(Closure))
#14 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#15 {main}

[2019-01-13 11:13:26]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:17:06]  ,error code: 0 error message:Undefined index: App\Event\Example in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php line 47
#0 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php(47): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined index...', '/var/www/html/b...', 47, Array)
#1 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Proxy/Proxy.php(29): Bobby\Component\Event\Handle->fire('App\\Event\\Examp...')
#2 /var/www/html/bobbysframe/app/Route/route.php(25): Bobby\Component\Proxy\Proxy::__callStatic('fire', Array)
#3 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Resolver.php(22): Bobby\Component\Provider\RouteProvider->{closure}()
#4 /var/www/html/bobbysframe/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#5 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\AfterExample->handle(Object(Closure))
#6 /var/www/html/bobbysframe/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#7 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\Example->handle(Object(Closure))
#8 /var/www/html/bobbysframe/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#9 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\BeforeExample->handle(Object(Closure))
#10 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(14): call_user_func(Object(Closure))
#12 /var/www/html/bobbysframe/app/Core/Application.php(179): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#13 /var/www/html/bobbysframe/app/Core/Application.php(139): App\Core\Application->throughWrappers(Array, Object(Closure))
#14 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#15 {main}

[2019-01-13 11:17:07]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:17:25]  ,error code: 0 error message:Undefined index: App\Event\Example in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php line 47
#0 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php(47): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined index...', '/var/www/html/b...', 47, Array)
#1 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Proxy/Proxy.php(29): Bobby\Component\Event\Handle->fire('App\\Event\\Examp...')
#2 /var/www/html/bobbysframe/app/Route/route.php(25): Bobby\Component\Proxy\Proxy::__callStatic('fire', Array)
#3 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Resolver.php(22): Bobby\Component\Provider\RouteProvider->{closure}()
#4 /var/www/html/bobbysframe/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#5 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\AfterExample->handle(Object(Closure))
#6 /var/www/html/bobbysframe/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#7 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\Example->handle(Object(Closure))
#8 /var/www/html/bobbysframe/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#9 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\BeforeExample->handle(Object(Closure))
#10 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(14): call_user_func(Object(Closure))
#12 /var/www/html/bobbysframe/app/Core/Application.php(179): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#13 /var/www/html/bobbysframe/app/Core/Application.php(139): App\Core\Application->throughWrappers(Array, Object(Closure))
#14 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#15 {main}

[2019-01-13 11:17:25]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:19:02]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:20:36]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:20:38]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:25:38]  ,error code: -1 error message:Class \App\listener\Example does not exist in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php line 194
#0 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php(194): ReflectionClass->__construct('\\App\\listener\\E...')
#1 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php(139): Bobby\Component\Contanier\Contanier->build('\\App\\listener\\E...', Array)
#2 /var/www/html/bobbysframe/app/Core/Application.php(119): Bobby\Component\Contanier\Contanier->make('\\App\\listener\\E...')
#3 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php(29): App\Core\Application->make('\\App\\listener\\E...')
#4 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php(51): Bobby\Component\Event\Handle->Bobby\Component\Event\{closure}(Object(App\Event\Example))
#5 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Proxy/Proxy.php(29): Bobby\Component\Event\Handle->fire('\\App\\Event\\Exam...')
#6 /var/www/html/bobbysframe/app/Route/route.php(25): Bobby\Component\Proxy\Proxy::__callStatic('fire', Array)
#7 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Resolver.php(22): Bobby\Component\Provider\RouteProvider->{closure}()
#8 /var/www/html/bobbysframe/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#9 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\AfterExample->handle(Object(Closure))
#10 /var/www/html/bobbysframe/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\Example->handle(Object(Closure))
#12 /var/www/html/bobbysframe/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#13 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\BeforeExample->handle(Object(Closure))
#14 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#15 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(14): call_user_func(Object(Closure))
#16 /var/www/html/bobbysframe/app/Core/Application.php(179): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#17 /var/www/html/bobbysframe/app/Core/Application.php(139): App\Core\Application->throughWrappers(Array, Object(Closure))
#18 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#19 {main}

[2019-01-13 11:25:38]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:26:22]  ,error code: 0 error message:Undefined property: App\Listener\Example::$event in /var/www/html/bobbysframe/app/Listener/Example.php line 11
#0 /var/www/html/bobbysframe/app/Listener/Example.php(11): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined prope...', '/var/www/html/b...', 11, Array)
#1 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php(29): App\Listener\Example->handle(Object(App\Event\Example))
#2 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php(51): Bobby\Component\Event\Handle->Bobby\Component\Event\{closure}(Object(App\Event\Example))
#3 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Proxy/Proxy.php(29): Bobby\Component\Event\Handle->fire('\\App\\Event\\Exam...')
#4 /var/www/html/bobbysframe/app/Route/route.php(25): Bobby\Component\Proxy\Proxy::__callStatic('fire', Array)
#5 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Resolver.php(22): Bobby\Component\Provider\RouteProvider->{closure}()
#6 /var/www/html/bobbysframe/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#7 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\AfterExample->handle(Object(Closure))
#8 /var/www/html/bobbysframe/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#9 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\Example->handle(Object(Closure))
#10 /var/www/html/bobbysframe/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\BeforeExample->handle(Object(Closure))
#12 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#13 /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(14): call_user_func(Object(Closure))
#14 /var/www/html/bobbysframe/app/Core/Application.php(179): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#15 /var/www/html/bobbysframe/app/Core/Application.php(139): App\Core\Application->throughWrappers(Array, Object(Closure))
#16 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#17 {main}

[2019-01-13 11:26:22]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:26:40]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:27:03]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:27:46]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:30:42]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:31:08]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:31:29]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:31:40]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:31:55]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:31:56]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:32:15]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:35:05]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:37:00]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:39:15]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:40:21]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:40:41]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:40:51]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:41:37]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:42:32]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:42:36]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/exa,ple')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:42:36]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:42:40]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:44:07]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:44:30]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:45:06]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/example')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:45:06]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:45:18]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:45:29]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:47:22]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(152): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(133): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-13 11:54:09]  ,error code: 404 error message:404 Not Found in /var/www/html/bobbysframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 164
#0 /var/www/html/bobbysframe/app/Core/Application.php(155): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/html/bobbysframe/app/Core/Application.php(136): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/html/bobbysframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

