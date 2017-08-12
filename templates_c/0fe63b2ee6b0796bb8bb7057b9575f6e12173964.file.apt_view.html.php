<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 12:01:19
         compiled from "./templates/apt_view.html" */ ?>
<?php /*%%SmartyHeaderCode:54141207551bbd8ffc5f372-24737906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe63b2ee6b0796bb8bb7057b9575f6e12173964' => 
    array (
      0 => './templates/apt_view.html',
      1 => 1371232260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54141207551bbd8ffc5f372-24737906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    't_dir' => 0,
    'postid' => 0,
    'noticeTitle' => 0,
    'noticeCreated' => 0,
    'noticeAuthor' => 0,
    'noticeHits' => 0,
    'ko_name' => 0,
    'en_name' => 0,
    'phone' => 0,
    'email' => 0,
    'yudingri' => 0,
    'comment_info' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bbd8ffd6abb2_07442987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bbd8ffd6abb2_07442987')) {function content_51bbd8ffd6abb2_07442987($_smarty_tpl) {?><!DOCTYPE html>
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
<script>

    $(document).ready(function() {        //DOM的onload事件处理函数        
      $("#submit").click(function() {          //当按钮button被点击时的处理函数        
        postdata ();     //button被点击时执行postdata函数         
      });        
    });       
	
    function postdata() {                        
      $.ajax ({                                    
        type: "POST",                            //设置ajax方法提交数 据的形式        
        url: "comments.php",                    //把数 据提交到comments.php        
        data: "postid="+"<?php echo $_smarty_tpl->tpl_vars['postid']->value;?>
"+"&comments="+$("#editor_id").val(),      
        success: function(msg) {                  //提交成功后的回调   
    if (msg="ok"){   
      alert("回复 成功！")   
      $("#commentlist").append('<li id="comment" class="comment even thread-even depth-1"> … </li>')   
    }else{   
      alert("回复失败！ ")   
      }   
        }        
      });        
    }    

</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="notice">
  <div class="notice_title">
    <h1><?php echo $_smarty_tpl->tpl_vars['noticeTitle']->value;?>
</h1>
    <p class="ext"> 등록일:<?php echo $_smarty_tpl->tpl_vars['noticeCreated']->value;?>
     글쓴이:<?php echo $_smarty_tpl->tpl_vars['noticeAuthor']->value;?>
        조회수:<?php echo $_smarty_tpl->tpl_vars['noticeHits']->value;?>
 <a class="imp ico-copy" href="#share"></a><a class="imp ico-comm" href="#commenttop"></a></p>
  </div>
  <div class="notice_content"><p> * 한글이름:  <?php echo $_smarty_tpl->tpl_vars['ko_name']->value;?>
</p><p>* 영문이름:  <?php echo $_smarty_tpl->tpl_vars['en_name']->value;?>
</p><p>* 휴대폰:  <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</p><p>* 이메일: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

</p><br><br><p>* 여행예정일: <?php echo $_smarty_tpl->tpl_vars['yudingri']->value;?>
</p></div>
</div>
<div class="respond">
  <h3 class="base-tit">댓글</h3>
  <div class="comt"> <a id="cancel-comment-reply-link" href="">取消评论</a>
    <div class="comt-avatar"> <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/png.png" height="36" width="36"> </div>
    <div class="comt-box">
      <textarea class="comt-area" name="comment" id="editor_id" cols="100%" rows="7" tabindex="1" ></textarea>
      <div class="comt-ctrl">
        <input class="comt-submit" name="submit" id="submit" tabindex="5" value="덧글입력" type="submit"  style="margin-right:5px;">
      </div>
    </div>
  </div>
</div>
<div id="postcomments">
  <h3 id="comments" class="base-tit"> … </h3>
  <ol id="commentlist" class="commentlist">
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comment_info']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <li id="comment" class="comment even thread-even depth-1">
      <div class="c-floor"> <a href="#comment-16274"> #<?php echo $_smarty_tpl->tpl_vars['comment_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment_index'];?>
 </a> </div>
      <div class="c-avatar"> <img width="36" height="36" src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
images/png.png" alt=""></img></div>
      <div class="c-main">
        <p> <?php echo $_smarty_tpl->tpl_vars['comment_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
</p>
        <div class="c-meta"> <span class="c-author"> <?php echo $_smarty_tpl->tpl_vars['comment_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['author'];?>
 </span> <?php echo $_smarty_tpl->tpl_vars['comment_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['created'];?>
 <a class="comment-reply-link" href="#">답글</a></div>
      </div>
    </li>
 <?php endfor; endif; ?>
  </ol>
<div class="page-num">
<?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>