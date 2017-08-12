
/*商品 展示 滚动*/
function $(v){return document.getElementById(v);}

var speed=30;

demo2.innerHTML=demo1.innerHTML;

function MarqueeL(){
	if(demo2.offsetWidth-demo.scrollLeft<=0)
		demo.scrollLeft-=demo1.offsetWidth;
	else
		demo.scrollLeft++;
}

function MarqueeR(){
	if(demo2.offsetWidth-demo.scrollLeft>=255)
		demo.scrollLeft+=demo1.offsetWidth;
	else
		demo.scrollLeft--;
}

var flag=0;
var MyMar;
//var MyMar=setInterval(MarqueeL,speed);
demo.onmouseover=function() {if(MyMar){clearInterval(MyMar)}}
//demo.onmouseout=function() {MyMar=setInterval(MarqueeR,speed)}	
function moveout(way)
{
		if(MyMar)
		{
			clearInterval(MyMar);
		}
}
function moveThis(way){ 
	if(way=='right'){ 
		flag=1;
		if(MyMar)
		{
			clearInterval(MyMar);
		}
		MyMar=setInterval(MarqueeR,speed);
	}
	else{ 
		flag=0;
		if(MyMar)
		{
			clearInterval(MyMar);
		}
		MyMar=setInterval(MarqueeL,speed);
	}	
	if(flag) demo.onmouseout=function() {MyMar=setInterval(MarqueeR,speed)}	
	else demo.onmouseout=function() {MyMar=setInterval(MarqueeL,speed)}
}  