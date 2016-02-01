<div class="modal fade" id="add_beer_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            {{--
                    Header
            --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Beer</h4>
            </div>

            {{--
                    Body
            --}}
            <div class="modal-body">

                <label for="name">Beer Name</label>
                <input  v-model="errors.name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.name">@{{ errors.name }}</div>
                <input @keyup.enter="addBeerClicked" id="name" type="text" class="form-control" placeholder="Enter beer name" v-model="beer.name">

                <label for="category_id">Select Category</label>
                <input  v-model="errors.category_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.category_id">@{{ errors.category_id }}</div>
                <select class="form-control" id="category_id" v-model="beer.category_id">
                    <option value="" selected="true" disabled >Select Category</option>
                    <option value="@{{ category.category_id }}" v-for="category in categories">@{{ category.category_name }}</option>
                </select>

                <label for="style_id">Select Style</label>
                <input  v-model="errors.style_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.style_id">@{{ errors.style_id }}</div>
                <select class="form-control" id="style_id" v-model="beer.style_id">
                    <option value="" selected="true" disabled >Select Style</option>
                    <option value="@{{ style.style_id }}" v-for="style in styles">@{{ style.style_name }}</option>
                </select>
                
                <label for="abv">Abv</label>
                <input  v-model="errors.abv" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.abv">@{{ errors.abv }}</div>
                <input @keyup.enter="addBeerClicked" id="abv" type="text" class="form-control" placeholder="Enter abv" v-model="beer.abv">

                <label for="ibu">Ibu</label>
                <input  v-model="errors.ibu" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.ibu">@{{ errors.ibu }}</div>
                <input @keyup.enter="addBeerClicked" id="ibu" type="text" class="form-control" placeholder="Enter ibu" v-model="beer.ibu">

                <label for="upc">Upc</label>
                <input  v-model="errors.upc" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.upc">@{{ errors.upc }}</div>
                <input @keyup.enter="addBeerClicked" id="upc" type="text" class="form-control" placeholder="Enter upc" v-model="beer.upc">

{{--                 <label for="brewery_search">Search Brewery</label>
                <input  v-model="search.brewery" value='' hidden>
                <input @keyup.enter="addBeerClicked" id="brewery_search" type="text" class="form-control" placeholder="Enter brewery name" v-model="search.brewery"> --}}

                <label for="brewery_id">Select brewery</label>
                <input  v-model="errors.brewery_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.brewery_id">@{{ errors.brewery_id }}</div>
                <select class="form-control" id="brewery_id" v-model="beer.brewery_id">
                    <option value="" selected="true" disabled >Select Brewery</option>
                    <option value="@{{ brewery.brewery_id }}" v-for="brewery in breweries | filterBy search.brewery">@{{ brewery.name }}</option>
                </select>

                <label for="image">Image file name</label>
                <input  v-model="errors.image" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.image">@{{ errors.image }}</div>
                <input @keyup.enter="addBeerClicked" id="image" type="text" class="form-control" placeholder="Enter image path" v-model="beer.image">

                <label for="description">Description</label>
                <input  v-model="errors.description" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.description">@{{ errors.description }}</div>
                <input @keyup.enter="addBeerClicked" id="description" type="text" class="form-control" placeholder="Enter description" v-model="beer.description">
                
            </div>

            {{--
                    Footer
            --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" v-on:click="addBeerClicked">Add Beer</button>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->