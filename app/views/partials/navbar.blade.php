

<nav class="navbar navbar-inverse" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>


        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <a class="navbar-brand" href="{{{ action('HomeController@showHome')}}}">ho<span class ='hopshop-color-brand'>me</span></a>

			<ul class="nav navbar-nav">
				<li><a href="{{{ action('HomeController@beerList') }}}">Beer List</a></li>
				<li><a href="{{{ action('BeersController@beerOfTheDay') }}}">Beer Of The Day</a></li>

				<li><a href="{{{ action('BeersController@index') }}}">Top-Rated</a></li>
				<li><a href="{{{ action('PitchesController@index') }}}">Beer Pitches</a></li>
				<li><a href="{{{ action('ContributionsController@index') }}}">View My Contributions</a></li>

				<li class="divider"></li>
			</ul>

            {{--
                    If Logged Out
            --}}
            <div v-if="loggedIn == 'false'">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#signup_modal" v-on:click="clearErrors"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    
                    <li><a href="#" data-toggle="modal" data-target="#login_modal" v-on:click="clearErrors"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>

            {{--
                    If Logged In
            --}}
            <div v-if="loggedIn == 'true'">
                <ul class="nav navbar-nav navbar-right">
                    <li><img id="user_profile_picture" src=""></li>

                    <li><a href="#" v-on:click="logoutClicked"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>



                    <li id="create_navbar"class="dropdown" v-if="user.role == 3">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#add_beer_modal" v-on:click="clearErrors">Add Beer</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-toggle="modal" data-target="#add_pitch_modal" v-on:click="clearErrors">Add Pitch</a></li>
                        </ul>
                    </li>


                    
                </ul>
            </div>
            <input type='text' value=@if( Auth::check() )'true'@else'false'@endif hidden v-model="loggedIn">
        </div>
    </div>
    @include('modals.login')
    @include('modals.signup')
    @include('modals.add_beer')
    @include('modals.edit_beer')
    @include('modals.add_pitch')
    @include('modals.edit_pitch')
</nav>


<div id="status" class="right">
    @if( Auth::check() )
        Welcome!!
    @else
        Login with Facebook!
    @endif
</div>


