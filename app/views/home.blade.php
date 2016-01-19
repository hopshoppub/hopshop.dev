@extends('layouts.master')

@section('top-script')

@stop

@section('content')
    <link rel="stylesheet" href="cssslider_files/csss_engine1/style.css">
    <!--[if IE]><link rel="stylesheet" href="cssslider_files/csss_engine1/ie.css"><![endif]-->
    <!--[if lte IE 9]><script type="text/javascript" src="cssslider_files/csss_engine1/ie.js"></script><![endif]-->
    <div class='contain'>
     <div class="csslider1 autoplay ">
	    <input name="cs_anchor1" id="cs_slide1_0" type="radio" class="cs_anchor slide">
	    <input name="cs_anchor1" id="cs_slide1_1" type="radio" class="cs_anchor slide">
	    <input name="cs_anchor1" id="cs_slide1_2" type="radio" class="cs_anchor slide">
	    <input name="cs_anchor1" id="cs_play1" type="radio" class="cs_anchor" checked="">
	    <input name="cs_anchor1" id="cs_pause1_0" type="radio" class="cs_anchor pause">
	    <input name="cs_anchor1" id="cs_pause1_1" type="radio" class="cs_anchor pause">
	    <input name="cs_anchor1" id="cs_pause1_2" type="radio" class="cs_anchor pause">
	    <ul>
	      <li class="cs_skeleton"><img src="cssslider_files/csss_images1/craftbeer.jpg" style="width: 100%;"></li>
	      <li class="num0 img slide"> <img src="cssslider_files/csss_images1/craftbeer.jpg" alt="craft-beer" title="craft-beer"></li>
	      <li class="num1 img slide"> <img src="cssslider_files/csss_images1/beerlogos.png" alt="beer-logos" title="beer-logos"></li>
	      <li class="num2 img slide"> <img src="cssslider_files/csss_images1/tanks.jpg" alt="tanks" title="tanks"></li>
	    </ul><div class="cs_engine"><a href="http://cssslider.com"></a> </div>
	    <div class="cs_description">
	      <label class="num0"><span class="cs_title"><span class="cs_wrapper">Beer Of The Day</span></span></label>
	      <label class="num1"><span class="cs_title"><span class="cs_wrapper">Top-Rated Craft Beers</span></span></label>
	      <label class="num2"><span class="cs_title"><span class="cs_wrapper">Brewery Beer Pitches</span></span></label>
	    </div>
	    <div class="cs_play_pause">
	      <label class="cs_play" for="cs_play1"><span><i></i><b></b></span></label>
	      <label class="cs_pause num0" for="cs_pause1_0"><span><i></i><b></b></span></label>
	      <label class="cs_pause num1" for="cs_pause1_1"><span><i></i><b></b></span></label>
	      <label class="cs_pause num2" for="cs_pause1_2"><span><i></i><b></b></span></label>
	      </div>
	    <div class="cs_arrowprev">
	      <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
	      <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
	      <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
	    </div>
	    <div class="cs_arrownext">
	      <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
	      <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
	      <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
	    </div>
	    <div class="cs_bullets">
	      <label class="num0" for="cs_slide1_0"> <span class="cs_point"></span>
	        <span class="cs_thumb"><img src="cssslider_files/csss_tooltips1/craftbeer.jpg" alt="craft-beer" title="craft-beer"></span></label>
	      <label class="num1" for="cs_slide1_1"> <span class="cs_point"></span>
	        <span class="cs_thumb"><img src="cssslider_files/csss_tooltips1/beerlogos.png" alt="beer-logos" title="beer-logos"></span></label>
	      <label class="num2" for="cs_slide1_2"> <span class="cs_point"></span>
	        <span class="cs_thumb"><img src="cssslider_files/csss_tooltips1/tanks.jpg" alt="tanks" title="tanks"></span></label>
    	</div>
    </div>
    </div>
</div class='contain'>
    <div class='seasonal-heading'>
    	<h1 class='seasonal-heading-left'>What's<br> in<br> Season?</h1>
    </div>
</div>
  
    <!-- End cssSlider.com -->
    
@stop