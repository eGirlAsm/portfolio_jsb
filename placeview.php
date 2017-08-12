<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
   

	
	$smarty->assign("sidebarMenu","none");


if(!empty($_GET[hid])){
	$query=$db->query("SELECT * FROM `p_hotel` WHERE id = '$_GET[hid]'");
	$row = $db->fetch_array($query);
	// 引入帖子列表
	$smarty->assign("ko_name",$row[ko_name]);
	$smarty->assign("en_name",$row[en_name]);
	$smarty->assign("stars",$row[stars]);
	$smarty->assign("address",$row[address]);
	$smarty->assign("price",$row[price]);
	$smarty->assign("imagepath",$row[imagepath]);
	$smarty->display("placeview.html");
}



	
	
	
?>