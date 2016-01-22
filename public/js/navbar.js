$(document).ready(function() {

	'use strict';

	var Vue = require('vue');

	Vue.use(require('vue-resource'));

	Vue.http.options.root = '/root';
	Vue.http.headers.common['csrftoken'] = document.querySelector('#token').getAttribute('value');

	/*
	 *	Vue Instance
	 */
	var testVue = new Vue ({
	    el: '#navbar',

	    data: {

	    	loggedIn: false,

	    	user: {

	    	},

	    	loginPassword: '',
	    	loginEmail: '',


	    },

	    methods: {

	        loginClicked: function() {

            	login( testVue.$data.user );
        	},

        	signupClicked: function() {

        		signup ( testVue.$data.user );	
        	},

        	logoutClicked: function() {

        		logout();
        	}
	    }
	});

	function logout() {

	    Vue.http.get('/logout', function (data, status, request) {

		    testVue.$data.loggedIn = false;

		    testVue.$data.user = data;

	    }).catch(function (data, status, request) {
	        alert('sorry an error accored and you were not logged out');
	    }); 
	}

	function login(obj) {

	    Vue.http.post('/login', obj, function (data, status, request) {

	        if ( data['login_error'] == true ){
	        	console.log('error');
	        } else{

	        	testVue.$data.user = data;

		        testVue.$data.loggedIn = true;

		        $('#login_modal').modal('toggle');
	        }
	    }).catch(function (data, status, request) {
	        console.log("error");
	    }); 
	}

	function signup(obj) {

	    Vue.http.post('/users/store', obj, function (data, status, request) {
			testVue.$data.user = data;

			$('#signup_modal').modal('toggle');	        
	    }).catch(function (data, status, request) {
	        alert("error");
	    }); 
	}

	function facebookLogin(id) {

            console.log( 'tsting it' + id );
	    Vue.http.post('/facebookLogin/' + id , function (data, status, request) {
			
	    	testVue.$data.loggedIn = true;

	    	testVue.$data.user = data;

	    	// console.log(data);
        
	    }).catch(function (data, status, request) {
	        alert("error");
	    });
	}

	function getProfilePic(id){
	
		FB.api(
		    "/" + id + "/picture",
		    function (response) {
			console.log('getting pic id');
		      if (response && !response.error) {
		        /* handle the result */
		    	console.log( 'pic_id: ' + response.id );
		    	console.log(response.data.url);
				document.getElementById('#user_profile_pic').innerHTML = '<img src=' + response.data.url + ' />';
		      }
		    }
		);
	}


 // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response.authResponse);
        FB.api('/me', function(me){
        if (me.id) {
            // var facebook_userid = me.id;
            // alert(facebook_userid);
            testVue.$data.user.facebook_id = me.id;
	      // console.log( 'new test' + testVue.$data.user.facebook_id );

	    if (response.status === 'connected') {
	      // Logged into your app and Facebook.
	      // testAPI();
	      facebookLogin( testVue.$data.user.facebook_id );
	      getProfilePic(testVue.$data.user.facebook_id );
	    } else if (response.status === 'not_authorized') {
	      // The person is logged into Facebook, but not your app.
	      document.getElementById('status').innerHTML = 'Please log ' +
	        'into this app.';
	    } else {
	      // The person is not logged into Facebook, so we're not sure if
	      // they are logged into this app or not.
	      document.getElementById('status').innerHTML = 'Please log ' +
	        'into Facebook.';
	    }
        }
    });
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1670397703235376',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

});