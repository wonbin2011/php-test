<?php
/**
 * Created by PhpStorm.
 * User: wonbin
 * Date: 2017/8/19
 * Time: 13:56
 */

class UsersController extends ControllerBase
{
    public function profileAction() {
        echo "this is profileAction niu bee";
    }

    public function redirectAction() {

        return $this->response->redirect('https:/www.baidu.com');
    }

    public function forwardAction() {

        $this->dispatcher->forward([
            'controller'    => 'users',
            'action'        => 'test5'
        ]);
    }

    public function test5Action() {
        echo "it's forward to here!!!!! eeee";
    }

}