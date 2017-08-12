<?php
include_once ('admin_global.php');

$r=$db->Get_user_shell_check($uid, $shell);

if(isset($_POST[into_nav])){

    $db->query("INSERT INTO `jsbtour`.`p_users` (`id`, `account`, `integral`, `name`, `truename`, `status`, `email`, `password`, `ori_pw`, `birthday`, `sex`, `company`, `deparment`, `position`, `tel`, `mobile`, `address`, `zipcode`, `intro`, `display`, `sequence`, `created`, `updated`, `type`, `emailreceive`, `firstbuy`) VALUES (NULL, '0.00', '0', '$_POST[username]', '$_POST[truename]', '0', '$_POST[email]', md5($_POST[password]), '$_POST[password]', '$_POST[birthday]', '$_POST[sex]', '0', '0', '0', '0','$_POST[mobile]', '0', '0', '0', '1', '0', '0', '0', NULL, '0', '1');");
	$db->Get_admin_msg("user_list.php","编辑成功");
}

?>
<html>
<head>
<title>用户编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
* {
	font-size:13px;
	line-height:16px;
}
.b1, .b2, .div_title, .div_content {
	display:block;
	overflow:hidden;
	background:#6699ff;
}
.b2, .div_title, .div_content {
	border-left:1px solid blue;
	border-right:1px solid blue;
	background-image: url(images/title_bg2.jpg);
}
.b1, .b2 {
	height:1px;
}
.b1 {
	margin:0 1px;
	background:blue;
}
.b2 {
	margin:0 0px;
}
.div_title {
	color:#fff;
	font-weight:bold;
	padding:2px;
}
.div_content {
	padding-left:1px;
	padding-right:1px;
}
.content {
	background:#fff;
	border:1px solid blue;
	padding:2px;
}
#center {
	MARGIN-RIGHT: auto;
	MARGIN-LEFT: auto;
	vertical-align:middle;
}
table.gridtable {
	font-family: verdana, arial, sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #93C;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
.div_setContent {
	margin-left:20px;
	padding-bottom:20px;
	padding-top:20px;
}
.div_setContent label {
	font-size:14px;
	font-weight:bold;
	line-height:25px;
}
-->
</style>
</head>

<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TR height=28>
    <TD background=images/title_bg1.jpg>当前位置: 用户管理-用户编辑</TD>
  </TR>
  <TR>
    <TD bgColor=#b1ceef height=1></TD>
  </TR>
  <TR height=20>
    <TD background=images/shadow_bg.jpg></TD>
  </TR>
</TABLE>
<div id = "center" style="width:80%"> <b class="b1"></b> <b class="b2"></b>
  <div class="div_title">用户编辑</div>
  <div class="div_content">
    <div class="content">
      <div class="div_setContent">
        <form action="" method="post">
          <label>用户名:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="username" type="text" size="40" maxlength="20">
          <br>
          <label>密码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="password" type="text" size="40" maxlength="20"> 
          <br>
          <label>真实姓名:&nbsp;&nbsp;&nbsp; </label>
          <input name="truename" type="text" size="40" maxlength="20">
          <br>
              <label>邮箱:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="email" type="text" size="40" maxlength="20">
          <br>
              <label>生日:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="birthday" type="text" size="40" maxlength="20">
          <br>
              <label>联系电话:&nbsp;&nbsp;&nbsp; </label>
          <input name="tel" type="text" size="40" maxlength="20">
          <br>
              <label>手机:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="mobile" type="text" size="40" maxlength="20">
          <br>
              <label>性别:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <input name="sex" type="text" size="40" maxlength="20">
          <br>
          <br>
          <input name="into_nav" type="submit" value="确定" >
        </form>
      </div>
    </div>
  </div>
  <!--<b class="b2"> </b><b class="b1"></b> -->
</div>
</body>
</html>