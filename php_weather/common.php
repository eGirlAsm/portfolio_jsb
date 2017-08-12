<?php
/**
 * 天气预报
 * 版本： Ver 08.07.11
 * 作者： xjpa7p2
 * 日期： 2008.07.11
 */

//程序入口标记
@define('IN_WEATHER', TRUE);

//程序目录
@define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

//QQ的ip库路径
@define('__QQWRY__', S_ROOT."./QQWry.Dat");

//数据存储路径
@define('DATAPATH', S_ROOT.'./data/');

$_SGLOBAL = array();

$_SGLOBAL['timestamp'] = time();

//基本配置文件
if(!@include_once(S_ROOT.'./config.php')) {
	die('config.php 配置文件引入失败！');
}

$cfg['bug']?error_reporting(7):error_reporting(0);

//强制使用字符集
if($cfg['charset']) {
	@header('Content-Type: text/html; charset='.$cfg['charset']);
}

//设置时区
if(function_exists('date_default_timezone_set')){
	date_default_timezone_set($cfg['timezone']);
}

//公共函数文件
if(!@include_once(S_ROOT.'./function.php')) {
	die('function.php 公共函数文件引入失败！');
}
?>