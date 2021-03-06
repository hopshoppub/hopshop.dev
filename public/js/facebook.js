function run(myVue){

    /*
     *  This is called with the results from from FB.getLoginStatus().
     */
    function statusChangeCallback(response) {
        FB.api('/me', function(user){
            if (user.id) {

                myVue.$data.user.facebook_id = user.id;

                if (response.status === 'connected') {
                  // Logged into your app and Facebook.

                  myVue.facebookLogin( myVue.$data.user.facebook_id );
                  // getProfilePic(myVue.$data.user.facebook_id );
                } else if (response.status === 'not_authorized') {
                  // The person is logged into Facebook, but not your app.

                } else {
                  // The person is not logged into Facebook, so we're not sure if
                  // they are logged into this app or not.

                }
            }
        });
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    window.checkLoginState = function(){

        FB.getLoginStatus(function(response) {
            $('#login_modal').modal('toggle');
            statusChangeCallback(response);
        });
    }


    window.fbAsyncInit = function() {
        FB.init({
            appId      : '826958780759446',
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


        /*
         *      The if statment is to suppres the function if a user
         *      is currently logged in
         */
        if ( myVue.$data.loggedIn === 'false'){

            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        } else {
            myVue.getUserInfo();
        }
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
    FB.api('/me', function(response) {
    });
    }
}

module.exports = run;