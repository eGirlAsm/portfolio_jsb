/**
 * [ HTML5 Placeholder ]
 * 来源 http://the.deerchao.net/PlaceHolder
 */
(function($){
    $.extend($.fn,{
        xPlaceholder: function(opt){
            var def = {
                color: '#888', //标签颜色
                cls: 'placeholder-label', //标签的ClassName
                lr_padding: 4, // 标签的边距
                lt_padding: -4,
                selector: 'input[placeholder], textarea[placeholder]' //选择器
            };

            $.extend(def,opt);

            // 检测浏览器的支持
            var browserSupported = function(){
                return this._supported !== undefined ? 
                    this._supported :
                    (this._supported = !!('placeholder' in $('<input type="text">')[0]) );
            }

            var init = function(def){
                var calcPositionCss = function(target){
                    var op = $(target).offsetParent().offset();
                    var ot = $(target).offset();

                    return {
                        top: ot.top - op.top + ($(target).outerHeight() - $(target).height()) /2 + def.lt_padding,
                        left: ot.left - op.left + def.lr_padding,
                        width: $(target).width() - def.lr_padding
                    };
                }
                return $(def.selector).each(function(){
                    var $this = $(this);
                
                    if( $this.data('placeholder') ) {
                        var $ol = $this.data('placeholder');
                        $ol.css(calcPositionCss($this));
                        return true;
                    }

                    var possible_line_height = {};
                    if( !$this.is('textarea') && $this.css('height') != 'auto'){
                        possible_line_height = { lineHeight: $this.css('height'), whiteSpace: 'nowrap' };
                    }

                    var ol = $('<label />')
                        .text($this.attr('placeholder'))
                        .addClass(def.cls)
                        .css($.extend({
                            position:'absolute',
                            display: 'inline',
                            float:'none',
                            overflow:'hidden',
                            textAlign: 'left',
                            color: def.color,
                            cursor: 'text',
                            paddingTop: $this.css('padding-top'),
                            paddingLeft: $this.css('padding-left'),
                            fontSize: $this.css('font-size'),
                            fontFamily: $this.css('font-family'),
                            fontStyle: $this.css('font-style'),
                            fontWeight: $this.css('font-weight'),
                            textTransform: $this.css('text-transform'),
                            zIndex: 99
                        }, possible_line_height))
                        .css(calcPositionCss(this))
                        .attr('for', this.id)
                        .data('target',$this)
                        .click(function(){
                            $(this).data('target').focus();
                        })
                        .insertBefore(this);

                    $this.data('placeholder',ol).focus(function(){
                        ol.hide();
                    }).blur(function(){
                        ol[$this.val().length ? 'hide' : 'show']();
                    }).triggerHandler('blur');

                    $(window).resize(function() {
                        var $target = ol.data('target')
                        ol.css(calcPositionCss($target))
                    });
                });
            }

            !browserSupported() && init(def);
        } 
    });
})(jQuery);
