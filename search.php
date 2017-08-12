<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
	
	$smarty->assign("pagenav",  $pagenav);
	$smarty->assign("sidebarMenu","none");


if(!empty($_POST[q]))
{
	$info=$_POST['q']; 
	$query=$db->query("SELECT * FROM `p_notice` WHERE `title` LIKE '%$info%'");
	 while ($row = $db->fetch_array($query)) {
		$row[title]=preg_replace("/($info)/i","<b style=\"color:red\">\\1</b>",$row[title]); 
		$search[]= array("s_title"=>$row[title],"s_Created"=>date("y.m.d",strtotime(($row[created]))),"s_Content"=>$row[content],"noticeId"=>$row[id]);
	 }
	
}
	$smarty->assign("search", $search);
	$smarty->assign("key",$_POST[q]);
	$smarty->display("search.html");
	
	
?>