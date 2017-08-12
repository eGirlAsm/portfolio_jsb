<?php


include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);
if(!empty($_POST[edit_id]))
{
	//$sql="UPDATE `p_menus` SET `subMenuCount` = '$abc' WHERE `id` = $_POST[edit_id]";
	$sql = "UPDATE `p_menus` SET `title` = '$_POST[title]',`linkurl` = '$_POST[linkurl]',`target` = '$_POST[target]' WHERE `id` = $_POST[edit_id]";
	
	$db->query($sql);
}
		
if(!empty($_POST[name]))
{
	$IsChild = $_POST[MenuType] ? 1 : 0;
	$sql = "INSERT INTO `p_menus`(`id`, `title`, `linkurl`, `target`, `subMenuCount`, `ischild`, `parentid`, `level`, `orders`) VALUES (NULL,'$_POST[name]','$_POST[linkurl]','$_POST[target]','0','$IsChild','$_POST[MenuType]','0','0')";
	
		// set parentid submenucount;
	if($_POST[MenuType])
	{
		$temp = mysql_query("SELECT * FROM `p_menus` WHERE `id` =  $_POST[MenuType] ");
		$menuArray = mysql_fetch_array($temp);
		$subMenuCount = $menuArray[subMenuCount] + 1;
		echo "subMenuCount= ".$subMenuCount;
		$db->query("UPDATE `p_menus` SET `subMenuCount` = '$subMenuCount' WHERE `id` = $_POST[MenuType]");
	}
	$db->query($sql);
}
		
if($_GET[del_id])
{
		mysql_query("DELETE FROM `p_menus` WHERE `id` = '$_GET[del_id]' LIMIT 1;");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../easyui/themes/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
	<script>
	var editingId; 
	
		function submitData(nRows){
			var rows = $('#tg').treegrid('getSelections');
			alert(rows[0].id);
			var sendData = {'name':rows[0].strMenu,'linkurl':rows[0].linkurl,'edit_id':rows[0].id};//构造post数据

			}
	
		
		$(function(){
			
			
			
			var lastIndex;
			$('#tg').treegrid({
				toolbar:[{
					text:'添加菜单',
					iconCls:'icon-add',
					handler:function(){	
						$('#tg').treegrid('append',{
							parent:'0',
							data:[{
							strMenu:'',
							linkurl:'',
							contorl:''}]
						});
						$('#tg').treegrid('beginEdit',0);
						editingId = 0;
					}
				},'-',{
					text:'保存',
					iconCls:'icon-save',
					handler:function(){
						$('#tg').treegrid('endEdit',editingId);
						var rows = $('#tg').treegrid('getSelections');
						alert(rows.length);
						submitData(editingId);
					}
				}]
			});
		});
	</script>
	<style type="text/css">
	.row {
	width: 700px;
	margin: 0 auto;
}
		label{
			margin:5px;
			font:12px/1.5 arial;
		}
		a:visited{color:#0000FF;}
		a:link{color:#0000FF;}
	</style>
</head>

<body>
<div class="row">
<div class="demo-info">
  <div class="demo-tip icon-tip"></div>
  <div>系统菜单自助添加删除编辑系统，让后台更人性化，更方便。<br /><br /><font color="#FF0000">*操作之前,必须选当前行，再点编辑或删除，否则删除的可能是其他行（以表格行背景颜色为准）</font></div>
</div>
<table id="tg" title="系统菜单管理" class="easyui-treegrid" style="width:700px;" data-options="url: 'sql_php/sql_getnavMenu.php',  idField: 'id',rownumbers: true,treeField: 'title',iconCls:'icon-edit',animate: true,  
                collapsible: true,  
                fitColumns: true">
  <thead>
    <tr>
      <th data-options="field:'title',width:220,editor:'text'" >标题</th>
      <th data-options="field:'linkurl',width:220,editor:'text'" >链接</th>
      <th data-options="field:'target',width:220">窗口</th>
      <th data-options="field:'contorl',width:220">操作</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<div style="background:#fafafa;padding:10px;width:700px;height:300px;">
	    <form id="ff" method="post"  novalidate>
	        <div>
	            <label for="MenuName">名称:</label>
	            <input class="easyui-validatebox" type="text" name="name" required></input>
	        </div>
            	        <div>
	            <label for="MenuType">分类:</label>
				<input class="easyui-combobox" 
						name="MenuType"
						url="sql_php/sql_getnavMenuCombobox.php" 
						valueField="id" 
						textField="text" 
						panelHeight="auto">如果不是二级菜单则为留空即可
	        </div>
             <div>
	            <label for="target">窗口:</label>
	            <input class="easyui-validatebox" type="text" name="target"  value="_self" required></input>
	        </div>
            <div>
              <label for="MenuName">链接:</label>
	            <input class="easyui-validatebox" type="text" name="linkurl"  style="width:300px;" required></input>
                </div>
                  <div>
	            <input type="submit" value="提交">
	        </div>
                </form>
	</div>
    </div>
 <script type="text/javascript">  

        var editingId;  
        function edit(){  
            if (editingId != undefined){  
                $('#tg').treegrid('select', editingId);  
                return;  
            }  
            var row = $('#tg').treegrid('getSelected');  
            if (row){  
                editingId = row.id  
                $('#tg').treegrid('beginEdit', editingId);  
            }  
        }  
		
	 
		
        function save(){  
            if (editingId != undefined){  
                var t = $('#tg');  
                t.treegrid('endEdit', editingId);  
                editingId = undefined;  
				var rows = $('#tg').treegrid('getSelections');
				var sendData = {'title':rows[0].title,'linkurl':rows[0].linkurl,'target':rows[0].target,'edit_id':rows[0].id};//构造post数据  
				$.post("menu_list.php",sendData,function (data) {   if (data) {
                $('#tg').treegrid('reload');
            } else {
               alert('保存失败！');
            }
 });
              	 
            }  
			
        }  
        function cancel(){  
            if (editingId != undefined){  
                $('#tg').treegrid('cancelEdit', editingId);  
                editingId = undefined;  
            }  
        }  
    </script>  

</body>
</html>
