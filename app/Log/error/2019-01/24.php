[2019-01-24 09:21:04]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:25:51]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:26:08]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/examle')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:26:12]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/example')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:26:39]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:27:58]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:29:05]  ,error code: 0 error message:Undefined variable: reflection in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 203
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(203): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/frame/...', 203, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:15]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:35]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:36]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:38]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:41]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/example/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:31:34]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:32:32]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:32:33]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:51:29]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:53:13]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:54:46]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 11:18:22]  ,error code: 0 error message:Class 'Bobby\Component\Http\request\InstanceFactory' not found in /var/www/frame/myframe/public/index.php line 6
#0 {main}

[2019-01-24 11:19:09]  ,error code: 0 error message:syntax error, unexpected '}' in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Http/Request/InstanceFactory.php line 23
#0 /var/www/frame/myframe/vendor/composer/ClassLoader.php(322): Composer\Autoload\includeFile('/var/www/frame/...')
#1 [internal function]: Composer\Autoload\ClassLoader->loadClass('Bobby\\Component...')
#2 /var/www/frame/myframe/public/index.php(6): spl_autoload_call('Bobby\\Component...')
#3 {main}

[2019-01-24 11:19:09]  ,error code: 0 error message:syntax error, unexpected '}' in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Http/Request/InstanceFactory.php line 23
#0 /var/www/frame/myframe/vendor/composer/ClassLoader.php(322): Composer\Autoload\includeFile('/var/www/frame/...')
#1 [internal function]: Composer\Autoload\ClassLoader->loadClass('Bobby\\Component...')
#2 /var/www/frame/myframe/public/index.php(6): spl_autoload_call('Bobby\\Component...')
#3 {main}

[2019-01-24 11:19:09]  ,error code: 0 error message:syntax error, unexpected '}' in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Http/Request/InstanceFactory.php line 23
#0 /var/www/frame/myframe/vendor/composer/ClassLoader.php(322): Composer\Autoload\includeFile('/var/www/frame/...')
#1 [internal function]: Composer\Autoload\ClassLoader->loadClass('Bobby\\Component...')
#2 /var/www/frame/myframe/public/index.php(6): spl_autoload_call('Bobby\\Component...')
#3 {main}

[2019-01-24 11:19:10]  ,error code: 0 error message:syntax error, unexpected '}' in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Http/Request/InstanceFactory.php line 23
#0 /var/www/frame/myframe/vendor/composer/ClassLoader.php(322): Composer\Autoload\includeFile('/var/www/frame/...')
#1 [internal function]: Composer\Autoload\ClassLoader->loadClass('Bobby\\Component...')
#2 /var/www/frame/myframe/public/index.php(6): spl_autoload_call('Bobby\\Component...')
#3 {main}

[2019-01-24 12:07:43]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/example/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(8): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 01:39:07]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/11/member')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 01:42:17]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 01:43:37]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/11/member')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 02:53:10]  ,error code: 0 error message:syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 19
#0 /var/www/frame/myframe/vendor/composer/ClassLoader.php(322): Composer\Autoload\includeFile('/var/www/frame/...')
#1 [internal function]: Composer\Autoload\ClassLoader->loadClass('Bobby\\Component...')
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Manager.php(7): spl_autoload_call('Bobby\\Component...')
#3 /var/www/frame/myframe/vendor/composer/ClassLoader.php(444): include('/var/www/frame/...')
#4 /var/www/frame/myframe/vendor/composer/ClassLoader.php(322): Composer\Autoload\includeFile('/var/www/frame/...')
#5 [internal function]: Composer\Autoload\ClassLoader->loadClass('Bobby\\Component...')
#6 [internal function]: spl_autoload_call('Bobby\\Component...')
#7 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('\\Bobby\\Componen...')
#8 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('\\Bobby\\Componen...', Array)
#9 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('\\Bobby\\Componen...')
#10 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(112): App\Core\Application->make('\\Bobby\\Componen...', Array)
#11 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(194): Bobby\Component\Container\Container->Bobby\Component\Container\{closure}(Object(App\Core\Application), Array)
#12 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build(Object(Closure), Array)
#13 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('\\Bobby\\Contract...')
#14 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(19): App\Core\Application->make('\\Bobby\\Contract...')
#15 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#16 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#17 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#18 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#19 {main}

[2019-01-24 02:53:27]  ,error code: 0 error message:Undefined property: Bobby\Component\Route\Manager::$cacheRoutes in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 183
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(183): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined prope...', '/var/www/frame/...', 183, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 02:53:47]  ,error code: 0 error message:Serialization of 'Closure' is not allowed in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 183
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(183): apcu_store('cache_routes', Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 02:56:36]  ,error code: 0 error message:Serialization of 'Closure' is not allowed in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 184
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(184): serialize(Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 03:01:18]  ,error code: 0 error message:json_decode() expects parameter 1 to be string, array given in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 185
#0 [internal function]: Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'json_decode() e...', '/var/www/frame/...', 185, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(185): json_decode(Array)
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#4 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#5 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#6 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#7 {main}

[2019-01-24 03:02:19]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/home')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:02:24]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:02:30]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/example/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:06:08]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:24:25]  ,error code: 0 error message:Undefined variable: existCache in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php line 25
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(25): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/frame/...', 25, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#2 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#3 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#4 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#5 {main}

[2019-01-24 03:24:27]  ,error code: 0 error message:Undefined variable: existCache in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php line 25
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(25): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/frame/...', 25, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#2 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#3 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#4 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#5 {main}

[2019-01-24 03:43:41]  ,error code: 0 error message:Serialization of 'Closure' is not allowed in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 184
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(184): apcu_store('cache_routes', Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 03:43:43]  ,error code: 0 error message:Serialization of 'Closure' is not allowed in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 184
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(184): apcu_store('cache_routes', Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 03:48:51]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:48:55]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:48:59]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/home')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:49:01]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/home')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 03:50:27]  ,error code: 0 error message:Serialization of 'Closure' is not allowed in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 184
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(184): apcu_store('cache_routes', Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 04:19:18]  ,error code: 0 error message:Serialization of 'Closure' is not allowed in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 184
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(184): apcu_add('cache_routes', Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 04:19:39]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 04:20:31]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

[2019-01-24 04:21:28]  ,error code: 0 error message:Serialization of 'Closure' is not allowed in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 184
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(184): apcu_add('cache_routes', Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(33): Bobby\Component\Route\Base->cacheRoutes()
#2 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(13): Bobby\Component\Provider\RouteProvider->boot()
#3 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#4 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#5 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#6 {main}

[2019-01-24 04:55:42]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 168
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/example/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request\Instance\Normal))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request\Instance\Normal))
#3 {main}

