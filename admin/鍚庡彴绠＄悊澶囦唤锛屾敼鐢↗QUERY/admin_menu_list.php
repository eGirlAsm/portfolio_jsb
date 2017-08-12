<?php
include_once ('admin_global.php');

$r=$db->Get_user_shell_check($uid, $shell);

if(isset($_GET[del]))
{
	mysql_query("DELETE FROM `p_menus` WHERE `id` = '$_GET[del]' LIMIT 1;");
	$db->Get_admin_msg("admin_menu_list.php","删除成功");
		
}



?>
<html>
<head>
<title>导航列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
*{font-size:13px;line-height:16px;}
.b1,.b2,.div_title,.div_content{display:block;overflow:hidden;background:#6699ff;}
.b2,.div_title,.div_content{border-left:1px solid blue;border-right:1px solid blue;background-image: url(images/title_bg2.jpg);}
.b1,.b2{height:1px;}
.b1{margin:0 1px;background:blue;}
.b2{margin:0 0px;}
.div_title{color:#fff;font-weight:bold;padding:2px;}
.div_content{padding-left:1px;padding-right:1px;}
.content{background:#fff;border:1px solid blue;padding:2px;}



#center{ MARGIN-RIGHT: auto;
MARGIN-LEFT: auto;
vertical-align:middle;
}

table.gridtable {
	font-family: verdana,arial,sans-serif;
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


-->
</style>

</head>

<body>

<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TR height=28>
    <TD background=images/title_bg1.jpg>当前位置: 首页设置-导航列表</TD></TR>
  <TR>
    <TD bgColor=#b1ceef height=1></TD></TR>
  <TR height=20>
    <TD background=images/shadow_bg.jpg></TD></TR></TABLE>
<div id = "center" style="width:80%"> <b class="b1"></b> <b class="b2"></b>
  <div class="div_title">导航列表</div>
  <div class="div_content">
    <div class="content">
<table class="gridtable" style= "width:100%" >

<tr>
    <th width="6%">#</th>
    <th width="13%">标题</th>
    <th width="24%">链接</th>
    <th width="6%">窗口</th>
    <th width="6%">节点</th>
    <th width="8%">isChild</th>
    <th width="12%">PID</th>
    <th width="18%" colspan="2">操作</th>
</tr>
<tr>
  	<?php
	mysql_query("SET NAMES UTF-8"); 
    $result = mysql_query("select id from p_admin limit 100,0");
    $total = mysql_num_rows($result);
    pageft($total, 20);
    if ($firstcount < 0) $firstcount = 0;
   $query=$db->query("SELECT * FROM `p_menus`");
   while ($row = $db->fetch_array($query)) {
   ?>
		<td height="20"><?php echo $row[id]?></td>

               <?php 
		if ($row[ischild]) 
		{
			echo "<td>" ;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row[title];
			echo "</td>";
		}
		else
		{
			echo "<td>";
			echo $row[title];
			echo "</td>";
		}
        ?>
        
		<td align="center"><?php echo $row[linkurl]?></td>
		<td align="center"><?php echo $row[target]?></td>
		<td align="center"><?php echo $row[subMenuCount]?></td>
		<td align="center"><?php echo $row[ischild]?></td>
        <td align="center"><?php echo $row[parentid]?></td>
		<td align="center"><a href='admin_menu_edit.php?edit_id=<?php echo $row[id]?>'>修改</a> / <a href='?del=<?php echo $row[id]?>'>删除</a></td>
	</tr>
	<?php
}
?>
</table>
    </div>
  </div>
<!--<b class="b2"> </b><b class="b1"></b> -->
</div>
</body>
</html>