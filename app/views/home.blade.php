@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/home.css">
    <script type='text/javascript' src='js/master.js'></script>

@stop

@section('content')
    {{-- 
        This is going to be the beginning of the carousel and the css will be in the cssslide_files/style.css
     --}}
<div class='col-12'>
    <link rel="stylesheet" href="cssslider_files/csss_engine1/style.css">
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
              <li class="num0 img slide"> <img src="cssslider_files/csss_images1/craftbeer.jpg" id='beer-of-day'alt="craft-beer" title="craft-beer"></li>
              <li class="num1 img slide"> <img src="cssslider_files/csss_images1/holy-grail.jpg" id='top-rated'alt="beer-logos" title="beer-logos"></li>
              <li class="num2 img slide"> <img src="cssslider_files/csss_images1/tanks.jpg" id='brewery-pitches'alt="tanks" title="tanks"></li>
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
</div>
{{--
    This is going to be the end of the carrousel/ ----------> Now begininng the seasonal heading page, css is in master.css
--}}
<div class='col-12'>
    <div class='contain' id='reSizeBeerSeason'>
        <div class='seasonal-heading' id='reSizeHeading'>
            <h1 class='seasonal-heading-left' id='reSizeHeadingLeft'>What's in Season?</h1>
        </div>
    </div>
</div>
{{--
    This is the begininng of the beer trivia column
--}}
<div class='col-12'>
    <div class='beer-posts' id='beer-trivia'>
    <h1 class='trivia-title'>How Much Do You Know About Beer?</h1>
        <div class='container'>
            <form method="POST" action="/MyFirstForm.php">
            <div class='trivia' id='trivia-inner'>
                    <p>
                    <h3>What is Cenosillicaphobia the fear of?</h3>
                        <label>
                            <input type="radio" name="q1" value="Fear-of-an-empty glass">
                            Fear of an empty glass
                        </label>
                        <label>
                            <input type="radio" name="q1" value="Fear-of-a-full glass">
                            Fear of a full glass
                        </label>
                        <label>
                            <input type="radio" name="q1" value="Fear-of-beer">
                            Fear of beer
                        </label>
                        <label>
                            <input type="radio" name="q1" value="Fear-of-pictures-with-beer-in-them">
                            Fear of pictures with beer in them
                        </label>
                    </p>
                    
                    <h3>What happens when you toss salted peanuts into a glass of beer?</h3>
                    <p>
                        <label>
                            <input type="radio" name="q2" value="The-peanuts-dance">
                            The peanuts dance
                        </label>
                        <label>
                            <input type="radio" name="q2" value="They-sink-to-the-bottom">
                            They sink to the bottom
                        </label>
                        <label>
                            <input type="radio" name="q2" value="They float on the top">
                            They float on the top
                        </label>
                        <label>
                            <input type="radio" name="q2" value="They dissinegrate in the beer">
                            They dissinegrate in the beer
                        </label>
                    </p>
                    <h3>What is the national drink of Belgium?</h3>
                    <p>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Beer">
                            Beer
                        </label>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Wine">
                            Wine
                        </label>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Champagne">
                            Champagne
                        </label>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Sparkling Water">
                            Sparkling Water
                        </label>
                    </p>
                    <h3>What beer was the first beer to win a blue ribbon at the Chicago World's Fair in 1893?</h3>
                    <p>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Pabst-Blue-Ribbon">
                            Pabst Blue Ribbon
                        </label>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Bourbon-County">
                            Bourbon County
                        </label>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Two-Hearted-ale">
                            Two Hearted Ale
                        </label>
                        <label>
                            <input type="radio" id="answer" name="q3" value="Old-Style-Lager">
                            Old Style Lager
                        </label>
                    </p>
                    <p>
                        <button class='btn btn-primary' type="Submit">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <-- End of page --> --}}
    
@stop