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

                <label for="brewery_id">Brewery Id</label>
                <input id="brewery_id" type="text" class="form-control" placeholder="Enter brewery id" v-model="beer.brewery_id">

                <label for="name">Beer name</label>
                <input id="name" type="password" class="form-control" placeholder="Enter beer name" v-model="beer.name">

                <label for="category_id">Category id</label>
                <input id="category_id" type="text" class="form-control" placeholder="Enter category id" v-model="beer.category_id">

                <label for="style_id">Password</label>
                <input id="style_id" type="text" class="form-control" placeholder="Enter style id" v-model="beer.style_id">
                
                <label for="abv">Abv</label>
                <input id="abv" type="text" class="form-control" placeholder="Enter abv" v-model="beer.abv">

                <label for="ibu">Ibu</label>
                <input id="ibu" type="text" class="form-control" placeholder="Enter ibu" v-model="beer.ibu">

                <label for="upc">Upc</label>
                <input id="upc" type="text" class="form-control" placeholder="Enter upc" v-model="beer.upc">

                <label for="image">Image path</label>
                <input id="image" type="text" class="form-control" placeholder="Enter image path" v-model="beer.image">

                <label for="description">Password</label>
                <input id="description" type="text" class="form-control" placeholder="Enter description" v-model="beer.description">
                
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