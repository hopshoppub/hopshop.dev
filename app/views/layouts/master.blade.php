<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta id="token" name="token" value="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="/css/master.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>

    @yield('top-script')

    <body>

        <div class='logo'>
            <div class='logo-image'>
            </div>
        </div>

        {{--
                Top border for nav bar
        --}}
        <div class='navbar-color'></div>

        @include('partials.navbar')

        {{--
                Bottom border for nav bar
        --}}
        <div class='carousel-color'></div>


        @yield('content')

        @yield('bottom-script')
       
{{--         @yield('stuff') --}}
        <script src="/js/navbar_browserify.js"></script>
    </body>

    <footer>
        <div class="footer">
        <div class='navbar-color'>
        </div>© 2016 <a target="_blank" >HopShop.pub</a></div>
    </footer>

</html>