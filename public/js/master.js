
$(document).ready(function() {

	"use strict";

	var myVue = require('../js/myVue.js');

	var fbLogin = require('../js/facebook.js');
	fbLogin(myVue);

	require('../js/homepage.js');

	require('../js/beer.js');

	// require('../js/billing.js');




});
