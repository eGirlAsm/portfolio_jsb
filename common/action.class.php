<?php
class action extends mysql {
public function Get_admin_msg($url, $show = '操作已成功！') {
		$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"><head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<style type="text/css">
				<!--
				.t {
				        font-family: Verdana, Arial, Helvetica, sans-serif;
				        color: #CC0000;
				}
				.c {
				        font-family: Verdana, Arial, Helvetica, sans-serif;
				        font-size: 12px;
				        font-weight: normal;
				        color: #000000;
				        line-height: 18px;
				        text-align: center;
				        border: 1px solid #CCCCCC;
				        background-color: #FFFFEC;
				}
				body {
				        background-color: #FFFFFF;
				        margin-top: 100px;
				}
				-->
				</style>
				<meta http-equiv="refresh" content="2; URL=' . $url . '" />
				<title>管理区域</title>
				</head>
				<body>
				<div align="center";>
  				<h2><span class="t">信息提示</span></h2>
  				<table border="0" cellpadding="8" cellspacing="0" width="30%">
    			<tbody>
      			<tr>
        		<td class="c"><p>' . $show . '<br />
				      2秒后返回指定页面！<br />
				      如果浏览器无法跳转，<a href="' . $url . '" target="_self">请点击此处</a>。</p></td>
      			</tr>
    			</tbody>
  				</table>
				</body>
				</html>';
		echo $msg;
		exit ();
	}
} //end class


?>














