jQuery.noConflict(),function(e){e(function(){function o(){e(".wpfbe_slider").slick({dots:!1,infinite:!1,arrows:!1,speed:300,slidesToShow:1,autoplay:!0,autoplaySpeed:3e3,adaptiveHeight:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:1,autoplay:!0,autoplaySpeed:3e3,infinite:!0,arrows:!1,dots:!1,adaptiveHeight:!0}},{breakpoint:600,settings:{slidesToShow:1,autoplay:!0,autoplaySpeed:3e3,arrows:!1,adaptiveHeight:!0}},{breakpoint:480,settings:{slidesToShow:1,autoplay:!0,autoplaySpeed:3e3,arrows:!1,adaptiveHeight:!0}}]})}o(),e(document).ajaxComplete(function(o,a,t){e("#facebook_events_wrap .fbecol").hover(function(){e(this).addClass("fbecolhover"),e(this).removeClass("fbecolhoverOut")},function(){e(this).removeClass("fbecolhover"),e(this).addClass("fbecolhoverOut")}),e(".fbecol").click(function(){url=e(this).data("id"),location.href=url}),e(".wpfbe_slider .fbecol").hover(function(){e(this).addClass("fbecolhover"),e(this).removeClass("fbecolhoverOut")},function(){e(this).removeClass("fbecolhover"),e(this).addClass("fbecolhoverOut")}),e(".fbecol").click(function(){url=e(this).data("id"),location.href=url}),e(".fbe-sidebar-post").hover(function(){e(this).addClass("fbecolhover"),e(this).removeClass("fbecolhoverOut")},function(){e(this).removeClass("fbecolhover"),e(this).addClass("fbecolhoverOut")}),e(".fbe-sidebar-post").click(function(){url=e(this).data("id"),location.href=url})}),e(document).ready(function(){function o(){e.ajax({url:fbeAjax.ajaxurl,type:"POST",data:{action:"load_facebook_events",page:1},success:function(o){e("#facebook_events_wrap").append(o),e("#load_more_fbe").data("id",2)},error:function(){}})}e("#load_more_fbe").hide(),mainSiteBtnColor=e("a").css("color");var a={defaultColor:mainSiteBtnColor,change:function(e,o){},clear:function(){},hide:!0,palettes:!0};e(".wpfbe-color-field").length&&e(".wpfbe-color-field").wpColorPicker(a),o(),e(".fbe-facebook-css").hide().ajaxStart(function(){e(this).show()}).ajaxStop(function(){e(this).hide()});var t,i=!1,s=0,l=0;0===e("#facebook_events_wrap").length&&(e(window).scroll(function(){var o=e(this).scrollTop();o>s&&e(window).scrollTop()+e(window).height()>e(document).height()-100&&(l>=maxPages?window.console&&console.log("TRIGGER ABORTED"):i||(i=!0,e("#load_more_fbe").trigger("click").delay(1e3),window.console&&console.log("TRIGGER ")))}),e("#load_more_fbe").on("click",function(){t=e.ajax({url:fbeAjax.ajaxurl,type:"POST",data:{action:"load_facebook_events",page:e("#load_more_fbe").data("id")},success:function(o){i=!1,l=e("#load_more_fbe").data("id")+1,maxPages=e("#maxPages").data("id"),l>maxPages?t.abort():(e(o).hide().appendTo("#facebook_events_wrap").fadeIn(600),e("#load_more_fbe").data("id",l))}})}))})})}(jQuery);