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

	        email: '',
	        password: '',

	        // search:'',

	        // contacts: [
	        //     {
	        //         name: 'shawn',
	        //         email: 'sprov03@david.com',
	        //         phone: '979'
	        //     },
	        //     {
	        //         name: 'dogman',
	        //         email: 'wolfman@gmail.com',
	        //         phone: '210'
	        //     }
	        // ]
	    },

	    methods: {

	        loginClicked: function() {

	            var loginInfo  = {
	                email : this.email,
	                password  : this.password,
	            };

            login(loginInfo);
        },

	    //     removeClicked: function(index) {

	    //         var contact = this.contacts[index];
	    //         deleteContactAjax(contact);
	    //     }
	    }
	});


	function login(obj) {

	    Vue.http.post('/login', obj, function (data, status, request) {
	        // tableVue.$data.contacts.push(data);
	        console.log(data);
	    }).error(function (data, status, request) {
	        alert("error");
	    }); 
	}


});