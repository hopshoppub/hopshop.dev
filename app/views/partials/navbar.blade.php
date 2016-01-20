
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse" id="navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">HopShop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Beer Of The Day</a></li>
        <li><a href="{{{ action('BeersController@index') }}}">Top-Rated</a></li>
        <li><a href="#">Brewery Pitches</a></li>
        <li class="divider"></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#" data-toggle="modal" data-target="#signup_modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

        <li><a href="#" data-toggle="modal" data-target="#login_modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

      </ul>
    </div>
  </div>
@include('modals.login')
@include('modals.signup')
</nav>



