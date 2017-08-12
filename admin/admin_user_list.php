<?php
include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);

if(!empty($_POST[username]) && !empty($_POST[password])){

    $db->query("INSERT INTO `p_admin` (`uid`, `m_id`, `username`, `password`, `name`) VALUES (NULL, '5', '$_POST[username]', MD5('$_POST[password]'), '$_POST[comment]')");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员列表</title>
<link rel="stylesheet" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="../easyui/themes/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<script type="text/javascript">
	function resize(){
			$('#w').window({
				title: '添加管理员',
				width: 520,
				modal: true,
				shadow: false,
				closed: false,
				height: 300
			});
	}
	
	
	
		function alert3(){
			$.messager.alert('提示','注册成功！按确定后刷新!','info');
			location.reload() ;
		}
	
	
	function submit()
	{
			var sendData = {'username':$("#reg_name").val(),'password':$("#reg_pass").val(),'comment':$("#reg_comment").val()};//构造post数据  
				$.post("admin_user_list.php",sendData,function (data) {   if (data) {
                $('#w').window('close');
				alert3();
            } else {
               alert('提交失败！');
            }
 });
              	 
            
	}
	
</script>
<style type="text/css">
	label{
			margin:5px;
			font:12px/1.5 arial;
		}
	input{height:30px;width:200px;}
	.tip{
		background:#CCC;height:30px;width:200px;float:left;font-size:14px;line-height:30px;margin-left:5px;
		text-align:center;}
	.text{float:left;
		}
	.clear{clear:both;}
</style>
</head>
<body>
	<div id="tablewrapper">
		<div id="tableheader">
        	<div class="search">
                <select id="columns" onchange="sorter.search('query')"></select>
                <input type="text" id="query" onkeyup="sorter.search('query')" />
            </div>
            <span class="details">
				<div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div>
                <div><a href="javascript:void()" onclick="resize()">添加管理员</a></div>
        		<div><a href="javascript:sorter.reset()">重置</a></div>
        	</span>
        </div>
        <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
            <thead>
                <tr>
                    <th class="nosort"><h3>ID</h3></th>
                    <th><h3>username</h3></th>
                    <th><h3>comment</h3></th>
 
                    <th><h3>contorl</h3></th>
                  
                </tr>
            </thead>
            <tbody>
 <tr>
  
  	<?php
   $query=$db->query("SELECT * FROM `p_admin`");
   while ($row = $db->fetch_array($query)) {
   ?>
   		<td><?php echo $row[uid]?></td>
   		<td><?php echo $row[username]?></td>
   		<td><?php echo $row[name]?></td>
		<td><a href='?del=<?php echo $row[id]?>'>删除</a> / <a href='admin_user_edit.php?id=<?php echo $row[id]?>'>修改</a></td>
	</tr>
	<?php
}
?>
        
            </tbody>
        </table>
        <div id="tablefooter">
          <div id="tablenav">
            	<div>
                    <img src="images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
                    <img src="images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
                    <img src="images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
                    <img src="images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
                </div>
                <div>
                	<select id="pagedropdown"></select>
				</div>
                <div>
                	<a href="javascript:sorter.showall()">view all</a>
                </div>
            </div>
			<div id="tablelocation">
            	<div>
                    <select onchange="sorter.size(this.value)">
                    <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Entries Per Page</span>
                </div>
                <div class="page">Page <span id="currentpage"></span> of <span id="totalpages"></span></div>
            </div>
        </div>
    </div>
	<script type="text/javascript" src="js/table.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:1,
		sortdir:1,
		sum:[8],
		avg:[6,7,8,9],
		columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
		init:true
	});
  </script>
  
  	<div id="w" class="easyui-window" title="System User Management" data-options="modal:true,closed:true,iconCls:'icon-save'" style="width:500px;height:200px;padding:5px;">
		<div class="easyui-layout" fit="true">
			<div region="center" border="false" style="padding:10px;background:#fff;border:1px solid #ccc;">
            <form name="formreg" method="post" action="admin_userlist.php">
            <legend>
				<div class="text"><label>账号:</label><input type="text" name="admin_user"  id="reg_name" /></div><div class="tip">这里输入您的账号</div>
                <div class="text clear"><label> 密码:</label><input type="password" name="admin_pass" id="reg_pass" /></div><div class="tip">这里输入您的密码</div>
                 <div class="text clear"><label> 重复:</label><input type="password" name="admin_repass"  /></div><div class="tip">重新输入您的密码</div>
                 <div class="text clear"><label>备注:</label><input type="text" name="admin_comment" id="reg_comment" /></div><div class="tip">随意，可写不可写</div>
                </legend>
                </form>
			</div>
			<div region="south" border="false" style="text-align:right;padding:5px 0;">
				<a class="easyui-linkbutton" iconCls="icon-ok" href="javascript:void(0)" onclick="submit()">Ok</a>
				<a class="easyui-linkbutton" iconCls="icon-cancel" href="javascript:void(0)" onclick="$('#w').window('close')">Cancel</a>
			</div>
		</div>
	</div>
  
  
</body>
</html>