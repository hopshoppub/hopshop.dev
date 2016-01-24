function run(myVue){

	$(window).scroll(function() {
	   if($(window).scrollTop() + $(window).height() == $(document).height()) {
	       myVue.test();
	   }
	});
}

module.exports = run;