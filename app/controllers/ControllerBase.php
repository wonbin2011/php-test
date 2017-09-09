<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    public function beforeExecuteRoute($dispatcher)
    {
        // 这个方法会在每一个能找到的action前执行
        if ($dispatcher->getActionName() === "profile") {
            $this->flash->error(
                "You don't have permission to save posts"
            );

            $this->dispatcher->forward(
                [
                    "controller" => "users",
                    "action"     => "test5",
                ]
            );

            return false;
        }
    }

    public function afterExecuteRoute($dispatcher)
    {
        // 在找到的action后执行
    }
}
