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
        trace.log('dom.navBtn = '+dom.navBtn);


        dom.menuBtn.click(function(event) {
            openMenu();
        });

        dom.menuCloseBtn.click(function(event) {
            closeMenu();
        });
  
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
