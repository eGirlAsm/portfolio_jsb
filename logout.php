<?php
/*********************
退出登陆
*********************/
session_start();    
$_SESSION = array();
session_destroy();  
header('location:index.php');  
?>