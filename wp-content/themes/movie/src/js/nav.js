(function(site){
	"use strict";

	var trace = {push: function() {}},
    dom = {};

	function init() {

        trace = site.utilities && site.utilities.trace ? site.utilities.trace : {push: function() {}};

        dom.site = $("#site");
        dom.header = $("header");
        dom.scrollUp = $("#scroll-up");
        dom.menuBtn = $("#menu-btn");
        dom.menuCloseBtn = $("#menu-close-btn");
        dom.navBtns = $("#nav-btns"); 
        dom.navBtn = $(".nav-btn"); 

        dom.menuBtn.click(function() {
            openMenu();
        });

        dom.menuCloseBtn.click(function() {
            closeMenu();
        });
  
    }

    /* openMenu opens the mobile nav */
    function openMenu() {
        trace.push('openMenu');
        dom.navBtns.addClass('active');
    }
    /* closeMenu closes the mobile nav */
    function closeMenu() {
        trace.push('closeMenu');
        dom.navBtns.removeClass('active');
    }

	site.nav = {
	};

	$(function(){
		init();
	});

})(window.site=window.site || {});
