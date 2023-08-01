@extends('includes.header')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-user-plus"></i>
       </div>
       <div class="header-title">
          <h1>Users</h1>
          <small>List of User</small>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
             <div class="col-lg-12 pinpin">
                   <div class="card lobicard" id="lobicard-custom-control" data-sortable="true">
                       <div class="card-header">
                           <div class="card-title custom_title">
                               <h4>User Details</h4>
                           </div>
                       </div>
                       <div class="card-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                               <div class="btn-group d-flex" role="group">
                                  <div class="buttonexport">
                                     <a href="#" class="btn btn-add" data-toggle="modal" data-target="#update"><i class="fa fa-plus"></i> Add Users</a>
                                  </div>
                               </div>
                               <div class="btn-group">
                                  <button class="btn btn-exp btn-sm" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                                  <ul class="dropdown-menu exp-drop" role="menu">

                                     <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                        <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                     </li>

                                     <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                        <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                     </li>
                                  </ul>
                               </div>
                               <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                               <div class="table-responsive">
                                  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                     <thead class="back_table_color">
                                        <tr class="info">
                                           <th>Photo</th>
                                           <th>User Name</th>
                                           <th>Type</th>
                                           <th>status</th>
                                           <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>

                                        @foreach ($users as $user)

                                        <tr>
                                           <td>
                                               @if ($user->profile_image!=null)
                                                <img src="{{URL::asset('/public/uploads/profiles/'.$user->profile_image)}}" class="img-circle" alt="User Image" width="50" height="50">

                                               @else
                                                 <img src="assets/dist/img/m1.png" class="img-circle" alt="User Image" width="50" height="50">

                                               @endif


                                           </td>
                                           <td>{{$user->staff_name}}</td>
                                           <td><span class="label-custom label label-default" > @if ($user->role!=null) {{
                                            $user->role->role_name
                                           }} @endif</span>
                                           </td>
                                           <td>
                                            @if ($user->status==1)
                                            <span class="label-custom label label-default">Active</span>
                                            @else
                                            <span class="label-danger label label-default">Inative</span>

                                            @endif

                                           </td>
                                           <td>
                                              <button type="button" class="btn btn-add btn-sm editbtn" data-toggle="modal" data-id="{{$user->id}}"><i class="fa fa-pencil"></i></button>
                                              <button type="button" class="btn btn-danger btn-sm deletebtn" data-toggle="modal" data-id="{{$user->id}}"><i class="fa fa-trash-o"></i> </button>
                                           </td>
                                        </tr>

                                        @endforeach


                                        {{-- <tr>
                                           <td><img src="assets/dist/img/m4.png" class="img-circle" alt="User Image" width="50" height="50"></td>
                                           <td>Alvaro morata</td>
                                           <td><span class="label-custom label label-default">admin</span>
                                           </td>
                                           <td><span class="label-danger label label-default">deactive</span>
                                           </td>
                                           <td>
                                              <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i></button>
                                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                           </td>
                                        </tr> --}}
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                   </div>
               </div>
       </div>
       <!-- User Modal1 -->
       <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header modal-header-primary">
                   <h3><i class="fa fa-plus m-r-5"></i> Add New User</h3>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                         <form class="form-horizontal" action="{{route('user.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                           <div class="row">

                                  <!-- Text input-->
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Full Name</label>
                                     <input type="text" placeholder="User Name" class="form-control" name="staff_name" required>
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Email Id</label>
                                     <input type="email" placeholder="Email Id" class="form-control" name="email" required>
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Mobile No.</label>
                                     <input type="number" placeholder="Mobile No." class="form-control" name="phone" required>
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Teams</label>
                                     <select class="form-control" name="team_id" required>

                                        @foreach ($teams as $team)
                                          <option value="{{$team->id}}">{{$team->team_name}}</option>
                                        @endforeach

                                     </select>
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Colour Code</label>
                                     <input type="color" placeholder="Colours" class="form-control" name="color_code">
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Staff </label>
                                     <select class="form-control" name="is_staff" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                     </select>
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Password</label>
                                     <input type="password" placeholder="Password" class="form-control" name="password" required>
                                     <input type="password" placeholder="confirm Password" class="form-control" name="confirm_pass" required>
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Permission</label>
                                     <select class="form-control" name="role_id" required>

                                        @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                                        @endforeach
                                     </select>
                                  </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                        <label class="control-label">Photo & Signature</label>
                                        <input name="profile_image" class="input-file" type="file">
                                     </div>
                                  <!-- Text input-->
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Status</label>
                                     <div class="form-check">

                                        <label class="radio-inline">
                                        <input type="radio" name="status" value="1" checked="checked"> Active</label>
                                        <label class="radio-inline"><input type="radio" name="status" value="0">Inactive</label>

                                     </div>
                                  </div>
                                  <div class="col-md-6 form-group">
                                     <label class="control-label">Created Date</label>
                                     <input type="date" placeholder="Type" class="form-control" name="added_date">
                                  </div>
                                  <div class="col-md-12 form-group user-form-group">
                                     <div class="float-right">
                                        <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                        <button type="submit" class="btn btn-add btn-sm">Update</button>
                                     </div>
                                  </div>
                           </div>
                         </form>
                      </div>
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                </div>
             </div>
             <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
       </div>
       <!-- /.modal -->
       <!-- Modal -->

       <!-- User Modal1 -->
       <div class="modal fade" id="editUserModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header modal-header-primary">
                 <h3><i class="fa fa-plus m-r-5"></i> Edit User</h3>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                 <div class="row">
                    <div class="col-md-12">
                       <form class="form-horizontal"  method="post" enctype="multipart/form-data" id="editForm">
                          @csrf
                         <div class="row">

                                <!-- Text input-->
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Full Name</label>
                                   <input type="text" placeholder="User Name" class="form-control" name="staff_name" id="staff_name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Email Id</label>
                                   <input type="email" placeholder="Email Id" class="form-control" name="email"id="email"  required>
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Mobile No.</label>
                                   <input type="number" placeholder="Mobile No." class="form-control" name="phone"  id="phone" required>
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Teams</label>
                                   <select class="form-control" name="team_id" id="team_id" required>

                                      @foreach ($teams as $team)
                                        <option value="{{$team->id}}">{{$team->team_name}}</option>
                                      @endforeach

                                   </select>
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Colour Code</label>
                                   <input type="color" placeholder="Colours" class="form-control" name="color_code" id="color_code">
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Staff </label>
                                   <select class="form-control" name="is_staff" id="is_staff" required>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                   </select>
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Password</label>
                                   <input type="password" placeholder="Password" class="form-control" name="password" required>
                                   <input type="password" placeholder="confirm Password" class="form-control" name="confirm_pass" required>
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Permission</label>
                                   <select class="form-control" name="role_id" id="role_id" required>

                                      @foreach ($roles as $role)
                                      <option value="{{$role->id}}">{{$role->role_name}}</option>
                                      @endforeach
                                   </select>
                                </div>
                                     <!-- Text input-->
                                     <div class="col-md-6 form-group">
                                      <label class="control-label">Photo & Signature</label>
                                      <input name="profile_image" class="input-file" type="file">
                                   </div>
                                <!-- Text input-->
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Status</label>
                                   <div class="form-check">

                                      <label class="radio-inline">
                                      <input type="radio" name="status" value="1" checked="checked" id="status_act"> Active</label>
                                      <label class="radio-inline"><input type="radio" name="status" id="status_act" value="0">Inactive</label>

                                   </div>
                                </div>
                                <div class="col-md-6 form-group">
                                   <label class="control-label">Created Date</label>
                                   <input type="date" placeholder="Type" class="form-control" name="added_date" id="added_date" >
                                </div>
                                <div class="col-md-12 form-group user-form-group">
                                   <div class="float-right">
                                      <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                      <button type="submit" class="btn btn-add btn-sm">Update</button>
                                   </div>
                                </div>
                         </div>
                       </form>
                    </div>
                 </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
              </div>
           </div>
           <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->
     <!-- Modal -->



       <!-- Modal -->
       <!-- delete user Modal2 -->
       <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header modal-header-primary">
                   <h3><i class="fa fa-user m-r-5"></i> Delete User</h3>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                         <form class="form-horizontal" action="{{route('user.delete')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id"/>
                            <fieldset>
                               <div class="col-md-12 form-group user-form-group">
                                  <label class="control-label">Delete User</label>
                                  <div class="float-right">
                                     <button type="button" class="btn btn-danger btn-sm">NO</button>
                                     <button type="submit" class="btn btn-add btn-sm">YES</button>
                                  </div>
                               </div>
                            </fieldset>
                         </form>
                      </div>
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                </div>
             </div>
             <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
       </div>
       <!-- /.modal -->
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->


@endsection

 @section('footer_scripts')
 <script>
    $(document).ready(function(){

        $('.editbtn').on('click',function(){
            var id=$(this).attr('data-id');

            $.get("{{url('edit-user')}}/"+id, function (data) {
                console.log(data);
                var id=data.id;
                $('#editForm').attr('action','{{url("edit-user")}}/'+id);
                $('#staff_name').val(data.staff_name);
                $('#email').val(data.email);
                $('#color_code').val(data.color_code);
                $('#phone').val(data.phone);
                $("#added_date").val(data.added_date);
                $("#team_id select").val(data.team_id).change();
                $("#role_id select").val(data.role_id).change();
                $("#status_act checked").val(data.status).change();

            });
            $('#editUserModel').modal('show');
        });

        $('.deletebtn').on('click',function(){

            var id=$(this).attr('data-id');

            $('#user_id').attr('value',id);
            $('#customer2').modal('show');

        });

        $('#dataTableExample1').dataTable({

        lengthMenu: [30,50,100],
        ordering:  false,
        paging: true,
        dom: 'lBfrtip',
        buttons: [
            'csv', 'pdf',
        ],
        initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.header().textContent;

                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.header().replaceChildren(input);

                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
        }
        });

    });
 </script>
 @endsection
