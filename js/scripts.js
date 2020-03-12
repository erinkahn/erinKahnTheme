/*eslint-env jquery*/
/*eslint-disable no-console*/
var TweenMax = window.TweenMax;
var TimelineMax = window.TimelineMax;




jQuery(document).ready(function($) {

	// show hide burger menu ---------
	$('.burger').click(function() {
			$('.mobile-nav').toggleClass('showNav');
			$('html, body').toggleClass('noScroll');
			$('.burger div').toggleClass('changeColor');
			$('.logo img').toggleClass('hide');
	});


	// waypoints ---------
	var $icons = $('.icon-section');

	$icons.waypoint(function () {
		this.destroy();
		$icons.addClass('icons-anim');

	console.log('icon section hit');
	}, {offset: '90%'});



	var $practiceicons = $('.icons-left div');

	$practiceicons.waypoint(function () {
		this.destroy();
		$practiceicons.addClass('icons-anim');

	console.log('icon section hit');
	}, {offset: '90%'});



	var $gridImages = $('.about-image-grid');

	$gridImages.waypoint(function () {
		this.destroy();
		$gridImages.addClass('images-anim');

	console.log('grid section hit');
	}, {offset: '90%'});





	var $resumeOne = $('.top-resume');

	$resumeOne.waypoint(function () {
		this.destroy();
		$resumeOne.addClass('resume-anim');

	console.log('resume section hit');
	}, {offset: '90%'});




	var $resumeTwo = $('.bottom-resume');

	$resumeTwo.waypoint(function () {
		this.destroy();
		$resumeTwo.addClass('resume-anim');

	console.log('resume section hit');
	}, {offset: '90%'});



	// slide in the .slideIntoPage elements when we scroll by
	$('.slideIntoPlace').each(function(i, el){ 
		TweenMax.set(el, {opacity: 0, x:50}) 
		$(el).waypoint({ 
			handler: function(direction) { 
				console.log('waypoint hit!')
				this.destroy() 
				TweenMax.to(el, 1, {opacity: 1, x:0}) 
			},
			offset: "90%" 
		})
	})



	// fade up
	$('.quoteUp').each(function(i, el){ 
		TweenMax.set(el, {opacity: 0, y:50}) 
		$(el).waypoint({ 
			handler: function(direction) { 
				console.log('waypoint hit!')
				TweenMax.to(el, 1, {opacity: 1, y:0}) 
			},
			offset: "90%" 
		})
	})


	// fade in the .fadeIn elements when we scroll by
	$('.fadeIn').each(function(i, el){ // find all the .fadeIn elements. loop through them so we're dealing with one at a time
		// in here, i is the loop maxCharacterser, 
		// el is the one element we're working on
		// we'll need to use el later, because this is going to be redefined
		TweenMax.set(el, {opacity: 0}) // use tweenmax to instantly set opacity to 0
		$(el).waypoint({ // make a waypoint on this element
			handler: function(direction) { // waypoint handler function 
				console.log('waypoint hit!')
				this.destroy() // this has been redefined. now it's the waypoint instance // only happens once
				TweenMax.to(el, 1, {opacity: 1, delay: .3}) // animate the element in
			},
			offset: "90%" // make it happen when the element is 90% of the way down the window
		})
	})

	// fade left the .fadeLeft elements when we scroll by
	$('.fadeLeft').each(function(i, el){ 
		TweenMax.set(el, {opacity: 0, x:-50}) 
		$(el).waypoint({ 
			handler: function(direction) { 
				console.log('waypoint hit!')
				this.destroy() 
				TweenMax.to(el, 1, {opacity: 1, x:0}) 
			},
			offset: "90%" 
		})
	})


	// sliders homepage ---------
	$('.slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		arrows: true,
		speed: 600,
		prevArrow: '<a href=""><img src="assets/img/slider_left_arrow.svg"></a>',
		nextArrow: '<a href=""><img src="assets/img/slider_right_arrow.svg"></a>',
		responsive: [
			{
			breakpoint: 991,
			settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					arrows: true,
					speed: 1000
			}
			},
			{
			breakpoint: 567,
			settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					speed: 1000
			}
			}
		]
	});

// End of document.ready ---------
});




document.addEventListener('DOMContentLoaded', function(){ 

	


	// create a Timeline for the mobile burger menu items ---------

	var burgerTimeline = new TimelineMax();

	burgerTimeline.from(".about", 0.4, {delay: 1, opacity: 0});

	burgerTimeline.from(".work", 0.5, {opacity: 0});

	burgerTimeline.from(".resume", 0.5, {opacity: 0});

	burgerTimeline.from(".contact", 0.5, { opacity: 0});


	// create a Timeline for the main desktop header and footer items ---------


	// var menuTimeline = new TimelineMax();

	// menuTimeline.from(".logo-img", 1, {rotation:360, left: -100, opacity: 0});

	// menuTimeline.from(".desktop-pages a:first-child", 0.4, {top: -300, opacity: 0});

	// menuTimeline.from(".desktop-pages a:last-child", 0.5, {top: -300, opacity: 0});

	// menuTimeline.from(".sidebar", 0.5, {left: -300, opacity: 0});

	// menuTimeline.from("footer", 0.5, {bottom: -300, opacity: 0});

	// open and close mobile nav----------------------------------------------



});
















