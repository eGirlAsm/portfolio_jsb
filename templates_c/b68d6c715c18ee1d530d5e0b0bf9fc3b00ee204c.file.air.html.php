<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:55:05
         compiled from "./templates/air.html" */ ?>
<?php /*%%SmartyHeaderCode:196715242651bbd7893ac706-37080982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68d6c715c18ee1d530d5e0b0bf9fc3b00ee204c' => 
    array (
      0 => './templates/air.html',
      1 => 1371232258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196715242651bbd7893ac706-37080982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd789471b44_81246975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd789471b44_81246975')) {function content_51bbd789471b44_81246975($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JSB투어 :: 북경여행,항공티켓,호텔예약</title>
<meta name="Keywords" content="">
<meta name="Description" content="">

<!-- <?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
 -->
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/main_20130319.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/ad_photo.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="air_main">
  <div class="air_search"></div>
  <div class="air_ad"></div>
  <div class="air_content">
    <div id="searchDateBar" class="e_flt_date">
      <ul class="ul_flt_date">
        <li>
          <p class="date">05-07 화</p>
          <p class="price"><i class="rmb"> ¥ </i>393</p>
        </li>
        <li>
          <p class="date">05-08 수</p>
          <p class="price"><i class="rmb"> ¥ </i>393</p>
        </li>
        <li>
          <p class="date">05-09 목</p>
          <p class="price"><i class="rmb"> ¥ </i>393</p>
        </li>
        <li>
          <p class="date">05-10 금</p>
          <p class="price"><i class="rmb"> ¥ </i>393</p>
        </li>
        <li>
          <p class="date">05-10 토</p>
          <p class="price"><i class="rmb"> ¥ </i>393</p>
        </li>
        <li>
          <p class="date">05-10 일</p>
          <p class="price"><i class="rmb"> ¥ </i>393</p>
        </li>
        <li>
          <p class="date">05-10 월</p>
          <p class="price"><i class="rmb"> ¥ </i>393</p>
        </li>
        <li class="prc_cld">
          <p id="priceCd" class="m_pc" style="visibility: visible;"> 价格 <br>
            </br>
            日历 </p>
          <div id="priceCalendar" class="prCd" style="display: none;"></div>
        </li>
      </ul>
    </div>
    <div id="progTip" class="e_flt_ifo" style="display: block;"> <b class="plc"> 북경 </b><i class="ico_arrto"></i><b class="plc"> 할빈 </b><em class="sep_line"> | </em><b class="jn"> 편도 </b><span class="dec"> 검색 <b class="highlight">1</b> 개사이트중 <b class="highlight">3</b> 개이 사이트가 <b class="highlight">4</b> 가격정보 <b class="highlight">5</b> 입니다 검색결과 끝. </span> </div>
    <div class="filterPanel">
      <div class="flying_time"> <span class="flt_lab"><b class="plc"> 출발시간</b> </span>
        <label>오전
          <input name="" type="checkbox" value="">
        </label>
        <label>점심
          <input name="" type="checkbox" value="">
        </label>
        <label>오후
          <input name="" type="checkbox" value="">
        </label>
        <label> 저녁
          <input name="" type="checkbox" value="">
        </label>
      </div>
      <!--flying_time--> 
    </div>
    <!--filterPanel-->
    
    <div class="e_fly_th">
      <ul>
        <li class="c0">&nbsp;</li>
        <li class="c1">항공사</li>
        <li class="c2"><a id="btnDepttimeOrderArror" href="#">출발<i class="i_arr_ud"></i></a></li>
        <li class="c2"><a id="btnDepttimeOrderArror" href="#">도착<i class="i_arr_ud"></i></a></li>
        <li class="c3">여정</li>
        <li class="c4">경유</li>
        <li class="c5">좌석</li>
        <li class="c6"><a href="#" id="btnPriceOrderArror">가격<i class="i_arr_ud"></i></a>（세금포함）</li>
      </ul>
    </div>
    <div class="air_list">
      <div class="avt_column">
        <div class="b_avt_lst">
          <div class="c0">
            <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/ca.png"></img></div>
          </div>
          <div class="c1">
            <div class="a_name">중국국제항공</div>
          </div>
          <div class="c2">
            <div class="a_tm_dep"> 18:30 </div>
          </div>
          <div class="c3">
            <div class="a_tm_arv"> 20:30 </div>
          </div>
          <div class="c4">
            <div class="a_lacal_dep"> 首都机场T2 </div>
            <div class="a_local_arv"> 太平机场 </div>
          </div>
          <div class="c5">
            <div class="a_direction">직항</div>
          </div>
          <div class="c6">
            <div class="a_seat">8</div>
          </div>
          <div class="c7">
            <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
          </div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/ca.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/ca.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/cz.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/mu.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/oz.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/oz.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/ke.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div>
    </div>
    <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/ca.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div><!--b_avt_lst -->
      
    </div><!--avt_colunmn -->
        <div class="avt_column">
      <div class="b_avt_lst">
        <div class="c0">
          <div class="a_logo"><img width="40" height="30" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/air_icon/ca.png"></img></div>
        </div>
        <div class="c1">
          <div class="a_name">중국국제항공</div>
        </div>
        <div class="c2">
          <div class="a_tm_dep"> 18:30 </div>
        </div>
        <div class="c3">
          <div class="a_tm_arv"> 20:30 </div>
        </div>
        <div class="c4">
          <div class="a_lacal_dep"> 首都机场T2 </div>
          <div class="a_local_arv"> 太平机场 </div>
        </div>
        <div class="c5">
          <div class="a_direction">직항</div>
        </div>
        <div class="c6">
          <div class="a_seat">8</div>
        </div>
        <div class="c7">
          <div class="a_price"><b class="highlight">568</b><i class="price_type">원</i></div>
        </div>
      </div><!--b_avt_lst -->
    </div><!--avt_colunmn -->
    
    
  </div>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>