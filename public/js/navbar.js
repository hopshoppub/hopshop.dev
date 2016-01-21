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

		        // email: '',
		        // password: '',
	    	},

	    	loginPassword: '',
	    	loginEmail: '',


	        // first_name:'',
	        // last_name:'',
	        // email:'',
	        // confirm_email:'',
	        // password:'',
	        // confirm_password:'',
	        // zip_code:'',
	        // user_name:'',

	    },

	    methods: {

	        loginClicked: function() {

	            var loginInfo  = {
	                email : this.loginEmail,
	                password  : this.loginPassword,
	            };

            // login(loginInfo);
            login(testVue.$data.user);
        	},

        	signupClicked: function() {

        		var signupInfo = {

        			first_name : this.signupFirstName,
	        		last_name : this.signupLastName,
	        		user_name : this.signupUserName,
	        		email : this.signupEmail,
	        		// signupConfirmEmail:'',
	        		password : this.signupPassword,
	        		// signupConfirmPassword:'',
	        		zip_code : this.signupZipCode,
        		};
        		// signup( signupInfo );
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

	    }).error(function (data, status, request) {
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
	        }
	    }).error(function (data, status, request) {
	        console.log("error");
	    }); 
	}

	function signup(obj) {
		console.log('pressed');
	    Vue.http.post('/users/store', obj, function (data, status, request) {
	        // tableVue.$data.contacts.push(data);
	        console.log(data);
	    }).error(function (data, status, request) {
	        alert("error");
	    }); 
	}
});