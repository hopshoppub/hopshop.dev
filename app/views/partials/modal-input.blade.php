<input  v-model="errors.brewery_id" value='' hidden>
<label for="brewery_id">Brewery Id</label>
<div class="error" v-for="error in errors.brewery_id">@{{ errors.brewery_id }}</div>
<input id="brewery_id" type="text" class="form-control" placeholder="Enter brewery id" v-model="pitch.brewery_id">