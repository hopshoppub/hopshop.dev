<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/master.css">
</head>
 @yield('top-script')
<body>
  <div class='logo'>
    <div class='logo-image'>
    </div>
  </div>
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HopShop</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Beer Of The Day</a></li>
            <li><a href="#about">Top-Rated</a></li>
            <li><a href="#contact">Brewery Pitches</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Sign Up!</a></li>
            <li class="active"><a href="#">Login </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    @yield('content')

    <script src ="/js/jquery.min.js"></script>
    <script src ="/js/bootstrap.min.js"></script>
    @yield('bottom-script')
    @yield('stuff')


  

</body>
<footer>
<div class="footer">
© 2016 <a target="_blank" >HopShop.pub</a>
</div>
</footer>
</html>