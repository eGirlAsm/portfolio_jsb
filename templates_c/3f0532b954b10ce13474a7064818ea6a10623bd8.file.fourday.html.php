<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 18:21:22
         compiled from "./templates/fourday.html" */ ?>
<?php /*%%SmartyHeaderCode:59147573151bbd8e1571c94-79506997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0532b954b10ce13474a7064818ea6a10623bd8' => 
    array (
      0 => './templates/fourday.html',
      1 => 1371460863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59147573151bbd8e1571c94-79506997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd8e168fc42_72619748',
  'variables' => 
  array (
    't_dir' => 0,
    'pmenu_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd8e168fc42_72619748')) {function content_51bbd8e168fc42_72619748($_smarty_tpl) {?><!DOCTYPE html>
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

<div class="daytour_wrraper3">
  <div class="title_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/bigtitlebg.jpg" width="785" height="130"></div>
  
  <div class="daytour_goodcos" style="text-align:center;color:#538035;">
    <h1 style="font-size:18px; font-weight:bold;margin-top:5px;">가고싶은투어 클릭하세요</h1>
    <ul><li><a href="oneday.php?menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/onedaytour.gif" width="150" height="88"></a><h5>
      베이징1일투어 (노쇼핑)
    </h5></li>
    <li><a href="twoday.php?menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/twodaytour.gif" width="150" height="88"></a><h5>
      베이징1박2일투어 (노쇼핑)
    </h5></li>
    <li><a href="threeday.php?menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/threedaytour.gif" width="150" height="88"></a><h5>
      베이징2박3일투어 (노쇼핑)
    </h5></li>
    <li><a href="fourday.php?menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/fourdaytour.gif" width="150" height="88"></a><h5>
      베이징3박4일투어 (노쇼핑)
    </h5></li>
  </ul></div>
  
  <div class="daytour_main">
    <div class="show_item">
      <div class="zoom-section">
        <div class="zoom-small-image"> <a href='<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/4daybig.jpg' class = 'cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4"><img  src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/4day.jpg" alt='' title="1일투어" /></a></div>
        <div class="zoom-desc">
          <p> <a href='<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/1daybig.jpg' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/1day.jpg' "><img class="zoom-tiny-image" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/1daysmall.jpg" alt = "Thumbnail 1"/></a> <a href='<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/2daybig.jpg' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/2day.jpg' "><img class="zoom-tiny-image" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/2daysmall.jpg" alt = "Thumbnail 2"/></a> <a href='<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/3daybig.jpg' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/3day.jpg' "><img class="zoom-tiny-image" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/3daysmall.jpg" alt = "Thumbnail 2"/></a> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="daytour_notice">
    <h1>베이징3박4일자유여행(노쇼핑) </h1>
    <table style="margin-left:50px;margin-right:50px;margin-top:20px;" width="317" border="1">
      <tr>
        <th width="99" scope="row">입장요금：</th>
        <td width="202"><span class="price">838</span>원/인</td>
      </tr>
      <tr>
        <th scope="row">진행시간：</th>
        <td>전 일 </td>
      </tr>
      <tr>
        <th scope="row">차량렌터：</th>
        <td>승용차 혹은 스타렉스</td>
      </tr>
      <tr>
        <th scope="row"><h3>투숙호텔：</h3></th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">제외사항：</th>
        <td>가이드 팁, 랜드카비용, 식사</td>
      </tr>
    </table>
  </div>
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
        <th scope="row"><p >제1일 </p>          <h3>&nbsp;</h3></th>
        <td><p >북경시내 </p></td>
        <td><p >오전(8&nbsp;&#8211;&nbsp;9)시경에&nbsp;한국에서&nbsp;출발 </p>
          <p >오전(9:30분&nbsp;-&nbsp;&nbsp;10:30분)&nbsp;경에&nbsp;&nbsp;북경공항도착 </p>
          <p >시내로이동&nbsp;&nbsp;정심식사&nbsp;후 </p>
          <p >1.&nbsp;&nbsp;이화원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1시30분&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;30원&nbsp;=&nbsp;&#8361;5,600원 </p>
          <p >2.&nbsp;&nbsp;중화민속촌&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1시30분&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;90원&nbsp;=&nbsp;&#8361;16,500원 </p>
          <p >3.&nbsp;&nbsp;서커스&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1시간&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;80원&nbsp;=&nbsp;&#8361;14,500원 </p>
          <p >저녁식사후 </p>
          <p >4.&nbsp;&nbsp;왕부정번화거리&nbsp;&nbsp;&nbsp;&nbsp;1시간&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;무&nbsp;&nbsp;료 </p>
        <p >21:00시&nbsp;호텔숙박</p></td>
        <td><p>조식:호텔식 </p>
          <p > </p>
          <p >중식:현지식 </p>
          <p >&nbsp;&nbsp;&nbsp;(자유식) </p>
          <p > </p>
          <p >석식:현지식 </p>
        <p >&nbsp;&nbsp;&nbsp;(자유식)</p></td>
      </tr>
      <tr>
        <th height="69" scope="row"><p >제2일 </p></th>
        <td><p >북경교외 </p></td>
        <td><p >8:30분&nbsp;&nbsp;호텔에서출발 </p>
          <p > </p>
          <p >1.&nbsp;&nbsp;용경협(전동카-편도포함)&nbsp;&nbsp;2시간&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;145원&nbsp;=&nbsp;&#8361;26,500원 </p>
          <p > </p>
          <p >2.&nbsp;&nbsp;팔달령만리장성&nbsp;&nbsp;&nbsp;&nbsp;1시간30분&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;125원&nbsp;=&nbsp;&#8361;23,000원 </p>
          <p >&nbsp;&nbsp;&nbsp;(케이블카&nbsp;왕복포함)&nbsp; </p>
          <p > </p>
        <p >저녁식사후&nbsp;21:00시에&nbsp;호텔숙박</p></td>
        <td><p >조식:호텔식 </p>
          <p > </p>
          <p >중식:현지식 </p>
          <p >&nbsp;&nbsp;&nbsp;(자유식) </p>
          <p > </p>
          <p >석식:현지식 </p>
        <p >&nbsp;&nbsp;&nbsp;(자유식)</p></td>
      </tr>
      <tr>
        <th height="94" scope="row"><p >제3일</p></th>
        <td><p >북경시내</p></td>
        <td><p >8:30분&nbsp;&nbsp;호텔에서출발 </p>
          <p > </p>
          <p >1.&nbsp;&nbsp;천안문광장&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;무&nbsp;&nbsp;료 </p>
          <p >2.&nbsp;&nbsp;자금성&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1시간20분&nbsp;입장요금:&nbsp;RMB&nbsp;60원&nbsp;=&nbsp;&#8361;12,000원 </p>
          <p >3.&nbsp;&nbsp;경산공원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;&nbsp;5원&nbsp;=&nbsp;&#8361;1,000원 </p>
          <p >정심식사후 </p>
          <p >4.&nbsp;&nbsp;인력거투어-코스&nbsp;&nbsp;&nbsp;1시10분&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;120원&nbsp;=&nbsp;&#8361;22,000원 </p>
        <p >5.&nbsp;&nbsp;금면왕조-A좌석&nbsp;&nbsp;&nbsp;&nbsp;60분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;180원&nbsp;=&nbsp;&#8361;32,000원 </p></td>
        <td><p >조식:호텔식 </p>
          <p > </p>
          <p >중식:현지식 </p>
          <p >&nbsp;&nbsp;&nbsp;(자유식) </p>
          <p > </p>
        <p >석식:기내식 </p></td>
      </tr>
      <tr>
        <th height="95" scope="row"><p >제4일</p></th>
        <td><p >북경시내</p></td>
        <td><p >8:30분&nbsp;&nbsp;호텔출발 </p>
          <p >1.&nbsp;&nbsp;전문대가고문화상업거리&nbsp;&nbsp;&nbsp;&nbsp;40분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;무&nbsp;&nbsp;료 </p>
          <p >2.&nbsp;&nbsp;슈수이&nbsp;짝통시장&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1시간30분&nbsp;&nbsp;&nbsp;&nbsp;무&nbsp;&nbsp;료 </p>
          <p >정심식사후 </p>
          <p >3.&nbsp;&nbsp;부국해저세계(수족관)&nbsp;&nbsp;&nbsp;40분&nbsp;&nbsp;&nbsp;입장요금:&nbsp;RMB&nbsp;90원&nbsp;=&nbsp;&#8361;16,500원 </p>
          <p >3.&nbsp;&nbsp;798예술거리&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40분&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;무&nbsp;료&nbsp; </p>
          <p > </p>
        <p >오후에&nbsp;공항으로&nbsp;이동</p></td>
        <td><p >조식:호텔식 </p>
          <p > </p>
          <p >중식:현지식 </p>
          <p >&nbsp;&nbsp;&nbsp;(자유식) </p>
          <p > </p>
        <p >석식:기내식 </p></td>
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
  <div class="daytour_other">
    <h2 class="top_title"><a href="free_walk.php?&amp;menuID=<?php echo $_smarty_tpl->tpl_vars['pmenu_id']->value;?>
">기타참고선택코스</a></h2>
    <div class="bx_wrap">
      <div class="bx_container">
        <ul id="daytour_pic_list">
          <li><a href="#"><img  alt="#" width="140" height="94" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gun1.jpg"><br/>
            천안문성루</a></li>
          <li><a href="#"><img  alt="#" width="140" height="94" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gun2.jpg"><br/>
            천안문광장</a></li>
          <li><a href="#"><img  alt="#" width="140" height="94" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gun3.jpg"><br/>
            조양 서커스 </a></li>
          <li><a href="#"><img  alt="#" width="140" height="94" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gun4.jpg"><br/>
            이화원</a></li>
          <li><a href="#"><img  alt="#" width="140" height="94" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gun5.jpg"><br/>
            인력거투어</a></li>
          <li><a href="#"><img  alt="#" width="140" height="94" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/gun6.jpg"><br/>
            자금성</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>