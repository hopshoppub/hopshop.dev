
$(document).ready(function() {

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
			$('#reSizeHeadingLeft').height(165);
			$('#reSizeHeading').height(165);
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






});
