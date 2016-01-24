@extends('layouts.master')

@section('top-script')
<meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">

<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'
>
    


@stop



<div class="container">
    {{-- <div class='row'>
        <h2 id="title">Pitches</h2> --}}
        @yield('content')
    {{-- </div> --}}
</div>



@stop

@section('bottom-script')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
@yield('footer')

@stop