(function(site){
	"use strict";

	var id = "scrolling",
	trace = site.utilities.trace,
    utils = site.utils,
    dom = {},
    data = [];

	function init() {

        trace.log(id+" render utils.getBreakPoint = "+utils.getBreakPoint());
        dom.site = $("#site");
        dom.scrollUp = $("#scroll-up");
        trace.log('dom.navBtn = '+dom.navBtn);


        dom.scrollUp.click(function() {
            scrollToTop();
        });

        dom.site.scroll(function() {
            scrolling();
        });

        dom.scrolling = $( ".scrolling" );

        // look for all a background scrolling elements and set up pips and arrows //

        dom.scrolling.each(function( ) {
            var elem = $(this);
            data.push({'obj':elem});
        }); 
        scrolling();  
    }

    /* watches the user scroll and turns on and off the scroll up icon */
    function scrolling() {
        //trace.push('scrolling');

        var scrollTop = dom.site.scrollTop();
        var distance = 300;
        //trace.push('scrollTop = '+scrollTop);

        if(scrollTop > distance) {
            dom.scrollUp.addClass('active');
        } else {
            dom.scrollUp.removeClass('active');
        }

        var windowH = utils.getHeight();
        trace.log('windowH = '+windowH);
        data.forEach(function(element) {
            
            var top = element.obj.offset().top;
            var percent = ((windowH-top)/(windowH*1.5))*100;
            if(percent < 0) percent = 0;
            if(percent > 100) percent = 100;

            element.obj.css({'background-position':'0% '+percent+'%'});

            trace.log('top = '+top+' windowH = '+windowH+' percent = '+percent);
        });
    
    }

    /* clicking the scroll up icon */
    function scrollToTop() {
        trace.push('scrollToTop');

        dom.site.animate({ 'scrollTop': '0' }, 500);

        //dom.site.scrollTop(0);

    }

   

	site.nav = {
	};

	$(function(){
		init();
	});

})(window.site=window.site || {});
