[2019-01-18 10:41:47]  ,error code: -1 error message:Class \Bobby\Contract\Event\Event does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php line 194
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php(194): ReflectionClass->__construct('\\Bobby\\Contract...')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php(139): Bobby\Component\Contanier\Contanier->build('\\Bobby\\Contract...', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(117): Bobby\Component\Contanier\Contanier->make('\\Bobby\\Contract...')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Proxy/Proxy.php(25): App\Core\Application->make('\\Bobby\\Contract...')
#4 /var/www/frame/myframe/app/Route/route.php(29): Bobby\Component\Proxy\Proxy::__callStatic('fire', Array)
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Resolver.php(22): Bobby\Component\Provider\RouteProvider->{closure}()
#6 /var/www/frame/myframe/app/Wrapper/AfterExample.php(9): Bobby\Component\Route\Resolver::Bobby\Component\Route\{closure}()
#7 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\AfterExample->handle(Object(Closure))
#8 /var/www/frame/myframe/app/Wrapper/Example.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#9 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\Example->handle(Object(Closure))
#10 /var/www/frame/myframe/app/Wrapper/BeforeExample.php(10): Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#11 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(38): App\Wrapper\BeforeExample->handle(Object(Closure))
#12 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#13 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(14): call_user_func(Object(Closure))
#14 /var/www/frame/myframe/app/Core/Application.php(177): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#15 /var/www/frame/myframe/app/Core/Application.php(137): App\Core\Application->throughWrappers(Array, Object(Closure))
#16 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#17 {main}

[2019-01-18 12:01:48]  ,error code: 0 error message:Undefined variable: defferProvides in /var/www/frame/myframe/app/Core/Application.php line 37
#0 /var/www/frame/myframe/app/Core/Application.php(37): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/frame/...', 37, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(48): App\Core\Application->defferProvides(Array)
#2 /var/www/frame/myframe/app/Core/Application.php(74): Bobby\Component\Bootstrap\RegisterProviderHandle->boot(Object(App\Core\Application))
#3 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#4 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#5 {main}

[2019-01-18 01:10:37]  ,error code: 0 error message:Argument 1 passed to Bobby\Component\Event\Handle::__construct() must be an instance of Bobby\Contract\Container\Container, instance of App\Core\Application given, called in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/EventProvider.php on line 11 in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php line 11
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/EventProvider.php(11): Bobby\Component\Event\Handle->__construct(Object(App\Core\Application))
#1 /var/www/frame/myframe/app/Provider/EventProvider.php(17): Bobby\Component\Provider\EventProvider->register()
#2 /var/www/frame/myframe/app/Core/Application.php(135): App\Provider\EventProvider->register()
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(37): App\Core\Application->register('App\\Provider\\Ev...')
#4 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\RegisterProviderHandle->boot(Object(App\Core\Application))
#5 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#6 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#7 {main}

[2019-01-18 01:12:46]  ,error code: 0 error message:Argument 1 passed to Bobby\Component\Event\Handle::__construct() must be an instance of Bobby\Component\Event\Container, instance of App\Core\Application given, called in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/EventProvider.php on line 11 in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Event/Handle.php line 11
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/EventProvider.php(11): Bobby\Component\Event\Handle->__construct(Object(App\Core\Application))
#1 /var/www/frame/myframe/app/Provider/EventProvider.php(17): Bobby\Component\Provider\EventProvider->register()
#2 /var/www/frame/myframe/app/Core/Application.php(135): App\Provider\EventProvider->register()
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(37): App\Core\Application->register('App\\Provider\\Ev...')
#4 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\RegisterProviderHandle->boot(Object(App\Core\Application))
#5 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#6 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#7 {main}

[2019-01-18 01:21:56]  ,error code: 0 error message:Argument 1 passed to Bobby\Component\Container\Container::Bobby\Component\Container\{closure}() must be an instance of Bobby\Component\Container\Contanier, instance of App\Core\Application given, called in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php on line 191 in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 107
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(191): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(139): Bobby\Component\Container\Container->build(Object(Closure), Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('\\Bobby\\Contract...')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(19): App\Core\Application->make('\\Bobby\\Contract...')
#4 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#5 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#6 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#7 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#8 {main}

[2019-01-18 01:35:28]  ,error code: 0 error message:Argument 3 passed to Bobby\Component\Route\Resolver::runRoute() must be an instance of Bobby\Component\Route\Container, instance of App\Core\Application given, called in /var/www/frame/myframe/app/Core/Application.php on line 204 in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Resolver.php line 11
#0 /var/www/frame/myframe/app/Core/Application.php(204): Bobby\Component\Route\Resolver::runRoute(Array, '::', Object(App\Core\Application))
#1 /var/www/frame/myframe/app/Core/Application.php(172): App\Core\Application->runRoute(Array)
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-18 02:35:59]  ,error code: 0 error message:Argument 1 passed to Bobby\Contract\Provider\Provider::__construct() must implement interface Bobby\Contract\Container\Container, instance of Bobby\Component\Bootstrap\RegisterProviderHandle given, called in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php on line 69 in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Contract/Provider/Provider.php line 19
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(69): Bobby\Contract\Provider\Provider->__construct(Object(Bobby\Component\Bootstrap\RegisterProviderHandle))
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(29): Bobby\Component\Bootstrap\RegisterProviderHandle->compile(Array)
#2 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\RegisterProviderHandle->boot(Object(App\Core\Application))
#3 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#4 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#5 {main}

[2019-01-18 02:37:41]  ,error code: 0 error message:Undefined variable: instance in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php line 70
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(70): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/frame/...', 70, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(29): Bobby\Component\Bootstrap\RegisterProviderHandle->compile(Array)
#2 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\RegisterProviderHandle->boot(Object(App\Core\Application))
#3 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#4 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#5 {main}

[2019-01-18 02:38:04]  ,error code: 0 error message:Undefined variable: intsance in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php line 70
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(70): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/frame/...', 70, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(29): Bobby\Component\Bootstrap\RegisterProviderHandle->compile(Array)
#2 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\RegisterProviderHandle->boot(Object(App\Core\Application))
#3 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#4 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#5 {main}

