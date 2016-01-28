<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            {{--
                    Header
            --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sign Up</h4>
            </div>

            {{--
                    Body
            --}}
            <div class="modal-body">
                
                <label for="signup_first_name">First Name</label>
                <input  v-model="errors.signup_first_name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_first_name">@{{ errors.signup_first_name }}</div>
                <input @keyup.enter="signupClicked" id="signup_first_name" type="text" class="form-control" placeholder="Enter first name" v-model="user.first_name">

                <label for="signup_last_name">Last Name</label>
                <input  v-model="errors.signup_last_name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_last_name">@{{ errors.signup_last_name }}</div>
                <input @keyup.enter="signupClicked" id="signup_last_name" type="text" class="form-control" placeholder="Enter last name" v-model="user.last_name">

                <label for="signup_user_name">User Name</label>
                <input  v-model="errors.signup_user_name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_user_name">@{{ errors.signup_user_name }}</div>
                <input @keyup.enter="signupClicked" id="signup_user_name" type="text" class="form-control" placeholder="Enter user name" v-model="user.user_name">

                <label for="signup_email">Email</label>
                <input  v-model="errors.signup_email" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_email">@{{ errors.signup_email }}</div>
                <input @keyup.enter="signupClicked" id="signup_email" type="text" class="form-control" placeholder="Enter email" v-model="user.email">

                <label for="signup_confirm_email">Confirm Email</label>
                <input  v-model="errors.signup_confirm_email" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_confirm_email">@{{ errors.signup_confirm_email }}</div>
                <input @keyup.enter="signupClicked" id="signup_confirm_email" type="text" class="form-control" placeholder="Confirm email" v-model="user.confirm_email">

                <label for="signup_password">Password</label>
                <input  v-model="errors.signup_password" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_password">@{{ errors.signup_password }}</div>
                <input @keyup.enter="signupClicked" id="signup_password" type="password" class="form-control" placeholder="Enter password" v-model="user.password">

                <label for="signup_confirm_password">Confirm Password</label>
                <input  v-model="errors.signup_confirm_password" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_confirm_password">@{{ errors.signup_confirm_password }}</div>
                <input @keyup.enter="signupClicked" id="signup_confirm_password" type="password" class="form-control" placeholder="Confirm password" v-model="user.confirm_password">

                <label for="signup_zip_code">Zip Code</label>
                <input  v-model="errors.signup_zip_code" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.signup_zip_code">@{{ errors.signup_zip_code }}</div>
                <input @keyup.enter="signupClicked" id="signup_zip_code" type="text" class="form-control" placeholder="Enter zip code" v-model="user.zip_code">

            </div>

            {{--
                    Footer
            --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-on:click="signupClicked">Save changes</button>
            </div>

            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->