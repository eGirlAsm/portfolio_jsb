<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 12:44:45
         compiled from "./templates/study.html" */ ?>
<?php /*%%SmartyHeaderCode:99571149151bbd7b1e47512-27212759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31d0208e9be5f52517079ce14ba647e3db9c07d' => 
    array (
      0 => './templates/study.html',
      1 => 1371439259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99571149151bbd7b1e47512-27212759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd7b1ecd0e1_29296765',
  'variables' => 
  array (
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd7b1ecd0e1_29296765')) {function content_51bbd7b1ecd0e1_29296765($_smarty_tpl) {?><!DOCTYPE html>
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

<div class="study_main">
  <div  style="float:left;"> <img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/studybanner.jpg" width="784" height="130"> </div>

<div style="margin-top:30px;float:left;">

<section id="study_wrap"><div class="widget"><h2> 배우기 </h2></div>

<ul id="study_item"><li><a href="">중국어공부</a></li><li><a href="">일상대화</a></li><li><a href="">중국화제</a></li><li><a href="">중국글공부</a></li></ul>


</section>

<section id="study_wrap"><div class="widget"><h2> 알아보기</h2></div>

<ul id="study_item"><li><a href="">중국어공부</a></li><li><a href="">일상대화</a></li><li><a href="">중국화제</a></li><li><a href="">중국글공부</a></li></ul>


</section>


</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>