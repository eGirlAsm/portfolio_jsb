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
    <TD background=images/title_bg1.jpg>��ǰλ��: </TD></TR>
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
          <TD>��ǰʱ�䣺<?php echo date("Y-m-d H:i:s",time());?></TD></TR>
        <TR>
          <TD style="FONT-WEIGHT: bold; FONT-SIZE: 16px">���� <?php echo $r[username];?>,</TD></TR>
        <TR>
          <TD>��ӭ������վ�������ģ�</TD></TR></TABLE></TD></TR>
  <TR>
    <TD colSpan=3 height=10></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="95%" align=center border=0>
  <TR height=20>
    <TD></TD></TR>
  <TR height=22>
    <TD style="PADDING-LEFT: 20px; FONT-WEIGHT: bold; COLOR: #ffffff"
    align=middle background=images/title_bg2.jpg>���������Ϣ</TD></TR>
  <TR bgColor=#ecf4fc height=12>
    <TD></TD></TR>
  <TR height=20>
    <TD></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=2 width="95%" align=center border=0>
  <TR>
    <TD align=right width=100>��½�ʺţ�</TD>
    <TD style="COLOR: #880000"><?php echo $r[username];?></TD></TR>
  <TR>
    <TD align=right>����ϵͳ��</TD>
    <TD style="COLOR: #880000"><?php echo PHP_OS;?></TD></TR>
  <TR>
    <TD align=right>��վ������</TD>
    <TD style="COLOR: #880000"><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/jsbtour" target="_blank"><?php echo $_SERVER['SERVER_NAME'];?></a>(<?php echo gethostbyname($_SERVER['SERVER_NAME']);?>)</TD></TR>
  <TR>
    <TD align=right>�������������棺</TD>
    <TD style="COLOR: #880000"><?php echo $_SERVER['SERVER_SOFTWARE'];?></TD></TR>
  <TR>
    <TD align=right>PHP��</TD>
    <TD style="COLOR: #880000"><?php echo "php ".PHP_VERSION;?></TD></TR>
  <TR>
    <TD align=right>MySQL �汾��</TD>
    <TD style="COLOR: #880000"><?php echo "mysql ".mysql_get_server_info();?></TD></TR>
  <TR>
    <TD align=right>������ʱ�䣺</TD>
    <TD style="COLOR: #880000"><?php echo date("Y-m-d H:i:s",time());?></TD></TR>
  <TR>
    <TD align=right>���������ԣ�</TD>
    <TD style="COLOR: #880000"><?php echo getenv("HTTP_ACCEPT_LANGUAGE");?></TD></TR>
  <TR>
    <TD align=right>�Ŷӳ�Ա��</TD>
    <TD style="COLOR: #880000">������;�ƶ���</TD></TR></TABLE></BODY></HTML>