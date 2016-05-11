<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 10:05
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class LoginController extends Controller
{
    public function login()
    {
        if (IS_POST)
        {
            $code = I('POST.captcha');
            $verifyCode = new Verify();
            if ( $verifyCode->check($code) )
            {
                $condition['name'] = I('POST.name');
                $condition['password'] = I('POST.password');

                $manager = D('Manager');
                $count = (int)($manager->where($condition)->count());
                if ( $count > 0 )
                {
                    session("admin_user", $condition['name']);
                    cookie('last_access', time());
                    $this->redirect('/Admin/Index/index');
                }
                else
                {
                    $this->error("用户名或密码错误", U('login'), 3);
                }

            }
            else
            {
                $this->error("验证码错误", U('login'));
            }
            return;
        }
        $this->display();
    }

    public function logout()
    {
        session('admin_user', null);
        cookie('last_access', null);
        $this->redirect('/Admin/Index/Index');
    }

    public function generateCode()
    {
        $config = array(
            'length' => 4,
        );
        $verifyCode = new Verify($config);
        $verifyCode->entry();
    }
}