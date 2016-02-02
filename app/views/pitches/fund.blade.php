@extends('layouts.pitchesmaster')

@section('top-script')
	<meta id="include-billing-js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@stop
@section('content')

<div class="row">
	<div id="background-for-fund-form" class="col-xm-12 center">
		<h1>Fund for $20</h1>
		
		{{ Form::open(['id'=>'billing-form', 'action'=> ['PitchesController@postfund', $fund->pitch_id]]) }}
		<div class="form-row">
			<label>
				<span>Card number:</span>
				<input class="form-control" type="text" data-stripe="number">
			</label>
		</div>
		<div class="form-row">
			<label>
				<span>CVC:</span>
				<input class="form-control" type="text" data-stripe="cvc">
			</label>
		</div>
		<label>
			<span>Expiration Date:</span>
			<div class="form-inline">
				{{ Form::selectMonth(null, null, ['data-stripe' => 'exp-month', 'class' => 'form-control ']) }}
				{{ Form::selectYear(null, date('Y'), date('Y')+12, null, ['data-stripe' => 'exp-year', 'class' => 'form-control ']) }}
			</div>
		</label>
		<div class="form-row">
			<label>
				<span>Email Address:</span>
				<input class="form-control" type="email" id="email" name='email'>
			</label>
		</div>
		<div>
			{{ Form::submit('Buy now',['class'=>'btn btn-default']) }}
		</div>
		<div class="payment-errors"></div>

		{{ Form::close() }}
	</div>
</div>


@stop

@section('footer')
@stop

