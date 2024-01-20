@extends('includes.header')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
       <div class="row">
             <div class="col-lg-12 pinpin">
                   <div class="card lobicard"  data-sortable="true">
                    <div class="row">
                    <div class="col-sm-12 col-md-6" >
                    <a href="#" class="logo">
                        <!-- Logo -->
                        <span class="logo-lg" >
                        <img src="{{url('assets/dist/img/logo.png')}}" alt="" style="padding:15px; width:300px; height: 150px">
                        </span>
                     </a>
                    </div>

                    <div class="col-sm-12 col-md-6">
                      <h1 style="margin-top:45px; margin-left:50px; font-weight:bold;">Job Pack </h1>
                    </div>
                    </div>



                       <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                            <strong>To Address</strong>
                            <p>{{$homeAddr->line1}}, {{$homeAddr->line2}}, {{$homeAddr->line3}}, {{$homeAddr->city}}, {{$homeAddr->state}}, {{$homeAddr->country}}</p>
                            <p>T: {{$contact->contact_number}}</p>
                           </div>

                           <div class="col-sm-12 col-md-4">
                            <strong>Delivery Address</strong>
                            <p>{{$deliveryAddr->line1}}, {{$deliveryAddr->line2}}, {{$deliveryAddr->line3}}, {{$deliveryAddr->city}}, {{$deliveryAddr->state}}, {{$deliveryAddr->country}}</p>
                           </div>

                           <div class="col-sm-12 col-md-4">
                            <strong>The Yorkshine Resin Ltd</strong>
                            <p>T: 01132721030</p>
                            <p>E: info@Yorkshireresin.co.uk</p>
                           </div>
                        </div>

                        <br><br><br>

                               <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th scope="col">Job Pack Number</th>
                                        <th scope="col">Job Ref</th>
                                        <th scope="col">JOb pack Date</th>
                                        <th scope="col">Start date of Pack</th>
                                        <th scope="col">Sys Ref</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">2744</th>
                                        <td>{{$jobDetails->id}}</td>
                                        <td>{{$jobDetails->start_date}} </td>
                                        <td>{{$jobDetails->end_date}}</td>
                                        <td>{{$invoice->id}}</td>
                                      </tr>
                                    </tbody>
                                  </table>

                                  <table class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Material & Labour Charges</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invoiceDetails as $invoiceDetail )


                                      <tr>
                                        <th>{{$invoiceDetail->id}}</th>
                                        <td>{{$invoiceDetail->material->title}} --{{$invoiceDetail->material->sale_price}} -- {{$invoiceDetail->total}}</td>
                                      </tr>
                                      @endforeach

                                    </tbody>
                                  </table>

                                  <div class="col-xs-12 col-sm-12 col-md-12 p-0 ">
                                    <div class="inbox-customer p-15 border-btm">
                                    <div class="col-md-12 details-cust"><strong>Job Description : </strong>{{$jobDetails->jobdescription}}.</div>
                                    <br>
                                    <div class="col-md-12 details-cust"><strong>Job Details : </strong>{{$jobDetails->jobdescription}}</div>
                                 </div>

                               </div>
                            </div>

                            <br>
                            <div class="row">
                                @foreach ($jobImages as  $jobImage)


                            <div class="col-sm-12 col-md-3">
                            <img src="{{url('uploads/jobphotos')}}/{{$jobImage->image_name}}" class="rounded float-start" alt="{{$jobImage->image_name}}" style="height: 250px;width:100%">
                            </div>
                            @endforeach



                          </div>

                          <br><br>

                            <div class="row">
                                <h4 style=" margin-left:15px;">On Site Survey</h4>
                            </div>

                            <div class="row">
                            <div class="col-sm-12 col-md-6">
                            <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>Underground Hazard</th>
                                    <th>LR</th>
                                    <th>HR</th>
                                    <th>NA</th>
                                    <th>Description</th>
                                    <th>Video</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="info1">
                                    <td>A Gas Mains / Meter</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Electric Cable</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Water Mains</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Data /BT Cables</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Others</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                </tbody>
                            </table>
                          </div>

                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover">
                              <thead>
                                 <tr>
                                  <th>Overhead Hazard</th>
                                  <th>LR</th>
                                  <th>HR</th>
                                  <th>NA</th>
                                  <th>Description</th>
                                  <th>Video</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 <tr>
                                    <td>Electric Cable</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>

                                 <tr>
                                    <td>Data /BT Cables</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Buildings</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Others</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                </tbody>
                            </table>
                          </div>

                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover">
                              <thead>
                                 <tr>
                                  <th>Hazard To Others</th>
                                  <th>LR</th>
                                  <th>HR</th>
                                  <th>NA</th>
                                  <th>Description</th>
                                  <th>Video</th>
                                 </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>Public / Pedestrian</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>

                                 <tr>
                                    <td>Customers/ Visistors</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Adjoining Properties</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr>
                                    <td>Others</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                </tbody>
                            </table>
                          </div>
                          </div>

                          <div class="row">
                              <h4 style=" margin-left:15px;">Access & Storage</h4>
                          </div>

                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Hazard</th>
                                  <th>Yes/Ok</th>
                                  <th>No/Bad</th>
                                  <th>Description</th>
                                  <th>Video</th>

                               </tr>
                              </thead>
                              <tbody>
                                <tr class="info1">
                                    <td>Large Vehicle Access (28m)</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>Normal Vehicle Access (3.5m)</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>Area for Pallets /Bulk Bags</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>Extra Space for Hardware</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>Water Access</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>Main Power</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>D/C Access</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>Tool Storage</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                 <tr class="info1">
                                    <td>WIFI CODE</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="text" placeholder="Description"></td>
                                    <td><input type="checkbox"></td>
                                 </tr>
                                </tbody>
                            </table>


                            <br/>




                            <div class="row">
                              <h4 style=" margin-left:15px;"> Job Declaration & System of work</h4>
                            </div>

                            <br>
                            <div class="row">


                            <div class="col-lg-6 pinpin">

                              <div class="row">
                                <label for="inputdate" class="col-sm-6">Job Start Date</label>
                                <div class="col-sm-6">
                                  <input type="Date"  class="form-control" >
                                </div>
                              </div>
                              <br/>
                              <table class="table table-hover">

                                <tbody>
                                   <tr class="info1">
                                    <td>Job duration and method Explained</td>
                                    <td><input type="checkbox"></td>

                                   </tr>

                                   <tr class="info1">
                                    <td>Access In/Out throughout Explained</td>
                                    <td><input type="checkbox"></td>

                                   </tr>
                                   <tr class="info1">
                                    <td>Disclaimer Signed & Explained (if Applicable)</td>
                                    <td><input type="checkbox"></td>

                                   </tr>
                                   <tr class="info1">
                                    <td>All billing address and contact info checked</td>
                                    <td><input type="checkbox"></td>

                                   </tr>
                                   <tr class="info1">
                                    <td>After Care Package Explained</td>
                                    <td><input type="checkbox"></td>

                                   </tr>
                                   <tr class="info1">
                                    <td>Payment Terms Agreed</td>
                                    <td><input type="checkbox"></td>

                                   </tr>
                                   <tr class="info1">
                                    <td>Method of Payment</td>
                                    <td><input type="checkbox"> Cheque</td>
                                    <td><input type="checkbox"> POS</td>
                                    <td><input type="checkbox"> Card</td>
                                    <td><input type="checkbox"> Cash</td>
                                   </tr>


                                  </tbody>
                              </table>
                            </div>


                            <div class="col-lg-6 pinpin">
                              <table class="table table-hover">

                                <tbody>
                                    <tr class="info1">
                                        <td>Flexible</td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox" ></td>
                                        <td><input type="text" placeholder="Description"></td>
                                       </tr>

                                       <tr class="info1">
                                        <td>Annual PC</td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox" ></td>
                                        <td><input type="text" placeholder="Description"></td>
                                       </tr>


                                </tbody>

                              </table>
                               <br/>
                                <div>
                                    <label>Notes/Special requirements</label>
                                     <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            </div>


                            <form>




                            <div class="mb-3 row">
                                <label for="inputFinalprice" class="col-sm-2">Final Price</label>
                              <div class="col-sm-2">
                                <input type="Price"  class="form-control">
                              </div>
                            </div>


                              <div class="mb-3 row">
                                <label for="inputDepositetaken" class="col-sm-2">Deposite Taken </label>
                              <div class="col-sm-2">
                                <input type="Depositetaken"  class="form-control" >
                              </div>

                                <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________ </label>
                                <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________  </label>

                            </div>


                              <div class="mb-3 row">
                                <label for="inputBalanceoncompletion" class="col-sm-2">Balance On Completion</label>
                              <div class="col-sm-2">
                                <input type="Balanceoncompletion"  class="form-control" >
                              </div>
                              </div>

                              <div class="mb-3 row">

                                <label for="inputdate" class="col-sm-2">Date</label>

                              <div class="col-sm-2">
                                <input type="Date"  class="form-control" >
                              </div>
                              </div>

                              <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary" style="background-color:black">Save</button>
                              </div>

                              <br>
                              <div class="mb-3 row">
                                  <label for="inputdate" class="col-sm-2">Date</label>
                                <div class="col-sm-2">
                                  <input type="Date"  class="form-control" >
                                </div>

                                <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________ </label>
                                <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________ </label>
                              </div>

                              </form>
                              <br><br>
                              <div class="row">
                                <h4 style=" margin-left:15px;"> Planner Section</h4>

                              </div>
                              <br>

                              <div class="mb-3 row">

                                  <label for="inputteam Assined" class="col-sm-2">Team Assined</label>

                                <div class="col-sm-4">
                                  <select class="form-control" >
                                     <option>Team 1</option>
                                     <option>Team 1</option>
                                  </select>
                                </div>
                              </div>


                                <div class="mb-3 row">
                                  <label for="inputJobStart Date" class="col-sm-2">Job Start Date </label>

                                <div class="col-sm-2">
                                  <input type="Date"  class="form-control" >
                                </div>

                                <div class="col-sm-2">
                                  <label for="inputJobEnd Date" class="col-form-label">Job End Date </label>
                                </div>
                                <div class="col-auto">
                                  <input type="Date"  class="form-control" >
                                  <input type="checkbox" > Update PCal

                                </div>
                              </div>

                                <div class="row">
                                <div class="col-auto">
                                  <button type="submit" class="btn btn-primary mb-3">Create Purchase Order</button>
                                </div>
                                </div>




                            </div>



                      </div>




               </div>
       </div>

    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->


@endsection





