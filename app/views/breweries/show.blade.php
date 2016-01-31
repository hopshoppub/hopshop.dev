@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/brewery.css">
    <link rel="stylesheet" href="/stars/style.css" />
    <style> .invisible {
			display:none;
		}
		</style>
@stop

@section('content')
<div class='beer-table-outline'>
	<div class = 'container' id='beer-table'>
		<div class="row">
			<div class="col-xs-8 col-md-11 center"><h2>Brewery: </h2></div>
		</div>
	</div>
</div>
<div class='beer-table-outline'>
	<div class='container' id='beer-table'>
        <div class="row">
			<div class="col-xs-8 col-md-11"><h1>{{{ $brewery->name }}}</h1></div>
			<div class="col-xs-8 col-md-11"><h3 class='beer-font'><strong>Website:  </strong>{{{ $brewery->website }}}</h3></div>
			<div class="col-xs-8 col-md-11"><h3 class='beer-font'><strong>Phone:   </strong>{{{ $brewery->phone }}}</h3></div>
			<div class="col-xs-8 col-md-11"><h3 class='beer-font'><strong>Address:   </strong>{{{ $brewery->address }}}</h3></div>
		</div>
	</div>
</div>
<div class='beer-table-solid'>
@foreach($brewery->beers as $beers )

	<div class='container' id='beer-table'>
		<div class="row">
            <div class="col-xs-8 col-md-3">
            	<img src="/img/{{{$beers->image}}}" alt="Mountain View" style="width:250px;height:200px;">
            </div>
            <div class="col-xs-5 col-md-3"><h4>Beer Name: </h4> <h3 class='beer-font'>{{{ $beers->name }}}</h3></div>
            <div class="col-xs-5 col-md-3"><h4>Rating:</h4>
               <form id="ratingsForm">
					<div class="stars" data-rating-id="{{{ $beers->rating }}}" data-star-id="{{{ $beers->beer_id }}}">
						<input type="radio" name="star" class="star-1" value='1'/>
						<label class="star-1" for="star-1">1</label>
						<input type="radio" name="star" class="star-2" value='2'/>
						<label class="star-2" for="star-2">2</label>
						<input type="radio" name="star" class="star-3" value='3'/>
						<label class="star-3" for="star-3">3</label>
						<input type="radio" name="star" class="star-4" value='4'/>
						<label class="star-4" for="star-4">4</label>
						<input type="radio" name="star" class="star-5" value='5'/>
						<label class="star-5" for="star-5">5</label>
						<span class='span'></span>
					</div>
				  
				</form>
        	</div>
        <div class="row">
            <div class="col-xs-5 col-md-3"><h4>Style: </h4> <h3 class='beer-font'>{{{ $beers->style->style_name }}}</h3></div>
            <div class="col-xs-8 col-md-3"><h4>ABV: </h4> <h3 class='beer-font'>{{{ $beers->abv }}}</h3></div>
        </div>
        <div class='row'>
	        <div class="description-toggle" data-beer-id="{{{ $beers->beer_id }}}">
	        	<div class="col-xs-8 col-md-12"><h4> </h4> <h3 class='beer-font'>{{{ $beers->description }}}</h3></div>
	        </div>
	    </div>
    		<button class='pull-right description-button' data-grab-id="{{{ $beers->beer_id }}}">Click Here For Description: </button>
    	</div>
	</div>
    @endforeach
</div>
{{-- {{  (Input::has('search')) ? null: $beers->links() }} --}}
        
@stop

@section('bottom-script')
    <script src="/js/beer.js"></script>
@stop






