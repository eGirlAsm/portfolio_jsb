//存放每个月天数的数组
function montharr(m0, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11)
{
this[0] = m0;
this[1] = m1;
this[2] = m2;
this[3] = m3;
this[4] = m4;
this[5] = m5;
this[6] = m6;
this[7] = m7;
this[8] = m8;
this[9] = m9;
this[10] = m10;
this[11] = m11;
}
//实现月历
function calendar() {
var monthNames = "JanFebMarAprMayJunJulAugSepOctNovDec";
var today = new Date();
var thisDay;
var monthDays = new montharr(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
year = today.getYear() +1900;
thisDay = today.getDate();
if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) monthDays[1] = 29;
nDays = monthDays[today.getMonth()];
firstDay = today;
firstDay.setDate(1);
testMe = firstDay.getDate();
if (testMe == 2) firstDay.setDate(0);
startDay = firstDay.getDay();
document.write("<TABLE width ='198' BORDER='0' CELLSPACING='0' CELLPADDING='0' BGCOLOR='#F9F9F9'>")
document.write("<TR><TD><table border='1' cellspacing='1' cellpadding='2' bgcolor='#F9F9F9'>");
document.write("<TR><th colspan='7' bgcolor='#F9F9F9'>"); /* titile color */
var dayNames = new Array("일요일","월요일","화요일","수요일","목요일","금요일","토요일");
var monthNames = new Array("1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월");
var now = new Date();
document.writeln("<p class='c_title'>" + now.getFullYear() + "년 "  + monthNames[now.getMonth()] + " " + now.getDate() + "일 " + dayNames[now.getDay

()] + "</p>");
document.writeln("</TH></TR><TR><TH BGCOLOR='#F9F9F9'><FONT STYLE='font-size:9pt;Color:red'>일</FONT></TH>");
document.writeln("<th bgcolor='#F9F9F9'><FONT STYLE='font-size:10pt;Color:black'>월</FONT></TH>");
document.writeln("<TH BGCOLOR='#F9F9F9'><FONT STYLE='font-size:10pt;Color:black'>화</FONT></TH>");
document.writeln("<TH BGCOLOR='#F9F9F9'><FONT STYLE='font-size:10pt;Color:black'>수</FONT></TH>");
document.writeln("<TH BGCOLOR='#F9F9F9'><FONT STYLE='font-size:10pt;Color:black'>목</FONT></TH>");
document.writeln("<TH BGCOLOR='#F9F9F9'><FONT STYLE='font-size:10pt;Color:black'>금</FONT></TH>");
document.writeln("<TH BGCOLOR='#F9F9F9'><FONT STYLE='font-size:10pt;Color:black'>토</FONT></TH>");
document.writeln("</TR><TR>");
column = 0;
for (i=0; i<startDay; i++) {
document.writeln("\n<TD><FONT STYLE='font-size:10pt'> </FONT></TD>");
column++;
}
for (i=1; i<=nDays; i++) {
if (i == thisDay) {
document.writeln("</TD><TD BGCOLOR='#FF8040' style='text-align:center;'><B>")
}
else {
document.writeln("</TD><TD BGCOLOR='#F9F9F9' ALIGN='CENTER'><a class='c_day' href ='#'>");
}
document.writeln(i);
if (i == thisDay) document.writeln("</a></TD>")
column++;
if (column == 7) {
document.writeln("<TR>");
column = 0;
}
}
document.writeln("<TR><TD COLSPAN='7' ALIGN='CENTER' VALIGN='TOP' BGCOLOR='#F9F9F9'>")
document.writeln("</TD></TR></TABLE>")
document.writeln("</TD></TR></TABLE>");

}


