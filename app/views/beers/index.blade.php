@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/beer.css">
@stop

@section('content')

@foreach($beers as $beer)
<div id='beer-table-outline'>
<div class="container" id='beer-table'>
        <div class="row">
            <div class="col-xs-8 col-md-3"><img src="http://placehold.it/350x150" alt="Mountain View" style="width:250px;height:200px;"></div>
            <div class="col-xs-5 col-md-3"><h4>Beer Name: </h4> <h3>{{{ $beer->name }}}</h3></div>
            <div class="col-xs-5 col-md-3"><h4>Rating:</h4></div>
        </div>
        <hr>
        
        <div class="row">
            <div class="col-xs-8 col-md-3"><h4>ABV: </h4> <h3>{{{ $beer->abv }}}</h3></div>
            <div class="col-xs-5 col-md-3"><h4>Style: </h4></div>
            <div class="col-xs-5 col-md-3"><h4>Brewery: </h4> <h3>{{{ $beer->brewery->name }}}</h3></div>
        </div>
    <a href="#" class='pull-right' id='description-link'>Description: </a>
    </div>
</div>
@endforeach
{{ $beers->links() }}
        
@stop

@section('bottom-script')

@stop








