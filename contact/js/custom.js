/*--------------------------------------------------------------
    File Name: custom.js
    Template Name: MagZone - Responsive HTML5 Template
    Created By: htmldotdesign
    Envato Profile: https://themeforest.net/user/htmldotdesign
    Website: https://html.design
    Version: 1.0
--------------------------------------------------------------*/

'use stick'

/*-------------------------------------------------------------
	1. loader js
--------------------------------------------------------------*/	

$(window).on('load', function() {
    $(".bg_load").fadeOut("slow");
})

/*-------------------------------------------------------------
	2. menu js
--------------------------------------------------------------*/	

$("#cssmenu").menumaker({
	title: "Menu",
	format: "multitoggle"
});

/*-------------------------------------------------------------
	3. main slider js
--------------------------------------------------------------*/	

$(function() {
   	Slider.init();
});

/*-------------------------------------------------------------
	4. veticle news slider js
--------------------------------------------------------------*/	

$('.carousel').carousel({
    interval: 1500
})

/*-------------------------------------------------------------
	5. feature post slider js
--------------------------------------------------------------*/	

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
