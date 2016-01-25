
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse" id="navbar">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>



			<a class="navbar-brand " href="{{{ action('HomeController@showHome')}}}">hopshop</a>


		</div>
		<div class="collapse navbar-collapse" id="myNavbar">

			<ul class="nav navbar-nav">
				<li><a href="{{{ action('BeersController@show', 9) }}}">Beer Of The Day</a></li>
				<li><a href="{{{ action('BeersController@index') }}}">Top-Rated</a></li>
				<li><a href="{{{ action('PitchesController@index') }}}">Brewery Pitches</a></li>
				<li class="divider"></li>
			</ul>

            {{--
                    If Logged Out
            --}}
            <div v-if="loggedIn == 'false'">
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="#" data-toggle="modal" data-target="#signup_modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					
    				<li><a href="#" data-toggle="modal" data-target="#login_modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    			</ul>
            </div>

            {{--
                    If Logged In
            --}}
            <div v-if="loggedIn == 'true'">
                <ul class="nav navbar-nav navbar-right">
                	<li><img id="user_profile_picture" src=""></li>

                    <li><a href="#" v-on:click="logoutClicked"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>
                </ul>
            </div>
            <input type='text' value=@if( Auth::check() )'true'@else'false'@endif hidden v-model="loggedIn">
		</div>
	</div>
	@include('modals.login')
	@include('modals.signup')
</nav>


<div id="status" class="right">
	@if( Auth::check() )
		Welcome!!
	@else
		Login with Facebook!
	@endif
</div>



