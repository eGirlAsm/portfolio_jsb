<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 11:59:08
         compiled from "./templates/register.html" */ ?>
<?php /*%%SmartyHeaderCode:123356954851bbd87c093620-18513437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3bbc729525c73dc58ce941a1a87c5c1ca618ed3' => 
    array (
      0 => './templates/register.html',
      1 => 1371232276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123356954851bbd87c093620-18513437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'register_status' => 0,
    't_dir' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd87c167db8_02041486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd87c167db8_02041486')) {function content_51bbd87c167db8_02041486($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JSB투어 :: 북경여행,항공티켓,호텔예약</title>
<meta name="Keywords" content="">
<meta name="Description" content="">
 <!--判断是否登陆<?php if ($_smarty_tpl->tpl_vars['register_status']->value){?>--> 
<meta http-equiv="refresh" content="3;URL=index.php">
 <!--<?php }?>--> 
<!-- <?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
 -->

<link rel="stylesheet" type="text/css" href="easyui/themes/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="easyui/demo/demo.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/niceforms-default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/main_20130319.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/manhuaTip.1.0.css" rel="stylesheet" type="text/css" />
<style type="text/css">
input {
	height: 20px;
}
.easyui-datebox {
}
</style>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/form/form2.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/ad_photo.js"></script>
<script type="text/javascript" src="easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="easyui/niceforms.js"></script>
<!--[if IE]>
<style>/*此样式用于radio/checkbox后面的label在ie下可能不正常*/
.opt { padding-left: 8px; }
</style>
<![endif]-->
<script>
imagesPath = "<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/";// niceforms图片资源的路径
</script>
<script type="text/javascript">

var isok = false;

$(document).ready(function(){
	
 $("#username").live("blur",function() { 
 
 	if(!isok){
	 // alert('nameInVal已失去焦点'); 
	  isok = true;
	}
	  
	  
	  }); 
});
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">

<!--判断是否注册成功<?php if ($_smarty_tpl->tpl_vars['register_status']->value){?>-->
<br>
<div class="tip_window" style="width:300px;margin-left:200px;height:150px;margin-top:50px; background:#066;color:#FFF:font-size:14px;font-weight:bold;"><h1 align="center"><div class="aui_iconBg" style="background: url("<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/succeed.png") repeat scroll 0% 0% transparent;"></div>회원가입에 성공하였습니다！<br><a href="index.php">메인으로가기</a><br>2초후에 처음페지로 넘어갑니다.</h1></div>
<br>

<!--结束<?php }else{ ?>-->
<div class="register-window">
<div class="demo-tip icon-tip" style="margin:30px;"></div>
<div style="font-size:12px;margin:30px;background:#FFFEE6;color:#8F5700;">이미 가입된 멤버이시면 여기서 <a href="login.php?">로그인</a>하시기 바랍니다.<br>
  -고객님의 소중한 신상 정보는 회원관리와 여행에 필요한 정보에만 사용됨니다. </div>
<div class="wrapper">
<form action="?page=3" method="post" id="registerform">
<div style="text-align:center;font-size:14px;color:#F00;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</div>
<table class="qna_write" width="730" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="110" style="font-size:18px;">아이디</th>
    <td width="573"><input name="username" type="text" id="username" style="height:30px;font-size:14px;font-weight:bold;text-align:center;"  /></td>
  </tr>
  <tr>
    <th style="font-size:18px;">패스워드</th>
    <td ><input name="pw1" type="password" id="pw1"  maxlength="40" style="height:30px;font-size:14px;font-weight:bold;"/>
      <span style="margin-left:10px;font-size:18px;">재확인
      <input name="pw2" type="password" id="pw2" maxlength="20" style="margin-left:15px;height:30px;font-size:14px;font-weight:bold;"/>
      </span></td>
  </tr>
  <tr>
    <th width="110" style="font-size:18px;">이 름</th>
    <td width="573"><input name="truename" type="text" id="truename" style="height:30px;font-size:14px;font-weight:bold;text-align:center;"/>
      ※ 이름과 이메일로 아이디 및 패스워드를 찾을수 있습니다. </td>
  </tr>
  <tr>
    <th style="font-size:18px;">이메일</th>
    <td><input type="text" name="email" id="email" style="height:30px;font-size:14px;font-weight:bold;text-align:center;width:300px;"/></td>
  </tr>
  <tr>
    <th style="font-size:18px;">핸드폰</th>
    <td><input type="text" name="mobile" id="mobile" style="height:30px;font-size:14px;font-weight:bold;text-align:center;"/>
      ※ 연락을 줄수있는 전화번호이면 됩니다.</td>
  </tr>
  <!--<tr>
              <th>전화</th>
              <td><input type="text" name="tel" id="tel"/></td>
            </tr>-->
  
  <tr>
    <th style="font-size:18px;">생년월일</th>
    <td><input name="birthday" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser" type="text" id="birthday" />
      예: 1111년01월01일 1111-01-01</td>
  </tr>
  <tr>
    <th style="font-size:18px;">성 별</th>
    <td style="font-size:18px;"><label style="color:#000;">
        <input  type="radio" name="sex" value="남" checked />
        남</label>
      <label style="margin-left:30px;color:#000;">
        <input type="radio" name="sex" value="여" />
        여</label></td>
  </tr>
  <!--<tr>
              <th colspan="2">2765
                <input name="textfield7" type="text" id="textfield7" size="4" />
                왼쪽의 글자를 순서대로 입력하세요~!</th>
            </tr>-->
</table>
</div>
<div class="ok_button" style="width:785px;margin-bottom:10px;" > <a href="#" onclick="reguser();" class="button blue" style="width:180px;font-size:14px; font-weight:bold;margin-left:260px;text-align:center;height:40px;line-height:40px;">회원가입 ></a> </div>
</div>
</div>
</div>

<!--<?php }?>-->

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<script type="text/javascript">
		function myformatter(date){
			var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
		}
		function myparser(s){
			if (!s) return new Date();
			var ss = (s.split('-'));
			var y = parseInt(ss[0],10);
			var m = parseInt(ss[1],10);
			var d = parseInt(ss[2],10);
			if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
				return new Date(y,m-1,d);
			} else {
				return new Date();
			}
		}
		
		function reguser(){
			document.getElementById("registerform").submit();
			}
	</script>
</body>
</html>
<?php }} ?>