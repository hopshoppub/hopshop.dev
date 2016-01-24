var Vue = require('vue');

Vue.use(require('vue-resource'));

Vue.http.options.root = '/root';
Vue.http.headers.common['csrftoken'] = document.querySelector('#token').getAttribute('value');

/*
 *	Vue Instance
 */
var theVue = new Vue ({
    el: '#everything_is_coved_by_vue_now',

    data: {

    	loggedIn: false,

    	user: {

    	},

    	loginPassword: '',
    	loginEmail: '',


    },

    methods: {

        loginClicked: function() {

		    Vue.http.post('/login', theVue.$data.user, function (data, status, request) {

		        if ( data['login_error'] == true ){
		        	console.log('error');
		        } else{

		        	theVue.$data.user = data;

			        theVue.$data.loggedIn = true;

			        $('#login_modal').modal('toggle');
		        }
		    }).catch(function (data, status, request) {
		        console.log("error");
		    });
    	},

    	signupClicked: function() {

		    Vue.http.post('/users/store', theVue.$data.user, function (data, status, request) {
				theVue.$data.user = data;

				$('#signup_modal').modal('toggle');	        
		    }).catch(function (data, status, request) {
		        alert("error");
		    }); 
    	},

    	logoutClicked: function() {

		    Vue.http.get('/logout', function (data, status, request) {

			    theVue.$data.loggedIn = false;

			    theVue.$data.user = data;

		    }).catch(function (data, status, request) {
		        alert('sorry an error accored and you were not logged out');
		    }); 
    	},

    	getProfilePic: function(id){

			FB.api(
			    "/" + id + "/picture",
			    function (response) {
				// console.log('getting pic id');
			      if (response && !response.error) {
			        /* handle the result */
			    	// console.log( 'pic_id: ' + response.id );
			    	// console.log(response.data.url);
					// document.getElementById('#user_profile_pic').innerHTML = '<img src=' + response.data.url + ' />';
			      }
			    }
			);
		},

		facebookLogin: function(id) {

	            console.log( 'tsting it' + id );
		    Vue.http.post('/facebookLogin/' + id , function (data, status, request) {
				
		    	theVue.$data.loggedIn = true;

		    	theVue.$data.user = data;

		    	// console.log(data);
	        
		    }).catch(function (data, status, request) {
		        alert("error");
		    });
		},
    }
});

module.exports = theVue;