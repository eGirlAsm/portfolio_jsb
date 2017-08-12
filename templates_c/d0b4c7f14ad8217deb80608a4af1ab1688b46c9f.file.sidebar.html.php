<?php /* Smarty version Smarty-3.1.13, created on 2017-08-12 14:37:53
         compiled from ".\templates\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:801598ea2419346d9-28037762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b4c7f14ad8217deb80608a4af1ab1688b46c9f' => 
    array (
      0 => '.\\templates\\sidebar.html',
      1 => 1373091462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '801598ea2419346d9-28037762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'sidebarMenu' => 0,
    'sub_menu' => 0,
    'pmenu_id' => 0,
    'nav_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598ea2419c3656_87119214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598ea2419c3656_87119214')) {function content_598ea2419c3656_87119214($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/calendar5.js"></script>

<div class = "row">
<div class =  "main_left">
  <div id="navigation" style="display:<?php echo $_smarty_tpl->tpl_vars['sidebarMenu']->value;?>
">
    <ul>
      <!-- CSS Tabs --> 
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['name'] = 'sdMenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sub_menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sdMenu']['total']);
?>
      <?php if ($_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuID']==$_smarty_tpl->tpl_vars['pmenu_id']->value){?>
      
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['linkurl'];?>
menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuTitle'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['subMenuCount']>0){?>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sub_menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parentID']==$_smarty_tpl->tpl_vars['pmenu_id']->value){?>
         
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['linkurl'];?>
&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['menuTitle'];?>
</a> 
          
              <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sub_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['menuID'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==152){?>
              <ul>
              <li><a href="oneday.php?&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuID'];?>
">베이징 1일 투어</a></li>
               <li><a href="twoday.php?&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuID'];?>
">베이징 1박2일</a></li>
                <li><a href="threeday.php?&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuID'];?>
">베이징 2박3일</a></li>
                <li><a href="fourday.php?&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['nav_menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sdMenu']['index']]['menuID'];?>
">베이징 3박4일</a></li>
              </ul>
              <?php }?>
          </li>
          
          <?php }?>
          
          
          
            <?php endfor; endif; ?>
        </ul>
      </li>
        <?php }?> 
      <?php }?>
      <?php endfor; endif; ?>
    </ul>
  </div>
  <div class ="main_calendar"> 
    <script type="text/javascript">
            <!--
            calendar();
            //-->
            </script> 
  </div>
  <!-- main_calendar -->
  
  <div class = "main_left2">
    <p class = "left_btn"><a href="notice.php?type=ask"></a></p>
  </div>
  <!-- main_left2 -->
  
  <div class = "main_left_content"> <img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/side-phone.jpg" width="199" height="400" alt="예약상담안내" /> </div>
  <!-- main_left_content -->
  <div class="main_left_content">
    <h1></h1>
    <table width="200" border="1">
      <tr>
        <td width="37"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/msn.gif" width="28" height="28" alt="메신저" /></td>
        <td width="59"><p class="left_content_email">xushihao120@hotmail.com</p></td>
        <td width="82">&nbsp;</td>
      </tr>
      <tr>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/nate.gif" width="28" height="28" alt="네트온" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/kakao.gif" width="28" height="28" alt="카카오톡" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
  <div class = "main_left_content1"> 
    <!-- ▧ 외환은행환율 -->
    <frameset framespacing="0" border="0" frameborder="NO" rows="0,*">
    <iframe scrolling="NO"  width="185" style="background-color:#f7f7f7; margin-left:7px;margin-top:8px;" height="163" vspace="0" hspace="0" marginwidth="0" border="0" frameborder="no" src="http://203.234.132.2/cgi-bin/fx1_1.cgi" > </iframe>
    </frameset>
  </div>
  <!-- main_left_money -->
  
  <div class ="main_left_content2">
    <h1></h1>
    <table width="200" >
      <tr>
        <td>날짜</td>
        <td>날씨</td>
        <td>최저온도</td>
        <td>최고온도</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
  <!-- main_left_weather -->
  
  <div class ="main_left_content3">

  </div>
  <!-- main_left_visitor --> 
  
</div>
<!-- /.main-left--> 
<?php }} ?>