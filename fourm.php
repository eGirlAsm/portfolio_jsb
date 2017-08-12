<?php 
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
   $query=$db->query("SELECT * FROM `p_notice` ORDER BY ID DESC ");
   while ($row = $db->fetch_array($query)) {
	   	$notice[]= array("noticeId"=>$row[id], "noticeTitle"=>$row[title],"noticeAuthor"=>$row[author] ,"noticeHits"=>$row[hits],"noticeContent"=>$row[content],"noticeCreated"=>date("y/m/d",strtotime(($row[created]))),"type"=>$row[type]);
   }

   $smarty->assign("notice", $notice);
	$smarty->assign("pmenu_id",$_GET[menuID]);
	

	$smarty->display("fourm.html");

	
?>