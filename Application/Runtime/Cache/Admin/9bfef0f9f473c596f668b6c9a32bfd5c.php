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
    
    <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：后台管理-》栏目列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo U('Category/add');?>">【添加栏目】</a>
                </span>
            </span>
</div>
<div class="div_search" style="float:left;clear:both; font-size: medium;margin: 20px;">
    <span>
        <form action="<?php echo U('Category/search');?>">
            <label id="search_title" for="search_content">栏目</label>
            <select id="search_content" style="width: 100px; font-size:medium;">
                <option selected="selected" value="0">请选择</option>
                <option value="1">苹果apple</option>
            </select>
            <input value="查询" type="submit" />
        </form>
    </span>
</div>
<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody>
        <tr style="font-weight: bold;">
            <td>序号</td>
            <td>栏目列表</td>
            <td>栏目描述</td>
            <td colspan="2" align="center">操作</td>
        </tr>
        <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($category["id"]); ?></td>
                <td><?php echo ($category["name"]); ?></td>
                <td><?php echo ($category["description"]); ?></td>
                <td><a href="<?php echo ($category["update_url"]); ?>">修改</a> </td>
                <td><a href="<?php echo ($category["delete_url"]); ?>">删除</a> </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<?php echo ($testname); ?>


</div>
</body>
</html>