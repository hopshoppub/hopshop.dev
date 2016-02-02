@extends('layouts.pitchesmaster')

@section('top-script')

@stop
 <link rel="stylesheet" href="/css/pitches.css">
@section('content')

<div class="beerpitches">
	<div class="container">
		<div class="row" {{-- style="background-color:papayawhip;" --}}>
		@foreach($pitches as $pitch)
		<div class="pitchesindex">
			<a href="{{{ action('PitchesController@show', $pitch->pitch_id) }}}">
	        <div class="col-sm-12 col-sm-6 col-md-4 col-lg-4">
	        	<div class='pitches-table'>
		        	<h4>{{{ $pitch->title }}} by<br> {{{ $pitch->brewery->name }}}(${{{ $pitch->goal }}})</h4>
		            <div><iframe width="300" height="169" src="{{{ $pitch->video }}}"frameborder="0" allowfullscreen></iframe></div>
	        	</div>
	        </div></a>
	    </div>
		@endforeach
		</div>
	</div>
</div>

 



@stop

@section('bottom-script')

@stop








