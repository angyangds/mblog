<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/3
 * Time: 10:03
 */

namespace Admin\Controller;
use Think\Page;

class ManagerController extends AccessBaseController
{
    public function index()
    {
        $modelClass = M('manager');
        $count = $modelClass->count();
        $pageInfo = new Page($count, 5);
        $show = $pageInfo->show();
        $managers = $modelClass->order("id")->limit($pageInfo->firstRow, $pageInfo->listRows)->select();
        $info = $managers;
        $index = 0;
        foreach ($managers as $manager)
        {
            $path = "/Admin/Manager/update/id/" . $manager["id"];
            $info[$index]["update_url"] = U($path);
            $path = "/Admin/Manager/delete/id/" . $manager["id"];
            $info[$index]["delete_url"] = U($path);
            $index++;
        }
        $this->assign("managers", $info);
        $this->assign("pageinfo", $show);

        $this->display();
    }

    public function add()
    {
        if (IS_GET)
        {
            $this->display();
        }
        else if (IS_POST)
        {
            $manager = D('Manager');
            if ( $manager->create() === false )
            {
                $this->error("添加管理员失败:" . $manager->getError());
            }

            $result = $manager->add();
            if ( $result )
            {
                $this->success("添加管理员成功", "/Admin/Manager/index");
            }
            else
            {
                $this->error("添加管理员失败:" . $manager->getError());
            }
        }
        else
        {
            $this->error("错误的请求");
        }
    }

    public function update()
    {
        if (IS_GET)
        {
            $id = I("get.id");
            $manager = D('manager');
            $conditon[id] = $id;
            $data = $manager->where($conditon)->find();
            if ( $data)
            {
                $this->assign("manager", $data);
                $this->display();
            }
            else
            {
                $this->error("查找数据失败");
            }

        }
        else if (IS_POST)
        {
            $manager = D('Manager');
            $manager->create();
            $result = $manager->save();
            if ( $result )
            {
                $this->success("修改管理员成功", "/Admin/Manager/index");
            }
            else
            {
                $this->error("修改管理员失败");
            }
        }
        else
        {
            $this->error("错误的请求");
        }
    }

    public function checkName()
    {

        if (IS_AJAX) {
            $manager = M('Manager');
            $name = I('post.user');
            $map["user"] = $name;
            $count = $manager->where($map)->count();
            $count = (int)($count);
            if ($count > 0) {
                $data["res"] = true;
                $this->ajaxReturn($data);
            } else {
                $data["res"] = false;
                $this->ajaxReturn($data);
            }

        }
    }

    public function delete()
    {
        $id = I('get.id');
        if ( $id )
        {
            $category = M('Manager');
            $result = $category->where("id=" . $id)->delete();
            if ( $result === false )
            {
                $this->error("删除管理员失败");
            }
            else
            {
                $this->success("删除管理员成功", "/Admin/Manager/index");
            }
        }
    }
}