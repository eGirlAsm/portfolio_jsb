<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');

	// 引入一级导航
   $query=$db->query("SELECT * FROM `p_menus`");
   while ($row = $db->fetch_array($query)) {
	   	$nav_menu[]= array("menuID"=>$row[id], "ischild"=>$row[ischild],"menuTitle"=>$row[title] ,"linkurl"=>$row[linkurl],"parentID"=>$row[parentid],"subMenuCount"=>$row[subMenuCount]);
   }
	$smarty->assign("nav_menu", $nav_menu);
	$smarty->assign("sub_menu", $nav_menu);
	
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("pmenu_id",$_GET[menuID]);
   $smarty->display("visa.html");
	
?>