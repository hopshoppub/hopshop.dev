@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/beer.css">
    <link rel="stylesheet" href="/stars/style.css" />
     <script type='text/javascript' src='js/beer.js'></script>
@stop

@section('content')
<div class='container'>
<form action="{{{ action('BeersController@index') }}}" > 
                    <h2>Search Beer/Brewery</h2>
                    <input type="text" name="search" id="query" size="30" value=""> 
                    <input type="submit"> 
                </form> 
            </div>
@foreach($beers as $beer)
<div id='beer-table-outline'>
<div class="container" id='beer-table'>
        <div class="row">
            <div class="col-xs-8 col-md-3"><img src="http://placehold.it/350x150" alt="Mountain View" style="width:250px;height:200px;"></div>
            <div class="col-xs-5 col-md-3"><h4>Beer Name: </h4> <h3>{{{ $beer->name }}}</h3></div>
            <div class="col-xs-5 col-md-3"><h4>Rating:</h4>
                {{ Form::open(array('action' => 'RatingsController@store')) }}
                    <div class="stars" name =id:'{{{ $beer->beer_id }}}'>
                        <input type="radio" name="star" class="star-1" id="star-1" value='1'/>
                        <label class="star-1" for="star-1">1</label>
                        <input type="radio" name="star" class="star-2" id="star-2" value='2'/>
                        <label class="star-2" for="star-2">2</label>
                        <input type="radio" name="star" class="star-3" id="star-3" value='3'/>
                        <label class="star-3" for="star-3">3</label>
                        <input type="radio" name="star" class="star-4" id="star-4" value='4'/>
                        <label class="star-4" for="star-4">4</label>
                        <input type="radio" name="star" class="star-5" id="star-5" value'5'/>
                        <label class="star-5" for="star-5">5</label>
                        <span></span>
                    </div>
                  <button class="btn btn-primary btn-block" id='margin-button'type="submit">Submit Your Rating!</button>
                {{Form::close()}}
            </div>
        </div>
        <hr>
        
        <div class="row">
            <div class="col-xs-8 col-md-3"><h4>ABV: </h4> <h3>{{{ $beer->abv }}}</h3></div>
            <div class="col-xs-5 col-md-3"><h4>Style: </h4> <h3>{{{ $beer->style->style_name }}}</h3></div>
            <div class="col-xs-5 col-md-3"><h4>Brewery: </h4> <h3>{{{ $beer->brewery->name }}}</h3></div>
        </div>
    <a href="#" class='pull-right' id='description-link'>Description: </a>
    </div>
</div>
@endforeach
{{-- {{  (Input::has('search')) ? null: $beers->links() }} --}}
        
@stop

@section('bottom-script')

@stop








