@extends('includes.header')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-money"></i>
       </div>
       <div class="header-title">
          <h1>Invoice</h1>
          <small>Invoice List</small>
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
          <a class="dropdown-item" href="#">Job Pack</a>
         <a class="dropdown-item" href="#">Purchase</a>
         <a class="dropdown-item" href="#">Quotes</a>
         <a class="dropdown-item" href="#">Invoice</a>
         <a class="dropdown-item" href="#">Estimate</a>
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
                               <h4>Add customer</h4>
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
                                     <a class="btn btn-add" href="{{url('create-invoice')}}"> <i class="fa fa-plus"></i> Add
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
                                           <th><input type="search" id="form1" class="form-control" placeholder="Job Ref"/></th>

                                           <th><input type="search" id="form1" class="form-control" placeholder="Inovoice On" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Contact Person" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Currency" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Value" /></th>
                                           <th><input type="date" id="form1" class="form-control" placeholder="Date Created" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Tags" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Status" /></th>
                                           <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($invoiceTypes as $type )

                                        <tr>
                                           <td>{{$type->id}}</td>
                                           <td>{{$type->name}}</td>
                                           <td>{{$type->contact_number}}</td>
                                           <td>{{$type->email1}}</td>
                                           <td>@if($type->address!=null){{$type->address->pincode}}@endif</td>
                                           <td>@if($type->company!=null){{$type->company->name}}@endif</td>
                                           <td>
                                        <tr>
                                           <td>695</td>
                                           <td>Test By sml</td>
                                           <td>MD. Alimul Alrazy</td>
                                           <td>GBP</td>
                                           <td>£3000</td>
                                           <td>13/03/2023</td>
                                           <td>Test</td>
                                           <td><span class="label-success label label-default">Paid</span></td>
                                           <td>
                                              <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>695</td>
                                            <td>Test By sml</td>
                                            <td>MD. Alimul Alrazy</td>
                                            <td>GBP</td>
                                            <td>£3000</td>
                                            <td>13/03/2023</td>
                                            <td>Test</td>
                                            <td><span class="label-success label label-default">Paid</span></td>
                                            <td>
                                               <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>695</td>
                                            <td>Test By sml</td>
                                            <td>MD. Alimul Alrazy</td>
                                            <td>GBP</td>
                                            <td>£3000</td>
                                            <td>13/03/2023</td>
                                            <td>Test</td>
                                            <td><span class="label-danger label label-default">Not Paid</span></td>
                                            <td>
                                               <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
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
