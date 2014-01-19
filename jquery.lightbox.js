/**
* jquery.lightbox.js v1.0.0 - jQuery plugin to show popups over a lightbox
* https://github.com/SaeidMohadjer/jquery.lightbox/
* Copyright 2014 Saeid Mohadjer
* Released under the MIT license - http://opensource.org/licenses/MIT
*/

;(function($) {		
	$.fn.lightbox = function( pluginOptions ) {	
		var defaultOptions = {
			modal : false,
			has_curtain: true,
			relative_to: 'window',
			onClosed  : function() {},
			//align : 'center',  // 'top', 'center'
			//position: 'auto', //'auto', 'manual'
			left: 'center',
			top: 'center',
			hide_browser_scrollbar: false,
			curtain: {
				opacity: 0.65,
				color: '#000'
			}
		}
		var options = $.extend({}, defaultOptions, pluginOptions);	
				
		//private properties
		var popup = this;
		var $parent;
		var scroll_top = 0;
		var pos = popup.css('position');
		
		//public properties
		popup.opened = false;
		
		//public methods
		popup.redraw = function() {
			position_popup();
		}
					
		var init = function() {
			popup.opened = true;

			if (options.relative_to == 'window') {
				$parent = $(window);
				scroll_top = $parent.scrollTop();
			} else {
				$parent = popup.parent();
				$parent.data('position', $parent.css('position'));					
				$parent.css('position', 'relative');
			}	
			
			if (popup.find('.close').length > 0) {
				popup.find('.close').bind('touchstart click', function(e) {
					e.preventDefault();
					e.stopPropagation();
					close_popup({'event':e});
				});
			}	
							
			if (options.hide_browser_scrollbar) {	
				//store current overflow values before changing them
				$('html').data('overflow-y', $('html').css('overflow-y'));
				$('html').data('overflow', $('html').css('overflow'));
				$('html').css('overflow-y','hidden');
				$('html').css('overflow','hidden');
			}
			
			$(window).resize(resizeCallback);
			position_popup();	
			popup.fadeIn();	

			if (options.has_curtain) {
				add_curtain();	
				resize_curtain();			
			}
		};	
		
		var add_curtain = function() {
			$('body').append('<div id="overlay"></div>');
			$('#overlay').css({				
				position: 'absolute',
				display: 'none',
				top: 0,
				left: 0,
				'z-index': popup.css('z-index') - 1,
				width: '100%',				
				height: $(document).height() + 'px',				
				opacity: options.curtain.opacity,				
				background: options.curtain.color
			}).fadeIn(250);
			
			

			if (!options.modal) {
				$('#overlay').bind('touchstart click', function(e) {
					e.preventDefault();
					e.stopPropagation();
					close_popup({'event':e});
				});				
			}		
		}
		
		var resizeCallback = function() {
			resize_curtain();
			position_popup();		
		}		
		
		var position_popup = function() {
			var left = 0, top;

			if (options.left == 'center') {
				left += ( $parent.width() - popup.outerWidth() )/2 + $parent.scrollLeft();							
			} else {
				left += options.left;			
			}
			
			
			if (options.top == 'center') {
				if (pos == "absolute") {
					top = ( $(window).height() - popup.outerHeight() )/2 + $parent.scrollTop();			
				} else {
					//popup has fixed position
					top = ( $(window).height() - popup.outerHeight() )/2;
				}

				//if popup is taller than viewport top would be negative. To fix that:
				if ( top < 0 ) top = 0;
			
			} else {
				top = options.top;			
			}
			
			

			popup.css({
				'left': left, 
				'top': top
			});
			
					

		}  

		var resize_curtain = function() {
			var curtain_height;	
			if ( $(document).height() > $(window).height() ) {
				curtain_height = $(document).height();
			} else {
				curtain_height = $(window).height();
			}				
			$('#overlay').height(curtain_height);
		}
		
		var close_popup = function(params) {
			//undoing effects of plugin
			popup.css('display', 'none');
			$('#overlay').remove();	
			$(window).unbind('resize', resizeCallback);				
			
			if (params.event) {
				$(params.event.target).unbind('click');
			}
			
			popup.opened = false;			
			if (options.close) { 
				options.close();
				options.close = null;
			}
			
			if (options.hide_browser_scrollbar) {
				$('html').css('overflow-y', $('html').data('overflow-y'));
				$('html').css('overflow', $('html').data('overflow'));
				$parent.scrollTop(scroll_top);
			}
			
			if (options.relative_to != 'window') {
				$parent.css('position', $parent.data('position'));
			}			
		}	
		
		this.close = function() {
			close_popup({});
		}
		
		//if browser's scrollbar on page load is not at 0, for example if URL has a hash tag,
		//below code will make sure popup remains visible. Required in all browsers except Firefox
		//which return 0 for $(window).scrollTop on window.onload or 
		//domReady even if scrollbar is not at 0 position
		$(window).scroll(function() {
			scroll_top = $(window).scrollTop();
			position_popup();
			$(window).unbind('scroll');
		});
		
		init();
		return this;
	}
}) (jQuery);