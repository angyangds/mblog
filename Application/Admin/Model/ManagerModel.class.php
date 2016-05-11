<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/4
 * Time: 10:02
 */

namespace Admin\Model;

use Think\Model;

class ManagerModel extends Model
{
    protected $_validate = array(
        array('user', 'require', '用户名不能为空'),
        array('user', '', '用户名不唯一', 0, 'unique', self::MODEL_BOTH),
        array('password', 're_password', '两次密码不同', 0, 'confirm',  self::MODEL_BOTH)
    );
}