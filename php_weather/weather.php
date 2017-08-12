<?php
/**
 * 天气预报
 * 版本： Ver 08.07.17
 * 作者： xjpa7p2
 * 日期： 2008.07.11
 */

//公共文件
require_once './common.php';

//省份，城市和代码的数组表文件
require_once S_ROOT.'./citycode.inc.php';

//$city = $cfg['city'];
$country = '';
$weather = array();
$setcity = '定制该城市天气';

//如果传入城市编码参数，则根据该参数获取指定城市信息
if (isset($_GET['citycode']) && $_GET['citycode']!='' && strlen($_GET['citycode'])<6) {
	$city = getcitybycode($_GET['citycode'],$p,$c,$n);
} elseif(isset($_COOKIE['citycode']) && $_COOKIE['citycode']!='') {
	$city = getcitybycode($_COOKIE['citycode'],$p,$c,$n);
} else {
	$ip = getIp();  //获取用户ip
	//$ip = "222.82.199.242";  //测试用ip
	if ($ip != 'Unknown' && $ip != '127.0.0.1' && $ip != '') {
		include_once S_ROOT.'./QQWry.class.php';
		$QQWry=new QQWry($ip);
		$country = $QQWry->Country;
		unset($QQWry);
		//echo $country;
		$city = getcitybyip($country, $p, $c, $n);
	}
	unset($ip);
}
unset($country, $p, $c, $n);
if (!is_array($city) || empty($city)) {
	$city = $cfg['city'];
}

if ($_COOKIE['citycode'] == $city['0']) {
	$setcity = '取消城市定制';
}

//var_dump($city);
$htmlarr = get_cma_html($city['0']);
//var_dump($htmlarr);
if (!is_array($htmlarr) || empty($htmlarr)) {
	die('读取中央气象局天气信息失败！');
}

$data_dir = DATAPATH.$city[3].'/';
$live_file = $data_dir.'live_'.$city['0'].'.xml';
$cma_file = $data_dir.'cma_'.$city['0'].'.xml';

if (!$cfg['cache']) {
    //无缓存，每次更新
    $live_weather = get_live_weather($htmlarr);
    $cma_weather = get_cma_weather($htmlarr);
} else {
	mk_dir($data_dir);	
	if (!@file_exists($live_file) || date("Ymd")>date("Ymd",filemtime($live_file)) || ($_SGLOBAL['timestamp']-filemtime($live_file))>$cfg['lw_cachetime']) {
		@unlink($live_file);
		//获取实况天气信息，并保存
		$live_weather = get_live_weather($htmlarr);
		save_weather_xml($live_weather, $live_file, 0);
	} else {
		$live_weather = read_weather_xml($live_file, 0);
	}
	if (!@file_exists($cma_file) || date("Ymd")>date("Ymd",filemtime($cma_file)) || ($_SGLOBAL['timestamp']-filemtime($cma_file))>$cfg['w_cachetime']) {
		@unlink($cma_file);
		//获取未来三日天气信息和指数查询，并保存
		$cma_weather = get_cma_weather($htmlarr);
		save_weather_xml($cma_weather, $cma_file, 1);
	} else {
		$cma_weather = read_weather_xml($cma_file, 1);
	}
}
unset($htmlarr);
foreach ($cma_weather['cma']['gif'] as $k => $v) {
	list($gif[$k][0],$gif[$k][1]) = explode(',', $v);
}
define("_TPLPath_", S_ROOT.'./templates/');//定义模板路径
include template('weather.htm');
?>