<div class="modal fade" id="edit_beer_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            {{--
                    Header
            --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Beer</h4>
            </div>

            {{--
                    Body
            --}}
            <div class="modal-body">

                <label for="beer_id">Beer Id</label>
                <input  v-model="errors.beer_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.beer_id">@{{ errors.beer_id }}</div>
                <input id="beer_id" type="text" class="form-control" placeholder="Enter beer id" v-model="beer.beer_id">

                <label for="brewery_id">Brewery Id</label>
                <input  v-model="errors.brewery_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.brewery_id">@{{ errors.brewery_id }}</div>
                <input id="brewery_id" type="text" class="form-control" placeholder="Enter brewery id" v-model="beer.brewery_id">

                <label for="name">Beer name</label>
                <input  v-model="errors.name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.name">@{{ errors.name }}</div>
                <input id="name" type="password" class="form-control" placeholder="Enter beer name" v-model="beer.name">

                <label for="category_id">Category id</label>
                <input  v-model="errors.category_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.category_id">@{{ errors.category_id }}</div>
                <input id="category_id" type="text" class="form-control" placeholder="Enter category id" v-model="beer.category_id">

                <label for="style_id">Password</label>
                <input  v-model="errors.style_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.style_id">@{{ errors.style_id }}</div>
                <input id="style_id" type="text" class="form-control" placeholder="Enter style id" v-model="beer.style_id">
                
                <label for="abv">Abv</label>
                <input  v-model="errors.abv" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.abv">@{{ errors.abv }}</div>
                <input id="abv" type="text" class="form-control" placeholder="Enter abv" v-model="beer.abv">

                <label for="ibu">Ibu</label>
                <input  v-model="errors.ibu" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.ibu">@{{ errors.ibu }}</div>
                <input id="ibu" type="text" class="form-control" placeholder="Enter ibu" v-model="beer.ibu">

                <label for="upc">Upc</label>
                <input  v-model="errors.upc" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.upc">@{{ errors.upc }}</div>
                <input id="upc" type="text" class="form-control" placeholder="Enter upc" v-model="beer.upc">

                <label for="image">Image path</label>
                <input  v-model="errors.image" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.image">@{{ errors.image }}</div>
                <input id="image" type="text" class="form-control" placeholder="Enter image path" v-model="beer.image">

                <label for="description">Password</label>
                <input  v-model="errors.description" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.description">@{{ errors.description }}</div>
                <input id="description" type="text" class="form-control" placeholder="Enter description" v-model="beer.description">
                
            </div>

            {{--
                    Footer
            --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" v-on:click="editBeerClicked">Edit Beer</button>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->