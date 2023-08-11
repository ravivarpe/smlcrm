@extends('includes.header')
@section('content')

<style>
   .error{
      color:red;
   }
</style>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-gears"></i>
       </div>
       <div class="header-title">
          <h1>User Permission</h1>
          <small>User Permission</small>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-lg-12 pinpin">
                <div class="card lobicard"  data-sortable="true">
                    <div class="card-header">
                        <div class="card-title custom_title">
                            <h4>User Permission</h4>
                        </div>
                    </div>
                    <div class="card-body">
               
                       <!-- Nav tabs -->
                   <div class="col-12 col-sm-12 col-md-12 col-lg-12 m-b-20">
                <div class=" custom_tabs">
                  <div class="card2-body card_card">
                      <ul class="nav nav-tabs" id="myTab1" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="enquiry-tab" data-toggle="tab" href="#enquiry" role="tab" aria-controls="enquiry" aria-selected="true">User Permission</a>
                              </li>
                           </ul>
                           <div class="tab-content custom_tabs2" >
                         <!--   <p><strong>Lorem Ipsum is simply dummy text of the printing and. </strong></p> -->
                            <div class="tab-pane fade show active" id="user permission" role="tabpanel" aria-labelledby="user permission-tab">
                               <table class="add_edit_table">
                                  <tbody><tr class="th">
                                  <td><strong>User Permission</strong></td>
                                  <td></td>
                                  </tr>
                                  </tbody><tbody>
                                    @foreach($permissions as $permission)
                                    <tr>
                                    <td>{{$permission->role_name}}</td>
                                    <td>
                                       <button type="button" class="btn btn-add btn-sm editbtn" data-toggle="modal"
                                       data-target="#editpermission" data-id="{{$permission->id}}" ><i class="fa fa-pencil"></i></button>
                                       <button type="button" class="btn btn-danger btn-sm deletebtn" data-toggle="modal"
                                       data-target="#deletepermission" data-id="{{$permission->id}}"><i class="fa fa-trash-o"></i> </button>
                                    </td>
                                    </tr>
                                    @endforeach
                                   
                                  <tr class="black">
                                  <td>
                                     <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addpermission">Add New Value</button>
                                  </td>
                                  <td>
                                  </td>
                                  </tr>
                                  </tbody>
                                  </table>
                            </div>


                           


                          </div>
                  </div>
                </div>
              </div>
                      </div>
                </div>
           
       </div>

      <!-- Add Value -->
      <!--permission Delete-->
      <div class="modal fade" id="deletepermission" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header modal-header-primary">
                  <h3><i class="fa fa-user m-r-5"></i> Delete User Permission</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                         <form action="{{route('userpermission.delete')}}" method="Post">
                           @csrf>
                           <input type="hidden" name="permission_id" id="permission_id"/>
                           <fieldset>
                              <div class="row">
                                    <div class="col-md-12 form-group user-form-group">
                                       <label class="control-label">Delete User Permission</label>
                                       <div class="float-right">
                                          <button type="button" class="btn btn-danger btn-sm">NO</button>
                                           <button type="submit" class="btn btn-add btn-sm">YES</button>
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

      <!--permission Edit-->
      <div class="modal fade" id="editpermission" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header modal-header-primary">
                  <h3><i class="fa fa-user m-r-5"></i>  	
                     Edit User Permission</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                         <form class="form-horizontal" id="editForm" method="Post">
                           @csrf
                            <div class="row">
                               <!-- Text input-->
                               <div class="col-md-12 form-group">
                                  <label class="control-label">User Permission</label>
                                  <input type="text" placeholder="Name" class="form-control" name="role_name" id="role_name" required>
                               </div>
                            
                               <div class="col-md-12 form-group user-form-group">
                                  <div class="float-right">
                                     <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                     <button type="submit" class="btn btn-add btn-sm">Save</button>
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

      <!--permission Add-->
      <div class="modal fade" id="addpermission" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header modal-header-primary">
                  <h3><i class="fa fa-user m-r-5"></i>  	
                  Add User Permission</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                   <div class="row">
                     <div class="col-md-12">
                        <form action="{{route('userpermission.add')}}" method="Post" id="addPermissionForm">
                           @csrf
                           <div class="row">
                              <!-- Text input-->
                              <div class="col-md-12 form-group">
                                 <label class="control-label">Add user Permission</label>
                                 <input type="text" placeholder="Name" class="form-control"name="role_name" required>
                              </div>
                            
                              <div class="col-md-12 form-group user-form-group">
                                  <div class="float-right">
                                     <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                     <button type="submit" class="btn btn-add btn-sm">Save</button>
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

    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
@section('footer_scripts')
<script>
   $(function()
   {
   //User Permission
      $('.editbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-userpermission')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#editForm').attr('action','{{url("edit-userpermission")}}/'+id);
        $('#role_name').val(data.role_name);
        
 
    });
    $('#editpermission').modal('show');
});

$('.deletebtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#permission_id').attr('value',id);
    $('#deletepermission').modal('show');

});

   $("#addPermissionForm").validate();editForm
   $("#editForm").validate();

});
    

</script>
@endsection
