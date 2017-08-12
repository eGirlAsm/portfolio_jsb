<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:57:27
         compiled from "./templates/payuser.html" */ ?>
<?php /*%%SmartyHeaderCode:142158978951bbd8171567d5-79500485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd91482b6fb4bc08479c8cf63e489b0c05363a44' => 
    array (
      0 => './templates/payuser.html',
      1 => 1371232273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142158978951bbd8171567d5-79500485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'notice' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd817231940_03850184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd817231940_03850184')) {function content_51bbd817231940_03850184($_smarty_tpl) {?><!DOCTYPE html>
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


<script type="text/javascript">
function grid(o,a,b,c,d){

	var t=document.getElementById(o).getElementsByTagName("tr");

	for(var i=0;i<t.length;i++){
		
		t[i].style.backgroundColor=(t[i].sectionRowIndex%2==0)?a:b;
		
		t[i].onclick=function(){
			if(this.x!="1"){
				
			}else{
				this.x="0";
				this.style.backgroundColor=(this.sectionRowIndex%2==0)?a:b;
			}
		}

		t[i].onmouseover=function(){
			if(this.x!="1")this.style.backgroundColor=c;
		}
		
		t[i].onmouseout=function(){
			if(this.x!="1")this.style.backgroundColor=(this.sectionRowIndex%2==0)?a:b;
		}
	}
}
</script>

<div class="notice">
<h2>현재위치: 입금확인공지</h2>
<HR style="border:3 dashed #02B202" width="100%" color=#02B202 SIZE=3>
<div class="notice_content">
<table width="723" id="grid">
	<tr>
		<td colspan="5" class="st1">
		</td>
	</tr>
	<tr>
		<th width="32">#</th>
		<th width="389">제목</th>
		<th width="95">글쓴이</th>
		<th width="123">작성일</th>
		<th width="62">조회수</th>
        
	</tr>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    	<tr>
		<td><div class="pic_box">
 <img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/text.gif"/>
</div></td>
		<td><a href="payuserview.php?postid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeId'];?>
"><span id="opennumber102"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeTitle'];?>
</span></a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeAuthor'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeCreated'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeHits'];?>
</td>
	</tr>
    <?php endfor; endif; ?>
</table>
<br>
<div class="page-num">
<?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>

</div>
<br><br>
</div>




</div>
<script type="text/javascript">
//grid("名称","奇数行背景","偶数行背景","鼠标经过背景","点击后背景");
grid("grid","#fff","#F5F5F5","#FFFFCC","#0066CC");
</script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>

<?php }} ?>