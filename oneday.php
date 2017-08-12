<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("pmenu_id",$_GET[menuID]);
   
if($_GET[day_tour] == "jiaowai")
{
	$smarty->display("jiaowai.html");
}
else if($_GET[day_tour] == "ziyou")
{
	$smarty->display("ziyou.html");
}
else if($_GET[day_tour] == "yejian")
{
	$smarty->display("yejian.html");
}
else
{
   $smarty->display("oneday.html");
}
?>