<?php
include_once ('admin_global.php');

$r=$db->Get_user_shell_check($uid, $shell);

if(isset($_POST[into_nav])){

	$IsChild = $_POST[parentid] ? 1 : 0;
	
	
	$db->query("INSERT INTO `p_menus`(`id`, `title`, `linkurl`, `target`, `subMenuCount`, `ischild`, `parentid`, `level`, `orders`) VALUES ('$_POST[sortid]','$_POST[title]','$_POST[linkurl]','$_POST[target]','0','$IsChild','$_POST[parentid]','0','0')");
	
	// set parentid submenucount;
	if($_POST[parentid])
	{
		$temp = mysql_query("SELECT * FROM `p_menus` WHERE `id` =  $_POST[parentid] ");
		$menuArray = mysql_fetch_array($temp);
		$subMenuCount = $menuArray[subMenuCount] + 1;
		echo "subMenuCount= ".$subMenuCount;
		$db->query("UPDATE `p_menus` SET `subMenuCount` = '$subMenuCount' WHERE `id` = $_POST[parentid]");
	}



	$db->Get_admin_msg("admin_menu_list.php","添加成功");
}

?>
<html>
<head>
<title>导航添加</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
* {
	font-size:13px;
	line-height:16px;
}
.b1, .b2, .div_title, .div_content {
	display:block;
	overflow:hidden;
	background:#6699ff;
}
.b2, .div_title, .div_content {
	border-left:1px solid blue;
	border-right:1px solid blue;
	background-image: url(images/title_bg2.jpg);
}
.b1, .b2 {
	height:1px;
}
.b1 {
	margin:0 1px;
	background:blue;
}
.b2 {
	margin:0 0px;
}
.div_title {
	color:#fff;
	font-weight:bold;
	padding:2px;
}
.div_content {
	padding-left:1px;
	padding-right:1px;
}
.content {
	background:#fff;
	border:1px solid blue;
	padding:2px;
}
#center {
	MARGIN-RIGHT: auto;
	MARGIN-LEFT: auto;
	vertical-align:middle;
}
table.gridtable {
	font-family: verdana, arial, sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #93C;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
.div_setContent {
	margin-left:20px;
	padding-bottom:20px;
	padding-top:20px;
}
.div_setContent label {
	font-size:14px;
	font-weight:bold;
	line-height:25px;
}
-->
</style>
</head>

<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TR height=28>
    <TD background=images/title_bg1.jpg>当前位置: 首页设置-导航添加</TD>
  </TR>
  <TR>
    <TD bgColor=#b1ceef height=1></TD>
  </TR>
  <TR height=20>
    <TD background=images/shadow_bg.jpg></TD>
  </TR>
</TABLE>
<div id = "center" style="width:80%"> <b class="b1"></b> <b class="b2"></b>
  <div class="div_title">导航添加</div>
  <div class="div_content">
    <div class="content">
      <div class="div_setContent">
        <form action="" method="post">
          <label>标题</label>
          <br>
          <input name="title" type="text" size="40" maxlength="20">
          <br>
          <label>导航父级设置</label>
          <br>
          <select name="parentid" >
            <option selected="selected" value="0">设置为1级导航</option>
				  <?php
        $query=mysql_query("SELECT * FROM `p_menus` WHERE 1");
        while ($row=mysql_fetch_array($query)) {
			if($row[ischild] == 0)
			{
				echo "<option value=\"$row[id]\">$row[title]-></option>";
				}
        }
        ?>
          </select>
          <br>
          <label>链接</label>
          <br>
          <input name="linkurl" type="text" size="80" maxlength="50">
          <br>
          <label>是否新窗口（新窗口_blank、原窗口_self）</label>
          <br>
          <select name="target" >
            <option selected="selected" value="_self" >&nbsp;_self&nbsp;</option>
            <option value="_blank">&nbsp;_blank&nbsp;</option>
           </select>
          <br>
          <label>排序</label>
          <br>
          <input name="sortid" type="text" size="10" maxlength="20">
          <br>
          <br>
          <input name="into_nav" type="submit" value="确定" >
        </form>
      </div>
    </div>
  </div>
  <!--<b class="b2"> </b><b class="b1"></b> -->
</div>
</body>
</html>