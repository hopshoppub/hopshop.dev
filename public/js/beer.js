$(document).ready(function() {
	$('.description-toggle').hide();
	$('.description-button').click(function(e) {
		$idOfBeer = ($(this).data('grabId'));
		$('[data-beer-id="' + $idOfBeer + '"]').slideToggle();
		e.preventDefault();
	});

	// $( "#description-click-here" ).click(function() {
	//   alert( "Handler for .click() called." );
	// });

	// console.log('woot');
});

// $('#star-1').click(function() {
	// 	console.log('1');
	// })
	// $('#star-2').click(function() {
	// 	console.log('2');
	// })
	// $('#star-3').click(function() {
	// 	console.log('3');
	// })
	// $('#star-4').click(function() {
	// 	console.log('4');
	// })
	// $('#star-5').click(function() {
	// 	console.log('5');
	// })