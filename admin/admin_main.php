<?php
include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);

if($_GET[action]=='logout')$db->Get_user_out();

 $query=$db->findall("p_config");
 while($row=$db->fetch_array($query)){
 	$row_arr[$row[name]]=$row[values];
 }


 if(isset($_POST['update'])){
 	unset($_POST['update']);
 	foreach($_POST as $name=>$values){
 		$db->query("update p_config set `values`='$values' where `name`='$name'");
 	}
 	$db->Get_admin_msg("admin_main.php");
 }

 function has_child($id){
	$rs = mysql_query("select count(*) from p_systemmenu where parentid=$id");
	$row = mysql_fetch_array($rs);
	return $row[0] > 0 ? true : false;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Full Layout - jQuery EasyUI Demo</title>
<link rel="stylesheet" type="text/css" href="../easyui/themes/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<style type="text/css">
body {
	font: 12px/20px "微软雅黑", "宋体", Arial, sans-serif, Verdana, Tahoma;
	padding: 0;
	margin: 0;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0066CC;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.cs-north {
	height: 60px;
	background: #B3DFDA;
}
.cs-north-bg {
	width: 100%;
	height: 100%;
	background: url(../easyui/themes/gray/images/header_bg.png) repeat-x;
}
.cs-north-logo {
	height: 40px;
	padding: 15px 0px 0px 5px;
	color: #fff;
	font-size: 22px;
	font-weight: bold;
	text-decoration: none
}
.cs-west {
	width: 200px;
	padding: 0px;
	border-left: 1px solid #99BBE8;
}
.cs-south {
	height: 25px;
	background: url('../easyui/themes/gray/images/panel_title.gif') repeat-x;
	padding: 0px;
	text-align: center;
}
.cs-navi-tab {
	padding: 5px;
}
.cs-tab-menu {
	width: 120px;
}
.cs-home-remark {
	padding: 10px;
}
.cs-menu-pList {
	margin-left: 10px;
}
</style>
<script type="text/javascript">

function addTab(title, url){
	if ($('#tabs').tabs('exists', title)){
		$('#tabs').tabs('select', title);//选中并刷新
		var currTab = $('#tabs').tabs('getSelected');
		var url = $(currTab.panel('options').content).attr('src');
		if(url != undefined && currTab.panel('options').title != 'Home') {
			$('#tabs').tabs('update',{
				tab:currTab,
				options:{
					content:createFrame(url)
				}
			})
		}
	} else {
		var content = createFrame(url);
		$('#tabs').tabs('add',{
			title:title,
			content:content,
			closable:true,
					tools:[{  
					iconCls:'icon-mini-refresh',  
					handler:function(){  
					  addTab(title, url);//refresh tab
 					}  
				}] 
		});
	}
	tabClose();
}
function createFrame(url) {
	var s = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
	return s;
}
		
function tabClose() {
	/*双击关闭TAB选项卡*/
	$(".tabs-inner").dblclick(function(){
		var subtitle = $(this).children(".tabs-closable").text();
		$('#tabs').tabs('close',subtitle);
	})
		/*为选项卡绑定右键*/
	$(".tabs-inner").bind('contextmenu',function(e){
		$('#mm').menu('show', {
			left: e.pageX,
			top: e.pageY
		});

		var subtitle =$(this).children(".tabs-closable").text();

		$('#mm').data("currtab",subtitle);
		$('#tabs').tabs('select',subtitle);
		return false;
	});
}		

//绑定右键菜单事件
function tabCloseEven() {
	//刷新
	$('#mm-tabupdate').click(function(){
		var currTab = $('#tabs').tabs('getSelected');
		var url = $(currTab.panel('options').content).attr('src');
		if(url != undefined && currTab.panel('options').title != '服务器状态') {
			$('#tabs').tabs('update',{
				tab:currTab,
				options:{
					content:createFrame(url)
				}
			})
		}
	})
	//关闭当前
	$('#mm-tabclose').click(function(){
		var currtab_title = $('#mm').data("currtab");
		$('#tabs').tabs('close',currtab_title);
	})
	//全部关闭
	$('#mm-tabcloseall').click(function(){
		$('.tabs-inner span').each(function(i,n){
			var t = $(n).text();
			if(t != '服务器状态') {
				$('#tabs').tabs('close',t);
			}
		});
	});
	//关闭除当前之外的TAB
	$('#mm-tabcloseother').click(function(){
		var prevall = $('.tabs-selected').prevAll();
		var nextall = $('.tabs-selected').nextAll();		
		if(prevall.length>0){
			prevall.each(function(i,n){
				var t=$('a:eq(0) span',$(n)).text();
				if(t != '服务器状态') {
					$('#tabs').tabs('close',t);
				}
			});
		}
		if(nextall.length>0) {
			nextall.each(function(i,n){
				var t=$('a:eq(0) span',$(n)).text();
				if(t != '服务器状态') {
					$('#tabs').tabs('close',t);
				}
			});
		}
		return false;
	});
	//关闭当前右侧的TAB
	$('#mm-tabcloseright').click(function(){
		var nextall = $('.tabs-selected').nextAll();
		if(nextall.length==0){
			//msgShow('系统提示','后边没有啦~~','error');
			alert('后边没有啦~~');
			return false;
		}
		nextall.each(function(i,n){
			var t=$('a:eq(0) span',$(n)).text();
			$('#tabs').tabs('close',t);
		});
		return false;
	});
	//关闭当前左侧的TAB
	$('#mm-tabcloseleft').click(function(){
		var prevall = $('.tabs-selected').prevAll();
		if(prevall.length==0){
			alert('到头了，前边没有啦~~');
			return false;
		}
		prevall.each(function(i,n){
			var t=$('a:eq(0) span',$(n)).text();
			$('#tabs').tabs('close',t);
		});
		return false;
	});

	//退出
	$("#mm-exit").click(function(){
		$('#mm').menu('hide');
	})
}

$(function() {
	tabCloseEven();
		$('.cs-navi-tab').click(function() {
		var $this = $(this);
		var href = $this.attr('src');
		var title = $this.text();
		addTab(title, href);
	});
});
</script>
</head>
<body class="easyui-layout">
<div data-options="region:'north',border:false" border="true" class="cs-north">
  <div class="cs-north-bg">
    <div class="cs-north-logo">eGirlAsm 后台管理系统 2013.5.12</div>
  </div>
</div>
<div data-options="region:'west',split:true,title:'您好,黄恩龙！'" class="cs-west">
  <div class="easyui-accordion" >
     	<?php
    $query=$db->query("SELECT * FROM `p_systemmenu`");
   while ($row = $db->fetch_array($query)) {
   ?>
   		<div title="<?php if($row[parentid] == 0) echo $row[strMenu]?>">
        <?php if(has_child($row[id])) {?>
        
        	    	<?php
    $sub_query=$db->query("SELECT * FROM `p_systemmenu`");
   while ($sub_row = $db->fetch_array($sub_query)) {
	   if($sub_row[parentid] == $row[id]){
   ?>
        	<p class="cs-menu-pList"> <a href="javascript:void(0);" src="<?php echo $sub_row[linkurl] ?>" class="cs-navi-tab"><?php echo $sub_row[strMenu] ?></a></p> 
            
        <?php }}} ?>     
        </div>
<?php
}
?>
  </div>
</div>

<div data-options="region:'center'" id="mainPanle" >
  <div id="tabs" class="easyui-tabs"  fit="true" border="false" >
    <div title="服务器状态">
      <div class="cs-home-remark">
        <h1>jQuery EasyUI 1.2.6 Demo</h1>
        <br>
      </div>
    </div>
  </div>
</div>

<div data-options="region:'south',border:false" class="cs-south">eGirlAsm 通用后台管理系统</div>

	<div id="mm" class="easyui-menu cs-tab-menu">
		<div id="mm-tabupdate">刷新</div>
		<div class="menu-sep"></div>
		<div id="mm-tabclose">关闭</div>
		<div id="mm-tabcloseother">关闭其他</div>
		<div id="mm-tabcloseall">关闭全部</div>
	</div>

</body>
</html>
