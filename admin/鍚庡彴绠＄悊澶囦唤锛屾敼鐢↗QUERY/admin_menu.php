<?php
include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--演示内容开始-->
<style type="text/css">
.navbox{margin:30px auto;position:relative;width:340px;}
.navbox .mask{position:absolute;top:30px;left:-190px;}
.navbox h2{color:#900;margin:0 0 0 30px;height:40px;font-size:14px;}
/* sliderNav */
#sliderNav{font-size:14px;margin:30px 0 0 0;}
#sliderNav li.sliderTag h3,#sliderNav li.sliderTag a{display:block;width:180px;padding:5px 18px;margin:0 0 5px 0;}
#sliderNav li.sliderTag h3{color:#000;background:#eee;font-weight:normal;font-size:14px;}
#sliderNav li.sliderTag a{color:#999;background:#4B4B4B;border:1px solid #1a1a1a;text-decoration:none;}
#sliderNav li.sliderTag a:hover{color:#ffff66;}
</style>

<script type="text/javascript">
$(document).ready(function(){
	slide("#sliderNav", 25, 15, 180, .8);
});

function slide(navigation_id, pad_out, pad_in, time, multiplier){

	// 创建目标路径
	var list_elements = navigation_id + " li.sliderTag";
	var link_elements = list_elements + " a";

	// 启动定时器用于滑动动画
	var timer = 0;

	// 创建幻灯片动画的所有列表元素
	$(list_elements).each(function(i){
		$(this).css("margin-left","-210px");
		// 更新计时器
		timer = (timer*multiplier + time);
		$(this).animate({ marginLeft: "0" }, timer);
		$(this).animate({ marginLeft: "15px" }, timer);
		$(this).animate({ marginLeft: "0" }, timer);
	});

	// 创建的所有链接元素的悬停滑动效果	
	$(link_elements).each(function(i){
		$(this).hover(function(){
			$(this).animate({ paddingLeft: pad_out }, 180);
		},function(){
			$(this).animate({ paddingLeft: pad_in }, 180);
		});
	});

}
</script>
</head>
<body>
<div class="navbox">
	<h2>后台管理系统</h2>
	<ul id="sliderNav">
		<li class="sliderTag"><h3>基本信息</h3></li>
		<li class="sliderTag"><a href="http://www.jsfoot.com/">运行情况</a></li>
		<li class="sliderTag"><a href="http://www.jsfoot.com/jquery/">jquery 特效</a></li>
		<li class="sliderTag"><a href="http://www.jsfoot.com/js/">javascript特效</a></li>
		<li class="sliderTag"><a href="http://www.jsfoot.com/flash/">flash特效</a></li>
		<li class="sliderTag"><a href="http://www.jsfoot.com/css3/">div+css教程</a></li>
		<li class="sliderTag"><a href="http://www.jsfoot.com/html5/">html5教程</a></li>
	</ul>
</div><!--navbox end-->
<!--演示内容结束-->
</body>
</html>