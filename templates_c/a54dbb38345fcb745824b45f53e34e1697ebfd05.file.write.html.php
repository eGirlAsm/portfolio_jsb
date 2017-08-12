<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:27:41
         compiled from "./templates/write.html" */ ?>
<?php /*%%SmartyHeaderCode:147814032451bbd11deffe24-08427121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a54dbb38345fcb745824b45f53e34e1697ebfd05' => 
    array (
      0 => './templates/write.html',
      1 => 1371232281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147814032451bbd11deffe24-08427121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd11e071345_61997097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd11e071345_61997097')) {function content_51bbd11e071345_61997097($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js//jquery.boxy.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="notice_write">
<div class="notice_title"> </div>
<HR style="border:1 dashed #987cb9" width="90%" color=#987cb9 SIZE=1>
<div class="notice_content">
<form action="?type=newpost" method="post"> 
  <table width="725" border="1">
    <tr>
      <td width="100" style="padding-bottom:10px;"><select name="post_type" id="select" >
       <option selected="selected" value="0">&nbsp;분류선택&nbsp;</option>
       <option value="1">&nbsp;공지사항&nbsp;</option>
       <option value="2">&nbsp;여행지식&nbsp;</option>
       <option value="3">&nbsp;질문답변&nbsp;</option>
       <option value="4">&nbsp;여행후기&nbsp;</option>
       <option value="5">&nbsp;토론방&nbsp;</option>
      </select></td>
      <td width="233"><input type="text" name="post_title" id="textfield"  maxlength="80" style ="width:300px;"></td>
      <td width="534">쓸수있는 글자수 80</td>
    </tr>
    <tr>
      <td colspan="3">  <textarea id="editor_id" name="post_editor" style="width:700px;height:300px;">
</textarea></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
  <script charset="utf-8" src="kindeditor-4.1.7/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor-4.1.7/lang/ko.js"></script>
<script>
       var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#editor_id', {
                        langType : 'ko'
                });
        });
</script>
  
  <INPUT type=image height=26 width=88  style="margin-left:250px;"
                  src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/ok.png">
                  
                    <INPUT type=image height=26 width=88  style="margin-left:10px;"
                  src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/cancel.png">
  </form>
  <br />
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>