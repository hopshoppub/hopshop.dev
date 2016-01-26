<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta id="token" name="token" value="{{ csrf_token() }}">
        <meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="/css/master.css">
    
    </head>

    @yield('top-script')

    <body id="everything_is_coved_by_vue_now">

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
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="/js/master.js"></script>
        <script src="/js/vue.js"></script>
        <script src="/js/vue-resource.js"></script>
        <script src="/js/myVue.js"></script>
        <script src="/js/facebook.js"></script>
    </body>

    <footer>
        <div class="footer">
        <div class='navbar-color'>
        </div>© 2016 <a target="_blank" >hopshop.pub</a></div>
        
    </footer>

</html>