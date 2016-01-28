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

        beer: {

        },

        pitches: [

        ],

        pitch: {

        },

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

        clearErrors: function () {

            myVue.$data.errors = {};
        },

        getEditPitch: function (id) {

            myVue.$data.errors = {};

            Vue.http.get('/pitches/ajax/id/' + id, function (data, status, request) {

                    myVue.$data.pitch = data;
                    console.log(data);
                    // console.log( myVue.$data.pitches);
            }).catch(function (data, status, request) {
            }); 
        },  

        getEditBeer: function (index) {

            myVue.$data.errors = {};

            var beerId = myVue.$data.beers[index].beer_id;

            Vue.http.get('/beers/ajax/id/' + beerId , function (data, status, request) {

                    myVue.$data.beer = data;
            }).catch(function (data, status, request) {
                console.log('woops');
            }); 
        },    

        loginClicked: function() {

            Vue.http.post('/login', myVue.$data.user, function (data, status, request) {

                myVue.$data.errors = {};

                if ( data['login'] !== 'Incorect email or password' ) {

                    myVue.$data.user = data;
                    myVue.$data.loggedIn = 'true';

                    $('#login_modal').modal('toggle');
                    console.log( myVue.$data.user );
                } else {
                    
                    myVue.$data.errors = data;
                    console.log( myVue.$data.errors.login);
                }
            }).catch(function (data, status, request) {
            }); 
        },

        getUserInfo: function() {

            Vue.http.get('/users/info', function (data, status, request) {

                myVue.$data.user = data;
                myVue.getProfilePic( data.facebook_id );
    
            }).catch(function (data, status, request) {
            });
        },

        addBeerClicked: function() {

            Vue.http.post('/beers', myVue.$data.beer, function (data, status, request) {
                myVue.$data.errors = {};

                if ( data['good job'] === 'wooot') {

                    $('#add_beer_modal').modal('toggle');
                } else {
                    
                    myVue.$data.errors = data;
                }
            }).catch(function (data, status, request) {
            }); 
        },

        editBeerClicked: function() {

            var beer = myVue.$data.beer;

            Vue.http.put('/beers/' + beer.beer_id , myVue.$data.beer, function (data, status, request) {     

                if ( data.beer_id === beer.beer_id) {
                    console.log(data);
                    beer = data;

                    myVue.$data.beers.forEach(function(each, index, array) {
                        console.log(each.beer_id);
                        console.log(beer.beer_id);
                        if(each.beer_id === beer.beer_id){
                            console.log('got in');
                            
                            myVue.$data.beers[index] = data;
                            console.log( myVue.$data.beers[index].name );
                        }
                    });
                    $('#edit_beer_modal').modal('toggle');
                } else {

                    myVue.$data.errors = data;
                }
            }).catch(function (data, status, request) {
            }); 
        },

        deleteBeer: function(index) {


            var id = myVue.$data.beers[index].beer_id;
            console.log(id);
            if ( confirm('Are you sure you want to delete this post') ) {

                Vue.http.delete('/beers/' + id , function (data, status, request) {

                    $('#beer_' + id).slideToggle();
                    setTimeout( function () {

                        myVue.$data.beers.splice(index,1);
                    },400);
                }).catch(function (data, status, request) {
                }); 
            } else {
            }
        },

        addPitchClicked: function() {

            Vue.http.post('/pitches', myVue.$data.pitch, function (data, status, request) {
                myVue.$data.errors = {};

                if ( data['good job'] === 'wooot') {

                    $('#add_pitch_modal').modal('toggle');
                } else {
                    
                    myVue.$data.errors = data;
                }
            }).catch(function (data, status, request) {
            });  
        },

        editPitchClicked: function() {

            Vue.http.put('/pitches/' + myVue.$data.pitch.pitch_id , myVue.$data.pitch, function (data, status, request) {     
                myVue.$data.errors = {};

                if ( data['good job'] === 'wooot') {

                    $('#edit_pitch_modal').modal('toggle');
                } else {
                    myVue.$data.errors = data;
                }
            }).catch(function (data, status, request) {
            }); 
        },

        deletePitch: function(id) {

            console.log('clicked');
            if ( confirm('Are you sure you want to delete this post') ) {

                Vue.http.delete('/pitches/' + id , function (data, status, request) {     
                    // myVue.$data.errors = {};
                    console.log(data);

                    // if ( data['good job'] === 'wooot') {

                    //     $('#edit_pitch_modal').modal('toggle');
                    // } else {
                    //     myVue.$data.errors = data;
                    // }
                }).catch(function (data, status, request) {
                    console.log(data);
                }); 
            } else {
                console.log('cancled');
            }
        },

        signupClicked: function() {

            Vue.http.post('/users', myVue.$data.user, function (data, status, request) {
                myVue.$data.errors = {};

                console.log(data.user);
                if ( data.user !== undefined ) {
                // if ( data.user.user_id == true ) {

                    myVue.$data.user = data;
                    myVue.$data.loggedIn = 'true';
                    $('#signup_modal').modal('toggle');         
                } else {
                    console.log(data);
                    myVue.$data.errors = data;
                }
            }).catch(function (data, status, request) {
                console.log('woops')
            }); 
        },

        logoutClicked: function() {

            Vue.http.get('/logout', function (data, status, request) {

                myVue.$data.loggedIn = 'false';
                myVue.$data.user = data;

            }).catch(function (data, status, request) {
                alert('sorry an error accored and were not logged out');
            }); 
        },

        getProfilePic: function(id){

            FB.api( "/" + id + "/picture", function (response) {
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
