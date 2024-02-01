@extends('includes.header')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{route('jobpack.create')}}" method="post">
            @csrf

        <input type="hidden" name="contact_id" value="{{$contact->id}}"/>
        <input type="hidden" name="invoice_id" value="{{$invoice->id}}"/>
        <input type="hidden" name="job_id" value="{{$jobDetails->id}}"/>


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

                            <input type="hidden" value="{{$contact->id}}" name="contact_id"/>
                            <div class="row">
                                <h4 style=" margin-left:15px;">On Site Survey</h4>
                            </div>

                            <div class="row">
                            <div class="col-sm-12 col-md-12">
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
                                @foreach ($undergroundHz as $item1 )

                                 <input type="hidden" name="ughazardid[]" value="{{$item1->id}}"/>
                                 <tr class="">
                                    <td>{{$item1->option_name}}</td>
                                    <td><input type="checkbox" value="1" name="ughzopt[]"></td>
                                    <td><input type="checkbox" value="2" name="ughzopt[]"></td>
                                    <td><input type="checkbox" value="3" name="ughzopt[]"></td>
                                    <td style="width: 15%"><input type="text" placeholder="Description" class="form-control" name="ugDes[]"></td>
                                    <td><input type="checkbox" value="1" name="ugVideo[]"></td>
                                 </tr>
                                 @endforeach

                                </tbody>
                            </table>
                          </div>

                          <div class="col-sm-12 col-md-12">
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

                                @foreach ($overheadHz as $item1 )

                                 <input type="hidden" name="ovhazardid[]" value="{{$item1->id}}"/>
                                 <tr class="">
                                    <td>{{$item1->option_name}}</td>
                                    <td><input type="checkbox" value="1" name="ovhzopt[]"></td>
                                    <td><input type="checkbox" value="2" name="ovhzopt[]"></td>
                                    <td><input type="checkbox" value="3" name="ovhzopt[]"></td>
                                    <td style="width: 15%"><input type="text" placeholder="Description" class="form-control" name="ovDes[]"></td>
                                    <td><input type="checkbox" value="1" name="ovVideo[]"></td>
                                 </tr>
                                 @endforeach
                                </tbody>
                            </table>
                          </div>

                          <div class="col-sm-12 col-md-12">
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
                                @foreach ($otherHz as $item1 )

                                 <input type="hidden" name="othazardid[]" value="{{$item1->id}}"/>
                                 <tr class="">
                                    <td>{{$item1->option_name}}</td>
                                    <td><input type="checkbox" value="1" name="othzopt[]"></td>
                                    <td><input type="checkbox" value="2" name="othzopt[]"></td>
                                    <td><input type="checkbox" value="3" name="othzopt[]"></td>
                                    <td style="width: 15%"><input type="text" placeholder="Description" class="form-control" name="otDes[]"></td>
                                    <td><input type="checkbox" value="1" name="otVideo[]"></td>
                                 </tr>
                                 @endforeach
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
                                  <th>Yes</th>
                                  <th>No</th>
                                  <th>Description</th>
                                  <th>Video</th>

                               </tr>
                              </thead>
                              <tbody>
                                @foreach ($accStorage as $item1 )

                                 <input type="hidden" name="acsthazardid[]" value="{{$item1->id}}"/>
                                 <tr class="">
                                    <td>{{$item1->option_name}}</td>
                                    <td><input type="checkbox" value="1" name="acsthzopt[]"></td>
                                    <td><input type="checkbox" value="2" name="acsthzopt[]"></td>

                                    <td style="width: 15%"><input type="text" placeholder="Description" class="form-control" name="acstDes[]"></td>
                                    <td><input type="checkbox" value="1" name="acstVideo[]"></td>
                                 </tr>
                                 @endforeach
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
                                <label for="inputdate" class="col-sm-2">Job Start Date</label>
                                <div class="col-sm-3">
                                  <input type="date" name="job_start_date"  class="form-control" >
                                </div>

                              </div>
                              <br/>
                              <table class="table table-hover">

                                <tbody>

                                    @foreach ($jobWorks as $item1 )

                                    <input type="hidden" name="jwhazardid[]" value="{{$item1->id}}"/>
                                    <tr class="">
                                        <td>{{$item1->option_name}}</td>
                                        <td><input type="checkbox" value="1" name="jwhzopt[]"></td>

                                    </tr>
                                  @endforeach

                                   <tr class="">
                                    <td>Method of Payment</td>
                                    <td><input type="checkbox" value="1" name="payment_method"> Cheque</td>
                                    <td><input type="checkbox" value="2" name="payment_method"> POS</td>
                                    <td><input type="checkbox" value="3" name="payment_method"> Card</td>
                                    <td><input type="checkbox" value="4" name="payment_method"> Cash</td>
                                   </tr>


                                  </tbody>
                              </table>
                            </div>


                            <div class="col-lg-6 pinpin">
                              <table class="table table-hover">

                                <tbody>
                                    <tr class="">
                                        <td>Flexible</td>
                                        <td><input type="checkbox" value="0" name="flexibal"></td>
                                        <td><input type="checkbox" value="1" name="flexibal"></td>
                                        <td style="width: 15%"><input type="text" name="flex_desc" placeholder="Description" class="form-control"></td>
                                       </tr>

                                       <tr class="">
                                        <td>Annual PC</td>
                                        <td><input type="checkbox" value="0" name="annual_pc"></td>
                                        <td><input type="checkbox" value="1" name="annual_pc"></td>
                                        <td style="width: 15%"><input type="text" name="annual_pc_desc" placeholder="Description" class="form-control"></td>
                                       </tr>

                                </tbody>

                              </table>
                               <br/>
                                <div>
                                    <label>Notes/Special requirements</label>
                                     <textarea class="form-control" name="note"></textarea>
                                </div>
                            </div>
                            </div>


                            <form>




                            <div class="mb-3 row">
                                <label for="inputFinalprice" class="col-sm-2">Final Price</label>
                              <div class="col-sm-2">
                                <input type="text" name="final_price"  class="form-control">
                              </div>
                            </div>


                              <div class="mb-3 row">
                                <label for="inputDepositetaken" class="col-sm-2">Deposite Taken </label>
                              <div class="col-sm-2">
                                <input type="text" name="adv_amt_taken"  class="form-control" >
                              </div>

                                <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________ </label>
                                <label for="inputDepositetaken" class="col-sm-4">Surveyor Signature _________________  </label>

                            </div>


                              <div class="mb-3 row">
                                <label for="inputBalanceoncompletion" class="col-sm-2">Balance On Completion</label>
                              <div class="col-sm-2">
                                <input type="text" name="balance_amt"  class="form-control" >
                              </div>
                              </div>

                              <div class="mb-3 row">

                                <label for="inputdate" class="col-sm-2">Date</label>

                              <div class="col-sm-2">
                                <input type="date" name="added_date"  class="form-control" >
                              </div>
                              </div>

                              <div class="col-sm-6">
                                <button type="button" class="btn btn-primary" style="background-color:black">Save</button>
                              </div>

                              <br>
                              <div class="mb-3 row">
                                  <label for="inputdate" class="col-sm-2">Date</label>
                                <div class="col-sm-2">
                                  <input type="date" name="added_date1" class="form-control" >
                                </div>

                                <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________ </label>
                                <label for="inputDepositetaken" class="col-sm-4">Surveyor Signature _________________ </label>
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
                                  <select class="form-control" name="team_id" >
                                    @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->team_name}}</option>
                                    @endforeach


                                  </select>
                                </div>
                              </div>


                                <div class="mb-3 row">
                                  <label for="inputJobStart Date" class="col-sm-2">Job Start Date </label>

                                <div class="col-sm-2">
                                  <input type="date" name="job_start_date1" class="form-control" >
                                </div>

                                <label for="inputdate" class="col-sm-2">Job Start Time</label>
                                <div class="col-sm-2">
                                  <input type="time" name="job_start_time"  class="form-control" >
                                </div>
                                <br/>
                                <div class="col-sm-2">
                                  <label for="inputJobEnd Date" class="col-form-label">Job End Date </label>
                                </div>
                                <div class="col-sm-2">
                                  <input type="date" name="job_end_date"  class="form-control" >


                                </div>
                                <div class="col-sm-2">

                                    <input type="checkbox" value="1" name="add_plan_cal" > Update PCal

                                  </div>
                              </div>

                                <div class="row">
                                <div class="col-auto">
                                  <input type="submit" class="btn btn-primary mb-3" value="Create Purchase Order" />
                                </div>
                                </div>




                            </div>



                      </div>




               </div>
       </div>
    </form>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->


@endsection





