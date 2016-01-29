
@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/beer.css">
    <link rel="stylesheet" href="/stars/style.css" />
@stop

@section('content')
<div class='container'>
  
        <h2>Search Beer/Brewery</h2>
        <input type="text" name="search" id="search" size="30" value="" onkeypress="searchEntered()"> 
        <input type="text" hidden id="hidden-search">
        <button onclick="searchClicked()">Search</button>

</div>
<div class ='beer-table-outline'>
    <div class="infinite-container" id="contents">
        <div v-for="beer in beers" class= 'infinite-item' id="beer_@{{ beer.beer_id}}">
            <div class="container test_beers" id='beer-table'>
                <div class="row">
                    <div class="col-xs-8 col-md-3"><img src="/img/@{{beer.image}}" alt="Mountain View" style="width:250px;height:200px;"></div>
                    <div class="col-xs-5 col-md-3"><h4>Beer Name: </h4> <h3 class='beer-font'>@{{ beer.name }}</h3></div>
                    <div class="col-xs-5 col-md-3"><h4>Rating:</h4>
                        <div>
                            <div class="stars" data-rating-id="@{{ beer.aveRating }}" data-star-id="@{{ beer.beer_id }}">
                                <input type="radio" name="star" class="star-1" value='1'/>
                                <label class="star-1" for="star-1">1</label>
                                <input type="radio" name="star" class="star-2" value='2'/>
                                <label class="star-2" for="star-2">2</label>
                                <input type="radio" name="star" class="star-3" value='3'/>
                                <label class="star-3" for="star-3">3</label>
                                <input type="radio" name="star" class="star-4" value='4'/>
                                <label class="star-4" for="star-4">4</label>
                                <input type="radio" name="star" class="star-5" value='5'/>
                                <label class="star-5" for="star-5">5</label>
                                <span class='span'></span>
                            </div>
                       </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-xs-8 col-md-3"><h4>ABV: </h4> <h3 class='beer-font'>@{{ beer.abv }}</h3></div>
                    <div class="col-xs-5 col-md-3"><h4>Style: </h4> <h3 class='beer-font'>@{{ beer.style.style_name }}</h3></div>
                    <h4>Brewery: </h4>
                    {{-- <a href="{{{ action("BreweriesController@show", @{{ beer.brewery_id }} ) }}}" class="col-xs-5 col-md-3"><h3>@{{ beer.brewery.name }}</h3></a> --}}
                    <a href="/breweries/@{{ beer.brewery_id}}" class="col-xs-5 col-md-3"><h3>@{{ beer.brewery.name }}</h3></a>
                    {{-- <span v-if="@{{ myVue.$data.user.role === '3' }}"> --}}
                        <button data-toggle="modal" data-target="#edit_beer_modal" v-on:click="getEditBeer($index)" v-if="user.role == 3">Edit</button>
                        <button v-on:click="deleteBeer($index)" v-if="user.role == 3">Delete</button>
                    {{-- </span> --}}
                </div>
                <div class='row'>
                    <div class="description-toggle" data-beer-id="@{{ beer.beer_id }}">
                        <h2>Description: </h2>
                        <span class="col-xs-8 col-md-12"><h4> </h4> <h3 class='beer-font'>@{{ beer.description }}</h3></span>
                    </div>
                </div>
                <button class='pull-right description-button btn' data-grab-id="@{{ beer.beer_id }}">Click Here For Description: </button>
            </div>
        </div>
    </div>
</div>

        
@stop

@section('bottom-script')
    <script src="/js/beerlist.js"></script>
@stop























