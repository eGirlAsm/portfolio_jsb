<?php
/**
 * ����Ԥ��
 * �汾�� Ver 08.07.11
 * ���ߣ� xjpa7p2
 * ���ڣ� 2008.07.11
 */

//������ڱ��
@define('IN_WEATHER', TRUE);

//����Ŀ¼
@define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

//QQ��ip��·��
@define('__QQWRY__', S_ROOT."./QQWry.Dat");

//���ݴ洢·��
@define('DATAPATH', S_ROOT.'./data/');

$_SGLOBAL = array();

$_SGLOBAL['timestamp'] = time();

//���������ļ�
if(!@include_once(S_ROOT.'./config.php')) {
	die('config.php �����ļ�����ʧ�ܣ�');
}

$cfg['bug']?error_reporting(7):error_reporting(0);

//ǿ��ʹ���ַ���
if($cfg['charset']) {
	@header('Content-Type: text/html; charset='.$cfg['charset']);
}

//����ʱ��
if(function_exists('date_default_timezone_set')){
	date_default_timezone_set($cfg['timezone']);
}

//���������ļ�
if(!@include_once(S_ROOT.'./function.php')) {
	die('function.php ���������ļ�����ʧ�ܣ�');
}
?>