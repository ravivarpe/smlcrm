
@extends('includes.header')

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-archive"></i>
       </div>
       <div class="header-title">
          <h1>Materials</h1>
          <small>Materials List</small>
       </div>
    </section>
    <div class="btn-group">
    <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select Company
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($companies as $company)

           <a class="dropdown-item" href="{{route('material.company',$company->id)}}">{{$company->name}}</a>
         @endforeach
       </div>
     </div>
     <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Materials Type
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($categories as $category)

            <a class="dropdown-item" href="{{route('material.category',       $category->id)}}">{{$category->name}}</a>
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
                               <h4>Add Materials</h4>
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
                                     <a class="btn btn-add" href="{{url('create-material')}}"> <i class="fa fa-plus"></i> Add Materials
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
                                  <table id="dataTableExample1" class="table table-bordered table-striped table-hover data-table">
                                     <thead class="back_table_color">
                                        <tr class="info">
                                           <th><input type="search" id="form1" class="form-control" placeholder="Ref"/></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Name" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Websites" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Material Type" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Quantity" /></th>
                                           <th><input type="search" id="form1" class="form-control" placeholder="Tag" /></th>
                                           <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <tr>
                                            @foreach ($materials as $material )

                                            <tr>
                                               <td>{{$material->id}}</td>
                                               <td>{{$material->title}}</td>
                                               <td>@if($material->company!=null){{$material->company->name}}@endif</td>
                                               <td>@if($material->category!=null){{$material->category->name}}@endif</td>
                                               <td>
                                                <button class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                                                <input type="number" id="number" value="{{$material->quantity}}">
                                                <button class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                                                </td>
                                               <td><span class="label-custom label label-default">{{$material->tags}}</span></td>




                                               <td>
                                                {{-- <a href="{{route('enquiries.view',$contact->id)}}" >
                                                  <button type="button" class="btn btn-add btn-sm"><i class="fa fa-eye"></i></button></a> --}}
                                                  <a href="{{route('material.edit',$material->id)}}" >
                                                  <button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button></a>

                                                  <a href="{{route('material.delete',$material->id)}}" >  <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </button></a>
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
