
$(document).ready(function() {

	"use strict";

	/*
	 *	The Vue Object contains all the information
	 *	returned from the server, 
	 *	user info, 
	 *	beer info for infinate scrolling,
	 *	if user is logged in or not
	 *	and a hand full of methods for seamless UX
	 */ 
	var myVue = require('../js/myVue.js');

	/*
	 *	Contains the JS for comunicating with 
	 *	Facebook and calls methods on myVue
	 *	in order to transision from verification
	 *	from facebook to logging in thew an ajax
	 */
	var fbLogin = require('../js/facebook.js');
	fbLogin(myVue);

	/*
	 *	First test of infanate scroll
	 *	Calls Methods on myVue,
	 *	for this reason myVue has to be passed as a perametter
	 */
	var testing = require('../js/test.js');
	testing(myVue);

	require('../js/homepage.js');

	require('../js/beer.js');

	// require('../js/test.js');

	// require('../js/billing.js');
	console.log(myVue.$data.loggedIn);




});
