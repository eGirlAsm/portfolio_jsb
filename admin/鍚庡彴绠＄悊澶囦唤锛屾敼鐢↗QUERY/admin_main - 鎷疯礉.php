<?php
include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);

if($_GET[action]=='logout')$db->Get_user_out();

 $query=$db->findall("p_config");
 while($row=$db->fetch_array($query)){
 	$row_arr[$row[name]]=$row[values];
 }


 if(isset($_POST['update'])){
 	unset($_POST['update']);
 	foreach($_POST as $name=>$values){
 		$db->query("update p_config set `values`='$values' where `name`='$name'");
 	}
 	$db->Get_admin_msg("admin_main.php");
 }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TR height=28>
    <TD background=images/title_bg1.jpg>当前位置: </TD></TR>
  <TR>
    <TD bgColor=#b1ceef height=1></TD></TR>
  <TR height=20>
    <TD background=images/shadow_bg.jpg></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="90%" align=center border=0>
  <TR height=100>
    <TD align=middle width=100><IMG height=100 src="images/admin_p.gif"
      width=90></TD>
    <TD width=60>&nbsp;</TD>
    <TD>
      <TABLE height=100 cellSpacing=0 cellPadding=0 width="100%" border=0>

        <TR>
          <TD>当前时间：<?php echo date("Y-m-d H:i:s",time());?></TD></TR>
        <TR>
          <TD style="FONT-WEIGHT: bold; FONT-SIZE: 16px">您好 <?php echo $r[username];?>,</TD></TR>
        <TR>
          <TD>欢迎进入网站管理中心！</TD></TR></TABLE></TD></TR>
  <TR>
    <TD colSpan=3 height=10></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="95%" align=center border=0>
  <TR height=20>
    <TD></TD></TR>
  <TR height=22>
    <TD style="PADDING-LEFT: 20px; FONT-WEIGHT: bold; COLOR: #ffffff"
    align=middle background=images/title_bg2.jpg>您的相关信息</TD></TR>
  <TR bgColor=#ecf4fc height=12>
    <TD></TD></TR>
  <TR height=20>
    <TD></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=2 width="95%" align=center border=0>
  <TR>
    <TD align=right width=100>登陆帐号：</TD>
    <TD style="COLOR: #880000"><?php echo $r[username];?></TD></TR>
  <TR>
    <TD align=right>操作系统：</TD>
    <TD style="COLOR: #880000"><?php echo PHP_OS;?></TD></TR>
  <TR>
    <TD align=right>网站域名：</TD>
    <TD style="COLOR: #880000"><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/jsbtour" target="_blank"><?php echo $_SERVER['SERVER_NAME'];?></a>(<?php echo gethostbyname($_SERVER['SERVER_NAME']);?>)</TD></TR>
  <TR>
    <TD align=right>服务器解译引擎：</TD>
    <TD style="COLOR: #880000"><?php echo $_SERVER['SERVER_SOFTWARE'];?></TD></TR>
  <TR>
    <TD align=right>PHP：</TD>
    <TD style="COLOR: #880000"><?php echo "php ".PHP_VERSION;?></TD></TR>
  <TR>
    <TD align=right>MySQL 版本：</TD>
    <TD style="COLOR: #880000"><?php echo "mysql ".mysql_get_server_info();?></TD></TR>
  <TR>
    <TD align=right>服务器时间：</TD>
    <TD style="COLOR: #880000"><?php echo date("Y-m-d H:i:s",time());?></TD></TR>
  <TR>
    <TD align=right>服务器语言：</TD>
    <TD style="COLOR: #880000"><?php echo getenv("HTTP_ACCEPT_LANGUAGE");?></TD></TR>
  <TR>
    <TD align=right>团队成员：</TD>
    <TD style="COLOR: #880000">徐世浩;黄恩龙</TD></TR></TABLE></BODY></HTML>