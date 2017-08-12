<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	$smarty->assign("pagenav",  $pagenav);
	$smarty->assign("sidebarMenu","none");

if(!empty($_POST[postid])){
	$query=$db->query("INSERT INTO `p_comments` (`id`,`author`,`name`,`content`,`postId`,`display`,`created`,`updated`)VALUES (NULL,'$_SESSION[username]','황은룡','$_POST[comments]','$_POST[postid]','1',now(),'0')");
	
}
	$smarty->assign("noticeTitle",$row[title]);
	$smarty->assign("noticeAuthor",$row[author]);
	$n=strtotime($row[created]);
	$smarty->assign("noticeCreated",date("Y-m-d h:i:s",$n));
	$smarty->assign("noticeContent",$row[content]);
	$smarty->assign("noticeHits", $row[hits]);
	$smarty->display("notice_view.html");
	
	
?>