<?php
//Nemo Cache @ 2008-07-17 21:13:42
echo '
<div style="border: solid 1px #c6c6c6;margin: 0px;width:100%;padding:2px;">
<div style=\'background: url(./images/box_header.gif) top;padding: 2px;color: #4372b0;position: relative;font-size:12px;\'>
    <span style="width:50%;color:blue;">����Ԥ��</span><span id=\'setcity\' onclick="javascript:setcity('.$city['0'].');">'.$setcity.'</span>
</div>
<div style="padding-top: 3px; padding-bottom: 5px; margin-bottom: 5px; border-bottom: dotted 1px #999999;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-left: auto; margin-right: auto;font-size:13px;">
        <tr>
            <td style="width: 40%; text-align: center">
                <strong>'.$live_weather['city'].'</strong><br />
                <img id="ctl00_imgCode" src="./images/'.$live_weather['gif'].'" style="border-width:0px;width:30px;" /><br />
                '.$live_weather['weather'].'<br />
                '.$live_weather['temperature'].'</td>
            <td style="width: 60%; line-height: 170%; text-align: left">
                '.$live_weather['wind'].'<br />
                '.$live_weather['air'].'<br />
                '.$live_weather['ultraviolet'].'<br />
            </td>
        </tr>
    </table>
</div>
<div id="wcma" style="padding-bottom:5px; margin-bottom: 5px; border-bottom: dotted 1px #999999;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-left: auto;margin-right: auto;font-size:12px;">
        <tr>
            ';
if(is_array($cma_weather['cma']['date'])) foreach ($cma_weather['cma']['date'] as $k => $v) {
echo '
                    <td style="text-align: center;">
                        <strong>
                            '.$v.'
                        </strong><br />
                       ';
if(is_array($gif[$k])) foreach ($gif[$k] as $key => $val) {
echo ' 
                        <img src="./images/gif/'.$val.'" alt="" />
                        ';
}
echo '
                        <br />
                        '.$cma_weather['cma']['weather'][$k].'<br />
                        <span style="font-size: 8pt">'.$cma_weather['cma']['temperature'][$k].'</span>
                    </td>
           ';
}
echo '
        </tr>
    </table>
</div>
<div style="padding:2px;text-align:center;">
    <form id="weather" name="weather" method="post" action="" style="margin:0px;display: inline;">
       <select name="province"  style=" max-height:100px" onChange="Province_onchange(this.options.selectedIndex);"  selected= />	     																			
				  	        <option value="ѡ��ʡ" >ѡ��ʡ</option>
	                  <option value="ֱϽ��" >ֱϽ��</option>
	                  <option value="�ر�������" >�ر�������</option>
	                  <option value="������" >������</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="���ɹ�" >���ɹ�</option>
	                  <option value="�ӱ�" >�ӱ�</option>
	                  <option value="����" >����</option>
	                  <option value="ɽ��" >ɽ��</option>
	                  <option value="ɽ��" >ɽ��</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="�ຣ" >�ຣ</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="�㽭" >�㽭</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="�Ĵ�" >�Ĵ�</option>
	                  <option value="�㶫" >�㶫</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="����" >����</option>
	                  <option value="�½�" >�½�</option>
	                  <option value="����" >����</option>
	                  <option value="̨��" >̨��</option>
	          		
        </select>
		<select name=chinacity onChange="MM_jumpMenu(\'this\',this,0)" style="font-size: 12px; color: #000000; text-decoration: none; font-family: ����; line-height: 14px;width:80px;" selected= />
			<option value="ѡ�����" >ѡ�����</option>
	    </select></td>
    </form>
    <script src="./js/weather.citycode.js" type="text/javascript"></script>
</div>
</div>
';
?>