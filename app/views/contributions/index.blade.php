@extends('layouts.master')

@section('top-script')

@stop

@section('content')
 <table style="width:100%">
 				{{-- <h2>{{ $name = Auth::user()->firstname;
 					   var_dump($name) }}</h2> --}}
 					         @foreach($contributions as $contribution)
                              <tr>                         
                                <td>{{{ $contribution->pitch->title }}} by {{{ $contribution->pitch->brewery->name }}}</td>
                                <td>${{{ $contribution->amount }}}</td>
                              </tr>
                            @endforeach
                        </table>


@stop

@section('bottom-script')

@stop








