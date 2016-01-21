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

		        email: '',
		        password: '',
	    	},

	    	loginPassword: '',
	    	loginEmail: '',


	        signupFirstName:'',
	        signupLastName:'',
	        signupEmail:'',
	        signupConfirmEmail:'',
	        signupPassword:'',
	        signupConfirmPassword:'',
	        signupZipCode:'',
	        signupUserName:'',

	    },

	    methods: {

	        loginClicked: function() {

	            var loginInfo  = {
	                email : this.loginEmail,
	                password  : this.loginPassword,
	            };

            login(loginInfo);
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
        		signup( signupInfo );
        	},

        	logoutClicked: function() {
        		logout();
        	}
	    }
	});

	function logout() {

	    Vue.http.get('/logout', function (data, status, request) {
	        // tableVue.$data.contacts.push(data);
	        // console.log(data);
		    testVue.$data.loggedIn = data['loggedIn'];
	    }).error(function (data, status, request) {
	        console.log(data);
	        console.log(request);
	    }); 
	}


	function login(obj) {

	    Vue.http.post('/login', obj, function (data, status, request) {

	        if ( data['login_error'] == true ){
	        	console.log('errro');
	        } else{

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