<?php
/*
 * Created on 2013-2-18
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
error_reporting(0);
session_start();
include_once ("../../common/mysql.class.php"); //mysql类
include_once ("../../configs/config.php"); //配置参数
include_once ("../common/page.class.php"); //后台专用分页类
include_once ("../common/action.class.php"); //数据库操作类

$db = new action($mydbhost, $mydbuser, $mydbpw, $mydbname, ALL_PS, $mydbcharset); //数据库操作类.

$uid = $_SESSION[uid];
$shell = $_SESSION[shell];
?>
