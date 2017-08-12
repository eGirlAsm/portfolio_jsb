<?php
	//����ļ�
	error_reporting(0);
	include_once('./global.php');
	include_once('./nav.php');
	$smarty->assign("sidebarMenu","none");

if($_GET[page] == 1)
	$smarty->display("join.html");
else if($_GET[page] == 2)
	$smarty->display("register.html");
else if($_GET[page] == 3)
{
		// 清除空格(空格处理)
	$_POST['username'] = trim($_POST['username']);
	$_POST['pw1'] = trim($_POST['pw1']);
	$_POST['pw2'] = trim($_POST['pw2']);
	$_POST['truename'] = trim($_POST['truename']);
	$_POST['email'] = trim($_POST['email']);
	$_POST['mobile'] = trim($_POST['mobile']);
	$_POST['birthday'] = trim($_POST['birthday']);
	$_POST['sex'] = trim($_POST['sex']);
	//$error = array();
	// 判断表单是否全部填写
	if (!$_POST['username'] || !$_POST['pw1'] || !$_POST['pw2'] || !$_POST['truename'] || !$_POST['email'] || !$_POST['mobile'] || !$_POST['birthday'] || !$_POST['sex']) {
		$error[] = '정확한 정보를 입력해주세요!';
	}
		// 判断用户名是否超出长度
	if (strlen($_POST['username'])>16) {
		$error[] = '닉넴 자수가 넘 많습니다！<br>';
	}
	
	// 判断再次密码是否相同
	if ($_POST['pw1']!=$_POST['pw2']) {
		$error[] = '비밀번호가 일치하지 않습니다！<br>';
	}
	
	// 判断email长度
	if (strlen($_POST['email'])>100) {
		$error[] = '이메일 자수가 넘어났습니다！<br>';
	}
/***************
注册记录添加
**************/
   //如果没有错误则
	if (!$error) {
		// 判断用户名是否存在
		$q = $db->query("SELECT * FROM `p_users` WHERE name='$_POST[username]'");  
		$rs = $db->fetch_array($q);   
		if ($rs['id']) {                
			$error[] = '이미 가입된 아이디입니다<br>';  
		}
		if (!$error) {   
			// 查询SQL语句   添加记录
			$sql = "INSERT INTO `jsbtour`.`p_users` (`id`, `integral`, `name`, `truename`, `status`, `email`, `password`, `ori_pw`, `birthday`, `sex`, `company`, `deparment`, `position`, `tel`, `mobile`, `address`, `zipcode`, `intro`, `display`, `sequence`, `created`, `updated`, `type`, `emailreceive`, `firstbuy`) VALUES (NULL, '0', '$_POST[username]', '$_POST[truename]', '0', '$_POST[email]', md5('$_POST[pw1]'), '$_POST[pw2]', '$_POST[birthday]', '$_POST[sex]', '0', '0', '0', '0','$_POST[mobile]', '0', '0', '0', '1', '0', '0', '0', NULL, '0', '1');";
			$db->query($sql);
			$smarty->assign('register_status',1);  
		}
	}
	$smarty->assign('error',$error);  //替换错误到标签
	
	$smarty->display("register.html");
}
?>