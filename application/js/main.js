var MisterGift = new function(){

	var Menu = new function(){

		var create = function(){
			if( $("#sub-menu").length <= 0 ) {
				var html = '<div id="sub-menu">&nbsp;</div>';
				$("#main").prepend(html);
			};
		};

		var manipulate = function() {

			var submenu = $("#sub-menu");
			var showing = false;
			var styleClassName = "red-gradient-background-vertical";

			var menuMouseOver = function(e){
				var target = $(e.target);
				if (target.is(".main-menu-item-title")) {

					e.preventDefault();
					e.stopPropagation();

					showing = true;

					var item = target.parents("li");

					$("#main-nav li").removeClass(styleClassName);
					item.addClass(styleClassName);
					submenu.html(target.parents("dl").find("dd").html());
					submenu.find("li").addClass(styleClassName);



					var add  = item.is(":last-child") ? 28 : 5;
					var top  = (target.offset().top + 23)  + "px";
					var left = (target.offset().left - add) + "px";

					submenu.css("top", top);
					submenu.css("left", left);

					submenu.show();

				} else {
					showing = false;
				}
			}

			$("#main-nav").mousemove(function(e) {
				menuMouseOver(e);
			}).mouseover(function(e){
				menuMouseOver(e);
			}).mouseenter(function(e) {
				menuMouseOver(e);
			});

			$("#main-nav").mouseleave(function(e){
				if(!showing) {
					$("#main-nav").find("li").removeClass(styleClassName);
					submenu.fadeOut("fast");
				}
			});

			submenu.mouseenter(function(){
				submenu.show();
			});
			submenu.mouseover(function(){
				submenu.show();
			});

			submenu.mouseleave(function(){
				submenu.hide();
				$("#main-nav").find("li").removeClass(styleClassName);
			});

		};

		var start = function() {
			$(document).ready(function(){
				create();
				manipulate();
			});
		}

		var autoInit = function(){
			start();
		}();

	};

	var Footer = new function(){

		var locked = false;

		var create = function(){
			if( $("#hot-footer-bar").length <= 0 ) {
				var html = [
				'<div id="hot-footer-bar" class="wrapper closed">',
					'<h1>Dicas Mister Gift</h1>',
					'<span>+</span>',
				'</div>'
				].join('');
				$("#hot-footer").prepend(html);
			};
		};

		var manipulate = function() {
			$("#hot-footer-bar span").click(function(){
				if (!locked) {
					locked = true;
					var bar  = $("#hot-footer-bar");
					var icon = $(this);
					if(bar.hasClass('closed')) {
						$("#hot-footer-content").slideDown("slow", function(){
							bar.removeClass('closed').addClass('opened');
							icon.html('-');
							locked = false;
						});
					} else {
						$("#hot-footer-content").slideUp("slow", function(){
							bar.addClass('closed').removeClass('opened');
							icon.html('+');
							locked = false;
						});
					}
				}
				return false;
			});
		};

		var start = function() {
			$(document).ready(function(){
				create();
				manipulate();
			});
		}

		var autoInit = function(){
			start();
		}();

	};

};