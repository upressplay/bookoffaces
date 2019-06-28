(function(site){
	"use strict";

	var id = "overlay",
	dom = {},
	trace = {push: function() {}},
	current = 0,
	next = 0,
	currentContent = {},
	videos = {},
	photos = {},
	articles = {},
	bios = {};

	function init() {

		trace = site.utilities && site.utilities.trace ? site.utilities.trace : {push: function() {}};

		videos = {'id':'videos','content':[]};
		photos = {'id':'photos', 'content':[]};
		articles = {'id':'articles', 'content':[]};
		bios = {'id':'bios', 'content':[]};
		
		dom.site = $("#site");
		trace.log(id+" render!");
		dom.videos = $( ".videos" );
		dom.videos.each(function( index ) {
			
			var btn = $(this);
			btn.attr('data-id',index);
			btn.click(function() {
				event.preventDefault();
                openOverlay(index,videos);
            });
			videos.content.push(btn);

		});
		trace.log('dom.videos'+dom.videos);

		dom.gallery = $( ".photos" );
		dom.gallery.each(function( index ) {

			var btn = $(this);
			btn.attr('data-id',index);
			btn.click(function() {
				event.preventDefault();
                openOverlay(index,photos);
            });
			photos.content.push(btn);
		});

		dom.article = $( ".article" );
		dom.article.each(function( index ) {

			var btn = $(this);
			btn.attr('data-id',index);
			btn.click(function() {
				event.preventDefault();
                openOverlay(index,articles);
            });
			articles.content.push(btn);
		});

		dom.bios = $( ".bios" );
		dom.bios.each(function( index ) {

			var btn = $(this);
			btn.attr('data-id',index);
			btn.click(function() {
				event.preventDefault();
                openOverlay(index,bios);
            });
			bios.content.push(btn);
		});

		dom.overlay = $('.overlay');
		dom.closeBtn = dom.overlay.find('.close-btn');
		dom.closeBtn.click(function() {
            closeOverlay();
        });

        dom.holder = dom.overlay.find('.holder');
        dom.container = dom.overlay.find('.container');

        dom.left = dom.overlay.find('.left');
        dom.right = dom.overlay.find('.right');

        dom.left.click(function() {
            nextContent('left');
        });
        dom.right.click(function() {
            nextContent('right');
        });

		dom.overlay.on('swipeleft', function(){
			trace.log('left');
			nextContent('left');
		}).on('swiperight', function(){
			trace.log('right');
			nextContent('right');
		});

	}

	/* click/swipe handler to cycle through videos, photos or article */

	function nextContent(direction) {
		trace.log('next direction = '+direction);
		if(direction == "right") {
			next = current +1;
		} else {
			next = current -1;
		}
		trace.log('currentContent.length = '+currentContent.content.length);
		if(next > currentContent.content.length-1) {
			next = 0;
		}
		if(next < 0) {
			next = currentContent.content.length-1;
		}
		trace.log('next = '+next);
		closeContent(next);

	}
	
	/* opens the initial Overlay */

	function openOverlay(id,type) {
		trace.log('openOverlay id '+id);

		currentContent = type;
		
		openContent(id);
		dom.overlay.addClass('active');
	}

	/* closes the Overlay from the close btn */

	function closeOverlay() {
		trace.log('closeOverlay');
		dom.overlay.removeClass('active');
		dom.container.html('');
		//closePost();	
	}

	/* opens the Content holer, while keeping the overlay open */
	function openContent(id) {
		trace.log('openContent id = '+id);
		var entry = currentContent.content[id];
		var type = 	currentContent.id;	

		var hires = entry.attr('data-hires');
		var vidid = entry.attr('data-vidid');
		//var vidfile = entry.attr('data-vidfile');
		var vidtype = entry.attr('data-vidtype');
		var width = parseInt(entry.attr('data-hires-w'));
		var height = parseInt(entry.attr('data-hires-h'));
		var content = entry.parent().find('.content').html();
		var title = entry.find('.title').html();
		var date = entry.find('.date').html();
		var sub = entry.find('.sub').html();
		var url = entry.attr('href');
		var excerpt = entry.find('.excerpt').text();

		trace.log("width = "+width+" height = "+height);
		trace.log("url = "+url+" excerpt = "+excerpt);

		if(height >= width) {
			dom.container.addClass('tall');
		} else {
			trace.log('remove tall');
			dom.container.removeClass('tall');	
		}
		current = id;
		trace.log("content = "+content+" vidid = "+vidid);
		dom.container.html('');


		if(type == "videos") {
			trace.log("this is a video vidtype = "+vidtype);
			if(vidtype == "youtube") dom.container.html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'+vidid+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
			if(vidtype == "vimeo") dom.container.html('<iframe src="https://player.vimeo.com/video/'+vidid+'" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>');

			dom.container.addClass('videos');
		} else {
			dom.container.removeClass('videos');	
		}

		if(type == "photos") {
			trace.log("this is a photo");
			dom.container.addClass('photos');
			dom.container.append('<img src="'+hires+'"/>');

		} else {
			dom.container.removeClass('photos');	
		}


		if(type == "articles") {
			trace.log("this is a article");
			dom.holder.addClass('articles');
			dom.container.addClass('articles');
			var article = '<div class="featured-img"><img src="'+hires+'"/></div><!-- featured-img -->';
			article +='<div class="title">'+title+'</div>';
			if(sub != undefined) {
				article +='<div class="sub">'+sub+'</div>';
			}
			if(date != undefined) {
				article +='<div class="sub">'+date+'</div>';
			}
			article +='<div class="share-btns">';
			article +='<div class="share" data-type="facebook" data-title="'+title+'" data-url="'+url+'" data-desc="'+excerpt+'"><span class="fab fa-facebook-square" aria-hidden="true"></span><span class="screen-reader-text">Facebook</span> </div>';
			article +='<div class="share" data-type="twitter" data-title="'+title+'" data-url="'+url+'" data-desc="'+excerpt+'"><span class="fab fa-twitter-square" aria-hidden="true"></span><span class="screen-reader-text">Twitter</span> </div>';
			article +='</div>';

			article +='<div class="content">'+content+'</div>';

			dom.container.append(article);

			dom.share = $( ".share" );
			dom.share.each(function( index ) {
				
				var btn = $(this);
				var options = {};
				options.title = btn.attr('data-title');
				options.url = btn.attr('data-url');
				options.desc = btn.attr('data-desc');
				options.type = btn.attr('data-type');

				btn.click(function() {
					site.share.url(options);
	            });

				videos.content.push(btn);

			});

		} else {
			dom.container.removeClass('articles');	
		}

		if(type == "bios") {
			trace.log("this is a bio");
			dom.container.addClass('bios');

			var bio = '<img class="featured-img" src="'+hires+'"/>';
				//bio +='<span class="info">';
					bio +='<div class="title">'+title+'</div>';
		if(sub != undefined) bio +='<div class="sub">'+sub+'</div>';
		if(date != undefined) bio +='<div class="sub">'+date+'</div>';
					bio +='<div class="content">'+content+'</div>';
				//bio +='</span><!-- info -->';

			dom.container.append(bio);

		} else {
			dom.container.removeClass('bios');	
		}


		dom.container.addClass('active');
	}

	/* passes next content id to openContent after closing the Content holder */
	function closeContent(id) {
		trace.log("closeContent "); 
		dom.container.removeClass('active');
		openContent(id);
	}

	// Public API definitions
	site.overlay = {

	};

	$(function(){
		init();
	});
})(window.site=window.site || {});
