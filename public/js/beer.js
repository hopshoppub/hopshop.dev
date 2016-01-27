

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
}
showBeerCalculatedRating();
function showUserRatingInput() {
	$('.stars').click(function() {
		$target = event.target.innerHTML * 20;
		($(this).children().last().css('width', $target + '%'))
	})
}
showUserRatingInput();
function getBeerIdAndStarsNumber() {
		$('.stars').click(function(e) {
			$idOfBeerStars = ($(this).data('starId'));
			$ratingNumber = event.target.innerHTML;
			sendRating($idOfBeerStars, $ratingNumber);
			// changeStars();
		});
		 $(this).attr("checked");
	}
	getBeerIdAndStarsNumber();

	function sendRating(id, ratingNumber) {

		$.get("/beers/" + id + "/" + ratingNumber , function(data){
			console.log(ratingNumber)
		}).done(function(data) {
			console.log(data);
		});
	}
