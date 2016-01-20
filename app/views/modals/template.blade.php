<div class="modal fade" id="********" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            {{--
                    Head
            --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>

            {{--
                    Body
            --}}
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>

            {{--
                    Footer
            --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>

            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



{{-- 
                Example
--}}




        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="modal_id">


                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Contact</h4>
                    </div>

                    <div class="modal-body" >
                        <form id="edit_contact_form" action"#" method="GET">

                            <label for="edit_name">Name</label>
                            <input id="edit_name" type="text" class="form-control" placeholder="Enter name" v-model="name">

                            <label for="edit_email">Email address</label>
                            <input id="edit_email" type="email" class="form-control" placeholder="Enter email" v-model="email">

                            <label for="edit_phone">Phone number</label>
                            <input id="edit_phone" type="tel" class="form-control" placeholder="Enter phone" v-model="phone">

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                        <button type="button" v-on:click="saveChanges" class="btn btn-primary" data-dismiss="modal" >Save changes</button>
                    </div>


                </div>
            </div>
        </div>

    {{--
                    How to target modal
    --}}


            <div class="col-sm-12">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <td class="col-sm-2">Name</td>
                            <td class="col-sm-3">Email</td>
                            <td class="col-sm-3">Phone</td>
                            <td class="col-sm-4">Actions</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="contact in contacts | filterBy search" >

                            <td>

                                {{contact.name}}
                            </td>

                            <td>

                                {{contact.email}}
                            </td>

                            <td>

                                {{contact.phone}}
                            </td>

                            <td>

                                <button class="edit btn btn-default btn-sm" data-toggle="modal" data-target="#myModal" v-on:click="editClicked($index)">edit</button>
                                

                                <button class="remove btn btn-danger" v-on:click="removeClicked($index)">remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- table holder for bootstrap -->
        </div><!-- header and table holder for bootstrap -->