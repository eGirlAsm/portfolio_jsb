

//自定义属性解释(IE支持):
//meteor_chname：表示该数据的中文名称
//meteor_minsize:表示允许输入的最小长度,单位字节
//meteor_maxsize：表示允许输入的最大长度,单位字节
//meteor_type:输入的数据类型
//meteor_null：表示输入值是允许否为空。为yes时允许为空。
//meteor_compare:比交是否与某项(ID)值相同
function chkRadio(o){
//判断单选
for (i=0;i<o.length;i++){
if (o[i].checked) return true;
}
return false;
}
function strlen(str){
/* 取得字符串的字节长度 */
var i;
var len;
len = 0;
for (i=0;i<str.length;i++)
{
if (str.charCodeAt(i)>255) len+=2; else len++;
}
return len;
}
function isnull(str){
/* 检测字符串是否为空 */
var i;
for (i=0;i<str.length;i++)
{
if (str.charAt(i)!=' ') return false;
}
return true;
}
function isNum(s) {
/* 检测字符串是否为数字 */
var regu = "^[-+]?\d*$";//支持正负\小数
//var regu = "^([0-9]*)$";
//var regu = "^([0-9]*[.0-9])$"; // 小数测试
var re = new RegExp(regu);
if (s.search(re) != -1)
return true;
else
return false;
}
function isType(s,t){
/* 检测数据类型是否合法 */
var RegExpPtn;
var t2=t;
if (t2 != ""){
switch(s){
case "EN"://英文
RegExpPtn=/^[A-Za-z]+$/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "CN"://中文
RegExpPtn=/^[\u4e00-\u9fa5]+$/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "NUM"://实数
RegExpPtn=/^(\+|-)?\d+($|\.\d+$)/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "INT"://正整数
RegExpPtn=/^[1-9]d*$/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "DATE"://日期yyyy-mm-dd
RegExpPtn=/^((((1[6-9]|[2-9]\d)\d{2})-(0?[13578]|1[02])-(0?[1-9]|[12]\d|3[01]))|(((1[6-9]|[2-9]\d)\d{2})-(0?[13456789]|1[012])-(0?[1-9]|[12]\d|30))|(((1[6-9]|[2-9]\d)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))-0?2-29-))$/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "EMAIL"://邮件
RegExpPtn=/\w[\w.-]+@[\w-]+(\.\w{2,})+/gi;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "CARD"://身份证,也可直接调用isCard()函数
return isCard(t2)
break;
case "URL"://网址
RegExpPtn=/^[a-zA-z]+\:\/\/(\w+(-\w+)*)(\.(\w+(-\w+)*))*(\?\S*)?$/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "IP"://IP地址,,也可直接调用isIP()函数
return isIP(t2)
break;
case "ID1"://ID类型1,充许英文+数字+下划线(0~30字节)
RegExpPtn=/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
case "ID2"://ID类型1,充许中文+英文+数字+下划线(0~30字节)
RegExpPtn=/^[a-zA-Z][a-zA-Z0-9_][_0-9a-zA-Z\u4e00-\u9fa5]{0,29}$/;
if (!RegExpPtn.test(t2) ){return false;}else{return true;}
break;
default : break;
}
}else{
return false;
}
}
function isCard(obj){
/*功能：验证身份证号码是否有效 */
var aCity={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"};
var iSum = 0;
var info = "";
var strIDno = obj;
var idCardLength = strIDno.length;
if(!/^\d{17}(\d|x)$/i.test(strIDno)&&!/^\d{15}$/i.test(strIDno))
{
//alert("非法身份证号");
return false;
}
//在后面的运算中x相当于数字10,所以转换成a
strIDno = strIDno.replace(/x$/i,"a");
if(aCity[parseInt(strIDno.substr(0,2))]==null)
{
//alert("非法地区");
return false;
}
if (idCardLength==18)
{
sBirthday=strIDno.substr(6,4)+"-"+Number(strIDno.substr(10,2))+"-"+Number(strIDno.substr(12,2));
var d = new Date(sBirthday.replace(/-/g,"/"))
if(sBirthday!=(d.getFullYear()+"-"+ (d.getMonth()+1) + "-" + d.getDate()))
{
//alert("非法生日");
return false;
}
for(var i = 17;i>=0;i --)
iSum += (Math.pow(2,i) % 11) * parseInt(strIDno.charAt(17 - i),11);
if(iSum%11!=1)
{
//alert("非法身份证号");
return false;
}
}
else if (idCardLength==15)
{
sBirthday = "19" + strIDno.substr(6,2) + "-" + Number(strIDno.substr(8,2)) + "-" + Number(strIDno.substr(10,2));
var d = new Date(sBirthday.replace(/-/g,"/"))
var dd = d.getFullYear().toString() + "-" + (d.getMonth()+1) + "-" + d.getDate();
if(sBirthday != dd)
{
//alert("非法生日");
return false;
}
}
return true;
}
function isIP(obj)
{
var re=/^(\d+)\.(\d+)\.(\d+)\.(\d+)$/; //IP正则
if(re.test( obj ))
{
if( RegExp.$1 <256 && RegExp.$2<256 && RegExp.$3<256 && RegExp.$4<256) return true;
}
//alert("请输入合法的计算机IP地址");
return false;
}
function verifyInput(input)
{//检测指定自定义元素
var i;
var msg="";
var error = false;
var v=input.value;
if((input.meteor_null != undefined)&&(input.meteor_null != "")&&(error==false)){
if (input.meteor_null=="NO"&&isnull(v))
{
//为空校验
msg +="*"+input.meteor_chname+"值不能为空\n";
error = true;
}
}

if((input.meteor_type != undefined)&&(input.meteor_type != "")&&(error==false)){
//检查类型
switch(input.meteor_type){
case "EN":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"只能输入英文字符\n";
error = true;
}
break;
case "CN":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"只能输入中文字符\n";
error = true;
}
break;
case "NUM":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"值应该全为数字\n";
error = true;
}
break;
case "INT":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"只能输入整数\n";
error = true;
}
break;
case "DATE":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"填写错误(参考:2000-12-28)\n";
error = true;
}
break;
case "EMAIL":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"填写错误(参考:abc@163.com)\n";
error = true;
}
break;
case "CARD":
if(isCard(v)==false){
msg +="*"+input.meteor_chname+"填写错误,请检查\n";
error = true;
}
break;
case "URL":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"填写错误(参考:http://www.xxxx.com)\n";
error = true;
}
break;
case "IP":
if(isIP(v)==false){
msg +="*"+input.meteor_chname+"填写错误,请检查\n";
error = true;
}
break;
case "ID1":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"填写错误(允许输入字母、数字和下划线)\n";
error = true;
}
break;
case "ID2":
if (isType(input.meteor_type,v)==false){
msg +="*"+input.meteor_chname+"填写错误(允许输入中文、字母、数字和下划线)\n";
error = true;
}
break;
default : break;
}
}
if((input.meteor_minsize != undefined)&&(input.meteor_minsize != "")&&(error==false)){
if (strlen(v)<parseInt(input.meteor_minsize))
{
//最小长度校验
msg +="*"+input.meteor_chname+"内容太短(最少需"+input.meteor_minsize+"个字节)\n";
error = true;
}
}
if((input.meteor_maxsize != undefined)&&(input.meteor_maxsize != "")&&(error==false)){
if (strlen(v)>parseInt(input.meteor_maxsize))
{
//最大长度校验
msg +="*"+input.meteor_chname+"超出最大长度("+input.meteor_maxsize+"个字节)\n";
error = true;
}
}
if((input.meteor_compare != undefined)&&(error==false)){
var chv=document.getElementById(input.meteor_compare).value;
if ((chv != undefined)&&(chv != ""))
{
if(chv != v){
msg +="*"+input.meteor_chname+"与"+document.getElementById(input.meteor_compare).meteor_chname+"内容不相符，请检查\n";
error = true;
}
}
}
if(error) alert(msg);
return error;
}
function chkFromAll(myform)
{ //检测所有自定义元素
var i;
for (i=0;i<myform.elements.length;i++)
{
if (myform.elements[i].meteor_chname==undefined) continue;//跳过非自定义元素
if (verifyInput(myform.elements[i])==true)//检测当前元素
{
myform.elements[i].focus();
return false;
}
}
return true;
}// JavaScript Document