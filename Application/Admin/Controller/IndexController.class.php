<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends AccessBaseController
{
    public function index()
    {
        $admin = D('Manager');
        $users = $admin->where("id=1")->select();
        $this->assign("admin", $users[0]["user"]);
        $this->display();
    }

    public function left()
    {
        $this->display();
    }

    public function right()
    {
        $this->display();
    }

    public function head()
    {
        $this->display();
    }
}