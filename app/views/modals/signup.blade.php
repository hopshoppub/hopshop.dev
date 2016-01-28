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
                
                <label for="first_name">First Name</label>
                <input  v-model="errors.first_name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.first_name">@{{ errors.first_name }}</div>
                <input @keyup.enter="signupClicked" id="first_name" type="text" class="form-control" placeholder="Enter first name" v-model="user.first_name">

                <label for="last_name">Last Name</label>
                <input  v-model="errors.last_name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.last_name">@{{ errors.last_name }}</div>
                <input @keyup.enter="signupClicked" id="last_name" type="text" class="form-control" placeholder="Enter last name" v-model="user.last_name">

                <label for="user_name">User Name</label>
                <input  v-model="errors.user_name" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.user_name">@{{ errors.user_name }}</div>
                <input @keyup.enter="signupClicked" id="user_name" type="text" class="form-control" placeholder="Enter user name" v-model="user.user_name">

                <label for="email">Email</label>
                <input  v-model="errors.email" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.email">@{{ errors.email }}</div>
                <input @keyup.enter="signupClicked" id="email" type="text" class="form-control" placeholder="Enter email" v-model="user.email">

                <label for="confirm_email">Confirm Email</label>
                <input  v-model="errors.confirm_email" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.confirm_email">@{{ errors.confirm_email }}</div>
                <input @keyup.enter="signupClicked" id="confirm_email" type="text" class="form-control" placeholder="Confirm email" v-model="user.confirm_email">

                <label for="password">Password</label>
                <input  v-model="errors.password" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.password">@{{ errors.password }}</div>
                <input @keyup.enter="signupClicked" id="password" type="password" class="form-control" placeholder="Enter password" v-model="user.password">

                <label for="confirm_password">Confirm Password</label>
                <input  v-model="errors.confirm_password" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.confirm_password">@{{ errors.confirm_password }}</div>
                <input @keyup.enter="signupClicked" id="confirm_password" type="password" class="form-control" placeholder="Confirm password" v-model="user.confirm_password">

                <label for="zip_code">Zip Code</label>
                <input  v-model="errors.zip_code" value='' hidden>
                <div class="alert alert-danger" role="alert" v-for="error in errors.zip_code">@{{ errors.zip_code }}</div>
                <input @keyup.enter="signupClicked" id="zip_code" type="text" class="form-control" placeholder="Enter zip code" v-model="user.zip_code">

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