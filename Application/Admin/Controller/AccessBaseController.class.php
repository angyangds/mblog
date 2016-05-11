<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 10:01
 */

namespace Admin\Controller;

use Think\Controller;

class AccessBaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        // 验证是否登录
        if ( !session("admin_user") )
        {
            // 没有登录跳转到登录页面
            $this->redirect('/Admin/Login/login', array(),0,"");
        }
        else
        {
            $timeout = C('LOG_TIMEOUT');
            if ( time() > cookie('last_access') + $timeout )
            {
                // session已超时
                session('admin_user', null);
                cookie('last_access', null);
                $this->redirect('/Admin/Login/login', array(),0,"");
            }
            else
            {
                // session 未超时
                $this->assign("admin", session('admin_user'));
                cookie('last_access', time());
            }
        }
    }
}