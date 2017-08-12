<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:54:34
         compiled from "./templates/expo.html" */ ?>
<?php /*%%SmartyHeaderCode:124592796651bbd76ac3c238-62110797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ffdb2475c9479565a6505fb968f307241af2ce2' => 
    array (
      0 => './templates/expo.html',
      1 => 1371232261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124592796651bbd76ac3c238-62110797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd76acce990_29174283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd76acce990_29174283')) {function content_51bbd76acce990_29174283($_smarty_tpl) {?><!DOCTYPE html>
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

<div class="rentalcar_main">
  <article class="rentalcar_item"><a class="pic" href="#"><img width="140" height="98" alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/zhanlan1.png"></img></a>
    <h2><a title="" href="#"> 북경새국제전시장 北京新国际展览中心   </a></h2>
    <div class="info"><span>좌석수:7인석</span><span>시 간 	10시간 기준</span><span>포함사항 	기름값, 주차비, 고속도로비, 기사</span><span>시내 650원/일당 , 교외 800원/일당</span>
    </div><div class="note">
셋이서 족히 안줄수 있는 랜트카입니다</div> </article>

  <article class="rentalcar_item"><a class="pic" href="#"><img width="140" height="98" alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/zhanlan2.png"></img></a>
    <h2><a title="" href="#"> 중국국제 전시장 中国国际展览中心  </a></h2>
    <div class="info"><span>좌석수:7인석</span><span>시 간 	10시간 기준</span><span>포함사항 	기름값, 주차비, 고속도로비, 기사</span><span>시내 650원/일당 , 교외 800원/일당</span>
    </div><div class="note">
셋이서 족히 안줄수 있는 랜트카입니다</div> </article>

<article class="rentalcar_item"><a class="pic" href="#"><img width="140" height="98" alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/zhanlan3.png"></img></a>
    <h2><a title="" href="#"> 북경전람관 北京展览馆 </a></h2>
    <div class="info"><span>좌석수:7인석</span><span>시 간 	10시간 기준</span><span>포함사항 	기름값, 주차비, 고속도로비, 기사</span><span>시내 650원/일당 , 교외 800원/일당</span>
    </div><div class="note">
셋이서 족히 안줄수 있는 랜트카입니다</div> </article>


</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>