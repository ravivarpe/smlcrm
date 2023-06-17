@extends('includes.header')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-envelope-o"></i>
       </div>
       <div class="header-title">
          <h1>Enquiry Details</h1><span class="bg-custom badge"><small>{{$enquiry->status}}</small></span>
          <small><div class="inbox-date text-right ">
             <div><strong>Date :</strong>{{date('M d Y, h:i A',strtotime($enquiry->added_date))}}</div>
          </div></small>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-md-12">
             <div class="mailbox">
                <div class="mailbox-header">
                   <div class="row">
                      <div class="col-md-4">
                         <div class="inbox-customer">
                            <div class="inbox-customer-text ">
                               <div class="ava2tar-name text-black">{{ucfirst($enquiry->name)}}</div>
                               <div class="details-ref text-black">Ref no. : <span>{{$enquiry->id}}</span></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-8">
                         <div class="inbox-toolbar btn-toolbar">
                            <div class="detailsalign">
                            <div class="btn-group">
                               <a href="{{url('enquiries')}}" class="btn btn-default"><span class="fa fa-long-arrow-left"></span></a>
                            </div>

                            <div class="btn-group">
                               <button type="button" class="btn btn-default" onclick="myFunction()"><span class="fa fa-print"></span></button>
                            </div>

                            <div class="btn-group d-flex" role="group">
                               <div class="buttonexport">
                                  <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addtask"><i class="fa fa-plus"></i> Add Tasks</a>
                               </div>
                            </div>
                            <div class="btn-group" role="group">
                            <button class="btn btn-sm" data-toggle="dropdown"><i class="fa fa-bars"></i> </button>
                            <ul class="dropdown-menu exp-drop" role="menu">

                               <li class="dropdown-divider"></li>
                               <li>
                                  <a href="#" > Add to Contact</a>
                               </li>

                               <li class="dropdown-divider"></li>

                               <li>
                                  <a href="{{route('enquiries.delete',$enquiry->id)}}"> Delete</a>
                               </li>
                            </ul>
                         </div></div>


                         </div>
                      </div>
                   </div>
                </div>
                <div class="mailbox-body">
                   <div class="row m-0">

                      <div class="col-xs-12 col-sm-12 col-md-12 p-0 inbox-mail">
                         <div class="inbox-customer p-20 border-btm">
                           <!-- <img src="assets/dist/img/avatar5.png" class="border-green " alt=""> -->
                            <div class="inbox-customer-text">
                               <div class="customer-name"><strong>Customer Name :</strong> <span>{{$enquiry->name}}</span></div>
                               <div class="customer-name"><strong>Enquiry Description :</strong> <small>{{$enquiry->note}}</small></div>
                            </div>

                         </div>
                         <div class="inbox-mail-details p-20">
                            <div class="col-md-12 details-cust"><strong>Email : </strong><span class="det_cust">{{$enquiry->email}}</span> </div>
                            <div class="col-md-12 details-cust"><strong>Mobile/Phone : </strong><span class="det_cust"class="">{{$enquiry->phone}}</span> </div>
                            <div class="col-md-12 details-cust"><strong>Post Code : </strong><span class="det_cust">{{$enquiry->post_code}}</span> </div>
                         </div>
                      </div>
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
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
