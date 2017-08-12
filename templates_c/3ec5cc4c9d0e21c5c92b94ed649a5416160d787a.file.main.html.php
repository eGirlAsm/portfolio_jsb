<?php /* Smarty version Smarty-3.1.13, created on 2017-08-12 14:37:53
         compiled from ".\templates\main.html" */ ?>
<?php /*%%SmartyHeaderCode:4934598ea2419f5266-16814612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec5cc4c9d0e21c5c92b94ed649a5416160d787a' => 
    array (
      0 => '.\\templates\\main.html',
      1 => 1373091462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4934598ea2419f5266-16814612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'notice' => 0,
    'paynotice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598ea241a9faf4_73085658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598ea241a9faf4_73085658')) {function content_598ea241a9faf4_73085658($_smarty_tpl) {?><link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main_20130319.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/ad_photo.js"></script>
<script type="text/javascript">
$(function(){

	$("img[original]").lazyload({ placeholder:"images/color3.gif" });
	
	$('.demo1').Tabs();
	$('.demo4').Tabs({
		event:'click'
	});
	$('.demo3').Tabs({
		timeout:300
	});
	$('.demo6').Tabs({
		auto:3000
	});
	$('.demo5').Tabs({
		event:'click',
		callback:lazyloadForPart
	});
	//部分区域图片延迟加载
	function lazyloadForPart(container) {
		container.find('img').each(function () {
			var original = $(this).attr("original");
			if (original) {
				$(this).attr('src', original).removeAttr('original');
			}
		});
	}
});	
</script>

<div class="div_content">
  <div class = "main_center">
    <div id="ifocus">
      <div id="ifocus_pic">
        <div id="ifocus_piclist" style="left:0; top:0;">
          <ul>
            <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/01.jpg" alt="jsb투어" /></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/02.jpg" alt="jsb투어" /></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/03.jpg" alt="jsb투어" /></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/04.jpg" alt="jsb투어" /></a></li>
          </ul>
        </div>
        <div id="ifocus_opdiv"></div>
        <div id="ifocus_tx">
          <ul>
            <li class="current">천 안 문</li>
            <li class="normal">골  프</li>
            <li class="normal">금 면 왕 조</li>
            <li class="normal">북경 만리장성 d4</li>
          </ul>
        </div>
      </div>
      <div id="ifocus_btn">
        <ul>
          <li class="current"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/btn_01.jpg" alt="" /></li>
          <li class="normal"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/btn_02.jpg" alt="" /></li>
          <li class="normal"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/btn_03.jpg" alt="" /></li>
          <li class="normal"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/btn_04.jpg" alt="" /></li>
        </ul>
      </div>
    </div>
    <!-- ifocus -->
    <div class="main_center_news">
      <ul id="test1_li_now_">
        <li class="now"><a href ="#" >공지사항</a></li>
        <li><a href ="#" >여행지식</a></li>
        <li><a href ="#" >질문답변</a></li>
        <li><a href ="#" >여행후기</a></li>
        <li><a href ="#" >토론방</a></li>
      </ul>
    </div>
    <div>
      <div id="test1_1" class="tablist block"> <span>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = (int)8;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['noticeType']==1){?>
          <li>
            <div class="cb_r1time"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['noticeTime'];?>
</div>
            <div class="cb_r1t"><a href="view.php?postid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['noticeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['noticeTitle'];?>
</a></div>
            <div class="cb_r1n"> <?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['noticeAuthor'];?>
 </div>
          </li>
          <?php }?>
          <?php endfor; endif; ?>
        </ul>
        </span> </div>
      <div id="test1_2" class="tablist"> <span>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['know'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['know']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['name'] = 'know';
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['max'] = (int)8;
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['know']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['know']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['know']['total']);
?>
          
          <?php if ($_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['know']['index']]['noticeType']==2){?>
          <li>
            <div class="cb_r1time"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['know']['index']]['noticeTime'];?>
</div>
            <div class="cb_r1t"><a href="view.php?postid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['know']['index']]['noticeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['know']['index']]['noticeTitle'];?>
</a></div>
            <div class="cb_r1n"> <?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['know']['index']]['noticeAuthor'];?>
 </div>
          </li>
          <?php }?>
          <?php endfor; endif; ?>
        </ul>
        </span> </div>
      <div id="test1_3" class="tablist"> <span>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ask'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['name'] = 'ask';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['max'] = (int)8;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ask']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ask']['index']]['noticeType']==3){?>
          <li>
            <div class="cb_r1time"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ask']['index']]['noticeTime'];?>
</div>
            <div class="cb_r1t"><a href="view.php?postid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ask']['index']]['noticeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ask']['index']]['noticeTitle'];?>
</a></div>
            <div class="cb_r1n"> <?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ask']['index']]['noticeAuthor'];?>
 </div>
          </li>
          <?php }?>
          <?php endfor; endif; ?>
        </ul>
        </span> </div>
      <div id="test1_4" class="tablist"> <span>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['report'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['report']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['name'] = 'report';
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['max'] = (int)8;
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['report']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['report']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['report']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['report']['index']]['noticeType']==4){?>
          <li>
            <div class="cb_r1time"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['report']['index']]['noticeTime'];?>
</div>
            <div class="cb_r1t"><a href="view.php?postid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['report']['index']]['noticeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['report']['index']]['noticeTitle'];?>
</a></div>
            <div class="cb_r1n"> <?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['report']['index']]['noticeAuthor'];?>
 </div>
          </li>
          <?php }?>
          <?php endfor; endif; ?>
        </ul>
        </span> </div>
      <div id="test1_5" class="tablist"> <span>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['talk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['talk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['name'] = 'talk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['talk']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['talk']['index']]['noticeType']==5){?>
          <li>
            <div class="cb_r1time"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['talk']['index']]['noticeTime'];?>
</div>
            <div class="cb_r1t"><a href="view.php?postid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['talk']['index']]['noticeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['talk']['index']]['noticeTitle'];?>
</a></div>
            <div class="cb_r1n"> <?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['talk']['index']]['noticeAuthor'];?>
 </div>
          </li>
          <?php }?>
          <?php endfor; endif; ?>
        </ul>
        </span> </div>
    </div>
    <div class="main_center_show_1">
      <div class="box demo4">
        <ul class="tab_menu">
          <li class="current"><a href="#s7">여행일정</a></li>
          <li><a href="#s0">볼 거 리</a></li>
          <li><a href="#s1">먹 거 리</a></li>
          <li><a href="#s2">마 사 지</a></li>
          <li><a href="#s3">온  천</a></li>
          <li><a href="#s4">사 우 나</a></li>
          <li><a href="#s5">노 래 방</a></li>
          <li><a href="#s6">스 키 장</a></li>
        </ul>
        <div class="tab_box">
          <div>
            <div class="BestHit">
              <p class="BestThumb"><span class="BestIcon">TourBest</span><a href="threeday.php?&menuID=101"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/3dayhomepage.jpg" alt="베이징 2박3일 최고의여행!" height="147" width="250"></a></p>
              <span class="IcoSet"></span>
              <p class="ProductName"><a href="threeday.php?&menuID=101"><strong>베이징2박3일자유여행 (노쇼핑)</strong><span>2박3일 거이다 맛보는 중국수도!<br>북경/베이징을 여행으로 선택했을때 몇일이면 좋을가? <br>바로 2박3일!</span></a></p>
              <p class="price"><strong>입장권 630원~</strong></p>
            </div>
            <ul class="ProductList">
              <li>
                <p class="thumbImg"><a href="oneday.php?menuID=101"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/xinai_small.jpg" alt="[1일투어] 베이징시내관광 (노쇼핑)" height="61" width="81"></a></p>
                <p class="ListSort" ><a href="oneday.php?menuID=101"><strong style="font-weight:bold;">[1일투어] 베이징시내관광 (노쇼핑)</strong><span> 이화원  인력거투어-코스  천안문광장  자금성 경산공원 금면왕조-A좌석</span><span class="price"><strong>499,000원~</strong></span></a></p>
              </li>
              <li>
                <p class="thumbImg"><a href="oneday.php?day_tour=jiaowai&amp;menuID=101"><img width="81" height="61" alt=" [1일투어] 베이징교외관광 (노쇼핑)" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/jiaowai_small.jpg"></img></a></p>
                <p class="ListSort"><a href="oneday.php?day_tour=jiaowai&amp;menuID=101"><strong style="font-weight:bold;"> [1일투어] 베이징교외관광 (노쇼핑)</strong><span> 피에르롯티찻집에서 여유로운 차한잔, 특식 3회 이상 제공, 특급2박 이상 호텔숙박의 편안한 일정입니다. </span><span class="price"><strong> 1,590,000원~ </strong></span></a></p>
              </li>
              <li>
                <p class="thumbImg"><a href="oneday.php?day_tour=ziyou&amp;menuID=101"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/ziyou_small.jpg" alt="[1일투어] 베이징자유투어 (노쇼핑)" height="61" width="81"></a></p>
                <p class="ListSort"><a href="oneday.php?day_tour=ziyou&amp;menuID=101"><strong style="font-weight:bold;">[1일투어] 베이징자유투어 (노쇼핑)</strong><span>일본 온천여행의 진수를 맛볼 수 있는 여행으로, 지옥온천을 순례하며 온천의 나라 일본을 즐기실 수 있습니다.</span><span class="price"><strong>549,000원~</strong></span></a></p>
              </li>
              <li>
                <p class="thumbImg"><a href="oneday.php?day_tour=yejian&amp;menuID=101"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/yejian_small.jpg" alt="[1일투어] 베이징야간투어 (노쇼핑)" height="61" width="81"></a></p>
                <p class="ListSort"><a href="oneday.php?day_tour=yejian&amp;menuID=101"><strong style="font-weight:bold;">[1일투어] 베이징야간투어 (노쇼핑)</strong><span>괌 PIC 골드상품으로 석식 1회가 불포함된 상품입니다. 룸 업그레이드 반값, 선셋 BBQ, 지바나 스파 할인의 특전도 누리실 ...</span><span class="price"><strong>779,000원~</strong></span></a></p>
              </li>
            </ul>
          </div>
       
          <div class="hide">
  ㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹ
          </div>
          <div class="hide">
            
 ㅁㄴㅇㄻㄴㅇㄻㄴㅇㄹ
          </div>
        </div>
      </div>
    </div>
    <div class="main_center_show_2">
      <div class="center_show_2_menu">
        <ul>
          <li id="first_nobold" class ="on"><a href ="#s0">북경정보</a></li>
          <li><a href ="#s1">정  치</a></li>
          <li><a href ="#s2">역  사</a></li>
          <li><a href ="#s3">문  화</a></li>
          <li><a href ="#s4">예  술</a></li>
          <li><a href ="#s5">지  도</a></li>
          <li><a href ="#s6">교  통</a></li>
          <li><a href ="#s7">학  교</a></li>
          <li><a href ="#s8">은  행</a></li>
          <li><a href ="#s9">병  원</a></li>
          <li><a href ="#s10">박 물 관</a></li>
          <li><a href ="#s11">쇼핑센터</a></li>
          <li><a href ="#s12"> 귀국선물</a></li>
        </ul>
       
      </div>
      
       <div class="opcast_article">
       <h4>
       <a href="#">
      북경 대표건물 정보,3000년 역사를 지닌 대국!
    </a></h4>
    <ul class="th_lst">
    <li><a class="th_a" target="_blank" href="#"><img width="179" height="100" title="일상에서도 화보 찍네" alt="일상에서도 화보 찍네" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/birdbj.jpg"></img><span class="th_tit">북경 올림픽경기장</span></a>
    </li>
    
    <li><a class="th_a" target="_blank" href="#"><img width="179" height="100" title="사심이 가득한데?" alt="사심이 가득한데?" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gugong.jpg"></img><span class="th_tit">북경 고궁</span></a>
    </li>
    
    <li><a class="th_a" target="_blank" href="#"><img width="179" height="100" title="사심이 가득한데?" alt="사심이 가득한데?" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/tiananmen.jpg"></img><span class="th_tit">북경 천안문광장</span></a></li>
    
    <li><a class="th_a" target="_blank" href="#"><img width="179" height="100" title="사심이 가득한데?" alt="사심이 가득한데?" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/changcheng.jpg"></img><span class="th_tit">만리장성</span></a></li>
    
   
    </ul>
   	    </div>
      
    </div>
  </div>
  <!-- ./main-center-->
<script type="text/javascript">
$(document).ready(function(){
  $(".center_show_2_menu a").click(function(){
  $(".center_show_2_menu li").removeClass("on");
  $(this).parent(this).addClass("on");
  });
});
</script>

  
  <div class="main_right">
    <div class="main_air">
      <div id=con>
        <ul id=tags>
          <li class=selectTag><a onClick="selectTag('tagContent0',this)" href="javascript:void(0)">실시간 항공</a> </li>
          <li><a onClick="selectTag('tagContent1',this)" href="javascript:void(0)">국제선</a> </li>
          <li><a onClick="selectTag('tagContent2',this)" href="javascript:void(0)">특가항공</a> </li>
        </ul>
        <div id=tagContent>
          <div class="tagContent  selectTag" id=tagContent0>
            
          </div>
          <div class=tagContent id=tagContent1>국제선항공권은 상담문의 하시기 바랍니다</div>
          <div class=tagContent id=tagContent2>국제선항공권은 상담문의 하시기 바랍니다</div>
        </div>
      </div>
    </div>
    <div class="main_right_notice">
      <div class="payuserlist">
  <h2><div  class = "div_more"><a href="payuser.php?">더보기 +</a></div></h2>
        <ul>
         <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['paynotice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = (int)8;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max']);
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
        
          <li class="top"> <em><?php echo $_smarty_tpl->tpl_vars['paynotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeCreated'];?>
</em>
            <p><a href="payuserview.php?postid=<?php echo $_smarty_tpl->tpl_vars['paynotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeId'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['paynotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeTitle'];?>
</a></p>
            <span class="num"><?php echo $_smarty_tpl->tpl_vars['paynotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['noticeAuthor'];?>
</span> </li>
 <?php endfor; endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- 	 main_right	--> 
  
</div>
<!-- div_content --> 

<script>
			var today_recom={
					step:42,
					totalcount:6,
					a_pre:"",
					a_next:"",
					ul:'ul_recom'
				};
	
				var indexrecom={					
					bigpic:"switchbigpic",	//大图div之id通用部分	
					step:223,
					smallpic:"switchsmapic",//小图之id通用部分		
					selectstyle:"curra",	//小图被选中之后的css
					pictxt:"",	//配套图片文字
					totalcount:6,					//图片数量	
					autotimeintval:6000,
					objname:"indexrecom"	//对象名称		
				} ;	
			</script><?php }} ?>