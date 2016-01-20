@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/beer.css">
@stop

@section('content')


<div id='beer-table-outline'>
<div class="container" id='beer-table'>
        <div class="row">
            <div class="col-xs-8 col-md-3"><img src="http://placehold.it/350x150" alt="Mountain View" style="width:250px;height:200px;"></div>
            <div class="col-xs-5 col-md-3"><h2>Beer Name: </h2></div>
            <div class="col-xs-5 col-md-3"><h2>Rating:</h2></div>
        </div>
        <hr>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-8 col-md-3"><h2>ABV: </h2></div>
            <div class="col-xs-5 col-md-3"><h2>Style: </h2></div>
            <div class="col-xs-5 col-md-3"><h2>Brewery: </h2></div>
        </div>
    <a href="#" class='pull-right' id='description-link'>Description: </a>
    </div>
</div>
        
@stop

@section('bottom-script')

@stop








