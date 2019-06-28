(function(site){
	"use strict";

	var data = [],
	dom = {},
	trace = {push: function() {}};

	function init() {
		
		render();
	}

	function render() {
		
		trace = site.utilities && site.utilities.trace ? site.utilities.trace : {push: function() {}};

		dom.galleries = $( ".gallery" );

		// look for all a galleries and set up pips and arrows //

		dom.galleries.each(function( index ) {
			var gallery = $(this);
			var left = gallery.find('.left');
			var right = gallery.find('.right');
			var thumbs = gallery.find('.thumbs');
			var holder = gallery.find('.holder');
			var pip = gallery.find('.pip');
			var pips = [];

			pip.each(function( pipindex ) {
				var pip = $(this);
				pip.click(function() {
					jump(pipindex,index);
				});
				if(pipindex == 0) pip.addClass('active');
				pips.push(pip);
			});

			data.push({'left':left,'right':right,'thumbs':thumbs,'holder':holder,'pips':pips,'current':0});

			left.click(function() {
				if($(this).hasClass( "active" )) next("left",index);
			});
			right.click(function() {
				if($(this).hasClass( "active" )) next("right",index);
			});

		});

		window.addEventListener("resize", resize);


	}


	/* start galleries over on browser resize */
	function resize() {
		dom.galleries.each(function( index ) {
			jump(0,index);
		});
		


	}

	/* click handler for gallery arrows */
	function next(direction,gallery) {
		var id;
		if(direction == "right") {
			id = data[gallery].current+1;
		} else {
			id = data[gallery].current-1;	
		}
		jump(id,gallery);


	}

	/* pip handler to jump to gallery set */

	function jump(id,gallery) {
		trace.log("jump id = "+id+" gallery = "+gallery);

		var width = data[gallery].holder.width();
		var thumbsWidth = data[gallery].thumbs.width();
		//var left = parseInt(data[gallery].thumbs.css("margin-left"));
		var maxLeft = width - thumbsWidth;

		var distance = id * width * -1;

		if(distance >= 0) {
			distance = 0;
			data[gallery].left.removeClass('active');
		} else {
			data[gallery].left.addClass('active');	
		}

		if(distance <= maxLeft) {
			distance = maxLeft;
			data[gallery].right.removeClass('active');
		} else {
			data[gallery].right.addClass('active');	
		}


		data[gallery].thumbs.css("margin-left",distance+"px");

		data[gallery].pips[data[gallery].current].removeClass('active');
		data[gallery].current = id;

		data[gallery].pips[data[gallery].current].addClass('active');


	}

	// Public API definitions
	site.home = {
		data:[]
	};

	$(function(){
		init();
	});
})(window.site=window.site || {});
