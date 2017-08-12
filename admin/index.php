<?php
include_once('admin_global.php');
 if(!empty($_POST[username])&& !empty($_POST[password])) $db->Get_user_login($_POST[username],$_POST[password]);
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Web Site Manage system Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form action="?" method="post" class="login">
    <h1>Web Site Manage system</h1>
    <input type="username" name="username" class="login-input" placeholder="your account id" autofocus>
    <input type="password" name="password" class="login-input" placeholder="Password">
    <input type="submit" value="Login" class="login-submit">
    <p class="login-help"><a href="index.php">Forgot password?</a></p>
  </form>


</body>
</html>
