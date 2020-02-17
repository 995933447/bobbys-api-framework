[2019-01-22 11:23:09]  ,error code: 0 error message:Undefined property: App\Provider\WrapperProvider::$event in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php line 74
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(74): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined prope...', '/var/www/frame/...', 74, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/RegisterProviderHandle.php(29): Bobby\Component\Bootstrap\RegisterProviderHandle->compile(Array)
#2 /var/www/frame/myframe/app/Core/Application.php(79): Bobby\Component\Bootstrap\RegisterProviderHandle->boot(Object(App\Core\Application))
#3 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#4 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#5 {main}

