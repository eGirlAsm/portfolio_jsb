<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("pmenu_id",$_GET[menuID]);
   
   
      $query=$db->query("SELECT * FROM `p_tourplace`");
   while ($row = $db->fetch_array($query)) {
	   	$tour_list[]= array("placeid"=>$row[id], "title"=>$row[title],"area"=>$row[area] ,"price"=>$row[price],"time"=>$row[time],"imagepath"=>$row[imagepath]);
   }
   
   $smarty->assign("tour_list", $tour_list);
   $smarty->display("free_walk.html");
	
?>