// preloader
$(window).on('load', function() {
	$('.loader-container').fadeOut(2000);
});

// page scroll
$('.page-scroll').on('click', function(e) { 
	var tujuan = $(this).attr('href');
	var elemenTujuan = $(tujuan);

		$('html,body').animate({
			scrollTop:elemenTujuan.offset().top + 20
		}, 600, 'swing');

		e.preventDefault();

});

// navbar script
// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
	$(document).on('click', 'a.page-scroll', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 600, 'easeInOutExpo');
		event.preventDefault();
	});
});

/* Back To Top Button */
// create the back to top button
$('body').prepend('<a href="body" class="back-to-top page-scroll">Back to Top</a>');
    var amountScrolled = 700;
    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('500');
        } else {
            $('a.back-to-top').fadeOut('500');
        }
    });


// sticky navbar
$(document).ready(function(){
	$(window).scroll(function(){
		var myNav = document.getElementById('mynav');
		var scroll = $(window).scrollTop();
		if (scroll > 0) {
			myNav.classList.add("nav-colored");
		}
		else{
			myNav.classList.remove("nav-colored");
		}
	});
});
// end sticky navbar

let $owl = $('#carousel1');
$owl.children().each(function(e) {
	$(this).attr('data-position', e);
});

$("#carousel1").owlCarousel({
	vertical: true,
	loop: true,
	center: true,
	margin: 0,
	responsiveClass: true,
	nav: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 3
		}
	}
});

$(document).on('click', 'owl-ite,>div', function() {
	let $speed = 1000;
	$owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
});