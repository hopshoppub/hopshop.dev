function run(myVue){

	$(window).scroll(function() {
		// if( myVue.$data.infinateFlag !== false )
		// {
		    if($(window).scrollTop() + $(window).height() == $(document).height()) {
		        myVue.test();
		    }
			// myVue.$data.infinateFlag = false;
		// }
	});
}

// module.exports = run;