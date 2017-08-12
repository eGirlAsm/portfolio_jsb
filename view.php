<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');

   
   
	$smarty->assign("nav_menu", $nav_menu);
	$smarty->assign("sub_menu", $nav_menu);
	
	$smarty->assign("sidebarMenu","none");


if(!empty($_GET[postid])){
	$query=$db->query("SELECT * FROM `p_notice` WHERE id = '$_GET[postid]'");
	$row = $db->fetch_array($query);
	$ShowCount = $row[hits] + 1;
	$db->query("UPDATE `p_notice` SET `hits`= $ShowCount WHERE id = '$_GET[postid]'");
	// 引入帖子列表
	$smarty->assign("noticeTitle",$row[title]);
	$smarty->assign("noticeAuthor",$row[author]);
	$n=strtotime($row[created]);
	$smarty->assign("noticeCreated",date("Y-m-d h:i:s",$n));
	$smarty->assign("noticeContent",$row[content]);
	$smarty->assign("noticeHits", $row[hits]);
	
	
	//==============评论列表	
	$result = mysql_query("SELECT * FROM `p_comments` where `postId` = $_GET[postid]");
	$total = mysql_num_rows($result);
	pageft($total,100);
	if ($firstcount < 0)
	$firstcount = 0;
	
	   $query=$db->query("SELECT * FROM `p_comments` where `postId` = $_GET[postid] ORDER BY ID DESC limit $firstcount, $displaypg ");
   while ($row = $db->fetch_array($query)) {
	   	$comment_info[]= array("comment_id"=>$row[id], "author"=>$row[author],"name"=>$row[name] ,"content"=>$row[content],"created"=>date("y-m-d h:i:s",strtotime(($row[created]))),"comment_index"=>$total);
		$total--;
   }
	$smarty->assign("pagenav",  $pagenav);
	$smarty->assign("comment_info",$comment_info);
	$smarty->assign("postid",$_GET[postid]);
}


	$smarty->display("notice_view.html");
	
	
?>