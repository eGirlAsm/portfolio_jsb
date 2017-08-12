<?php
/**
 * ��������
 * function.php
 */

if(!defined('IN_WEATHER')) {
	exit('Access Denied');
}

/**
 * ���ܣ� ��ȡ������ip
 * ˵���� �޲������ɹ����ط�����ip�ַ�����ʧ�ܷ���Unknown
 */
function getIp(){
	if ($_SERVER["HTTP_X_FORWARDED_FOR"]){$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];}
	elseif ($_SERVER["HTTP_CLIENT_IP"]){$ip = $_SERVER["HTTP_CLIENT_IP"];}
	elseif ($_SERVER["REMOTE_ADDR"]){$ip = $_SERVER["REMOTE_ADDR"];}
	elseif (getenv("HTTP_X_FORWARDED_FOR")){$ip = getenv("HTTP_X_FORWARDED_FOR");}
	elseif (getenv("HTTP_CLIENT_IP")){$ip = getenv("HTTP_CLIENT_IP");}
	elseif (getenv("REMOTE_ADDR")){$ip = getenv("REMOTE_ADDR");}
	else{$ip = 'Unknown';}
	return $ip;
}

/**
 * ���ܣ� ͨ���û�ָ���ĳ��б����ȡ�ó�����Ϣ
 * ������ $citycodeΪ���б���,$pΪʡ������,$cΪ��������,$nΪ���б�������
 */
function getcitybycode($citycode,$p,$c,$n){
	$flag = true;
	foreach($n as $k => $arr){
		if(in_array($citycode,$arr)){
			$pkey = $k;
			$flag = false;
			break;
		}
	}
	if($flag){
		$pkey = '0';
		$ckey = '0';
		$citycode = $n[$pkey][$ckey];
	}else{
		$ckeyarr = array_keys($n[$pkey],$citycode);
		$ckey = $ckeyarr[0];
	}
	$city = array($citycode,$p[$pkey],$c[$pkey][$ckey],$pkey);
	return $city;
}

/**
 * ���ܣ� ͨ���û�ip�õ��û�����λ�ã�Ȼ���ȡ�ó�����Ϣ
 * ������ $citycodeΪ���б���,$pΪʡ������,$cΪ��������,$nΪ���б�������
 */
function getcitybyip($country,$p,$c,$n){
	$pkey = getkey($p,$country); //��ȡʡ�������±�
	$ckey = getkey($c[$pkey],$country); //��ȡ���������±�
	$code = $n[$pkey][$ckey]; //ȡ����Ӧʡ�������ĳ�������������Ԥ����Ϣ���еı���
	$city= array($code,$country,$c[$pkey][$ckey],$pkey);
	return $city;
}


function getkey($arr,$country){
	if(is_array($arr)){
		foreach($arr as $key => $val){
			if(preg_match('/('.$val.')/',$country,$match)){
				return $key;
			}
		}
	}else{
		if(preg_match('/('.$arr.')/',$country,$match)){
			return $key;
		}
	}
	return 0;
}

/**
 * �����ļ���
 * @param $dir �ļ���·��
 */
function mk_dir($dir) {
	if(!@file_exists($dir)) {
		@mkdir($dir, 0777);
	}
}

/**
 * ���ܣ� ͨ�����б�����������������Ԥ��ҳ��ץȡ��Ϣ
 * ������ $citycodeΪ���б���
 * ˵���� ���ذ���������Ϣ����
 */
function get_cma_html($citycode) {
	for ($i=0; $i<10; $i++) {
		if (false != ($htmlarr = file('http://www.cma.gov.cn/tqyb/weatherdetail/'.$citycode.'.html'))) {
			return $htmlarr;
		}
	}
	return false;
}

/**
 * ���ܣ� ��������������ȡʵ��������Ϣ
 * ������ $htmlarrΪ������Ϣ�ı�
 * ˵���� ����ʵ��������Ϣ����
 */
