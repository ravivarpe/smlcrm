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
                    <a href="{{url('view-jobdetails')}}" class="logo">
                        <!-- Logo -->
                        <span class="logo-lg">
                        <img src="{{url('assets/dist/img/logo.png')}}" alt="">
                        </span>
                     </a>
                     

                       <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">                            
                            <strong>To Address</strong>
                            <p>1 I am using bootstrap form wizard to create a HTML form. I have a custom li</p>
                           </div>
                           <div class="col-sm-12 col-md-4">                            
                            <strong>Delivery Address</strong>
                            <p></p>
                            
                           </div>
                           <div class="col-sm-12 col-md-4">                            
                            <strong>The Yorkshine Resin Ltd</strong>
                            <p></p>
                            
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
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
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
                            <div class="card">
                            <div class="col-xs-12 col-sm-12 col-md-10 p-0 ">
                                <div class="inbox-customer p-10 border-btm">
                                  
                                </div>
                                
                                   <div class="col-md-12 details-cust"><strong>Terms and Condition : </strong>Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins. </div>
                                <ul class="list-inline pull-right">
                                    <div class="row">
                                        <li><button type="button" class="btn-btn accept" style="background-color: green">Accept</button></li>
                                        <li><button type="button" class="btn-btn decline" style="background-color: red">Decline</button></li>
                                    </div>
                                </ul>
                                
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


<ul class="list-inline pull-right">
    <li><button type="button" class="default-btn prev-step">Back</button></li>
    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
