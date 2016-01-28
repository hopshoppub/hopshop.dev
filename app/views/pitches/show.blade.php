@extends('layouts.pitchesmaster')

@section('top-script')

@stop
    <head>
    <link rel="stylesheet" href="/css/pitches.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
   

@section('content')

    <div class='container pitches-table' style={{-- "background-color:fuchsia;" --}}>

        <div class='row'>
            <h2 style="color:black;text-align: center;">{{{ $pitch->title }}}</h2>
        </div>

        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-8 col-lg-8' {{-- style="background-color:papayawhip; border:solid black 2px;"> --}}>
                <iframe width="650" height="366" src="https://www.youtube.com/embed/aV36ytSgC3o" frameborder="0" allowfullscreen></iframe>  
            </div>
     
                <div style="text-align:center" class='col-xs-12 col-sm-12 col-md-4 col-lg-4' style="padding-left: 30px">
                    <div class="pitches-table">
                        <h3>{{{ $pitch->brewery->name  }}}</h3>
                        <h3>Current Level</h3>
                        <h3>${{{ $pitch->goal }}}</h3>
                        <h4>{{{ $pitch->deadline }}}</h4>

                        <a href="{{{ action('PitchesController@fund', $pitch->pitch_id) }}}" class="btn btn-info" role="button" >Fund the Brew!</a>
                        <button data-toggle="modal" data-target="#edit_pitch_modal" v-on:click="getEditPitch({{{ $pitch->pitch_id }}})">Edit</button>
                        <button v-on:click="deletePitch({{{ $pitch->pitch_id }}})">Delete</button>
                       


                    </div>
                </div>
            
        </div>

        <div class='row'>
            
            <div class='col-lg-12' show>

                <ul id="myTabs" class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#campaign">Campaign</a></li>
                  <li role="presentation"><a href="#updates">Updates</a></li>
                  <li role="presentation"><a href="#hopmakers">AdoptABrew</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="campaign">
        
                        Come be a part of the Plan & Tentative Recipe.  We will take you on a journey.  You will take part in brewing decisions and see the brewing process firsthand.  Its time to get that brewer fix!



                    </div>
                    <div role="tabpanel" class="tab-pane" id="updates">
                        @if (Auth::check() && Auth::user()->user_id == $pitch->user_id)
                        {{ Form::open(['method'=>'POST', 'action'=> ['PitchesController@postupdate', $pitch->pitch_id]]) }}
                            <fieldset class="form-group">
                                <label for="exampleTextarea">This is only for the hopstarter/creator to post.</label>
                                <textarea class="form-control" id="updateTextarea" name="updateText"rows="3"></textarea>
                            </fieldset>
                            <button  type="submit" class="btn btn-primary">Submit</button>
                        {{ Form::close() }}
                        @endif
                    <div>
                        @foreach($pitch->updates as $update)
                        <div class='row'>
                            {{{ $update->update }}} <br> Posted: {{{ $update->updated_at->diffForHumans() }}}
                        </div>

                        @endforeach
                    </div>

                        This is different. We will take you on a journey.  You will take part in brewing decisions and see the brewing process firsthand.  Its time to get that brewer fix!

                    </div>
                    <div role="tabpanel" class="tab-pane" id="hopmakers"><h2>These are the hopmakers</h2>
                        <table style="width:100%">
                            @foreach($pitch->contributions as $contribution)
                              <tr>
                                <td>{{{ $contribution->user->first_name }}} {{{ $contribution->user->last_name }}}</td>
                                <td>${{{ $contribution->amount }}}</td>
                              </tr>
                            @endforeach
                        </table>



                    </div>
                </div>

            
                

            </div>
      
        </div>
       

        {{-- /vagrant/sites/hopshop.dev/app/views/pitches/show.blade.php --}}


    </div>
@stop

@section('bottom-script')
<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show');
});
</script>


@stop








