<?php
/**
 * Created by PhpStorm.
 * User: wonbin
 * Date: 2017/8/19
 * Time: 17:19
 */

use Phalcon\Mvc\Router\Group as RouterGroup;

class BlogRoutes extends RouterGroup
{

    public function initialize() {

        //default paths
        $this->setPaths(
            [
                'module'    => 'blog',
                'namespace' => 'Blog\\controllers', //?
            ]
        );

        $this->setPrefix("/blog");

        $this->add(
            "",
            [
                "action"    => "save", // IndexController ?
            ]
        );

        // Add another route to the group
        $this->add(
            "/edit/{id}",
            [
                "action" => "edit",
            ]
        );

        // This route maps to a controller different than the default
        $this->add(
            "/blog",
            [
                "controller" => "blog",
                "action"     => "index",
            ]
        );
    }

}