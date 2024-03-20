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
                  <i class="fa fa-tree"></i>
               </div>
               <div class="header-title">
                  <h1>Teams</h1>
                  <small>Teams List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <div class="btn-group buttonexport d-flex" role="group">
                                          <h4>Teams details</h4>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-body">
                                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                    <div class="btn-group d-flex" role="group">
                                       <div class="buttonexport" id="buttonlist">
                                          <a class="btn btn-add" href="#" data-toggle="modal" data-target="#addcustom"> <i class="fa fa-plus"></i> Add new group
                                          </a>
                                       </div>
                                    </div>
                                       {{-- <div class="btn-group">
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
                                       </div> --}}
                                       <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                       <div class="table-responsive">
                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr>
                                                   <th>Teams Name</th>
                                                   <th>Email Id</th>
                                                   <th>Colour Code</th>
                                                   <th>Created Date</th>
                                                   <th>Status</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach ($teams as $team)


                                                <tr>

                                                   <td>{{$team->team_name}}</td>
                                                   <td>{{$team->email_id}}</td>
                                                   <td>
                                                       <div style="width:50px;height:24px; background-color:{{$team->colour_code}};"></div>
                                                   </td>
                                                   <td>{{$team->added_date}}</td>
                                                   <td>
                                                       @if ($team->status==1)
                                                       <span class="label-custom label label-default">Active</span>
                                                       @else
                                                       <span class="label-danger label label-default">Inative</span>

                                                       @endif
                                                      </td>
                                                   <td>
                                                      <button type="button" class="btn btn-add btn-sm editbtn" data-toggle="modal" data-id="{{$team->id}}"><i class="fa fa-pencil"></i></button>
                                                      <button type="button" class="btn btn-danger btn-sm deletebtn" data-toggle="modal" data-id="{{$team->id}}"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>

                                                @endforeach

                                                {{-- <tr>
                                                   <td>Team A</td>
                                                   <td>teama@yorkshire.com</td>
                                                   <td>Red</td>
                                                   <td>27th April,2017</td>
                                                   <td><span class="label-custom label label-default">Inative</span></td>
                                                   <td>
                                                      <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addcustom"><i class="fa fa-pencil"></i></button>
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
               <!-- ADD Modal1 -->
               <div class="modal fade" id="addcustom" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Add New Team</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('team.add')}}" method="post" id="addTeamForm">
                                    @csrf
                                    <div class="row">
                                          <!-- Text input-->
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">Team Name:</label>
                                             <input type="text" placeholder="Customer Name" class="form-control" name="team_name" required>
                                            
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">Email Id:</label>
                                             <input type="email" placeholder="email id" class="form-control" name="email_id" required>
                                             
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">Colour Code</label>
                                             <input type="color" placeholder="Colour Code" class="form-control"  name="colour_code" required>
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">Description</label>
                                             <input type="text" placeholder="Description" class="form-control" name="discription" required> 
                                          </div>
                                          <!-- Text input-->
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">Created Date</label>
                                             <input type="text" placeholder="dd-mm-yyyy" class="form-control" name="added_date" id="added_date1" required>
                                            
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label class="control-label">Status</label>
                                             <div class="form-check">

                                                <label class="radio-inline">
                                                <input type="radio" name="status" value="1" checked="checked"> Active</label>
                                                <label class="radio-inline"><input type="radio" name="status" value="0">Inactive</label>

                                             </div>
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
               <!-- /.modal -->
               <!-- Modal -->


                <!-- ADD Modal1 -->
                <div class="modal fade" id="editcustom" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header modal-header-primary">
                             <h3><i class="fa fa-user m-r-5"></i> Edit Team</h3>
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                             <div class="row">
                                <div class="col-md-12">
                                   <form class="form-horizontal" method="post" id="editForm">
                                    @csrf
                                      <div class="row">
                                            <!-- Text input-->
                                            <div class="col-md-6 form-group">
                                               <label class="control-label">Team Name:</label>
                                               <input type="text" placeholder="Customer Name" class="form-control" name="team_name" id="team_name" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                               <label class="control-label">Email Id:</label>
                                               <input type="email" placeholder="email id" class="form-control" name="email_id" id="email_id" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                               <label class="control-label">Colour Code</label>
                                               <input type="color" placeholder="Colour Code" class="form-control"  name="colour_code" id="colour_code">
                                            </div>
                                            <div class="col-md-6 form-group">
                                               <label class="control-label">Description</label>
                                               <input type="text" placeholder="Description" class="form-control" name="discription" id="discription" required>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-6 form-group">
                                               <label class="control-label">Created Date</label>
                                               <input type="text" placeholder="dd-mm-yyyy" class="form-control" name="added_date" id="added_date" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                               <label class="control-label">Status</label>
                                               <div class="form-check">

                                                  <label class="radio-inline">
                                                  <input type="radio" name="status" value="1" checked="checked" id="status_act"> Active</label>
                                                  <label class="radio-inline"><input type="radio" name="status" value="0" id="status_act">Inactive</label>

                                               </div>
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
                 <!-- /.modal -->



               <!-- /.modal -->
               <!-- Modal -->
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('team.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="team_id" id="team_id"/>
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Customer</label>
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
            $.get("{{url('edit-team')}}/"+id, function (data) {
                console.log(data);
                var id=data.id;
                $('#editForm').attr('action','{{url("edit-team")}}/'+id);
                $('#team_name').val(data.team_name);
                $('#email_id').val(data.email_id);
                $('#colour_code').val(data.colour_code);
                $('#discription').val(data.discription);
                $("#added_date").val(data.added_date);
                $("#status_act checked").val(data.status).change();

            });
            $('#editcustom').modal('show');
        });

        $('.deletebtn').on('click',function(){

            var id=$(this).attr('data-id');
            $('#team_id').attr('value',id);
            $('#customer2').modal('show');

        });

        $('#dataTableExample1').dataTable({

lengthMenu: [30,50,100],
ordering:  false,
paging: true,
dom: 'lBfrtip',
buttons: [
     'csv',
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

$('#added_date').datepicker({
        format: "dd-mm-yyyy",
      });
      $('#added_date1').datepicker({
        format: "dd-mm-yyyy",
      });


      $("#addTeamForm").validate();
      $("#editForm").validate();

    });
 </script>
 @endsection
