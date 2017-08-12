<?php /* Smarty version Smarty-3.1.13, created on 2017-08-12 14:38:36
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:12381598ea26c372d19-54220958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1373091462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12381598ea26c372d19-54220958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_status' => 0,
    't_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598ea26c3d3a96_96183248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598ea26c3d3a96_96183248')) {function content_598ea26c3d3a96_96183248($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JSB투어 :: 북경여행,항공티켓,호텔예약</title>
<meta name="Keywords" content="">
<meta name="Description" content="">
 <!--判断是否登陆<?php if ($_smarty_tpl->tpl_vars['login_status']->value){?>--> 
<meta http-equiv="refresh" content="0;URL=index.php">
 <!--<?php }?>--> 
<!-- <?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
 -->
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/main_20130319.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/manhuaTip.1.0.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/ad_photo.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/form/form2.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/loginphoto.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row"> 
  <!--判断是否登陆<?php if ($_smarty_tpl->tpl_vars['login_status']->value){?>--> 
  <!-- <div class='msgbox_layer_wrap'><span id='mode_tips_v2' style='z-index: 10000;' class='msgbox_layer'><span class='gtl_ico_clear'></span>"<span class="gtl_ico_succ"></span>로그인에 성공하였습니다！"<span class='gtl_end'></span></span></div> -->
   
   <div style="height:500px;"></div>

  <!--结束<?php }else{ ?>-->
  <div id="login_main">
    <div id="login_main_border">
      <div id="member_login_main"> <span><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/loginlabel.gif" width="99" height="33"></span>
        <hr width="300px" align="left">
        <form name="formlogin" onSubmit="return checkForm();" action="login.php?act=login" method="post" style="margin-top:10px;">
          <span><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/img_th_id4.gif" width="62" height="25">
          <input  class="type_text1" name="username"  id="username" type="text" style="width:160px; height:20px;" >
          </span><br>
          <span><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/img_th_pw4.gif" width="62" height="25">
          <input class="type_text1" type="password"  name="password" id="password" type="text" style="width:160px; height:20px;" >
          </span><br>
          <span style="margin-left:63px;margin-top:5px;">
          <input id="idcheck" type="checkbox" value="1" name="idcheck">
          </input>
          아이디 저장</span><br>
          <p style="margin-left:20px;">(대소문자를 구분하여 주시기 바랍니다.)</p>
          <span style="margin-left:20px;">
          <input width="240" type="image" height="50" border="0" tabindex="3" alt="로그인" id="loginbutton" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/login.gif">
          </input>
          </span> 
          <script type="text/javascript">
	 
function checkForm()
{
  var usertext = document.formlogin.username.value;
  var password = document.formlogin.password.value;

  if(isNull(usertext)){
  	alert("아이디를 입력하세요");
	return false;
  }
    if(isNull(password)){
  	alert("비밀번호를 입력하세요");
	return false;
  }
}

function checkNomemForm(){
	   var nomemid = document.nomemloginform.nomemid.value;
   var nomememail = document.nomemloginform.nomememail.value;
   if(isNull(nomemid)){
	   	alert("아이디를 입력하세요");
	return false;
   }
      if(isNull(nomememail)){
	   	alert("이메일주소를 입력하세요");
	return false;
   }
       if(!isEmail(nomememail)){
	   	alert("정확한 이메일주소를 입력하세요");
	return false;
   }
  
   
}</script>
          <div class="find_idpw" style="float:left;margin-left:10px;"> <span style="float:left;"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/reg.gif" width="64" height="21" alt="회원가입"></a></span> <span style="margin-left:15px;float:left;"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/findid.gif" width="85" height="21" alt="아이디찾기"></a></span> <span style="margin-left:15px;float:left;"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/findpw.gif" width="85" height="21" alt="비밀번호찾기"></a></span> </div>
        </form>
      </div>
      <div id="nomember_login_main"> <span><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/loginnotmemlabel.gif" width="113" height="33"></span>
        <hr width="300px" align="left">
        <form name="nomemloginform" action="login.php?act=nomemlogin" method="post" onSubmit="return checkNomemForm();" style="margin-top:10px;">
          <span><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/img_th_name.gif" width="62" height="25"></span>
          <input  class="type_text1" name="username" id="nomemid" type="text" style="width:160px; height:20px;" >
          </span><br>
          <span><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/img_th_email.gif" width="62" height="25">
          <input class="type_text1" name="email" id="nomememail" type="text" style="width:160px; height:20px;" >
          </span><br>
          <p style="margin-left:30px;margin-top:5px;"> 회원가입 없이, 이름과 이메일주소만<br>
            입력하여 비회원가입/로그인이 가능합니다.</p>
          <span style="margin-left:20px;">
          <input width="240" type="image" height="50" border="0" tabindex="3" alt="비회원로그인" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/nomemberlogin.gif">
          </span>
        </form>
      </div>
    </div>
  </div>
  <div id="login_banner_border"><div class="banner"><div class="wrap"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gugu.jpg" width="304" height="300"></a>  <p class="banner-text">일생에 한번은 가야되는 여행！중국-수도</p></div></div></div>
  </div></div>
  
  <!--<?php }?>--> 
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>