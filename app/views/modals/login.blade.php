<div class="modal fade" id="login_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            {{--
                    Header
            --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Login</h4>
            </div>

            {{--
                    Body
            --}}
            <div class="modal-body">
                
                    <label for="login_email">Email address</label>
                    <input id="login_email" type="text" class="form-control" placeholder="Enter email" v-model="loginEmail">

                    <label for="login_password">Password</label>
                    <input id="login_password" type="password" class="form-control" placeholder="Enter password" v-model="loginPassword">
                
            </div>

            {{--
                    Footer
            --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" v-on:click="loginClicked">Login</button>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->