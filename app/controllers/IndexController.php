<?php

use Phalcon\Cache\Backend\Redis;
use Phalcon\Cache\Frontend\Data as FrontData;
use Phalcon\Cache\Backend\Libmemcached as BackMemCached;

class IndexController extends ControllerBase
{

    public function indexAction()
    {


        $frontCache = new FrontData(
            [
                "lifetime" => 3600,
            ]
        );

//        $cache = new Redis(
//            $frontCache,
//            [
//                'host'          => 'localhost',
//                'port'          => '6379',
//                'auth'          => '',
//                'persistent'    => false,
//                'index'         => 0
//            ]
//        );

        $cache = new BackMemCached(
            $frontCache,
            [
                'servers' => [
                    [
                        'host'      => '127.0.0.1',
                        'port'      => '11211',
                        'weight'    => '1'
                    ]
                ]
            ]

        );

//        var_dump(get_class_methods(get_class($cache))); die();

        $cache->save("my-data", 'this is from memcache ');
//
        // Get data
        $data = $cache->get("my-data");
//
        $this->view->setVar('myData',$data);
        return $this->view->render('index','index');
    }


}

