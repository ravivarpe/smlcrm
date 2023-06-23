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
         <a class="dropdown-item" href="#">Yorkshire Resin</a>
         <a class="dropdown-item" href="#">Build a Drive</a>
         <a class="dropdown-item" href="#">Power Clean</a>
       </div>
     </div>
     <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Categories Type
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Every One</a>
         <a class="dropdown-item" href="#">You</a>
         <a class="dropdown-item" href="#">Present</a>
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

                                     <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                        <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                     </li>

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

                                     <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                        <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                     </li>

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
                                    <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addtask"><i class="fa fa-plus"></i> Add Tasks</a>
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
                                           <th><input type="search" id="form1" class="form-control" placeholder="Task No." /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="The Tasks" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Job Categories" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Team" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Date/Preset Category"/></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Deadline/Preset Order" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Description" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Status" /></th>
                                           <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <tr>
                                           <td><input type="checkbox" class="" value=""></td>
                                           <td>meeting at home</td>
                                           <td>Quote Visit</td>
                                           <td>Team A</td>
                                           <td>16 wednesday 2023 </td>
                                           <td>26 wednesday 2023</td>
                                           <td>Give full details about products & prices</td>
                                           <td><span class="label-custom label label-default">Active</span></td>
                                           <td>
                                              <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtask"><i class="fa fa-pencil"></i></button>
                                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="" value=""></td>
                                            <td>meeting at home</td>
                                            <td>Quote Visit</td>
                                            <td>Team A</td>
                                            <td>16 wednesday 2023 </td>
                                            <td>26 wednesday 2023</td>
                                            <td>Give full details about products & prices</td>
                                            <td><span class="label-custom label label-default">Active</span></td>
                                            <td>
                                               <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtask"><i class="fa fa-pencil"></i></button>
                                               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td><input type="checkbox" class="" value=""></td>
                                            <td>meeting at home</td>
                                            <td>Quote Visit</td>
                                            <td>Team A</td>
                                            <td>16 wednesday 2023 </td>
                                            <td>26 wednesday 2023</td>
                                            <td>Give full details about products & prices</td>
                                            <td><span class="label-custom label label-default">Active</span></td>
                                            <td>
                                               <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtask"><i class="fa fa-pencil"></i></button>
                                               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td><input type="checkbox" class="" value=""></td>
                                            <td>meeting at home</td>
                                            <td>Quote Visit</td>
                                            <td>Team A</td>
                                            <td>16 wednesday 2023 </td>
                                            <td>26 wednesday 2023</td>
                                            <td>Give full details about products & prices</td>
                                            <td><span class="label-custom label label-default">Active</span></td>
                                            <td>
                                               <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtask"><i class="fa fa-pencil"></i></button>
                                               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                            </td>
                                         </tr>
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
             <h3><i class="fa fa-plus m-r-5"></i> add new task</h3>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
             <div class="row">
                <div class="col-md-12">
                   <form class="form-horizontal">
                      <div class="row">
                            <!-- Text input-->
                            <div class="col-md-12 form-group">
                               <label class="control-label">Task Name</label>
                               <input type="text" placeholder="Task Name" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">When to do it?</label>
                               <input type="date" placeholder="Due title" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Add a deadline</label>
                               <input type="date" placeholder="Due title" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                               <label class="control-label">Description</label>
                               <textarea class="form-control" rows="3" placeholder="description" ></textarea>
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Responsible to</label>
                               <select class="form-control"  multiple="">
                                  <option>Team A</option>
                                  <option>Team Build Drive</option>
                                  <option>Team Power Clean</option>
                                  <option>Team A</option>
                                  <option>Team A</option>
                               </select>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6 form-group">
                               <label class="control-label">Job Categories</label>
                               <select class="form-control">
                                  <option>Meeting</option>
                                  <option>Follow Up</option>
                                  <option>Job Pack</option>
                                  <option>Site Visit</option>
                                  <option>Callback</option>
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
                         <form class="form-horizontal">
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
