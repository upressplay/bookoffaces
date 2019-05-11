;(function(site, undefined){
	"use strict";

	var id = "home",
	data = [],
	dom = {},
	trace = site.utilities.trace,
	utils = site.utils,
	current = 0,
	imgLoad = [],
	loadCount = 0;

	function init() {
		
	}



	// Public API definitions
	site.home = {
		data:[]
	};

	$(function(){
		init();
	});
})(window.site=window.site || {});
