<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("pmenu_id",$_GET[menuID]);
   
   
   
   	// 引入酒店列表
   $query=$db->query("SELECT * FROM `p_hotel`");
   while ($row = $db->fetch_array($query)) {
	   	$hotel_list[]= array("hotelID"=>$row[id], "ko_name"=>$row[ko_name],"en_name"=>$row[en_name] ,"stars"=>$row[stars],"areas"=>$row[area],"address"=>$row[address],"price"=>$row[price],"intro"=>$row[introduction1],"imagepath"=>$row[imagepath]);
   }
   
   
   $smarty->assign("hotel_list", $hotel_list);
   $smarty->display("hotel.html");
	
?>