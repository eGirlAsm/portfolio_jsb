 //动态加载js 
    function loadJs(jsUrl, fCallBack) {  
        var _script = document.createElement('script'); 

        _script.setAttribute('type', 'text/javascript');  
        _script.setAttribute('src', jsUrl);  


        document.getElementsByTagName("head")[0].appendChild(_script);  
        if (typeof fCallBack != 'undefined') {  
            //if ($.browser.msie) //借助jQuery判断ie 
            if ($.browser.msie && ($.browser.version == "6.0") && !$.support.style) {  
                _script.onreadystatechange = function() {  
                    if (this.readyState == 'loaded' || this.readyState == 'complete') {  
                        fCallBack();  
                    }  
                };  
            } else {  
                _script.onreadystatechange = function() {  
                    fCallBack();  
                };  
            }  
        }  
    }  
     
    var cityIdUrl = 'http://61.4.185.48:81/g/';  
    function getWeather(f_cb) {  

        loadJs(cityIdUrl, function() { 
            if (typeof id != 'undefined') {  
                var curDayWeather; //可以在此添加缓存机制 
                //根据不同城市的id获取它的天气预报 
                $.getJSON("http://m.weather.com.cn/data/101190101.html", function(data) { 

                    var w_info = data.weatherinfo;  

                    curDayWeather = w_info.weather1; //json对象 
alert(w_info.city); 
alert("fuck..."+curDayWeather); 
                    //下面可以尽情地解析获取到的天气数据,如果要获取近几天和未来的数据可以在此进行扩展 
                    f_cb(curDayWeather);  
                });  
            }  
        });  
    } 
    //调用之 
    getWeather(function(weather_data) {  
        //这里把拿到的weather_data放到你想要的位置。 
alert(weather_data); 
    }); 