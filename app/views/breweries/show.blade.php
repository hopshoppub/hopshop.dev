@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/beer.css">
    <link rel="stylesheet" href="/stars/style.css" />
    <style> .invisible {
			display:none;
		}
		</style>
@stop

@section('content')
<div id='beer-table-outline'>
	<div id='beer-table'>
		<div class="row">
			<div class="col-xs-8 col-md-11 center"><h2>Brewery: </h2></div>
		</div>
	</div>
</div>
<div id='beer-table-outline'>
	<div id='beer-table'>
        <div class="row">
			<div class="col-xs-8 col-md-11"><h3>{{{ $brewery->name }}}</h3></div>
			<div class="col-xs-8 col-md-11"><h3 class='beer-font'><strong>Website:  </strong>{{{ $brewery->website }}}</h3></div>
			<div class="col-xs-8 col-md-11"><h3 class='beer-font'><strong>Phone:   </strong>{{{ $brewery->phone }}}</h3></div>
			<div class="col-xs-8 col-md-11"><h3 class='beer-font'><strong>Address:   </strong>{{{ $brewery->address }}}</h3></div>
		</div>
	</div>
</div>
@foreach($brewery->beers as $beers )
<div id='beer-table-outline'>
	<div id='beer-table'>
		<div class="row">
            <div class="col-xs-8 col-md-3"><img src="http://placehold.it/350x150" alt="Mountain View" style="width:250px;height:200px;"></div>
            <div class="col-xs-5 col-md-3"><h4>Beer Name: </h4> <h3 class='beer-font'>{{{ $beers->name }}}</h3></div>
            <div class="col-xs-5 col-md-3"><h4>Rating:</h4>
               <form id="ratingsForm">
					<div class="stars">
						<input type="radio" name="star" class="star-1" id="star-1" />
						<label class="star-1" for="star-1">1</label>
						<input type="radio" name="star" class="star-2" id="star-2" />
						<label class="star-2" for="star-2">2</label>
						<input type="radio" name="star" class="star-3" id="star-3" />
						<label class="star-3" for="star-3">3</label>
						<input type="radio" name="star" class="star-4" id="star-4" />
						<label class="star-4" for="star-4">4</label>
						<input type="radio" name="star" class="star-5" id="star-5" />
						<label class="star-5" for="star-5">5</label>
						<span></span>
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
</div>
    @endforeach
{{-- {{  (Input::has('search')) ? null: $beers->links() }} --}}
        
@stop

@section('bottom-script')

    <script type='text/javascript' src='/js/beer.js'></script>
@stop