function get_live_weather($htmlarr) {
	$weather = array();
	$weather['date'] = strip_tags($htmlarr[660]);
	$weather['city'] = strip_tags($htmlarr[670]);
	$weather['weather'] = strip_tags($htmlarr[674]);
	$weather['temperature'] = strip_tags($htmlarr[675]);
	$weather['wind'] = strip_tags($htmlarr[681]);
	$weather['air'] = strip_tags($htmlarr[682]);
	$weather['ultraviolet'] = strip_tags($htmlarr[683]);
	$weather['gif'] = eregi_replace('(.+)*/tqyb/img/weather/(.+)*" width="20" height="20"></li>', "\\2", $htmlarr[671]);
	return $weather;
}


/**
 * ���ܣ� ��������������ȡ����������Ϣ
 * ������ $htmlarrΪ������Ϣ�ı�
 * ˵���� ����������Ϣ����
 */
function get_cma_weather($htmlarr){
	$waather = array();
	list($dateregine,$weather['city']) = explode("&nbsp;&nbsp;&nbsp;",strip_tags($htmlarr['861']));
	$arr['date'] = array($htmlarr['871'],$htmlarr['872'],$htmlarr['873']);
	$arr['weather'] = array($htmlarr['883'],$htmlarr['890'],$htmlarr['897']);
	$arr['temperature'] = array($htmlarr['917'],$htmlarr['918'],$htmlarr['919']);
	$gif['gif'] = array($htmlarr['882'],$htmlarr['889'],$htmlarr['896']);
	$winddirect = array($htmlarr['925'],$htmlarr['926'],$htmlarr['927']);
	foreach($arr as $k => $v){
		foreach($v as $key => $val){
			$weather['cma'][$k][$key] = strip_tags($val);
		}
	}
	foreach($winddirect as $k => $v){
		$weather['cma']['winddirect'][$k] = htmlspecialchars(eregi_replace('(.+)*"b-cn">(.+)*</td>',"\\2",$v));
	}
	foreach ($gif['gif'] as $k => $v) {
		$weather['cma']['gif'][$k] = eregi_replace('(.+)*/tqyb/img/weather/(.+)*" width="20" height="20">&nbsp;<img src="/tqyb/img/weather/(.+)*" width="20" height="20"></td>',"\\3,\\2",$v);
	    //$weather['gif'][$k] = '11111111';
	}
	//$weather['zscx'] = get_zscx_weather($htmlarr);
	return $weather;
}

/**
 * ���ܣ� ���ı�����ȡָ����ѯ
 * ������ $htmlarrΪ������Ϣ�ı�
 * ˵���� ����ָ����ѯ����
 */
function get_zscx_weather($htmlarr) {
    $zscx = array('cyzs'=>$htmlarr['974'],'gmzs'=>$htmlarr['978'],'clzs'=>$htmlarr['982'],'jtzs'=>$htmlarr['986'],'zszs'=>$htmlarr['990'],'gyzs'=>$htmlarr['994'],'fszs'=>$htmlarr['998'],'lxzs'=>$htmlarr['1002']);
    foreach ($zscx as $k => $v) {
    	$weather[$k] = eregi_replace('(.+)*title="(.+)*">(.+)*</a></td>',"\\2",$v);
    }
    return $weather;
}

/**
 * ���ܣ� ��ָ����·����ȡ�洢��������Ϣ��xml�ļ�
 * ������ $filepathΪ�ļ�·��
 * ˵���� ����������Ϣ����
 */
