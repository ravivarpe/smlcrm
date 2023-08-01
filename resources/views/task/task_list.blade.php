@extends('includes.header')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-check-square-o"></i>
       </div>
       <div class="header-title">
          <h1>Tasks</h1>
          <small>All your Tasks</small>
       </div>
    </section>
    <div class="btn-group">
    <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select Company
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($companies as $company)

        <a class="dropdown-item" href="#">{{$company->name}}</a>
         @endforeach

       </div>
     </div>
     <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Categories Type
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         @foreach ($jobcategories as $cat)

           <a class="dropdown-item" href="{{route('task.catwise',$cat->id)}}">{{$cat->name}}</a>
         @endforeach

       </div>
     </div>
    </div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
             <div class="col-lg-12 pinpin">
                   <div class="card lobicard"  data-sortable="true">
                       <div class="card-header">
                           <div class="card-title custom_title">
                               <h4>Add Taska</h4>
                           </div>
                       </div>
                       <div class="card-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="float-right">
                               <div class="btn-group">
                                  <button class="buttonexport"  data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                                  <ul class="dropdown-menu exp-drop" role="menu">



                                     <li class="dropdown-divider"></li>
                                     <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                        <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                     </li>

                                     <li class="dropdown-divider"></li>

                                     <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                        <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                     </li>
                                  </ul>
                               </div>
                               <div class="btn-group">
                                  <button class="buttonexport"  data-toggle="dropdown"><i class="fa fa-bars"></i> Import Table Data</button>
                                  <ul class="dropdown-menu exp-drop" role="menu">



                                     <li class="dropdown-divider"></li>
                                     <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                        <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                     </li>

                                     <li class="dropdown-divider"></li>

                                     <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                        <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                     </li>
                                  </ul>
                               </div>

                               <div class="btn-group" role="group">
                                <div class="buttonexport" id="buttonlist">
                                   <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtask"> <i class="fa fa-plus"></i> Add Tasks
                                   </a>
                                </div>
                             </div>
                               <div class="btn-group" role="menu">
                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    30
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">50</a>
                                    <a class="dropdown-item" href="#">100</a>
                                    <a class="dropdown-item" href="#">200</a>
                                  </div>
                               </div>
                            </div>
                               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                               <div class="table-responsive">
                                  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                     <thead class="back_table_color">
                                        <tr class="info">
                                           <th>Task No</th>
                                           <th>The Tasks</th>
                                           <th>Job Categories</th>
                                           <th>Team</th>
                                           <th>Start Date</th>
                                           <th>End Date</th>
                                           <th>Description</th>
                                           <th>Status</th>
                                           <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>

                                        @foreach ($tasks as $task )

                                        <tr>
                                           <td>{{$task->id}}</td>
                                           <td>{{$task->task_name}}</td>
                                           <td>@if($task->jobcategories!=null){{$task->jobcategories->name}}@endif</td>
                                           <td>@if($task->team!=null){{$task->team->team_name}}@endif</td>
                                           <td>{{$task->start_date}}</td>
                                           <td>{{$task->end_date}}</td>

                                           <td>{{$task->discription}}</td>
                                           <td>@if($task->status==1)
                                            <span class="label-custom label label-default">Active</span>
                                            @else
                                            <span class="label-custom label label-default">InActive</span>

                                            @endif

                                            </td>


                                           <td>
                                            <button type="button" class="btn btn-add btn-sm editbtn" data-toggle="modal" data-id="{{$task->id}}"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm deletebtn" data-toggle="modal"  data-id="{{$task->id}}"><i class="fa fa-trash-o"></i> </button>
                                         </td>




                                        </tr>

                                        @endforeach




                                     </tbody>
                                  </table>
                               </div>
                            </div>
                   </div>
               </div>
       </div>
   <!-- Modal1 -->
   <div class="modal fade" id="addtask" tabindex="-1" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header modal-header-primary">
             <h3><i class="fa fa-plus m-r-5"></i> Add New Task</h3>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <form action="{{route('task.add')}}" method="post" enctype="multipart/form-data">
                @csrf
             <div class="row">
                <div class="col-md-12">

                      <div class="row">
                            <!-- Text input-->
                            <div class="col-md-12 form-group">
                               <label class="control-label">Task Name</label>
                               <input type="text" placeholder="Task Name" name="task_name"class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">When to do it?</label>
                               <input type="text" placeholder="dd-mm-yyyy"  name="start_date" class="form-control" id="start_date1">
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Add a deadline</label>
                               <input type="text" placeholder="dd-mm-yyyy"  name="end_date" class="form-control" id="end_date1">
                            </div>
                            <div class="col-md-12 form-group">
                               <label class="control-label">Description</label>
                               <textarea class="form-control" rows="3" placeholder="description"  name="discription" ></textarea>
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Responsible to</label>
                               <select class="form-control"  multiple="" name="team_id">
                                @foreach ($teams as $team)
                                     <option value="{{$team->id}}">{{$team->team_name}}</option>
                                  @endforeach
                                  {{-- <option>Team A</option>
                                  <option>Team Build Drive</option>
                                  <option>Team Power Clean</option>
                                  <option>Team A</option>
                                  <option>Team A</option> --}}
                               </select>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6 form-group">
                               <label class="control-label">Job Categories</label>
                               <select class="form-control"  name="job_cat_id">
                                @foreach ($jobcategories as $cat)
                               <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                                  {{-- <option>Meeting</option>
                                  <option>Follow Up</option>
                                  <option>Job Pack</option>
                                  <option>Site Visit</option>
                                  <option>Callback</option> --}}
                               </select>
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

  <!-- Modal1 -->
  <div class="modal fade" id="edittsk" tabindex="-1" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header modal-header-primary">
             <h3><i class="fa fa-plus m-r-5"></i> Edit Task</h3>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <form  method="post" enctype="multipart/form-data" id="editForm">
                @csrf
             <div class="row">
                <div class="col-md-12">

                      <div class="row">
                            <!-- Text input-->
                            <div class="col-md-12 form-group">
                               <label class="control-label">Task Name</label>
                               <input type="text" placeholder="Task Name" name="task_name"class="form-control" id="task_name">
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">When to do it?</label>
                               <input type="text" placeholder="dd-mm-yyyy"  name="start_date" class="form-control" id="start_date">
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Add a deadline</label>
                               <input type="text" placeholder="dd-mm-yyyy"  name="end_date" class="form-control" id="end_date">
                            </div>
                            <div class="col-md-12 form-group">
                               <label class="control-label">Description</label>
                               <textarea class="form-control" rows="3" placeholder="description"  name="discription" id="discription"></textarea>
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Responsible to</label>
                               <select class="form-control"  multiple="" name="team_id" id="team_id">
                                @foreach ($teams as $team)
                                     <option value="{{$team->id}}">{{$team->team_name}}</option>
                                  @endforeach
                                  {{-- <option>Team A</option>
                                  <option>Team Build Drive</option>
                                  <option>Team Power Clean</option>
                                  <option>Team A</option>
                                  <option>Team A</option> --}}
                               </select>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6 form-group">
                               <label class="control-label">Job Categories</label>
                               <select class="form-control"  name="job_cat_id" id="job_cat_id">
                                @foreach ($jobcategories as $cat)
                               <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                                  {{-- <option>Meeting</option>
                                  <option>Follow Up</option>
                                  <option>Job Pack</option>
                                  <option>Site Visit</option>
                                  <option>Callback</option> --}}
                               </select>
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


       <!-- Customer Modal2 -->
       <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header modal-header-primary">
                   <h3><i class="fa fa-user m-r-5"></i> Delete Tasks</h3>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                         <form class="form-horizontal" method="post" action="{{route('task.delete')}}">
                            @csrf
                            <input type="hidden" name="task_id" id="task_id"/>
                               <div class="row">
                                     <div class="col-md-12 form-group user-form-group">
                                        <label class="control-label">Delete Tasks</label>
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
            $.get("{{url('edit-task')}}/"+id, function (data) {
                console.log(data);
                var id=data.id;
                $('#editForm').attr('action','{{url("edit-task")}}/'+id);
                $('#task_name').val(data.task_name);
                $('#start_date').val(data.start_date);
                $('#end_date').val(data.end_date);
                $('#discription').text(data.discription);
                $("job_cat_id select").val(data.job_cat_id).change();
                $("#team_id select").val(data.team_id).change();

            });
            $('#edittsk').modal('show');
        });

        $('.deletebtn').on('click',function(){

            var id=$(this).attr('data-id');
            $('#task_id').attr('value',id);
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

        $('#end_date').datepicker({
        format: "dd-mm-yyyy",
      });
        $('#start_date').datepicker({
        format: "dd-mm-yyyy",
      });

      $('#end_date1').datepicker({
        format: "dd-mm-yyyy",
      });
        $('#start_date1').datepicker({
        format: "dd-mm-yyyy",
      });

    });
 </script>
 @endsection
