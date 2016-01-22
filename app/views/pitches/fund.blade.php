@extends('layouts.pitchesmaster')

@section('top-script')

@stop
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
   

@section('content')

<h1>Fund for $20</h1>

{{ Form::open(['id'=>'billing-form']) }}
	<div class="form-row"></div>
		<label>
			<span>Card number:</span>
			<input type="text" data-stripe="number">
		</label>
	</div>
	<div class="form-row"></div>
		<label>
			<span>CVC:</span>
			<input type="text" data-stripe="cvc">
		</label>
	</div>
	<div class="form-row"></div>
		<label>
			<span>Expiration Date:</span>
			{{ Form::selectMonth(null, null, ['data-stripe' => 'exp-month']) }}
			{{ Form::selectYear(null, date('Y'), date('Y')+12, null, ['data-stripe' => 'exp-year']) }}
		</label>
	</div>
	<div>
		{{ Form::submit('Buy now')}}
	</div>

{{ Form::close() }}


@stop

@section('footer')
	<script src="js/billing.js"></script>
@stop

