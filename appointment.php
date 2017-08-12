<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
   
   // 引入帖子列表
	$result = mysql_query("SELECT * FROM `p_yuyue`");
	$total = mysql_num_rows($result);
	pageft($total,20);
	if ($firstcount < 0)
	$firstcount = 0;
	
	
   $query=$db->query("SELECT * FROM `p_yuyue` ORDER BY ID DESC limit $firstcount, $displaypg");
   while ($row = $db->fetch_array($query)) {
	   	$notice[]= array("noticeId"=>$row[id], "noticeTitle"=>$row[title],"noticeAuthor"=>$row[author] ,"noticeHits"=>$row[hits],"noticeContent"=>$row[content],"noticeCreated"=>date("y/m/d",strtotime(($row[created]))));
   }
   
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("notice", $notice);
   
   
   $smarty->assign("pmenu_id",$_GET[menuID]);
if($_GET[mode] == 'write')
{
	if(isset($_SESSION[username]))
	{
		
		$title = $_POST[ko_name]."님 맞춤여행 의뢰 - ";
		
		$sql="INSERT INTO`jsbtour`.`p_yuyue` (
 `id` ,
 `title` ,
 `author` ,
 `hits` ,
 `content` ,
 `display` ,
 `created` ,
 `updated` ,
 `recommend` ,
 `type` ,
 `name_color` ,
 `ko_name` ,
 `en_name` ,
 `phone` ,
 `email` ,
 `yudingri` ,
 `daytype` ,
 `daren` ,
 `ertong` ,
 `yinger` ,
 `traveltype` ,
 `hopeplace` ,
 `paymoney` ,
 `startday` ,
 `startplace` ,
 `stopplace` ,
 `aircompany1` ,
 `backday` ,
 `backfromplace` ,
 `backtoplace` ,
 `backaircompany` ,
 `hotel` ,
 `rentalcar` ,
 `travelplace` ,
 `food` ,
 `guid` ,
 `note` ,
 `iscompelete` 
)
VALUES (
 NULL,'$title','$_SESSION[username]','0',NULL ,'1',now(),'0','0','0',NULL ,'$_POST[ko_name]','$_POST[en_name]','$_POST[phone]','$_POST[email]','$_POST[start_day]','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'
)";
		$db->query($sql);
		
		$smarty->display("appointment.html");
	}
	else
		$smarty->display("login.html");
}
else
{
	$smarty->display("apt_notice.html");
}
?>