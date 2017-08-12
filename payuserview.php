<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	$smarty->assign("pagenav",  $pagenav);
	$smarty->assign("sidebarMenu","none");
	// 引入帖子列表
//==============
if(!empty($_GET[postid])){
	$query=$db->query("SELECT * FROM `p_payuser` WHERE id = '$_GET[postid]'");
	$row = $db->fetch_array($query);
	$ShowCount = $row[hits] + 1;
	$db->query("UPDATE `p_payuser` SET `hits`= $ShowCount WHERE id = '$_GET[postid]'");
	
}
	$smarty->assign("noticeTitle",$row[title]);
	$smarty->assign("noticeAuthor",$row[author]);
	$n=strtotime($row[created]);
	$smarty->assign("noticeCreated",date("Y-m-d h:i:s",$n));
	$smarty->assign("noticeContent",$row[content]);
	$smarty->assign("noticeHits", $row[hits]);
	$smarty->display("view.html");
	
	
?>