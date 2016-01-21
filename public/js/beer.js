$(document).ready(function() {
	$.get("/views/beers/index.blade.php").done(function(data) {
		console.log(data);
	})
})

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