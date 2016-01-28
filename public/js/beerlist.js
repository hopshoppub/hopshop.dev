	function hideDescriptionOfBeer() {
		$('.description-toggle').each(function() {
			($(this).children().hide())
			
		});
	}
	function slideDescriptionOfBeer() {
		$('.infinite-container').on('click', '.description-button', function() {
			($(this.previousElementSibling.children[0].children)).slideToggle();
		})
	}


function showBeerCalculatedRating() {
	$('.stars').each(function() {
		$calculatedRating = ($(this).data('ratingId'));
		$percent = $calculatedRating * 20;
		// console.log($percent);
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


// function run(myVue){

	$(window).scroll(function() {
		// if( myVue.$data.infinateFlag !== false )
		// {
		    if($(window).scrollTop() + $(window).height() == $(document).height() ) {
		    	infiniteScroll();

		    }
			// myVue.$data.infinateFlag = false;
		// }
	});

	function infiniteScroll() {

		var offset = myVue.$data.beers.length;
		console.log(offset);
	        $.get("/beerpage/" + offset, function(data) {
                data.forEach(function(element) {
                    myVue.$data.beers.push(element);

                });
                setTimeout( function () {
                    showBeerCalculatedRating();
                    showUserRatingInput();
                    getBeerIdAndStarsNumber();
                    hideDescriptionOfBeer();
                },500);
                
                    

            });

	}

	slideDescriptionOfBeer();
	

	infiniteScroll();


// }

// module.exports = run;