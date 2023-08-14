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
                    <a href="{{url('view-jobdetails')}}" class="logo">
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
                            <p>Simon Wells Court North Anston, Sheffield South Yorkshire S25 4FS United Kingdom</p>
                            <p>T: 07534401823</p>
                           </div>
                           
                           <div class="col-sm-12 col-md-4">                           
                            <strong>Delivery Address</strong>
                            <p>Simon Wells Court North Anston, Sheffield South Yorkshire S25 4FS United Kingdom</p>
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
                                        <td>22082</td>
                                        <td>23rd Sep 2022 </td>
                                        <td>21/11/2022</td>
                                        <td>11667</td>
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
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                      </tr>
                                    </tbody>
                                  </table>

                                  <div class="col-xs-12 col-sm-12 col-md-12 p-0 ">
                                    <div class="inbox-customer p-15 border-btm">
                                    <div class="col-md-12 details-cust"><strong>Job Description : </strong>Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins.</div>
                                    <br>
                                    <div class="col-md-12 details-cust"><strong>Job Details : </strong>Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with </div>      
                                 </div>

                               </div>
                            </div>

                            <br>
                            <div class="row">
                              <input class="form-control" type="text" placeholder="on-Site Survey" readonly style="margin-right:10px; margin-left:15px;">
                            </div>

                            <div class="row">
                            <div class="col-sm-12 col-md-4">
                            <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>Undergroun Hazard</th>
                                    <th>LR</th>
                                    <th>HR</th>
                                    <th>NA</th>
                                   
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="info1">
                                    <td>A gas main meter</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    
                                 </tr>
                                 <tr>
                                    <td>Build a Drive</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                 
                                 </tr>
                                 <tr>
                                    <td>Power Clean</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    
                                 </tr>
                                </tbody>
                            </table>
                          </div>

                          <div class="col-sm-12 col-md-4">
                            <table class="table table-hover">
                              <thead>
                                 <tr>
                                  <th>Overhead Hazard</th>
                                  <th>LR</th>
                                  <th>HR</th>
                                  <th>NA</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="info1">
                                    <td>The Yorkshire Resin Company</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    
                                 </tr>
                                 <tr>
                                    <td>Build a Drive</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    
                                 </tr>
                                 <tr>
                                    <td>Power Clean</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                    
                                 </tr>
                                </tbody>
                            </table>
                          </div>

                          <div class="col-sm-12 col-md-4">
                            <table class="table table-hover">
                              <thead>
                                 <tr>
                                  <th>Hazard To Others</th>
                                  <th>LR</th>
                                  <th>HR</th>
                                  <th>NA</th>                       
                                 </tr>
                              </thead>
                              <tbody>
                                  <tr class="info1">
                                    <td>The Yorkshire Resin Company</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td>
                                  </tr>
                                  <tr>
                                    <td>Build a Drive</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td> 
                                  </tr>

                                  <tr>
                                    <td>Build a Drive</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td><input type="checkbox"></td> 
                                  </tr>
                                </tbody>
                            </table>
                          </div>
                          </div>

                          <div class="row">
                            <input class="form-control" type="text" placeholder="on-Site Survey" aria-label="Job Declaration" readonly style="margin-right:10px; margin-left:15px;">
                          </div>
                          
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Undergroun Hazard</th>
                                  <th>Yes</th>
                                  <th>No</th>
                                  
                                 
                               </tr>
                              </thead>
                              <tbody>
                                 <tr class="info1">
                                    <td>The Yorkshire Resin Company</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td>...........</td>
                                    <td>Includede Video</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                 </tr>
                                 <tr>
                                    <td>Build a Drive</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td>...........</td>
                                    <td>Includede Video</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                 </tr>
                                 <tr>
                                    <td>Power Clean</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                    <td>...........</td>
                                    <td>Includede Video</td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox" ></td>
                                 </tr>
                                </tbody>
                            </table>
                         

                            <br>
                            <div class="card">
                            <div class="col-xs-12 col-sm-12 col-md-10 p-0 ">
                                <div class="inbox-customer p-10 border-btm">
                                </div>
                                
                                  <div class="col-md-12 details-cust"><strong>Terms and Condition : </strong>Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins. </div>
                                <ul class="list-inline pull-right">
                                  <div class="row">
                                      <li><button type="button" class="btn-btn accept" style="background-color: green" >Accept</button></li>
                                      <li><button type="button" class="btn-btn decline" style="background-color: red">Decline</button></li>
                                    </div>
                                </ul>
                                
                             </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-sm-12 col-md-6"> 
                            <img src="{{url('/uploads/profiles/1687943052_649bf78ce6a9e.jpg')}}" class="rounded float-start" alt="" style="width: 100px;">
                            </div>

                            
                            <div class="col-sm-12 col-md-6"> 
                              <img src="{{url('uploads/profiles/1689684923_64b68bbb3ad4c.jpg')}}" class="rounded float-start" alt="" style="width: 100px;">
                              </div>
                          </div>

                          <br><br>

                            <div class="row">
                              <input class="form-control" type="text" placeholder="Job Declaration" aria-label="Job Declaration" readonly style="margin-right:10px; margin-left:15px;">
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
                              <table class="table table-hover">
                               
                                <tbody>
                                   <tr class="info1">
                                    <td>Power Clean</td>
                                    <td><input type="checkbox">Yes</td>
                                    <td><input type="checkbox" >No</td> 
                                   </tr>

                                   <tr>
                                      <td>Build a Drive</td>
                                      <td><input type="checkbox">Yes</td>
                                    <td><input type="checkbox" >No</td>
                                   </tr>

                                   <tr>
                                      <td>Power Clean</td>
                                      <td><input type="checkbox">Yes</td>
                                    <td><input type="checkbox" >No</td>
                                   </tr>
                                  </tbody>
                              </table>
                            </div>

                            
                              <div class="col-lg-6 pinpin">
                              <table class="table table-hover">
                               
                                <tbody>
                                   <tr class="info1">
                                    <td>Build a Drive</td>
                                    <td><input type="checkbox">Yes</td>
                                    <td><input type="checkbox" >No</td>
                                      
                                      
                                   </tr>
                                   <tr>
                                      <td>Build a Drive</td>
                                      <td><input type="checkbox">Yes</td>
                                      <td><input type="checkbox" >No</td>
                                   </tr>

                                   <tr>
                                    <td>----------------------------------------------------------------</td>
                                    
                                 </tr>

                                 <tr>
                                  <td>-----------------------------------------------------------------</td>
                                  
                               </tr>

                                  </tbody>
                                  
                              </table>
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
                                <input class="form-control" type="text" placeholder="Planner Section" aria-label="Planner Section" readonly style="margin-right:10px; margin-left:15px;">
                              </div>
                              <br>
  
                              <div class="mb-3 row">
                               
                                  <label for="inputteam Assined" class="col-sm-2">Team Assined</label>
                                
                                <div class="col-sm-4">
                                  <input type="Team assined" placeholder="select team"  class="form-control" >
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





