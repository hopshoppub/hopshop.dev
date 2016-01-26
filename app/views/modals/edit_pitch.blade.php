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

                <label for="pitch_id">Pitch Id</label>
                <input id="pitch_id" type="text" class="form-control" placeholder="Enter user id" v-model="pitch.pitch_id">

                <label for="brewery_id">Brewery Id</label>
                <input id="brewery_id" type="text" class="form-control" placeholder="Enter brewery id" v-model="pitch.brewery_id">

                <label for="title">Pitch Title</label>
                <input id="title" type="text" class="form-control" placeholder="Enter title of pitch" v-model="pitch.title">

                <label for="campaign">Campaign</label>
                <input id="campaign" type="text" class="form-control" placeholder="Tell us about your beer" v-model="pitch.campaign">
                
                <label for="goal">Goal</label>
                <input id="goal" type="text" class="form-control" placeholder="Enter goal" v-model="pitch.goal">

                <label for="deadline">Deadline</label>
                <input id="deadline" type="text" class="form-control" placeholder="Enter deadline" v-model="pitch.deadline">

                <label for="video">Video</label>
                <input id="video" type="text" class="form-control" placeholder="Enter video link" v-model="pitch.video">

                <label for="recipe">Recipe</label>
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