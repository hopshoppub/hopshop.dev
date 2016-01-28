
$(document).ready(function() {


	$('#beer-of-day').click(function() {
		window.location.href='/beers/9';
	})
	$('#top-rated').click(function() {
		window.location.href='/beers';
	})
	$('#brewery-pitches').click(function() {
		window.location.href='/pitches';
	})
	$('#link-to-seasonal').click(function() {
		window.location.href='/seasonal';
	})
	function reSizeBeerTrivia() {
		var win = $(this);
		$triviaHeight = $('#trivia-inner').height();
		$beerHeight = $('#beer-trivia').height();
		if (win.height() < 767) {
			$('#beer-trivia').height($triviaHeight + 250);
		} else if (win.width() >= 1200) {
	    	$('#beer-trivia').height(600);
		}
	}
	function reSizeSeasonalBeerPost() {
		var win = $(this)
		if (win.width() < 767) {
			var text_input = $('#reSizeBeerSeason');
			text_input.css("font-size", "3.7px");
			$('#reSizeHeadingLeft').height(300);
			$('#reSizeHeading').height(300);
			$('#beer-trivia').css({'margin-top':'50px'}); 
			$('#beer-trivia').css({'margin-bottom':'50px'}); 
		} else if (win.width() >= 1200) {
			var text_input = $('#reSizeBeerSeason');
	    	text_input.css("font-size", "15px");
			$('#reSizeHeadingLeft').height(600);
			$('#reSizeHeading').height(600);
		}
	}
	$(window).on('resize', function(){
		var win = $(this); //this = window
		reSizeBeerTrivia();
		reSizeSeasonalBeerPost();
	});


	


// // $(document).ready(function() {

// 	"use strict";

// 	/*
// 	 *	The Vue Object contains all the information
// 	 *	returned from the server, 
// 	 *	user info, 
// 	 *	beer info for infinate scrolling,
// 	 *	if user is logged in or not
// 	 *	and a hand full of methods for seamless UX
// 	 */ 
// 	var myVue = require('../js/myVue.js');

	
// 	 *	Contains the JS for comunicating with 
// 	 *	Facebook and calls methods on myVue
// 	 *	in order to transision from verification
// 	 *	from facebook to logging in thew an ajax
	 
// 	var fbLogin = require('../js/facebook.js');
// 	fbLogin(myVue);

// 	/*
// 	 *	First test of infanate scroll
// 	 *	Calls Methods on myVue,
// 	 *	for this reason myVue has to be passed as a perametter
// 	 */
// 	var testing = require('../js/test.js');
// 	testing(myVue);

// 	require('../js/homepage.js');

// 	require('../js/beer.js');

// 	// require('../js/test.js');

// 	// require('../js/billing.js');




});
