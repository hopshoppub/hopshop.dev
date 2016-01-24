
$(document).ready(function() {

	"use strict";

	// var wayPoint = require('waypoints');

	var myVue = require('../js/myVue.js');

	var fbLogin = require('../js/facebook.js');
	fbLogin(myVue);

	var testing = require('../js/test.js');
	testing(myVue);

	require('../js/homepage.js');

	require('../js/beer.js');

	// require('../js/test.js');

	// require('../js/billing.js');




});
