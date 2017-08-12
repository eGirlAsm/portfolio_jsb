<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:55:35
         compiled from "./templates/hotel.html" */ ?>
<?php /*%%SmartyHeaderCode:185849406051bbd7a7bbc3b4-68114649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa91a19d9d603a3b8cfbefb89c6cd848e20eda3' => 
    array (
      0 => './templates/hotel.html',
      1 => 1371232266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185849406051bbd7a7bbc3b4-68114649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'hotel_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd7a7cc3802_38483710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd7a7cc3802_38483710')) {function content_51bbd7a7cc3802_38483710($_smarty_tpl) {?><!DOCTYPE html>
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
<script language="javascript" type="text/javascript">	



$(function(){
	$(".screenList dl:last").attr("style","border-bottom:0px");
});
function addSel(obj){
	var checkValue = obj.innerHTML;
	var scBox = $(obj).parent().parent().attr("id");
	$(".barct").append("<a href='#' class='par' title='취소' id='curTitle' onclick='delSel(this)'>"+ checkValue +"</a>");
	//$(obj).parent().remove();
	delSel();
	return false;
}
function delSel() {
	$("#curTitle").remove();
	return false;
}
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="rentalcar_main">

  <section id="selection">
    <div>
    <dl class="secitem secitem_area clearfix"> 
      <dt> 구역 ：</dt>
      <dd><a href="#"  onClick="addSel(this)">전부(북경)</a><a href="#" onClick="addSel(this)">왕징(코리안타운)</a><a href="#" onClick="addSel(this)">국제전시장(삼원교)</a><a href="#" onClick="addSel(this)">CBD국제무역센터</a><a href="#" onClick="addSel(this)">올림픽경기장</a><a href="#" onClick="addSel(this)">공항-새전시장</a><a href="#" onClick="addSel(this)">북경대학-오도구</a><a href="#" onClick="addSel(this)">북경 전람관</a><a href="#" onClick="addSel(this)">천안문-왕부정</a><a href="#" onClick="addSel(this)">기타지역</a></dd>
    </dl>
    <div id="selected" class="selectResult clearfix" style="display: block;">
      <div class="barct"> <span> 선택조건： </span><a class="par" id="curTitle" href="#" onclick="delSel(this)" title="取消"><em>
      전부(북경)
    </em></a> </div>
    </div>
    </div>
  </section>
  
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hotel_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
    <article class="rentalcar_item"><a class="pic" href="hotelinfo.php?hid=<?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['hotelID'];?>
"><img width="140" height="98" alt="" src="uploads/<?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['imagepath'];?>
"></img></a>
    <h2><a title="" href="hotelinfo.php?hid=<?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['hotelID'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ko_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['en_name'];?>
</a></h2>
    <div class="info"><span class="hotel_stars0<?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['stars'];?>
" title="4성 호텔"></span><span style="margin-left:20px;">지역 </span><span><?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['address'];?>
</span><span>&nbsp;&nbsp;&nbsp;<a href="#">이용후기</a></span> </div>
    <div class="note"> <?php echo $_smarty_tpl->tpl_vars['hotel_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['intro'];?>
</div>
  </article>
  <?php endfor; endif; ?>
  
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>