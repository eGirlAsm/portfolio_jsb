<?php
include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);

if(!empty($_POST[title]) && !empty($_POST[area])){

    $db->query("INSERT INTO `p_tourplace` (
 `id` ,
 `title` ,
 `area` ,
 `price` ,
 `time` ,
 `introduction` ,
 `imagepath` ,
 `created` ,
 `updated` ,
 `display` ,
 `recommend` ,
 `is_pic` ,
 `type` ,
 `ishome` ,
 `name_color` 
)
VALUES (
 NULL,'$_POST[title]','$_POST[area]','$_POST[price]','$_POST[time]','아리아리 스리스리','$_POST[imagepath]',now(),'0','1','0','0','0','0',NULL 
)");


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>관광지 추가</title>
<link rel="stylesheet" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="../easyui/themes/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="uploadify/jquery.uploadify.min.js" ></script>
<link rel="stylesheet" type="text/css" href="uploadify/uploadify.css">
<script type="text/javascript">

	var imageFileName;


	function resize(){
			$('#w').window({
				title: '관광지 추가하기',
				width: 750,
				modal: true,
				shadow: false,
				closed: false,
				height: 450,
				top:0,   
            	left:0
			});
	}
	
	
	
		function alert3(){
			$.messager.alert('提示','添加成功！按确定后刷新!','info');
			location.reload();
		}
	
	
	function submit()
	{
			var sendData = {'title':$("#title").val(),'area':$("#area").val(),'price':$("#price").val(),'time':$("#time").val(),'imagepath':imageFileName};//构造post数据  
				$.post("tourplace.php",sendData,function (data) {   if (data) {
                $('#w').window('close');
				alert3();
            } else {
               alert('提交失败！');
            }
 });
              	 
            
	}
	
</script>
<style type="text/css">
.row {
	margin: 30px 0;
}
.borderline {
	border: 1px solid rgb(221, 221, 221);
	-moz-box-shadow: 2px 2px 10px #06C;
	-webkit-box-shadow: 2px 2px 10px #06C;
	box-shadow: 0 0 10px #06C;
}
body {
	font-family: microsoft yahei;
}
</style>
</head>
<body>
<div id="tablewrapper">
  <div id="tableheader">
    <div class="search">
      <select id="columns" onchange="sorter.search('query')">
      </select>
      <input type="text" id="query" onkeyup="sorter.search('query')" />
    </div>
    <span class="details">
    <div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div>
    <div><a href="javascript:void()" onclick="resize()">发布</a></div>
    <div><a href="javascript:sorter.reset()">重置</a></div>
    </span> </div>
  <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
    <thead>
      <tr>
        <th class="nosort"><h3>ID</h3></th>
        <th><h3>title</h3></th>
        <th><h3>area</h3></th>
        <th><h3>price</h3></th>
        <th><h3>time</h3></th>
        <th><h3>contorl</h3></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
   $query=$db->query("SELECT * FROM `p_tourplace` order by 'id' Desc");
   while ($row = $db->fetch_array($query)) {
   ?>
        <td><?php echo $row[id]?></td>
        <td><?php echo $row[title] ?></td>
        <td><?php echo $row[area] ?></td>
        <td><?php echo $row[price] ?></td>
        <td><?php echo $row[time] ?></td>
        <td><a href='?del=<?php echo $row[id]?>'>删除</a> / <a href='admin_user_edit.php?id=<?php echo $row[id]?>'>修改</a></td>
      </tr>
      <?php
}
?>
    </tbody>
  </table>
  <div id="tablefooter">
    <div id="tablenav">
      <div> <img src="images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" /> <img src="images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" /> <img src="images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" /> <img src="images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" /> </div>
      <div>
        <select id="pagedropdown">
        </select>
      </div>
      <div> <a href="javascript:sorter.showall()">view all</a> </div>
    </div>
    <div id="tablelocation">
      <div>
        <select onchange="sorter.size(this.value)">
          <option value="5">5</option>
          <option value="10"  selected="selected">10</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
        <span>Entries Per Page</span> </div>
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
		sum:[3],
		avg:[6,7,8,9],
		columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
		init:true
	});
  </script>
<div id="w" class="easyui-window" title="System User Management" data-options="modal:true,closed:true,iconCls:'icon-save'" style="width:500px;height:200px;padding:5px;">
  <div class="easyui-layout" fit="true">
    <div region="center" border="false" style="padding:10px;background:#fff;border:1px solid #ccc;">
      <div id="tt" class="easyui-tabs" style="width:600px;height:600px;">
        <div title="基本信息" style="padding:20px;">
          <form>
            <div style="margin-bottom:10px;font-size: 13px;">
              <label>名称:</label>
              <input id="title" type="text" style="margin-left:10px;height:20px;width:180px;"/>
            </div>

            <div style="margin-bottom:10px;">
              <label>地区:</label>
              <input  id="area"  type="text" style="margin-left:10px;height:20px;width:180px;"/>
            </div>
            <div style="margin-bottom:10px;">
              <label>费用:</label>
              <input   id="price"  type="text" style="margin-left:10px;height:20px;width:180px;"/>
            </div>
              <div style="margin-bottom:10px;">
              <label>开放:</label>
              <input   id="time"  type="text" style="margin-left:10px;height:20px;width:180px;"/>
            </div>
            <div id="item_pic">
              <label style="float:left;">照片:</label>
              <img style="margin-left:14px;" id="main_pic" src="" width="140" height="98"></img>
              <div style="margin-left:40px;margin-top:10px;">
                <input id="file_upload" name="file_upload" type="file">
              </div>
            </div>
          </form>
        </div>
        <div title="详细介绍" style="overflow:auto;padding:20px;"> tab2 </div>
        <div title="房间类型"  style="overflow:auto;padding:20px;"> tab3 </div>
      </div>
    </div>
    <div region="south" border="false" style="text-align:right;padding:5px 0;"> <a class="easyui-linkbutton" iconCls="icon-ok" href="javascript:void(0)" onclick="submit()">Ok</a> <a class="easyui-linkbutton" iconCls="icon-cancel" href="javascript:void(0)" onclick="$('#w').window('close')">Cancel</a> </div>
  </div>
</div>
<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				
				'swf'      : 'uploadify/uploadify.swf',
				'uploader' : 'uploadify/uploadify.php',
				
				'buttonText' : '设置展示照',
				'buttonImage': 'uploadify/browse-btn.png',
				'auto'	   : true,
				'multi'	   : false,
   				'fileTypeDesc':'支持的格式：',
                'fileTypeExts':'*.jpg;*.jpge;*.gif;*.png',
				'onComplete': function(event,queueID,fileObj,response,data) {  
			alert('helloworld');
					$('#image').attr("src","<%=basePath%>userphoto/"+response); 
					$('#image').show(); 
					$('#photo').attr("value",response); 
				}, 
				'onError'  : function(event, queueID, fileObj)   
				{    
				   alert("文件:" + fileObj.name + " 上传失败");    
				},
				 'onUploadSuccess':function(file, data, response){
						
						imageFileName = file.name;
            		$('#main_pic').attr("src","../uploads/"+file.name); 
					$('#main_pic').show(); 

        }
			});
		});
	</script>
</body>
</html>