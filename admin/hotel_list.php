<?php
include_once ('admin_global.php');
$r=$db->Get_user_shell_check($uid, $shell);

function doFormatMoney($money){
    $tmp_money = strrev($money);
    $format_money; 
    for($i = 3;$i<strlen($money);$i+=3){
        $format_money .= substr($tmp_money,0,3).",";
         $tmp_money = substr($tmp_money,3);
     }
    $format_money .=$tmp_money;
    $format_money = strrev($format_money); 
    return $format_money;
}

if(!empty($_POST[ko_name]) && !empty($_POST[en_name])){

    $db->query("INSERT INTO `jsbtour`.`p_hotel` (`id`, `ko_name`, `en_name`, `area`, `stars`, `address`, `price`, `introduction1`, `introduction2`, `imagepath`, `created`, `updated`, `display`, `recommend`, `is_pic`, `type`, `ishome`, `name_color`) VALUES (NULL, '$_POST[ko_name]','$_POST[en_name]', '$_POST[area]', '$_POST[stars]', '$_POST[address]', '$_POST[price]', '$_POST[intro]', '너무 친절하고 위치', '$_POST[imagepath]',now(), '0', '1', '0', '0', '0', '0', NULL)");


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
<script type="text/javascript" src="uploadify/jquery.uploadify.min.js" ></script>
<link rel="stylesheet" type="text/css" href="uploadify/uploadify.css">
<script type="text/javascript">

	var imageFileName;


	function resize(){
			$('#w').window({
				title: '호텔 추가하기',
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
			var sendData = {'ko_name':$("#ko_name").val(),'en_name':$("#en_name").val(),'area':$("#areas").val(),'stars':$("#stars").val(),'address':$("#address").val(),'price':$("#hotel_price").val(),'intro':$("#intro").val(),'imagepath':imageFileName};//构造post数据  
				$.post("hotel_list.php",sendData,function (data) {   if (data) {
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
        <th><h3>hotel</h3></th>
        <th><h3>star</h3></th>
        <th><h3>areas</h3></th>
        <th><h3>price</h3></th>
        <th><h3>contorl</h3></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
   $query=$db->query("SELECT * FROM `p_hotel`");
   while ($row = $db->fetch_array($query)) {
   ?>
        <td><?php echo $row[id]?></td>
        <td><?php echo $row[ko_name]." ".$row[en_name]?></td>
        <td><?php echo $row[stars]?></td>
        <td><?php echo $row[area]?></td>
        <td><?php echo doFormatMoney($row[price])."원"?></td>
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
          <option value="10" selected="selected">10</option>
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
		sum:[8],
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
            <div id="title" style="margin-bottom:10px;font-size: 13px;">
              <label>韩文:</label>
              <input id="ko_name" type="text" style="margin-left:10px;height:20px;width:180px;"/>
            </div>
            <div id="title" style="margin-bottom:10px;font-size: 13px;">
              <label>英文:</label>
              <input id="en_name"  type="text" style="margin-left:10px;height:20px;width:180px;"/>
            </div>
            <div id="area" style="margin-bottom:10px;font-size: 13px;">
              <label>地区:</label>
              <select id="areas" style="margin-left:10px;height:20px;width:185px;">
                <option selected="selected" value="0" >&nbsp;-----&nbsp;</option>
                <option value="1">&nbsp;왕징(코리안타운)&nbsp;</option>
                <option value="2">&nbsp;국제전시장(삼원교)&nbsp;</option>
                <option value="3">&nbsp;CBD국제무역센터&nbsp;</option>
                <option value="4">&nbsp;올림픽경기장&nbsp;</option>
                <option value="5">&nbsp;공항-새전시장&nbsp;</option>
                <option value="6">&nbsp;북경대학-오도구&nbsp;</option>
                <option value="7">&nbsp;북경 전람관&nbsp;</option>
                <option value="8">&nbsp;천안문-왕부정&nbsp;</option>
                <option value="9">&nbsp;기타지역&nbsp;</option>
              </select>
            </div>
            <div id="title" style="margin-bottom:10px;font-size: 13px;">
              <label>等级:</label>
              <select id="stars" style="margin-left:10px;height:20px;width:85px;">
                <option value="1">&nbsp;一星级&nbsp;</option>
                <option value="2">&nbsp;二星级&nbsp;</option>
                <option selected="selected" value="3">&nbsp;三星级&nbsp;</option>
                <option value="4">&nbsp;四星级&nbsp;</option>
                <option value="5">&nbsp;五星级&nbsp;</option>
              </select>
            </div>
            <div style="margin-bottom:10px;">
              <label>地址:</label>
              <input  id="address"  type="text" style="margin-left:10px;height:20px;width:380px;"/>
            </div>
            <div id="zhoumo" style="margin-bottom:10px;">
              <label>价格:</label>
              <input   id="hotel_price"  type="text" style="margin-left:10px;height:20px;width:180px;"/>
            </div>
            <div id="content" style="margin-bottom:10px;">
              <label style="float:left;">简介:</label>
              <textarea id="intro" cols="3"  style="margin-left:10px;width:500px;">
</textarea>
            </div>
            <div id="item_pic">
              <label style="float:left;">照片:</label>
              <img style="margin-left:10px;" id="main_pic" src="" width="140" height="98"></img>
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