<?php
/**
 * 名称： 天气预报
 * 功能： 获取相应城市的天气预报
 * 日期： 2008.07.11
 * 作者： xjpa7p2
 * QQ: 8449146
 */

//true表示将数据缓存，false表示不缓存
$cfg['cache'] = true;

//数据缓存时间。此项设置需要开启缓存($cfg['cache'])才能生效
$cfg['w_cachetime'] = 3600*8;
$cfg['lw_cachetime'] = 3600;

/**
 * 默认省份和城市。元素1表示城市代码，元素2表示省份，元素3表示城市，元素4表示省份数组下标
 * 可以从citycode.inc.php文件中获取有关设置
 */
$cfg['city'] = array('54511', '北京', '北京', 0);

//设置字符集
$cfg['charset'] = 'gb2312';

//时区设置为上海
$cfg['timezone'] = 'PRC';

//错误提示开关
$cfg['bug'] = true;