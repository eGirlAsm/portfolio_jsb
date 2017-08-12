<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:26:59
         compiled from "./templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:204288754951bbcac6bfb5f5-67518408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd701c050746a5ee258b58a5bc4dd80a198b99e51' => 
    array (
      0 => './templates/header.html',
      1 => 1371263213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204288754951bbcac6bfb5f5-67518408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbcac6cd8215_70642490',
  'variables' => 
  array (
    'nav_menu' => 0,
    'sub_menu' => 0,
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbcac6cd8215_70642490')) {function content_51bbcac6cd8215_70642490($_smarty_tpl) {?>
<div class="row">
  <div class="top-menu-row">
    <div class="top-menu fr">
      <ul>
        <!--IF如果存在姓名<?php if ($_SESSION['username']){?>则-->
        <li class="first"><a href="userinfo.php?id=<?php echo $_SESSION['user_id'];?>
"><?php echo $_SESSION['username'];?>
&nbsp;님</a></li>
        <li><a href="logout.php">로그아웃</a></li>
        <!--否则<?php }else{ ?>-->
        <li class="first"><a href="login.php">로그인</a></li>
        <li><a href="register.php?page=1">회원가입</a></li>
        <!--结束IF<?php }?>-->
        <li><a href="#">회원클럽</a></li>
        <li><a href="#" onClick="window.external.addFavorite('http://www.moonyuan.com/jsbtour')" title="jsb투어">즐겨찾기</a></li>
        <li><a href="problem.php?">고객센터</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="header">
  <div class="row">
    <div class="logo fl"></div>
    
  </div>
</div>
<!-- /.header -->

<div class="main-menu">
  <div class="row">
    <ul id="nav">
      <li><a href="http://www.jsbtour.com">메인</a></li>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nav_menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> 
      <?php if ($_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['ischild']==0){?>
     
      <li rel="<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['menuID'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['linkurl'];?>
menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['menuID'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['menuTitle'];?>
</a>
       <?php if ($_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['subMenuCount']>0){?>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sub_menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['menuID']==$_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['parentID']){?>
          <li> <a href="<?php echo $_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['linkurl'];?>
&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['menuID'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['menuTitle'];?>
</a> </li>
          <?php }?>
          <?php endfor; endif; ?>
        </ul>
        <?php }?> </li>
      <?php }?>
      <?php endfor; endif; ?>
    </ul>
  </div>
  <!-- row --> 
  
  <!-- sub menu --> 
  
</div>
<!-- /.mian-menu --> 

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/common.js"></script> 
<?php }} ?>