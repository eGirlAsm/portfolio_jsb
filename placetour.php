<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("pmenu_id",$_GET[menuID]);
   $smarty->display("placetour.html");
	
?>