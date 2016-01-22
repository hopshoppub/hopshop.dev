$(document).ready(function() {
	$('.description-toggle').hide();
	$('.description-button').click(function(e) {
		$idOfBeer = ($(this).data('grabId'));
		$('[data-beer-id="' + $idOfBeer + '"]').slideToggle();
		e.preventDefault();
	});



	function getBeerIdAndStarsNumber() {
		$('.stars').click(function(e) {
			$idOfBeer = ($(this).data('starId'));
			$ratingNumber = event.target.value;
		});
	}
	function getUrlData() {
		$.get( "/beers", function( data ) {
			console.log(data)
		});
	}
	getUrlData();
});
