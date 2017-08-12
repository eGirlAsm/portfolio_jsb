<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 12:02:40
         compiled from "./templates/hotelinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:139798682351bbd950b2f5c6-99049814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830a1f0dced692c1a0c3060f6fa4cf8a524cdc93' => 
    array (
      0 => './templates/hotelinfo.html',
      1 => 1371232266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139798682351bbd950b2f5c6-99049814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'price' => 0,
    'ko_name' => 0,
    'en_name' => 0,
    'stars' => 0,
    'address' => 0,
    'imagepath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd950c5cc64_75488610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd950c5cc64_75488610')) {function content_51bbd950c5cc64_75488610($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript">
$(function() {
	$('#smallImg img').mouseover(function() {
		$('#bigImg img').attr('src', $(this).attr('rel'));
		$('#bigImg p > a').text($(this).attr('alt'));
		$('#bigImg a').attr('href', $(this).parent().attr('href'));
	}) 
	$('#smallImg .img').hover(function() {
		$('.mask').fadeIn();
		$(this).children('.mask').hide();
	},
	function() {
		$('.mask').fadeIn();
	})
})
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="hotel_main">
  <div class="hotel_head">
    <div class="htl_info">
      <div class="price_box">
        <p class="staring_price"><span class="ico_box"> … </span><dfn>¥</dfn><span class="price"> <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 </span><span class="qi"> … </span> </p>
        <p class="mlt_price"></p>
      </div>
      <div class="name">
        <h2 class="ko_n"> <?php echo $_smarty_tpl->tpl_vars['ko_name']->value;?>
</h2>
        <h2 class="en_n"> <?php echo $_smarty_tpl->tpl_vars['en_name']->value;?>
 </h2>
      </div>
      <div class="grade"><span class="hotel_stars0<?php echo $_smarty_tpl->tpl_vars['stars']->value;?>
" title="4성 호텔"></span></div>
      <div class="adress"> <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 </div>
      <div class="icon_list"> … </div>
    </div>
    <!-- htl-info -->
    <div class="image_show clearfix">
      <div class="user_tabs">
        <div class="tabs_panes">
          <div style="display:block" class="tabs_con">
            <div class="img" id="bigImg"> <a href="#"><img height="205" width="303" alt="女人微单" src="uploads/<?php echo $_smarty_tpl->tpl_vars['imagepath']->value;?>
"></a>
              <div class="img_mask"></div>
              <p><a href="#">Hotel</a></p>
            </div>
          </div>
        </div>
        <div id="smallImg">
          <div class="col_left">
            <div class="img"> <a href="#"><img height="100" width="210" alt="Hotel" src="uploads/<?php echo $_smarty_tpl->tpl_vars['imagepath']->value;?>
" rel="uploads/<?php echo $_smarty_tpl->tpl_vars['imagepath']->value;?>
"></a>
              <div class="mask" style="width: 210px; height: 100px; display: block;"></div>
            </div>
            <div class="img"> <a href="#"><img height="100" width="125" alt="침대" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya1.jpg" rel="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya1.jpg"></a>
              <div class="mask" style="width: 125px; height: 100px; display: block;"></div>
            </div>
            <div class="img"> <a href="#"><img height="100" width="125" alt="침대" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya2.jpg" rel="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya2.jpg"></a>
              <div class="mask" style="width: 125px; height: 100px; display: block;"></div>
            </div>
          </div>
          <div class="col_right">
            <div class="r_top">
              <div class="img"> <a href="#"><img height="100" width="125" alt=" 객실" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya5.jpg" rel="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya5.jpg"></a>
                <div class="mask" style="width: 125px; height: 100px; display: block;"></div>
              </div>
              <div class="img"> <a href="#"><img height="100" width="125" alt="접대" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya6.jpg" rel="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya6.jpg"></a>
                <div class="mask" style="width: 125px; height: 100px; display: block;"></div>
              </div>
              <div class="img"> <a href="#"><img height="100" width="210" alt="접대" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya7.jpg" rel="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/boya7.jpg"></a>
                <div class="mask" style="width: 210px; height: 100px; display: block;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hotel_content">
    <section class="tabs">
      <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
      <label for="tab-1" class="tab-label-1">호텔소개</label>
      <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
      <label for="tab-2" class="tab-label-2">호텔예약</label>
      <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
      <label for="tab-3" class="tab-label-3">포토</label>
      <div class="clear-shadow"></div>
      <div class="content">
        <div class="content-1">
          <h2>호텔상세설명</h2>
          <p>왕징 보야 국제센터 내에 위치해 있는 보야 국제 레지던스는 156개의 객실을 보유하고 있는 비즈니스형 레지던스이다. <br>새로운 상업지구로서 각광받고 있는 왕징에 위치하고 있는 보야는 올림픽 경기장, 옌샤, 비즈니스 중심가와 가까운 거리이며 고속도로와 접해있어 차로 15분이면 공항에 도착할 수 있고 보야 국제 센터 오피스텔과 세계 500대 강대회사인 모토로라, 루슨트 테크놀러지, 소니, 에질런트, 삼성, LG 등과 인접해 있다. <br>현대식 소호형 국제적 분위기 감각의 보야 호텔은 만리장성, 이화원 등 유명 관광지를 가기에 용이한 위치이고 주변에 고급골프장도 있어 레저스포츠를 누리기에도 적합하여 비즈니스에도 적합하다</p>
          <h2>호텔부대시설</h2>
          <p>피트니스센터         수영장           레스토랑   환전써비스      커피숍       ATM자판기</p>
          <h2>객실시설</h2>
          <p>한국TV                   직통전화           미니바/냉장고 </p>
          <h2>호텔위치</h2>
          <p>(북경시 조양구 왕징 한국코리아 타운에 위치해있다.)<br>
            * 택시 – 베이징 국제 공항에서 호텔까지 15분 정도 소요 (대부분의 택시기사가 영문호텔이름을 모르므로 반드시 
            
            호텔의 중국이름과 전화번호를 적어가는 것이 좋다)
            * 리무진 버스 - 공항에서 왕징(望京)행 리무진 버스를 타고, 왕징화원서구(望京花园西区)에서 하차 후 택시로 이동 </p>
          <h2>호텔주변시설</h2>
          <p>* 수도공항 고속도로와 인접해 있음.
            * 한국인 밀집지역인 왕징에 위치해 있어 이용하기 편리함.
            * 올림픽 경기장과 근접해 있음.
            * 옌샤, 국제전람회장, 비즈니스 중심가와 근접해 있음.
            *  편이 마트
            *  까르푸
            *  음식점 
            *  롯테 마트</p>
        </div>
        <div class="content-2">
          <h2>예약쎈터</h2>
<table width="618" border="1">
  <tr>
    <th width="58" scope="row">객실종류</th>
    <td width="54">정상가격</td>
    <td width="54">할인가격</td>
    <td width="179">조식</td>
    <td width="179">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row"><strong>더블룸</strong></th>
    <td>518</td>
    <td>￥450원, ₩8만2천원</td>
    <td>포함</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row"><strong>트윈룸</strong></th>
    <td>558</td>
    <td>￥450원, ₩8만2천원</td>
    <td>포함</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row"><strong>호화룸</strong></th>
    <td>1200</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <TD><strong>￥원,₩만천원</strong></TD>
        <TD></TD>
      </tr>
    </table></td>
    <td>포함</td>
    <td>&nbsp;</td>
  </tr>
  </table>

        </div>
        <div class="content-3">
          <h2>Portfolio</h2>
          <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
          <h3>Examples</h3>
          <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
        </div>
      </div>
    </section>
  </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>