<?php
/**
 * ����Ԥ��
 * �汾�� Ver 08.07.17
 * ���ߣ� xjpa7p2
 * ���ڣ� 2008.07.11
 */

//�����ļ�
require_once './common.php';

//ʡ�ݣ����кʹ����������ļ�
require_once S_ROOT.'./citycode.inc.php';

//$city = $cfg['city'];
$country = '';
$weather = array();
$setcity = '���Ƹó�������';

//���������б������������ݸò�����ȡָ��������Ϣ
if (isset($_GET['citycode']) && $_GET['citycode']!='' && strlen($_GET['citycode'])<6) {
	$city = getcitybycode($_GET['citycode'],$p,$c,$n);
} elseif(isset($_COOKIE['citycode']) && $_COOKIE['citycode']!='') {
	$city = getcitybycode($_COOKIE['citycode'],$p,$c,$n);
} else {
	$ip = getIp();  //��ȡ�û�ip
	//$ip = "222.82.199.242";  //������ip
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
	$setcity = 'ȡ�����ж���';
}

//var_dump($city);
$htmlarr = get_cma_html($city['0']);
//var_dump($htmlarr);
if (!is_array($htmlarr) || empty($htmlarr)) {
	die('��ȡ���������������Ϣʧ�ܣ�');
}

$data_dir = DATAPATH.$city[3].'/';
$live_file = $data_dir.'live_'.$city['0'].'.xml';
$cma_file = $data_dir.'cma_'.$city['0'].'.xml';

if (!$cfg['cache']) {
    //�޻��棬ÿ�θ���
    $live_weather = get_live_weather($htmlarr);
    $cma_weather = get_cma_weather($htmlarr);
} else {
	mk_dir($data_dir);	
	if (!@file_exists($live_file) || date("Ymd")>date("Ymd",filemtime($live_file)) || ($_SGLOBAL['timestamp']-filemtime($live_file))>$cfg['lw_cachetime']) {
		@unlink($live_file);
		//��ȡʵ��������Ϣ��������
		$live_weather = get_live_weather($htmlarr);
		save_weather_xml($live_weather, $live_file, 0);
	} else {
		$live_weather = read_weather_xml($live_file, 0);
	}
	if (!@file_exists($cma_file) || date("Ymd")>date("Ymd",filemtime($cma_file)) || ($_SGLOBAL['timestamp']-filemtime($cma_file))>$cfg['w_cachetime']) {
		@unlink($cma_file);
		//��ȡδ������������Ϣ��ָ����ѯ��������
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
define("_TPLPath_", S_ROOT.'./templates/');//����ģ��·��
include template('weather.htm');
?>