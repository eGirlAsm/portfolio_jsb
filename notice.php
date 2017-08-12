<?php 
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	
	// 引入帖子列表
	$result = mysql_query("SELECT * FROM `p_notice`");
	$total = mysql_num_rows($result);
	pageft($total,20);
	if ($firstcount < 0)
	$firstcount = 0;
	
	
   $query=$db->query("SELECT * FROM `p_notice` ORDER BY ID DESC limit $firstcount, $displaypg");
   while ($row = $db->fetch_array($query)) {
	   	$notice[]= array("noticeId"=>$row[id], "noticeTitle"=>$row[title],"noticeAuthor"=>$row[author] ,"noticeHits"=>$row[hits],"noticeContent"=>$row[content],"noticeCreated"=>date("y/m/d",strtotime(($row[created]))));
   }
   
   $smarty->assign("pagenav", $pagenav); //新闻分页
   $smarty->assign("notice", $notice);
	$smarty->assign("pmenu_id",$_GET[menuID]);
	

	
	
if($_GET[type] == 'write')
{
	if(isset($_SESSION[username]))
		$smarty->display("write.html");
	else
		$smarty->display("login.html");
	
}
else if($_GET[type] == 'newpost')
{
	if(isset($_SESSION[username]))
	{
		if(!empty($_POST[post_type]) && !empty($_POST[post_title]) && !empty($_POST[post_editor]) )
		{
			
					// 查询SQL语句   添加记录
			$sql = "INSERT INTO `p_notice`(`id`, `title`, `author`, `hits`, `content`, `display`, `sequence`, `created`, `updated`, `recommend`, `is_pic`, `type`, `ishome`, `name_color`) VALUES (NULL,'$_POST[post_title]','$_SESSION[username]','0','$_POST[post_editor]','1','0',now(),'0','0','0','$_POST[post_type]','0','0')";
			$db->query($sql);
			header("location:notice.php?"); 
			$smarty->display("notice.html");
		}
		else
		{
			echo "标题或内容为空";
			$smarty->display("write.html");
		}
	}
	else
	{
		echo "非法操作";
		$smarty->display("login.html");
	}
}
else if($_GET[type] == 'news')
{
	$smarty->assign("menuType",1);
	$smarty->display("notice.html");
}
else
{
	$smarty->display("notice.html");
}
	
?>