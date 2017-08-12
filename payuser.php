<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');

   
   // 引入帖子列表
	$result = mysql_query("SELECT * FROM `p_payuser`");
	$total = mysql_num_rows($result);
	pageft($total,20);
	if ($firstcount < 0)
	$firstcount = 0;
	
	
   $query=$db->query("SELECT * FROM `p_payuser` limit $firstcount, $displaypg");
   while ($row = $db->fetch_array($query)) {
	   	$notice[]= array("noticeId"=>$row[id], "noticeTitle"=>$row[title],"noticeAuthor"=>$row[author] ,"noticeHits"=>$row[hits],"noticeContent"=>$row[content],"noticeCreated"=>date("Y-m-d",strtotime($row[created])));
   }
   
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("notice", $notice);
	$smarty->assign("pmenu_id",$_GET[menuID]);
   
   $smarty->display("payuser.html");
	
?>