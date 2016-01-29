

$('.description-toggle').hide();
$('.description-button').click(function(e) {
	$idOfBeer = ($(this).data('grabId'));
	$('[data-beer-id="' + $idOfBeer + '"]').slideToggle();
	e.preventDefault();
});


function showBeerCalculatedRating() {
	$('.stars').each(function() {
		$calculatedRating = ($(this).data('ratingId'));
		$percent = $calculatedRating * 20.5;
		($(this).children().last().css('width', $percent + '%'));
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
		if (myVue.$data.loggedIn == 'true') {
			$idOfBeerStars = ($(this).data('starId'));
			$ratingNumber = event.target.innerHTML;
			sendRating($idOfBeerStars, $ratingNumber);
		} else {
			myVue.clearErrors();
			$('#login_modal').modal('show');
		}
	});
}
getBeerIdAndStarsNumber();

	function sendRating(id, ratingNumber) {

		$.get("/beers/" + id + "/" + ratingNumber , function(data){
			
		});
	}
