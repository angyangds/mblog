<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/28
 * Time: 14:50
 */

namespace Admin\Model;

use Think\Model;

class CategoryModel extends Model
{
    protected $_validate = array(
        array('name', 'require', "栏目名称不能为空"),
        array('name','','帐号名称已经存在！',0,'unique',self::MODEL_BOTH),
    );
}