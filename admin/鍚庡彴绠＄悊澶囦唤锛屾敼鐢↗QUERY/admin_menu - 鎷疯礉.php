<?php
include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<SCRIPT language=javascript>
	function expand(el)
	{
		childObj = document.getElementById("child" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
		}
		else
		{
			childObj.style.display = 'none';
		}
		return;
	}
</SCRIPT>
</HEAD>
<BODY>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width=170
background=images/menu_bg.jpg border=0>
  <TR>
    <TD vAlign=top align=middle>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>

        <TR>
          <TD height=10></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>

        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            href="admin_main.php" target=main>运行状态</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            class=menuParent onclick=expand(2)
            href="javascript:void(0);">首页设置</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child2 style="DISPLAY: none" cellSpacing=0 cellPadding=0
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="admin_menu_list.php"
            target=main>导航列表</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="admin_menu_add.php"
            target=main>导航添加</A></TD></TR>
            
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>广告相册</A></TD></TR>
  
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            class=menuParent onclick=expand(3)
            href="javascript:void(0);">用户管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child3 style="DISPLAY: none" cellSpacing=0 cellPadding=0
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="user_list.php"
            target=main>用户列表</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="user_add.php"
            target=main>用户添加</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            class=menuParent onclick=expand(4)
            href="javascript:void(0);">客户服务</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child4 style="DISPLAY: none" cellSpacing=0 cellPadding=0
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>客户服务</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>分类管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>子类管理</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            class=menuParent onclick=expand(5)
            href="javascript:void(0);">经典案例</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child5 style="DISPLAY: none" cellSpacing=0 cellPadding=0
      width=150 border=0>

        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>分类管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>子类管理</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>

        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            class=menuParent onclick=expand(6)
            href="javascript:void(0);">高级管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child6 style="DISPLAY: none" cellSpacing=0 cellPadding=0
      width=150 border=0>

        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>广告管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>访问统计</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>邮件发送设置</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>联系部门</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>用户留言</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>招聘职位</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>应聘人员</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>留言簿</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>产品订购</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>链接管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>文件管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>信息转移</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>

        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            class=menuParent onclick=expand(7)
            href="javascript:void(0);">系统管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child7 style="DISPLAY: none" cellSpacing=0 cellPadding=0
      width=150 border=0>

        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>基本设置</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>样式管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>栏目管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>功能管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>菜单管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="admin_user_add.php"
            target=main>管理员添加</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="admin_user_list.php"
            target=main>管理员列表</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>

        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=images/menu_bt.jpg><A
            class=menuParent onclick=expand(0)
            href="javascript:void(0);">个人管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child0 style="DISPLAY: none" cellSpacing=0 cellPadding=0
      width=150 border=0>

        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            href="#"
            target=main>修改口令</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9
            src="images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild
            onclick="if (confirm('确定要退出吗？')) return true; else return false;"
            href="http://www.jsbtour.com"
            target=_top>退出系统</A></TD></TR></TABLE></TD>
    <TD width=1 bgColor=#d1e6f7></TD></TR></TABLE></BODY></HTML>
