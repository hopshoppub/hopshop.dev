@extends('layouts.master')

@section('top-script')

@stop

@section('content')
	<div>
 		<table class='.table-hover' style="width:100%">
			@foreach($contributions as $contribution)
              <tr>                         
                <td>{{{ $contribution->pitch->title }}} by {{{ $contribution->pitch->brewery->name }}}</td>
                <td>${{{ $contribution->amount }}}</td>
              </tr>
            @endforeach
        </table>
    </div>


@stop

@section('bottom-script')

@stop








