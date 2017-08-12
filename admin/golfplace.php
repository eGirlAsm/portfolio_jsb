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

if(!empty($_POST[username]) && !empty($_POST[paymoney])){

	$user = $_POST[username]."님의 입금이 확인되였습니다";
	$notice = date('Y-m-d H:i:s',time())." ".$_POST[username]."님의 입금 ".doFormatMoney($_POST[paymoney])."원이 확인되였습니다.\n\n단골로 꾸준히 이용해 주셔서 진심으로 감사드립니다.\n\n보다 나은 서비스가 되도록 최선을 다하겠습니다.\n\n즐거운 여행이 되시길 바랍니다.";
    $db->query("INSERT INTO `p_payuser` (`id`, `title`, `author`, `hits`, `content`, `paymoney`, `display`, `created`, `updated`, `recommend`, `type`, `name_color`) VALUES
(NULL,'$user', '운영자', 0, '$notice',$_POST[paymoney], 1,now(), 0, 0, 0, NULL)
");


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
	function resize(){
			$('#w').window({
				title: '골프장 추가하기',
				width: 800,
				modal: true,
				shadow: false,
				closed: false,
				height: 600,
				top:0,   
            	left:0
			});
	}
	
	
	
		function alert3(){
			$.messager.alert('提示','注册成功！按确定后刷新!','info');
			location.reload() ;
		}
	
	
	function submit()
	{
			var sendData = {'username':$("#username").val(),'paymoney':$("#paymoney").val(),'content':$("#content").val()};//构造post数据  
				$.post("payuserlist.php",sendData,function (data) {   if (data) {
                $('#w').window('close');
				alert3();
            } else {
               alert('提交失败！');
            }
 });
              	 
            
	}
	
</script>
<style type="text/css">
.row{margin:30px 0;}
.borderline{border: 1px solid rgb(221, 221, 221);
    -moz-box-shadow:2px 2px 10px #06C;
-webkit-box-shadow:2px 2px 10px #06C;
box-shadow:0 0 10px #06C;}
body {font-family: microsoft yahei;}
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
                <div><a href="javascript:void()" onclick="resize()">发布</a></div>
        		<div><a href="javascript:sorter.reset()">重置</a></div>
        	</span>
        </div>
        <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
            <thead>
                <tr>
                    <th class="nosort"><h3>ID</h3></th>
                    <th><h3>제목</h3></th>
                    <th><h3>가격</h3></th>
                    <th><h3>datetime</h3></th>
                    <th><h3>contorl</h3></th>
                  
                </tr>
            </thead>
            <tbody>
 <tr>
  
  	<?php
   $query=$db->query("SELECT * FROM `p_payuser`");
   while ($row = $db->fetch_array($query)) {
   ?>
   		<td><?php echo $row[id]?></td>
   		<td><?php echo $row[title]?></td>
        <td><?php echo doFormatMoney($row[paymoney])."원"?></td>
   		<td><?php echo $row[created]?></td>
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
            
            <div class="row">
            
            <!--<div id="main_showpic" class="borderline" style="width:240px;height:140px;float:left;"><img id="main_pic" src="" width="240" height="140"></img></div>
            <div id="showpic_input" style="float:left;margin-left:30px;">
	
		<div id="queue"></div>
        <input id="file_upload" name="file_upload" type="file" multiple>
        -->
        <form>
		<div id="title" style="margin-bottom:10px;font-size: 13px;"> <label>标题:</label><input type="text" style="margin-left:10px;height:20px;width:180px;"/></div>
        <div id="price" style="margin-bottom:10px;"><label>价格:</label><input class="easyui-numberbox"  type="text" style="margin-left:10px;height:20px;width:180px;"/></div>
        <div id="zhoumo" style="margin-bottom:10px;"><label>周末:</label><input class="easyui-numberbox"  type="text" style="margin-left:10px;height:20px;width:180px;"/></div>
       
        <div id="content">
        
        <textarea id="editor_id" name="content" style="width:700px;height:300px;">
</textarea></div>
<script charset="utf-8" src="../kindeditor-4.1.7/kindeditor.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.7/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
				
        });
</script>
	</form>
    
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

            		$('#main_pic').attr("src","../uploads/"+file.name); 
					$('#main_pic').show(); 

        }
			});
		});
	</script>
    </div><!-- row -->
			</div>
			<div region="south" border="false" style="text-align:right;padding:5px 0;">
				<a class="easyui-linkbutton" iconCls="icon-ok" href="javascript:void(0)" onclick="submit()">Ok</a>
				<a class="easyui-linkbutton" iconCls="icon-cancel" href="javascript:void(0)" onclick="$('#w').window('close')">Cancel</a>
			</div>
		</div>
	</div>
  
  
</body>
</html>