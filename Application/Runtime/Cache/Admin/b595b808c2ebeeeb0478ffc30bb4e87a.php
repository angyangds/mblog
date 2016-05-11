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
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="css/admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=/Public/Admin/img/title_bg1.jpg>当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=/Public/Admin/img/shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="/Public/Admin/img/admin_p.gif"
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td>当前时间：2008-12-27 17:03:55</td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px"><?php echo ($admin); ?></td></tr>
                        <tr>
                            <td>欢迎进入网站管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=/Public/Admin/img/title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000">admin</td></tr>
            <tr>
                <td align=right>真实姓名：</td>
                <td style="color: #880000">admin</td></tr>
            <tr>
                <td align=right>注册时间：</td>
                <td style="color: #880000">2007-7-25 15:02:04</td></tr>
            <tr>
                <td align=right>登陆次数：</td>
                <td style="color: #880000">58</td></tr>
            <tr>
                <td align=right>上线时间：</td>
                <td style="color: #880000">2008-12-27 17:02:54</td></tr>
            <tr>
                <td align=right>ip地址：</td>
                <td style="color: #880000">222.240.172.117</td></tr>
            <tr>
                <td align=right>身份过期：</td>
                <td style="color: #880000">30 分钟</td></tr>
            <tr>
                <td align=right>网站开发qq：</td>
                <td style="color: #880000">215288671</td></tr>
            <tr>
                <td align=right>免费模板网：</td>
                <td style="color: #880000"><a href="http://www.sshok.cn">www.sshok.cn</a></td>
            </tr>
        </table>
    </body>
</html>

</div>
</body>
</html>