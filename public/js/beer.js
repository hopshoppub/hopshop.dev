

$('.description-toggle').hide();
$('.description-button').click(function(e) {
	$idOfBeer = ($(this).data('grabId'));
	$('[data-beer-id="' + $idOfBeer + '"]').slideToggle();
	e.preventDefault();
});


function showBeerCalculatedRating() {
	$('.stars').each(function() {
		$calculatedRating = ($(this).data('ratingId'));
		$percent = $calculatedRating * 20;
		($('.span').css('width', $percent + '%'));
	})
	$('.stars').click(function() {
		($('.span').css('background-color', 'blue'))
	})
}
showBeerCalculatedRating();
function getBeerIdAndStarsNumber() {
		$('.stars').click(function(e) {
			$idOfBeerStars = ($(this).data('starId'));
			$ratingNumber = event.target.innerHTML;
			console.log($idOfBeerStars);
			console.log($ratingNumber);
			sendRating($idOfBeerStars, $ratingNumber);
			// changeStars();
		});
		 $(this).attr("checked");
	}
	getBeerIdAndStarsNumber();

	function sendRating(id, ratingNumber) {

		$.get("/beers/" + id + "/" + ratingNumber , function(data){
			console.log(ratingNumber)
		});
	}
