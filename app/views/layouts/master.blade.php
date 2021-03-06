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

        {{-- 
            Modals
         --}}
        @include('modals.login')
        @include('modals.signup')
        @include('modals.add_beer')
        @include('modals.edit_beer')
        @include('modals.add_pitch')
        @include('modals.edit_pitch')

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



       
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="/js/bundle.js"></script>
        
        @yield('bottom-script')
    </body>

    <footer>
        <div class="footer">
        <div class='navbar-color'>
        </div>© 2016 <a target="_blank" >hopshop.pub</a></div>
        

    </footer>

</html>