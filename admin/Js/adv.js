function FloatTopDiv()    
    {    
        startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;    
        startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;    
        var d = document;    
        function ml(id)    
        {    
            var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];  
            el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};    
            el.x = startRX;    
            el.y = startRY;    
            return el;    
        }    
        function m2(id)    
        {    
            var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];    
            e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};    
            e2.x = startLX;    
            e2.y = startLY;    
            return e2;    
        }    
        window.stayTopLeft=function()    
        {    
            if (document.documentElement && document.documentElement.scrollTop)    
                var pY =  document.documentElement.scrollTop;    
            else if (document.body)    
                var pY =  document.body.scrollTop;    
             if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else  {startLY = TopAdjust;startRY = TopAdjust;};    
            ftlObj.y += (pY+startRY-ftlObj.y)/16;    
            ftlObj.sP(ftlObj.x, ftlObj.y);    
            ftlObj2.y += (pY+startLY-ftlObj2.y)/16;    
            ftlObj2.sP(ftlObj2.x, ftlObj2.y);    
            setTimeout("stayTopLeft()", 1);    
        }    
        ftlObj = ml("adv-right");    
        //stayTopLeft();    
        ftlObj2 = m2("adv-left");    
        stayTopLeft();    
    }    
    function ShowAdDiv()    
    {    
        var objAdDivRight = document.getElementById("adv-right");    
        var objAdDivLeft = document.getElementById("adv-left");      
        if (document.body.clientWidth < 1000)    
        {    
            objAdDivRight.style.display = "none";    
            objAdDivLeft.style.display = "none";    
        }    
        else    
        {    
            objAdDivRight.style.display = "block";    
            objAdDivLeft.style.display = "block";    
            FloatTopDiv();    
        }    
    }
    document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 57;RightAdjust = 10;TopAdjust = 200;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");    
    $(function(){
                $(window).scroll(function () {
                if ($(this).scrollTop() > 100) $('#topcontrol').fadeIn();
                else $('#topcontrol').fadeOut();
                });
                $('#topcontrol').click(function () {
                $('body,html').animate({scrollTop: 0}, 'slow');
                });
                });