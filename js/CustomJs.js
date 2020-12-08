(function($) {
  $.expr[":"].onScreen = function(elem) {
    var $window = $(window)
    var viewport_top = $window.scrollTop()
    var viewport_height = $window.height()
    var viewport_bottom = viewport_top + viewport_height
    var $elem = $(elem)
    var top = $elem.offset().top
    var height = $elem.height()
    var bottom = top + height

    return (top >= viewport_top && top < viewport_bottom) ||
           (bottom > viewport_top && bottom <= viewport_bottom) ||
           (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
  }
})(jQuery);
function animation_1(){
	  setTimeout(function () {
		$('.Element_Animation, .Element_Animation_2, .Element_Animation_3').filter(":onScreen").addClass('active');
	 }, 500);
	}
$(window).scroll(function() { 
	animation_1();
});
$(window).on('load', function(){
		animation_1();
	});



$(document).ready(function(){
	function stickymenu(){
		var homeHeight = $('.home_screens').innerHeight();
		/*console.log(homeHeight);*/

	}
	stickymenu();

	/* =======  menu activation on scroll ====== */
	var aboutCnt = $('#about').offset().top;
	$(window).scroll(function() {  
		if ($(window).scrollTop() > aboutCnt) {
			$('header nav ul li a').removeClass('active');
			$('.about_menu').addClass('active');
		}
		else {
			$('.about_menu').removeClass('active');
		}  
	});

	var expertiseCnt = $('#expertise').offset().top;
	$(window).scroll(function() {  
		if ($(window).scrollTop() > expertiseCnt) {
			$('header nav ul li a').removeClass('active');
			$('.expertise_menu').addClass('active');
		}
		else {
			$('.expertise_menu').removeClass('active');
		}  
	});

	var referenzenCnt = $('#referenzen').offset().top;
	$(window).scroll(function() {  
		if ($(window).scrollTop() > referenzenCnt) {
			$('header nav ul li a').removeClass('active');
			$('.referenzen_menu').addClass('active');
		}
		else {
			$('.referenzen_menu').removeClass('active');
		}  
	});
	var servicesCnt = $('#services').offset().top;
	$(window).scroll(function() {  
		if ($(window).scrollTop() > servicesCnt) {
			$('header nav ul li a').removeClass('active');
			$('.services_menu').addClass('active');
		}
		else {
			$('.services_menu').removeClass('active');
		}  
	});
	var teamCnt = $('#team').offset().top;
	$(window).scroll(function() {  
		if ($(window).scrollTop() > teamCnt) {
			$('header nav ul li a').removeClass('active');
			$('.team_menu').addClass('active');
		}
		else {
			$('.team_menu').removeClass('active');
		}  
	});
	var careersCnt = $('#careers').offset().top;
	$(window).scroll(function() {  
		if ($(window).scrollTop() > careersCnt) {
			$('header nav ul li a').removeClass('active');
			$('.careers_menu').addClass('active');
		}
		else {
			$('.careers_menu').removeClass('active');
		}  
	});
	var contactCnt = $('#contact').offset().top;
	$(window).scroll(function() {  
		if ($(window).scrollTop() > contactCnt) {
			$('header nav ul li a').removeClass('active');
			$('.contact_menu').addClass('active');
		}
		else {
			$('.contact_menu').removeClass('active');
		}  
	});



	/*$(".services .tab-ul li").click(function(){
		$(".services .tab-ul li").removeClass('active');
		$(this).addClass('active');
		var serviceMenu = $(this).attr("tab_head");
		$(".services .tab_cnt").removeClass('active');
		$("#"+serviceMenu).addClass("active");
		console.log(serviceMenu);
	});*/


	$(".services .tab-ul li").click(function(){
		$(".services .tab-ul li").removeClass('active');
		$(this).addClass('active');
		var serviceMenu = $(this).attr("tab_head");
		$(".services .tab_cnt").hide();
		$("#"+serviceMenu).fadeIn(2000);
		console.log(serviceMenu);
	});

	/*$(".about_tab .tab-ul li").click(function(){
		$(".about_tab .tab-ul li").removeClass('active');
		$(this).addClass('active');
		var serviceMenu = $(this).attr("tab_head");
		$(".about_tab .tab_cnt").removeClass('active');
		$("#"+serviceMenu).addClass("active");
		console.log(serviceMenu);
	});*/


	$(".about_tab .tab-ul li").click(function(){
		$(".about_tab .tab-ul li").removeClass('active');
		$(this).addClass('active');
		var aboutMenu = $(this).attr("tab_head");
		$(".about_tab .tab_cnt").hide();
		$("#"+aboutMenu).fadeIn(2000);
		console.log(aboutMenu);
	});

	$(".expertise_tab .tab-ul li").click(function(){
		$(".expertise_tab .tab-ul li").removeClass('active');
		$(this).addClass('active');
		var serviceMenu = $(this).attr("tab_head");
		$(".expertise_tab .tab_cnt").hide();
		$("#"+serviceMenu).fadeIn(2000);
		console.log(serviceMenu);
	});

$(".team .tab-ul li").click(function(){
		$(".team .tab-ul li").removeClass('active');
		$(this).addClass('active');
		var teamMenu = $(this).attr("tab_head");
		$(".team .tab_cnt").hide();
		$("#"+teamMenu).fadeIn(2000);
		console.log(teamMenu);
	});


	$(".home_screens .top_bar .b_menu_btn").click(function(){
		$(".res_menu").toggleClass('active');
		$(".body_dark").toggleClass('active');
	});
	$(".res_menu .relative .close").click(function(){
		$(".res_menu").removeClass('active');
		$(".body_dark").removeClass('active');
	});
	$(".res_menu_cnt ul li a").click(function(){
		$(".res_menu").removeClass('active');
		$(".body_dark").removeClass('active');
	});
	$("header nav ul li a").click(function(){
		$("header nav ul li a").removeClass('active');
		$(this).addClass('active');
	});

	$(".tab_cnt h2").click(function(){

		$(".tab_cnt .res_tab").slideUp();
					var show_cnt = $(this).next('.tab_cnt .res_tab');
					if(show_cnt.css('display') == 'block')
						{
							show_cnt.slideUp();
							}
					else{
							$('.tab_cnt .res_tab').slideUp();
							show_cnt.slideDown();
						}

		/*
		$(".tab_cnt .res_tab").slideUp();
		$(this).next('.tab_cnt .res_tab').slideDown();*/
	});

	$(".cookie_full .btn").click(function(){
		$(".cookie_full").removeClass('active');
	});



	$(window).scroll(function(){
		var sc = $(window).scrollTop();
		var homeHeight = $('.home_screens').innerHeight();
		if (sc > homeHeight) {
			$("header").addClass("fixed");
		}
		else {
			$("header").removeClass("fixed");
		}
	});

	$('.pagescroll').on('click',function (e) {
			e.preventDefault();

			var target = this.hash;
			var $target = $(target);
			
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
				}, 1000, 'swing', function () {
				window.location.hash = target;
			});
});

	/*Burgermenu Activations*/

	$("#bm_1").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='one']").addClass('active');
		$('.services .tab_cnt').removeClass('active');
		$('#one').show();
		$('#five, #two, #three, #four, #six').hide();
	});

	$("#bm_2").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='two']").addClass('active');
		$('.services .tab_cnt').removeClass('active');
		$('#two').show();
		$('#one, #five, #three, #four, #six').hide();
	});

	$("#bm_3").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='three']").addClass('active');
		$('.services .tab_cnt').removeClass('active');
		$('#three').show();
		$('#one, #two, #five, #four, #six').hide();
	});

	$("#bm_4").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='four']").addClass('active');
		$('.services .tab_cnt').removeClass('active');
		$('#four').show();
		$('#one, #two, #three, #five, #six').hide();
	});

	$("#bm_5").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='five']").addClass('active');
		$('.services .tab_cnt').removeClass('active');
		$('#five').show();
		$('#one, #two, #three, #four, #six').hide();
		/*$('#five').addClass('active');*/
	});

	$("#bm_6").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='six']").addClass('active');
		$('.services .tab_cnt').removeClass('active');
		$('#six').show();
		$('#one, #two, #three, #four, #five').hide();
	});



	$("#b_1").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='one']").addClass('active');
		$('.tab_cnt').removeClass('active');
		$('#one').addClass('active');
	});

	$("#b_2").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='two']").addClass('active');
		$('.tab_cnt').removeClass('active');
		$('#two').addClass('active');
	});

	$("#b_3").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='three']").addClass('active');
		$('.tab_cnt').removeClass('active');
		$('#three').addClass('active');
	});

	$("#b_4").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='four']").addClass('active');
		$('.tab_cnt').removeClass('active');
		$('#four').addClass('active');
	});

	$("#b_5").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='five']").addClass('active');
		$('.tab_cnt').removeClass('active');
		$('#five').addClass('active');
		
	});

	$("#b_6").click(function(){
		$('.services .tab-ul li').removeClass('active');
		$(".services .tab-ul li[tab_head|='six']").addClass('active');
		$('.tab_cnt').removeClass('active');
		$('#six').addClass('active');
	});
	
$(".morebtn_div").click(function(){
		$(this).prev('#morecnt').slideToggle();
	});


	$(window).scroll(function(){
		var sc = $(window).scrollTop();
		if (sc > 1) {
			$(".home_screens .top_bar").addClass("active");
		}
		else {
			$(".home_screens .top_bar").removeClass("active");
		}

	});


function sidemenuScroll(){
		var Menu_height = $('.res_menu .relative').innerHeight();
		var Menu_header_height = $('.res_menu .relative .header').innerHeight();
		var Menu_footer_height = $('.res_menu .relative .footer').innerHeight();
		var max_menu_height = Menu_height - 230;
		$('.res_menu_cnt ul.level_1_ul').css('height', max_menu_height)
		console.log(Menu_footer_height);

	}
	sidemenuScroll();

	$(window).resize(function(){
    	sidemenuScroll();
	});




});

