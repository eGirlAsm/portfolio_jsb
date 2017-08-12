<?php
@header('Content-type: text/html;charset=UTF-8');
include ("conn.php");
$r=$db->Get_user_shell_check($uid, $shell);
$result = array();
$query = $db->query("select * from p_systemmenu");

 while($row=$db->fetch_array($query)){
	 if($row[parentid]==0){
	  $row['text'] = $row[strMenu];
	  array_push($result, $row);
	}
 }
 
 echo json_encode($result);

?>

