@extends('includes.header')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-briefcase"></i>
       </div>
       <div class="header-title">
          <h1>Jobs</h1>
          <small>All Jobs List</small>
       </div>
    </section>
    <div class="btn-group">
    <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select Company
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($companies as $company)
        <a class="dropdown-item" href="{{url('company-wise-job')}}/{{$company->id}}">{{$company->name}}</a>
        @endforeach


       </div>
     </div>
     <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Categories Type
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         @foreach ($jobcategories as $cat)
        <a class="dropdown-item" href="{{url('category-wise-job')}}/{{$cat->id}}">{{$cat->name}}</a>
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
                               <h4>Job</h4>
                           </div>
                       </div>
                       <div class="card-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="float-right">
                               <div class="btn-group">
                                  <button class="buttonexport"  data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                                  <ul class="dropdown-menu exp-drop" role="menu">


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

                                  </ul>
                               </div>


                               <div class="btn-group" role="group">
                                  <div class="buttonexport" id="buttonlist">
                                     <a class="btn btn-add" href="{{url('create-job')}}"> <i class="fa fa-plus"></i> Add Jobs
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
                                           <th>Ref</th>
                                           <th>Job Title</th>
                                           <th>Responsible</th>
                                           <th>Start Date</th>
                                           <th>End Date</th>
                                           <th>Customer Name</th>
                                           <th>Email</th>
                                           {{-- <th><input type="search" id="form1" class="form-control" placeholder="Post Code" /></th> --}}
                                           <th>Company</th>
                                           <th>Status</th>
                                           <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($jobs as $job)


                                        <tr>
                                           <td>{{$job->id}}</td>
                                           <td>{{$job->job_title}}</td>
                                           <td>@if($job->staff!=null){{$job->staff->staff_name}} @endif</td>
                                           <td>{{$job->start_date}}</td>
                                           <td>{{$job->end_date}}</td>
                                           <td>@if($job->contact!=null){{$job->contact->name}} @endif</td>
                                           <td>@if($job->contact!=null){{$job->contact->email1}} @endif</td>
                                           {{-- <td>1WS 2ED</td> --}}
                                           <td>@if($job->company!=null){{$job->company->name}} @endif</td>
                                           <td><span class="label-custom label label-default">Active</span></td>
                                           <td>
                                              <a href="{{route('job.edit',$job->id)}}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                              <a href="{{route('job.delete',$job->id)}}" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </a>
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
       <!-- customer Modal1 -->
       <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header modal-header-primary">
                   <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                         <form class="form-horizontal">
                            <div class="row">
                               <!-- Text input-->
                               <div class="col-md-4 form-group">
                                  <label class="control-label">Customer Name:</label>
                                  <input type="text" placeholder="Customer Name" class="form-control">
                               </div>
                               <!-- Text input-->
                               <div class="col-md-4 form-group">
                                  <label class="control-label">Email:</label>
                                  <input type="email" placeholder="Email" class="form-control">
                               </div>
                               <!-- Text input-->
                               <div class="col-md-4 form-group">
                                  <label class="control-label">Mobile</label>
                                  <input type="number" placeholder="Mobile" class="form-control">
                               </div>
                               <div class="col-md-6 form-group">
                                  <label class="control-label">Postcode/Zip</label><br>
                                  <input type="text" name="zip" placeholder="Postcode/Zip" value="" id="zip">
                               </div>
                               <div class="col-md-6 form-group">
                                  <label class="control-label">Enquiry Come From</label>
                                  <input type="text" name="zip" placeholder="Enquiry Come From" value="" id="zip">
                               </div>
                               <div class="col-md-6 form-group">
                                <label class="control-label">Description</label><br>
                                <textarea name="description" rows="3"></textarea>
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
                         <form class="form-horizontal">
                               <div class="row">
                                     <div class="col-md-12 form-group user-form-group">
                                        <label class="control-label">Delete Customer</label>
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
