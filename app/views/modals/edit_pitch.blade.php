<div class="modal fade" id="edit_pitch_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            {{--
                    Header
            --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Pitch</h4>
            </div>

            {{--
                    Body
            --}}
            <div class="modal-body">

                <label for="brewery_id">Brewery Id</label>
                <input  v-model="errors.brewery_id" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.brewery_id">@{{ errors.brewery_id }}</div>
                <input id="brewery_id" type="text" class="form-control" placeholder="Enter brewery id" v-model="pitch.brewery_id">

                <label for="title">Pitch Title</label>
                <input  v-model="errors.title" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.title">@{{ errors.title }}</div>
                <input id="title" type="text" class="form-control" placeholder="Enter title of pitch" v-model="pitch.title">

                <label for="campaign">Campaign</label>
                <input  v-model="errors.campaign" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.campaign">@{{ errors.campaign }}</div>
                <input id="campaign" type="text" class="form-control" placeholder="Tell us about your beer" v-model="pitch.campaign">
                
                <label for="goal">Goal</label>
                <input  v-model="errors.goal" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.goal">@{{ errors.goal }}</div>
                <input id="goal" type="text" class="form-control" placeholder="Enter goal" v-model="pitch.goal">

                <label for="deadline">Deadline</label>
                <input  v-model="errors.deadline" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.deadline">@{{ errors.deadline }}</div>
                <input id="deadline" type="text" class="form-control" placeholder="Enter deadline" v-model="pitch.deadline">

                <label for="video">Video</label>
                <input  v-model="errors.video" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.video">@{{ errors.video }}</div>
                <input id="video" type="text" class="form-control" placeholder="Enter video link" v-model="pitch.video">

                <label for="recipe">Recipe</label>
                <input  v-model="errors.recipe" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.recipe">@{{ errors.recipe }}</div>
                <input id="recipe" type="text" class="form-control" placeholder="Enter recipe" v-model="pitch.recipe">
                
            </div>

            {{--
                    Footer
            --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" v-on:click="editPitchClicked">Edit Pitch</button>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->