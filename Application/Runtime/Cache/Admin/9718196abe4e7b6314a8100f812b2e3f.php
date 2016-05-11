<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/index.css" />
</head>
<body>
<div id="header">
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="./css/admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="/Public/Admin/img/header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="/Public/Admin/img/header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：<?php echo ($admin); ?> &nbsp;&nbsp; <a style="color: #fff"
                                                        href="" 
                                                        target=main>修改口令</a> &nbsp;&nbsp; <a style="color: #fff" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="<?php echo U('/Admin/Login/logout');?>" target=_top>退出系统</a>
                </td>
                <td align=right width=268><img height=56 
                                               src="/Public/Admin/img/header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html>
</div>
<div id="left">
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="css/admin.css" type="text/css" rel="stylesheet">
        <script language="javascript">
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table width="170" height="800" cellspacing="0" cellpadding="0" border="0" background="/Public/Admin/img/menu_bg.jpg">
               <tbody><tr>
                <td valign="top" align="center">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">

                        <tbody><tr>
                            <td height="10"></td></tr></tbody></table>
                    <table width="150" cellspacing="0" cellpadding="0" border="0">

                        <tbody><tr height="22">
                            <td background="/Public/Admin/img/menu_bt.jpg" style="padding-left: 30px"><a class="menuparent" onclick="expand(1)" href="javascript:void(0);">后台管理</a></td></tr>
                        <tr height="4">
                            <td></td></tr></tbody></table>
                    <table width="150" cellspacing="0" cellpadding="0" border="0" id="child1" style="display: block;">
                        <tbody>
                            <tr height="20">
                                <td width="30" align="center"><img width="9" height="9" src="/Public/Admin/img/menu_icon.gif"></td>
                                <td><a class="menuchild" href="<?php echo U('Category/index');?>">栏目管理</a></td></tr>
                            <tr height="20">
                                <td width="30" align="center"><img width="9" height="9" src="/Public/Admin/img/menu_icon.gif"></td>
                                <td><a class="menuchild" href="<?php echo U('Article/index');?>">文章管理</a></td></tr>
                            <tr height="20">
                                <td width="30" align="center"><img width="9" height="9" src="/Public/Admin/img/menu_icon.gif"></td>
                                <td><a class="menuchild" href="<?php echo U('Manager/index');?>">管理员管理</a></td></tr>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                <td width="1" bgcolor="#d1e6f7"></td>
            </tr>
        </tbody></table>
    
</body></html>
</div>
<div id="right">
    
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <script src="/Public/Admin/js/jquery.min.js"></script>
        <link href="/Public/Admin/css/mine.css" type="text/css" rel="stylesheet">
        <script type="text/javascript">
            function isExisted(obj)
            {
               console.log("have arrive here")
                var name = $(obj).val();
                $("#username-error").text("");
                $.ajax({
                    type:"post",
                    url:"<?php echo U('checkName');?>",
                    data:"user=" + name,
                    success: function (res)
                    {
                        if ( res["res"] == true )
                        {
                            $("#username-error").text("该管理员已存在");
                        }
                    },
                    error:function(res)
                    {
                        $("username-error").text("验证出错")
                    }
                })

            }
        </script>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》添加管理员</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo U('Manager/index');?>">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo U('Manager/add');?>" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>管理员</td>
                    <td><input type="text" name="user"  placeholder="管理员用户名" onkeyup="isExisted(this)"/></td>
                    <td><label id="username-error" class="error" for="user" style="color: red"></label></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="password" placeholder="密码"/></td>
                </tr>
                <tr>
                    <td>确认密码</td>
                    <td><input type="password" name="re_password" placeholder="密码"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>

</div>
</body>
</html>