<?php

$router = $di->getRouter();

// Define your routes here

$route = $router->add(
    "/test/users/my-profile",
    [
        'controller'        => "users",
        'action'            => 'profile'

    ]
);

$route->setName("my-profile");


$router->add(
    '/alipay/pagepay',
    [
        'controller'    => "users",
        'action'        => 'pagepay'
    ]
    )->setName('pagepay');

//$router->add(
//    '/test/:controller/a/:action/:params',
//    [
//        'controller'    => 1,
//        'action'        => 2,
//        'params'        => 3
//
//    ]
//);

$router->add(
    "/([a-zA-Z0-9\_\-]+)/([a-zA-Z0-9\_]+)(/.*)*",
    [
        'controller'    => 1,
        'action'        => 2,
        'params'        => 3
    ]
);

require APP_PATH ."/config/BlogRoutes.php";

$router->mount(new BlogRoutes());

$router->handle();
