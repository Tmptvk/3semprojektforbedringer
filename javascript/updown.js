var scrolled=0;

$(document).ready(function(){


    $("#pilnedimg").on("click" ,function(){
                scrolled=scrolled+50;

				$(".selectwrapper").animate({
				        scrollTop:  scrolled
				   });

			});


    $("#pilopimg").on("click" ,function(){
				scrolled=scrolled-50;

				$(".selectwrapper").animate({
				        scrollTop:  scrolled
				   });

			});


$(".clearValue").on("click" ,function(){
				scrolled=0;
		});


});
