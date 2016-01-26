$('.description-toggle').hide();
$('.description-button').click(function(e) {
	$idOfBeer = ($(this).data('grabId'));
	$('[data-beer-id="' + $idOfBeer + '"]').slideToggle();
	e.preventDefault();
});



function getBeerIdAndStarsNumber() {
		$('.stars').click(function(e) {
			$idOfBeerStars = ($(this).data('starId'));
			$ratingNumber = event.target.innerHTML;
			console.log($idOfBeerStars);
			console.log($ratingNumber);
			sendRating($idOfBeerStars, $ratingNumber);
			// changeStars();
		});
	}
	getBeerIdAndStarsNumber();

	function sendRating(id, ratingNumber) {

		$.get("/beers/" + id + "/" + ratingNumber , function(data){
			console.log(ratingNumber)
		});
	}