function read_weather_xml($filepath, $mod=0){
	$w = simplexml_load_file($filepath);
	if ($mod == 0) {
	    $weather['city'] = $w->city;
	    $weather['date'] = $w->date;
	    $weather['weather'] = $w->weather;
	    $weather['temperature'] = $w->temperature;
	    $weather['wind'] = $w->wind;
	    $weather['air'] = $w->air;
	    $weather['ultraviolet'] = $w->ultraviolet;
	    $weather['gif'] = $w->gif;
	    foreach ($weather as $k => $v) {
	    	$weather[$k] = iconv("utf-8","gb2312",$v);
	    }
	} elseif ($mod == 1) {
		$weather['city'] = iconv("utf-8","gb2312",$w->city);
		$i = 0;
		foreach ($w->data as $k => $v) {
			foreach ($v as $key => $val) {
				$weather['cma'][$key][$i] = iconv("utf-8","gb2312",$val);
			}
			$i++;
		}
		/*
		foreach ($w->zscx as $v) {
			foreach ($v as $key => $val) {
			    $weather['zscx'][$key] = iconv("utf-8","gb2312",$val);
			}
		}
		*/
	}
	return $weather;
}

/**
 * ���ܣ� ��������Ϣ�洢Ϊָ����xml�ļ�
 * ������ $wΪ�ó���������Ϣ��$filepathΪ�ļ�·����$mod=0�Ǳ�ʾʵ��������Ϣ��$mod=1Ϊδ������������Ϣ
 */
function save_weather_xml($w, $filepath, $mod=0){
	$dom = new DomDocument();
	$xmlstr = '<?xml version="1.0" encoding="gb2312"?>';
	$xmlstr .= "<weatherinfo>";
	if ($mod == 1) {
		$xmlstr .= "<city>".$w['city']."</city>";
		$datasize = count($w['cma']['date']);
		for($i=0; $i<$datasize; $i++){
			$xmlstr .= "<data>";
			$xmlstr .="		<date>".$w['cma']['date'][$i]."</date>";
			$xmlstr .="		<weather>".$w['cma']['weather'][$i]."</weather>";
			$xmlstr .="		<temperature>".$w['cma']['temperature'][$i]."</temperature>";
			$xmlstr .="		<winddirect>".$w['cma']['winddirect'][$i]."</winddirect>";
			$xmlstr .="		<gif>".$w['cma']['gif'][$i]."</gif>";
			$xmlstr .="</data>";
		}
		/*
		$xmlstr .="<zscx>";
		foreach ($w['zscx'] as $k => $v) {
			$xmlstr .= "<".$k.">".$v."</".$k.">";
		}
		$xmlstr .="</zscx>";
		*/
	} elseif ($mod == 0) {
		foreach ($w as $k => $v) {
			$xmlstr .= "<".$k.">".$v."</".$k.">";
		}
	}
	$xmlstr .="</weatherinfo>";
	$dom->loadXML($xmlstr);
	$dom->save($filepath);
}

//ģ�����
function template($tplfile, $tplpath = '', $tplcachepath = '', $userpack = '', $userpackpath = '') {
	$tplpath = $tplpath != '' ? $tplpath : (defined("_TPLPath_") ? _TPLPath_ : '');
	$tplfile = $tplpath.$tplfile;
	$tplcachelimit = defined("_TPLCacheLimit_") ? _TPLCacheLimit_ : 0;
	$cachefile = ($tplcachepath != '' ? $tplcachepath : (defined("_TPLCachePath_") ? _TPLCachePath_ : '')).str_replace(array('/', '.'), '_', $tplfile.($userpack ? '.'.($userpackpath ? $userpackpath : '').$userpack : '')).'.php';
	$cachetime = @filemtime($cachefile);
	if (@filemtime($tplfile) <= $cachetime && (!$tplcachelimit || time() - $cachetime <= $tplcachelimit)) return $cachefile;
	include S_ROOT.'./libs/nemo.php'; /*PS:�˺����������ĺ���������Ҫ�˴���*/
	$nemotpl = new nemo;
	$nemotpl->userpack = $userpack ? ($userpackpath ? $userpackpath : $tplpath).$userpack.'.php' : '';
	$nemotpl->template = file_get_contents($tplfile);
	$nemotpl->cachefile = $cachefile;
	$nemotpl->extraparms = ',\\\''.$tplpath.'\\\',\\\''.$tplcachepath.'\\\',\\\''.$userpack.'\\\',\\\''.$userpackpath.'\\\'';
	return $nemotpl->compile();
}
?>