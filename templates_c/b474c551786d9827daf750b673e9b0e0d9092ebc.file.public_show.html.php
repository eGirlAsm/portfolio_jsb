<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:54:24
         compiled from "./templates/public_show.html" */ ?>
<?php /*%%SmartyHeaderCode:36760436251bbd7609f21f2-33057423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b474c551786d9827daf750b673e9b0e0d9092ebc' => 
    array (
      0 => './templates/public_show.html',
      1 => 1371232275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36760436251bbd7609f21f2-33057423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd760a98ab7_71544365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd760a98ab7_71544365')) {function content_51bbd760a98ab7_71544365($_smarty_tpl) {?><!DOCTYPE html>
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

<div class="golf_main">

  
  <!-- <div class="golf-banner">안녕하세요 xx님</div> -->
  
  <div class="list-view">
    <div class="item">
      <div class="piccon"> <a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/golf1.jpg" class="preview"><img width="100" height="75" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/golf1s.jpg"/></a> </div>
      <div class="title">
        <h3 class="summary"><a target="_blank" href="#"> 동방명주골프장 </a></h3>
        <div class="address">北京顺义区北石槽镇大柳树营村(京承高速北台出口)</div>
        <div class="related"><a rel="nofollow" href="#">18홀</a><a rel="nofollow" href="#">24시간영엽</a></div>
      </div>
      <div class="golf_price_bd">
        <div class="price_title">
          <p><span class="bigpri"><b> 600 </b></span> 元 / 평일가격 </p>
           <p><span class="bigpri"><b> 900 </b></span> 元 / 주말가격 </p>
        </div>
      </div>
    </div>
    
    
        <div class="item">
      <div class="piccon"> <a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/golf2.jpg" class="preview"><img width="100" height="75" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/golf2s.jpg"/></a> </div>
      <div class="title">
        <h3 class="summary"><a target="_blank" href="#"> 천축-향촌 골프 클럽 </a></h3>
        <div class="address">北京顺义区天竺镇李天路楼台段14号</div>
        <div class="related"><a rel="nofollow" href="#">18홀</a><a rel="nofollow" href="#">24시간영엽</a></div>
      </div>
      <div class="golf_price_bd">
        <div class="price_title">
          <p><span class="bigpri"><b> 550 </b></span> 元 / 평일가격 </p>
           <p><span class="bigpri"><b> 750 </b></span> 元 / 주말가격 </p>
        </div>
      </div>
    </div>
    
    
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>