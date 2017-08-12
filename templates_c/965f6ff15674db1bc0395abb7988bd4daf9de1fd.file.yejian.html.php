<?php /* Smarty version Smarty-3.1.13, created on 2017-08-12 14:39:18
         compiled from ".\templates\yejian.html" */ ?>
<?php /*%%SmartyHeaderCode:17669598ea296163a12-44129250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '965f6ff15674db1bc0395abb7988bd4daf9de1fd' => 
    array (
      0 => '.\\templates\\yejian.html',
      1 => 1373091462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17669598ea296163a12-44129250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'pmenu_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598ea2961a40c7_74603939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598ea2961a40c7_74603939')) {function content_598ea2961a40c7_74603939($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/cloud-zoom.1.0.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/bxCarousel.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
js/daytour.js"></script>
<script type="text/javascript">
$(function(){
	$('#daytour_pic_list').bxCarousel({
		display_num: 5, 
		move: 1, 
		auto: true, 
		controls: false,
		margin: 10,
		auto_hover: true
	});
});
</script>


</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="day_tour_main">
<div  class="widget">
<h2>베이징 1일투어 일정</h2></div>

 <div class="day_tour_item">
 <ul>
  	<li class="mybox"><a class="imgview" href="oneday.php?menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/xinai.jpg" width="150" height="98"><p>
      
    베이징시내관광 (노쇼핑)</p></a></li>
    <li class="mybox"><a class="imgview" href="oneday.php?day_tour=jiaowai&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/jiaowai.jpg" width="150" height="98"><p>
      
   베이징교외관광 (노쇼핑) </p></a></li>
    <li class="mybox"><a class="imgview" href="oneday.php?day_tour=ziyou&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/ziyou_small.jpg" width="150" height="98"><p>
      
   베이징자유투어 (노쇼핑) </p></a></li>
    <li class="mybox"><a class="imgview" href="oneday.php?day_tour=yejian&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/yejian.jpg" width="150" height="98"><p>
      
   베이징야간투어 (노쇼핑) </p></a></li>
  </ul></div>
  <div style="margin-top:10px;width:785px;float:left;height:10px;"></div>
<hr style="width:785px;border:1 dashed #987cb9;float:left;" size=1>
<div style="margin-top:10px;width:785px;float:left;height:10px;"></div>

<div class="day_tour_content">
<div class="day_tour_img">
<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/yejian.jpg" width="420" height="314">
</div>

<div class="day_tour_info">
<h1> 베이징야간투어 (노쇼핑)</h1>
<div class="tour_detail"><span class="pl">입장요금: </span><span class="tour_data">189원</span></div>
<div class="tour_detail"><span class="pl">진행시간: </span><span class="tour_data"> 	전 일 </span></div>
<div class="tour_detail"><span class="pl">차&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;량: </span><span class="tour_data">승용차 혹은 스타렉스</span></div>
<div class="tour_detail"><span class="pl">제외사항: </span><span class="tour_data">가이드 팁, 랜드카비용, 식사</span></div>
</div>

<div class="day_tour_content_info">

 <div class="daytour_content">
    <table id="mytable" border="1">
      <tr>
        <th width="121" scope="row"><h3>관광 코스</h3></th>
        <td colspan="3"><span class="cos">
          <ul>
            <li class="first"><a href ="#s0">이화원</a></li>
            <li><a href ="#s1">인력거투어</a></li>
            <li><a href ="#s2">천안문광장</a></li>
            <li><a href ="#s3">경산공원</a></li>
            <li><a href ="#s4">금면왕조</a></li>
          </ul>
          </span></td>
      </tr>
      <tr>
        <th scope="row"><h3>시    간</h3></th>
        <td width="72" >지 역</td>
        <td width="730" >여 행 코 스</td>
        <td width="219" >식 사</td>
      </tr>
      <tr>
        <th scope="row"><h3>전  일</h3></th>
        <td><STRONG>시 내</STRONG></td>
        <td><p >8:30분&nbsp;&nbsp;호텔에서출발 </p>
          <p > </p>
          <p >1.&nbsp;&nbsp;이화원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1시30분&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;30원&nbsp;=&nbsp;&#8361;5,600원 </p>
          <p >2.&nbsp;&nbsp;인력거투어-코스&nbsp;&nbsp;1시10분&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;120원&nbsp;=&nbsp;&#8361;22,000원 </p>
          <p >3.&nbsp;&nbsp;천안문광장&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;무&nbsp;료 </p>
          <p >4.&nbsp;&nbsp;자금성&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1시20분&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;60원&nbsp;=&nbsp;&#8361;11,000원 </p>
          <p >5.&nbsp;&nbsp;경산공원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;&nbsp;5원&nbsp;=&nbsp;&#8361;1,000원 </p>
          <p >6.&nbsp;&nbsp;금면왕조-A좌석&nbsp;&nbsp;&nbsp;60분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;180원&nbsp;=&nbsp;&#8361;32,000원 </p>
          <p >식사후&nbsp;20:30분&nbsp;호텔숙박 </p></td>
        <td><p><STRONG>조식:</STRONG> 호텔식</p>
          <p><STRONG>중식:</STRONG> 자유선택</p>
          <p><STRONG>석식:</STRONG> 자유선택</p></td>
      </tr>
      <tr>
        <th scope="row"><h3>차    량</h3></th>
        <td colspan="3"><p>승용차:&nbsp;&nbsp;RMB&nbsp;550원/일&nbsp;=&nbsp;&#8361;100,000원&nbsp;&nbsp;&nbsp;(5인석)&nbsp;12시간&nbsp;기준 </p>
          <p >스타렉스:&nbsp;RMB&nbsp;650원/일&nbsp;=&nbsp;&#8361;12,000원&nbsp;&nbsp;&nbsp;&nbsp;(7인석)&nbsp;12시간&nbsp;기준 </p>
          <p >*&nbsp;기사&nbsp;겸&nbsp;가이드&nbsp;:&nbsp;&nbsp;차량비용&nbsp;+&nbsp;RMB&nbsp;200원=&nbsp;&#8361;40,000원&nbsp;추가&nbsp;&nbsp;입니다.</p></td>
      </tr>
      <tr>
        <th scope="row"><h3>가 이 드</h3></th>
        <td colspan="3"><p >RMB&nbsp;400원/일&nbsp;=&nbsp;&#8361;75,000원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12시간&nbsp;기준 </p>
          <p >RMB&nbsp;500원/일&nbsp;=&nbsp;&#8361;90,000원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14시간&nbsp;기준&nbsp;</p></td>
      </tr>
      <tr>
        <th scope="row">식사</th>
        <td colspan="3"><p >중식/한식/북한식&nbsp;등&nbsp;&nbsp;자유선택하셔서&nbsp;식당에서&nbsp;드시고&nbsp;직불결제&nbsp;하시면&nbsp;됩니다.</p></td>
      </tr>
      <tr>
        <th scope="row"><h3>기타사항</h3></th>
        <td colspan="3"><strong>위상일정은  고객님이 </strong><strong>의향대로 </strong><strong>코스을 </strong><strong>추가하시거나 </strong><strong>뺄수도있고 </strong><strong>다른코스로 </strong><strong>변경할수도</strong><strong>있습니다</strong><strong>.  모든일정은  고객님의  원하시는대로   진행이가능합니다.    (단독행사만진행합니다)</strong></td>
      </tr>
      <tr>
        <th scope="row"><h3>비    고</h3></th>
        <td colspan="3">위상여행일정의</strong><strong>가격은</strong><strong>참고</strong><strong>가격입니다. 예약시</strong><strong>재확인</strong><strong>부탁드립니다</strong><strong>.</strong>
          </p></td>
      </tr>
    </table>
  </div>
  
  
  

</div>



</div>


</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>