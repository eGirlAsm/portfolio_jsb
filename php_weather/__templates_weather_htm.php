<?php
//Nemo Cache @ 2008-07-17 21:13:42
echo '
<div style="border: solid 1px #c6c6c6;margin: 0px;width:100%;padding:2px;">
<div style=\'background: url(./images/box_header.gif) top;padding: 2px;color: #4372b0;position: relative;font-size:12px;\'>
    <span style="width:50%;color:blue;">天气预报</span><span id=\'setcity\' onclick="javascript:setcity('.$city['0'].');">'.$setcity.'</span>
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
				  	        <option value="选择省" >选择省</option>
	                  <option value="直辖市" >直辖市</option>
	                  <option value="特别行政区" >特别行政区</option>
	                  <option value="黑龙江" >黑龙江</option>
	                  <option value="吉林" >吉林</option>
	                  <option value="辽宁" >辽宁</option>
	                  <option value="内蒙古" >内蒙古</option>
	                  <option value="河北" >河北</option>
	                  <option value="河南" >河南</option>
	                  <option value="山东" >山东</option>
	                  <option value="山西" >山西</option>
	                  <option value="江苏" >江苏</option>
	                  <option value="安徽" >安徽</option>
	                  <option value="陕西" >陕西</option>
	                  <option value="宁夏" >宁夏</option>
	                  <option value="甘肃" >甘肃</option>
	                  <option value="青海" >青海</option>
	                  <option value="湖北" >湖北</option>
	                  <option value="湖南" >湖南</option>
	                  <option value="浙江" >浙江</option>
	                  <option value="江西" >江西</option>
	                  <option value="福建" >福建</option>
	                  <option value="贵州" >贵州</option>
	                  <option value="四川" >四川</option>
	                  <option value="广东" >广东</option>
	                  <option value="广西" >广西</option>
	                  <option value="云南" >云南</option>
	                  <option value="海南" >海南</option>
	                  <option value="新疆" >新疆</option>
	                  <option value="西藏" >西藏</option>
	                  <option value="台湾" >台湾</option>
	          		
        </select>
		<select name=chinacity onChange="MM_jumpMenu(\'this\',this,0)" style="font-size: 12px; color: #000000; text-decoration: none; font-family: 宋体; line-height: 14px;width:80px;" selected= />
			<option value="选择城市" >选择城市</option>
	    </select></td>
    </form>
    <script src="./js/weather.citycode.js" type="text/javascript"></script>
</div>
</div>
';
?>