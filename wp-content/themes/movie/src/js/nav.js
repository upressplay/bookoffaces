;(function(site, undefined){
	"use strict";

	var id = "nav",
	color = "dark",
	trace = site.utilities.trace,
    utils = site.utils,
    menuOpen = false,
    dom = {},
    navCollapsed = false,
    breakPoint = "";

	function init() {

        trace.log(id+" render utils.getBreakPoint = "+utils.getBreakPoint());
        dom.site = $("#site");
        dom.header = $("header");
        dom.scrollUp = $("#scroll-up");
        dom.menuBtn = $("#menu-btn");
        dom.menuCloseBtn = $("#menu-close-btn");
        dom.navBtns = $("#nav-btns"); 
        dom.navBtn = $(".nav-btn"); 
        dom.scheduleMenu = $("#schedule-menu");  
        trace.log('dom.navBtn = '+dom.navBtn);


        dom.menuBtn.click(function(event) {
            openMenu();
        });

        dom.menuCloseBtn.click(function(event) {
            closeMenu();
        });


        dom.scrollUp.click(function(event) {
            scrollToTop();
        });

        dom.site.scroll(function() {
            scrolling();
        });   
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

    }

    /* clicking the scroll up icon */
    function scrollToTop() {
        trace.push('scrollToTop');

        dom.site.animate({ 'scrollTop': '0' }, 500);

        //dom.site.scrollTop(0);

    }

    /* openMenu opens the mobile nav */
    function openMenu() {
        trace.push('openMenu');
        menuOpen = true;
        dom.navBtns.addClass('active');
    }
    /* closeMenu closes the mobile nav */
    function closeMenu() {
        trace.push('closeMenu');
        menuOpen = false;
        dom.navBtns.removeClass('active');
    }

	site.nav = {
	};

	$(function(){
		init();
	});

})(window.site=window.site || {});
