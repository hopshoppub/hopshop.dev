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
  <div class='navbar-color'>
  </div>
  @include('partials.navbar')
  <div class='navbar-color'>
  </div>


    @yield('content')

    <script src ="/js/jquery.min.js"></script>
    <script src ="/js/bootstrap.min.js"></script>
    @yield('bottom-script')
    @yield('stuff')


  

</body>
<footer>
<div class="footer">
<div class='navbar-color'>
</div>
© 2016 <a target="_blank" >HopShop.pub</a>
</div>
</footer>
</html>