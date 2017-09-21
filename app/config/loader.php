<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->toolsDir,

        '/home/www/test/app/alipay/pagepay/service',
        '/home/www/test/app/alipay/pagepay/buildermodel',
        '/home/www/test/app/alipay/aop/request/',
        '/home/www/test/app/alipay/pagepay',
        '/home/www/test/app/alipay/aop/',
        '/home/www/test/app/aplipay'
    ]
)->register();

$loader->registerClasses(
    [
        'BlogRoutes'  =>  APP_PATH . "/config/BlogRoutes.php"
    ]);
