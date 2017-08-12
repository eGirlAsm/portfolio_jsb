<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:57:37
         compiled from "./templates/view.html" */ ?>
<?php /*%%SmartyHeaderCode:66503783151bbd8213fd190-05420627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7627440f950aa1372976f4c1f1b2e02442f21606' => 
    array (
      0 => './templates/view.html',
      1 => 1371232280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66503783151bbd8213fd190-05420627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'noticeTitle' => 0,
    'noticeCreated' => 0,
    'noticeAuthor' => 0,
    'noticeHits' => 0,
    'noticeContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd82149d8e7_69435661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd82149d8e7_69435661')) {function content_51bbd82149d8e7_69435661($_smarty_tpl) {?><!DOCTYPE html>
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

<div class="notice">
  <div class="notice_title">
    <h1><?php echo $_smarty_tpl->tpl_vars['noticeTitle']->value;?>
</h1>
    <p class="ext"> 등록일:<?php echo $_smarty_tpl->tpl_vars['noticeCreated']->value;?>
     글쓴이:<?php echo $_smarty_tpl->tpl_vars['noticeAuthor']->value;?>
        조회수:<?php echo $_smarty_tpl->tpl_vars['noticeHits']->value;?>
 <a class="imp ico-copy" href="#share"></a><a class="imp ico-comm" href="#commenttop"></a></p>
  </div>
  <div class="notice_content"> <?php echo nl2br($_smarty_tpl->tpl_vars['noticeContent']->value);?>
 </div>
  
 
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>