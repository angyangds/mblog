<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/28
 * Time: 10:46
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class CategoryController extends AccessBaseController
{
    public function index()
    {
        $modelClass = M('category');
        $count = $modelClass->count();
        $pageInfo = new Page($count, 5);
        $show = $pageInfo->show();
        $categories = $modelClass->order("id")->limit($pageInfo->firstRow, $pageInfo->listRows)->select();
        $info = $categories;
        $index = 0;
        foreach ($categories as $category)
        {
            $path = "/Admin/Category/update/id/" . $category["id"];
            $info[$index]["update_url"] = U($path);
            $path = "/Admin/Category/delete/id/" . $category["id"];
            $info[$index]["delete_url"] = U($path);
            $index++;
        }
        $this->assign("categories", $info);
//        $name = "name";
        $this->assign("testname", $show);

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
            $category = D('Category');
            if ( $category->create() === false )
            {
                $this->error("添加栏目失败:" . $category->getError());
            }

            $result = $category->add();
            if ( $result )
            {
                $this->success("添加栏目成功", "/Admin/Category/index");
            }
            else
            {
                $this->error("添加栏目失败:" . $category->getError());
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
            $category = D('category');
            $conditon[id] = $id;
            $data = $category->where($conditon)->find();
            if ( $data)
            {
                $this->assign("category", $data);
                $name = "name";
                $this->assign("name", $name);
                $this->display();
            }
            else
            {
                $this->error("查找数据失败");
            }

        }
        else if (IS_POST)
        {
            $category = D('Category');
            $category->create();
            $result = $category->save();
            if ( $result )
            {
                $this->success("修改栏目成功", "/Admin/Category/index");
            }
            else
            {
                $this->error("修改栏目失败");
            }
        }
        else
        {
            $this->error("错误的请求");
        }

    }

    public function delete()
    {
        $id = I('get.id');
        if ( $id )
        {
            $category = M('category');
            $result = $category->where("id=" . $id)->delete();
            if ( $result === false )
            {
                $this->error("删除栏目失败");
            }
            else
            {
                $this->success("删除栏目成功");
            }
        }
    }

    public function checkName()
    {

        if ( IS_AJAX )
        {
            $category = M('Category');
            $name = I('post.name');
            $map["name"] = $name;
            $count = $category->where($map)->count();
            $count = (int)($count);
            if ( $count > 0 )
            {
                $data["res"] = true;
                $this->ajaxReturn($data);
            }
            else
            {
                $data["res"] = false;
                $this->ajaxReturn($data);
            }

        }

    }
}