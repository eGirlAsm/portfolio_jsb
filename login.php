<?php
	//����ļ�
	error_reporting(0);
	session_start();              //开启SWSSION
	include_once('./global.php');
	include_once('./nav.php');
	$smarty->assign("sidebarMenu","none");


/*************************
判断登陆
*************************/
//开始判断,如果提交则
if ($_GET['act']=='login') {

	// trim清除空格
	$_POST['username'] = trim($_POST['username']);
	$_POST['password'] = trim($_POST['password']);
	
	//$error = array();
	// 判断表单是否全部填写
	if (!$_POST['username'] || !$_POST['password']) {
		$error[] = '아이디 혹은 비밀번호가 비여있습니다！';
	}
	
/*************************
登陆查询
*************************/
	//如果不存在错误则
	if (!$error) {  //如果不存在错误   
		// 查询SQL
		$q = $db->query('select id,name,password from p_users 
		where name=\''.$_POST['username'].'\' 
and password=\''.md5($_POST['password']).'\'');
		$rs = $db->fetch_array($q);  
		
		if (!$rs['id']) {             
			$error[] = '아이디 혹은 비밀번호 오류！<br>'; 
		}
		
    if (!$error) {  //如果不存在错误   
			// 添加注册session变量
			$_SESSION['user_id'] = $rs['id'];    
			$_SESSION['username'] = $rs['name'];  
			$smarty->assign('login_status',1);    
		}
	}
	$smarty->assign('error',$error);   
}
else if($_GET['act']=='nomemlogin')
{
		// trim清除空格
		$_POST['username'] = trim($_POST['username']);
		$_POST['email'] = trim($_POST['email']);
		$_SESSION['username'] = $_POST['username']; 
		$_SESSION['email'] = $_POST['email'];    
		 
		$smarty->assign('login_status',1); 
}

	$smarty->display("login.html");
?>