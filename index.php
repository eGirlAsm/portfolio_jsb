<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
		// 引入帖子列表
   $query=$db->query("SELECT * FROM `p_notice` ORDER BY ID DESC");
   while ($row = $db->fetch_array($query)) {
	   	$n=strtotime($row[created]);
	   	$notice[]= array("noticeId"=>$row[id], "noticeTitle"=>$row[title],"noticeAuthor"=>$row[author] ,"noticeHits"=>$row[hits],"noticeContent"=>$row[content],"noticeCreated"=>$row[created],"noticeType"=>$row[type],"noticeTime"=>date("m-d",$n));
   }
	$smarty->assign("notice", $notice);
	
	//입금확인공지
	   $query=$db->query("SELECT * FROM `p_payuser` ORDER BY ID DESC");
   while ($row = $db->fetch_array($query)) {
	   	$paynotice[]= array("noticeId"=>$row[id], "noticeTitle"=>$row[title],"noticeAuthor"=>$row[author] ,"noticeHits"=>$row[hits],"noticeContent"=>$row[content],"noticeCreated"=>date("m/d",strtotime($row[created])));
   }
   
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("notice", $notice);
   $smarty->assign("paynotice", $paynotice);
	
	
	$smarty->assign("sidebarMenu", "none");

	$smarty->display("index.html");
	
?>