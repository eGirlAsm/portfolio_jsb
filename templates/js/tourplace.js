(function(a){var b={numOfCol:5,offsetX:5,offsetY:5,blockElement:"div"};var c,d;var e=[];if(!Array.prototype.indexOf){Array.prototype.indexOf=function(a){var b=this.length>>>0;var c=Number(arguments[1])||0;c=c<0?Math.ceil(c):Math.floor(c);if(c<0)c+=b;for(;c<b;c++){if(c in this&&this[c]===a)return c}return-1}}var f=function(){e=[];for(var a=0;a<b.numOfCol;a++){g("empty-"+a,a,0,1,-b.offsetY)}};var g=function(a,c,d,f,g){for(var h=0;h<f;h++){var i=new Object;i.x=c+h;i.size=f;i.endY=d+g+b.offsetY*2;e.push(i)}};var h=function(a,b){for(var c=0;c<b;c++){var d=i(a+c,"x");e.splice(d,1)}};var i=function(a,b){for(var c=0;c<e.length;c++){var d=e[c];if(b=="x"&&d.x==a){return c}else if(b=="endY"&&d.endY==a){return c}}};var j=function(a,b){var c=[];for(var d=0;d<b;d++){c.push(e[i(a+d,"x")].endY)}var f=Math.min.apply(Math,c);var g=Math.max.apply(Math,c);return[f,g,c.indexOf(f)]};var k=function(a){if(a>1){var b=e.length-a;var c=false;var d,f;for(var g=0;g<e.length;g++){var h=e[g];var i=h.x;if(i>=0&&i<=b){var k=j(i,a);if(!c){c=true;d=k;f=i}else{if(k[1]<d[1]){d=k;f=i}}}}return[f,d[1]]}else{d=j(0,e.length);return[d[2],d[0]]}};var l=function(a,c){if(!a.data("size")||a.data("size")<0){a.data("size",1)}else if(a.data("size")>b.numOfCol){a.data("size",b.numOfCol)}var e=k(a.data("size"));var f=d*a.data("size")-(a.outerWidth()-a.width());a.css({width:f-b.offsetX*2,left:e[0]*d,top:e[1],position:"absolute"});var i=a.outerHeight();h(e[0],a.data("size"));g(a.attr("id"),e[0],e[1],a.data("size"),i)};a.fn.BlocksIt=function(g){if(g&&typeof g==="object"){a.extend(b,g)}c=a(this);d=c.width()/b.numOfCol;f();c.children(b.blockElement).each(function(b){l(a(this),b)});var h=j(0,e.length);c.height(h[1]+b.offsetY);return this}})(jQuery)


$(document).ready(function() {
	//vendor script
	$('#header')
	.css({ 'top':-50 })
	.delay(1000)
	.animate({'top': 0}, 800);
	
	$('#footer')
	.css({ 'bottom':-15 })
	.delay(1000)
	.animate({'bottom': 0}, 800);
	
	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 5,
			offsetX: 8,
			offsetY: 8
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
});


$(document).ready(function(){
	//Examples of how to assign the ColorBox event to elements
	$(".group1").colorbox({rel:'group1'});
	$(".group2").colorbox({rel:'group2', transition:"fade"});
	$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
	$(".group4").colorbox({rel:'group4', slideshow:true});
	$(".ajax").colorbox();
	$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	$(".inline").colorbox({inline:true, width:"50%"});
	$(".callbacks").colorbox({
		onOpen:function(){ alert('onOpen: colorbox is about to open'); },
		onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
		onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
		onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
		onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
	});
	
	//Example of preserving a JavaScript event for inline calls.
	$("#click").click(function(){ 
		$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
		return false;
	});
});