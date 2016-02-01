@extends('layouts.master')

@section('top-script')

@stop

@section('content')
	<div style='border-color: black;
	background-color: #f9f0e0;
	border-radius: 10px;'>
 		<table style="width:100%" class='table table-striped'>
			@foreach($contributions as $contribution)
	            <tr>                   
	                <td>{{{ $contribution->pitch->title }}} by {{{ $contribution->pitch->brewery->name }}}</td></a>
	                <td>${{{ $contribution->amount }}}</td>
	                <a href="{{{ action('PitchesController@show', $contribution->pitch->pitch_id) }}}">Click here to see contribution to... </a>
	            </tr>
            @endforeach
            
        	
        </table>
    </div>


@stop

@section('bottom-script')

@stop


{{-- if($contributions<1)
 <h3> You have no contributions at this time.</h3>
 endif --}}





