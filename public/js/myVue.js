// var Vue = require('vue');

// Vue.use(require('vue-resource'));

Vue.http.options.root = '/root';
Vue.http.headers.common['csrftoken'] = document.querySelector('#token').getAttribute('value');

/*
 *  Vue Instance
 */
var myVue = new Vue ({
    el: '#everything_is_coved_by_vue_now',

    data: {

        user: {

        },

        beers: [

        ],

        loginPassword: '',
        loginEmail: '',


    },

    methods: {

        test: function () {

            var offset = myVue.$data.beers.length;
            
            Vue.http.get('/test/' + offset, function (data, status, request) {
                if ( data['login_error'] == true ){
                    console.log('error');
                } else{
                    data.forEach(function(element) {
                        myVue.$data.beers.push(element);
                    });

                }
            }).catch(function (data, status, request) {
                alert(data);
            });
        },

        test2: function () {

            // var offset = myVue.$data.beers.length;
            // console.log(offset);
            Vue.http.get('/test2', function (data, status, request) {

                if ( data['login_error'] == true ){
                    console.log('error');
                } else{

                    // data.data.forEach(function(element) {
                    //     myVue.$data.beers.push(element);
                    // });
                    console.log( data );
                    $('#contents').replaceWith( data['template'] );


                }
            }).catch(function (data, status, request) {
                alert(data);
            });
        },

        loginClicked: function() {

            Vue.http.post('/login', myVue.$data.user, function (data, status, request) {

                if ( data['login_error'] == true ){
                    console.log('error');
                } else{

                    myVue.$data.user = data;

                    myVue.$data.loggedIn = 'true';

                    $('#login_modal').modal('toggle');
                }
            }).catch(function (data, status, request) {
                alert('server side error sorry for the inconveniance');
            });
        },

        getUserInfo: function() {

            Vue.http.get('/users/info', function (data, status, request) {

                myVue.$data.user = data;
                console.log(data.facebook_id);
                myVue.getProfilePic( data.facebook_id );
    
            }).catch(function (data, status, request) {
                alert('server side error sorry for the inconveniance');
            });
        },

        signupClicked: function() {

            Vue.http.post('/users', myVue.$data.user, function (data, status, request) {
                myVue.$data.user = data;
                myVue.$data.loggedIn = 'true';
                $('#signup_modal').modal('toggle');         
            }).catch(function (data, status, request) {
                console.log(data);
            }); 
        },

        logoutClicked: function() {

            Vue.http.get('/logout', function (data, status, request) {

                myVue.$data.loggedIn = 'false';
                myVue.$data.user = data;
                document.getElementById('status').innerHTML =
                'Thanks for visiting or site!!';

            }).catch(function (data, status, request) {
                alert('sorry an error accored and were not logged out');
            }); 
        },

        getProfilePic: function(id){

            FB.api( "/" + id + "/picture", function (response) {
                // console.log('getting pic id');
                if (response && !response.error) {
                   // handle the result 
                    var pic = document.getElementById('user_profile_picture');
                    pic.src = response.data.url;
                }
            });
        },

        getFbFriends: function(id){

            FB.api("/" + id + "/friends", function(response) {
                if (response && !response.error) {

                    // console.log(response);
                }
            });
        },

        facebookLogin: function(id) {

            Vue.http.post('/facebookLogin/' + id , function (data, status, request) {
                
                myVue.$data.loggedIn = 'true';
                myVue.getFbFriends( data.facebook_id );
                myVue.getProfilePic( data.facebook_id );
                myVue.$data.user = data;
                console.log( data.facebook_id);
            
            }).catch(function (data, status, request) {
                alert("error");
            });
        },
    }
});


// module.exports = myVue;