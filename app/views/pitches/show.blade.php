@extends('layouts.pitchesmaster')

@section('top-script')

@stop
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
   

@section('content')

    <div class='container' style={{-- "background-color:fuchsia;" --}}>

        <div class='row'>
            <h2 style="color:papayawhip;text-align: center;">Beer Pitch Name</h2>
        </div>

        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-8 col-lg-8' {{-- style="background-color:papayawhip; border:solid black 2px;"> --}}>
                <iframe width="650" height="366" src="https://www.youtube.com/embed/aV36ytSgC3o" frameborder="0" allowfullscreen></iframe>  
            </div>
            <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4' style="padding-left: 30px">
                <h3>Brewery</h3>
                <h3>Current Level</h3>
                <h3>Goal or Fund Bar</h3>
                <h4>Deadline</h4>
                <button class="btn btn-default">Fund the Brew!</button>
            </div>
        </div>

        <div class='row'>
            
            <div class='col-lg-12' show>

                <ul id="myTabs" class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#campaign">Campaign</a></li>
                  <li role="presentation"><a href="#updates">Updates</a></li>
                  <li role="presentation"><a href="#hopmakers">hopmakers</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="campaign">Come be a part of the Plan & Tentative Recipe.  We will take you on a journey.  You will take part in brewing decisions and see the brewing process firsthand.  Its time to get that brewer fix!</div>
                    <div role="tabpanel" class="tab-pane" id="updates">This is different. We will take you on a journey.  You will take part in brewing decisions and see the brewing process firsthand.  Its time to get that brewer fix!"</div>
                    <div role="tabpanel" class="tab-pane" id="hopmakers">These are the hopmakers</div>
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








