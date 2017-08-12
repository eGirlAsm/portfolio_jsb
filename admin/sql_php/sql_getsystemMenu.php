<?php
@header('Content-type: text/html;charset=UTF-8');
include ("conn.php");
$r=$db->Get_user_shell_check($uid, $shell);
$result = array();
$query = $db->query("select * from p_systemmenu");

 while($row=$db->fetch_array($query)){
	 if($row[parentid]==0){
		 if(has_child($row[id]))
		 {
		 	$row['children'] = find_child($row[id]);
		 }
		 $row['contorl'] = $row['contorl'] = $row['contorl'] = "<a style=\"margin-left:10px;\" href=\"javascript:void(0)\" onclick=\"edit()\">编辑</a><a style=\"margin-left:10px;\" href=\"javascript:void(0)\" onclick=\"save()\">保存</a><a style=\"margin-left:10px;\" href=\"javascript:void(0)\" onclick=\"cancel()\">取消</a><a style=\"margin-left:10px;\"href=\"?del_id=". $row[id] ."\">删除</a>";
	  array_push($result, $row);
	}
 }
 
 echo json_encode($result);
 
 function has_child($id){
	$rs = mysql_query("select count(*) from p_systemmenu where parentid=$id");
	$row = mysql_fetch_array($rs);
	return $row[0] > 0 ? true : false;
}

 function find_child($id){
	$result = array();
$query = mysql_query("select * from p_systemmenu");
 while($row=mysql_fetch_array($query)){
	if($row[parentid] == $id)
	{
		$row['contorl'] = $row['contorl'] = $row['contorl'] = "<a style=\"margin-left:10px;\" href=\"javascript:void(0)\" onclick=\"edit()\">编辑</a><a style=\"margin-left:10px;\" href=\"javascript:void(0)\" onclick=\"save()\">保存</a><a style=\"margin-left:10px;\" href=\"javascript:void(0)\" onclick=\"cancel()\">取消</a><a style=\"margin-left:10px;\"href=\"?del_id=". $row[id] ."\">删除</a>";
		 array_push($result, $row);
	}
 }
	return $result;
}
?>

