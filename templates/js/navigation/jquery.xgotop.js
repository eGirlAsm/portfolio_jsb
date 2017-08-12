/**
配合CSS 来使用
#gotop{
    display: none;
    bottom: 110px;
    cursor: pointer;
    height: 45px;
    left:50%;
    margin: 0 0 0 515px;
    overflow: hidden;
    position: fixed;
    width: 47px;
    _position: absolute;
    _top: expression(documentElement.scrollTop+documentElement.clientHeight-this.clientHeight-110);
}
* html{ 
    background:url(null) no-repeat fixed; 
}
*/

(function ($) {
    $.extend($.fn, {
        xGotop: function(opts){
            opts = $.extend({}, 
                {  
                    node: $('#gotop'), // 滚动的按钮
                    speed: 600, //滚动的速度
                    show: true
                }, opts);

            var init = function(){
                opts.node.bind('click', function() {
                    var doc = $(document).find("html,body");
                    if (doc.filter(":animated").size()) {
                        doc.stop()
                    }
                    doc.animate({
                        scrollTop: 0
                    },
                    opts.speed);
                    return false;
                });
                if(opts.show){
                    showState();
                }
            }

            var showState = function(){
                var state = $(document).scrollTop() > 0 ? 'show' : 'hide';
                opts.node[state]();
            }
            if(opts.show){
                $(window).bind('scroll', function(){
                    showState();
                });
            }
            init();
        }
    });
})(jQuery);