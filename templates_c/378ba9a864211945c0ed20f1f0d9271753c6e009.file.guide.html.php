<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:54:44
         compiled from "./templates/guide.html" */ ?>
<?php /*%%SmartyHeaderCode:127862173751bbd774e4e098-38083758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '378ba9a864211945c0ed20f1f0d9271753c6e009' => 
    array (
      0 => './templates/guide.html',
      1 => 1371232264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127862173751bbd774e4e098-38083758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd774efc8b8_07522461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd774efc8b8_07522461')) {function content_51bbd774efc8b8_07522461($_smarty_tpl) {?><!DOCTYPE html>
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
images/shuaige.png"></img></a>
    <h2><a title="" href="#"> 관광가이드 , 골프가이드, 전시회통역, 일반통역</a></h2>
    <div class="info"><span>좌석수:7인석</span><span>시 간 	10시간 기준</span><span>포함사항 	기름값, 주차비, 고속도로비, 기사</span><span>시내 650원/일당 , 교외 800원/일당</span>
    </div><div class="note">
셋이서 족히 안줄수 있는 랜트카입니다</div> </article>

  <article class="rentalcar_item"><a class="pic" href="#"><img width="140" height="98" alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/meinv.png"></img></a>
    <h2><a title="" href="#"> 관광가이드, 전시회통역, 일반통역</a></h2>
    <div class="info"><span>좌석수:7인석</span><span>시 간 	10시간 기준</span><span>포함사항 	기름값, 주차비, 고속도로비, 기사</span><span>시내 650원/일당 , 교외 800원/일당</span>
    </div><div class="note">
셋이서 족히 안줄수 있는 랜트카입니다</div> </article>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>