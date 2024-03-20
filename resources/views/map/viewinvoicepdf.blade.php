
<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Invoice PDF</title>
   </head>
   <style>
      .table1 th,td{
        padding:10px;
        border-bottom: 1px solid gray;
        border-collapse: collapse;
      }

      .table th,td{
        padding:10px;
        border-bottom: 1px solid gray;
        border-collapse: collapse;
      }
      .table1 th{
        background-color:lightgray;
      }
      .table th{
        background-color:lightgray;
      }
   </style>
   <body>


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
                        <img src="{{public_path('assets/dist/img/logo.png')}}" alt="" style="padding:15px; width:300px; height: 150px; " align="left">
                        </span>
                     </a>
                     <h1 style="margin-top:40px; margin-left:10px; font-weight:bold;font-size:65px;" align="right">{{$invoice['invoicetype']['type_name']}}</h1>
                    </div>


                    </div>


                      <br/>
                      <br/>
                      <br/>
                      <br/>

                        <div style="width:100%;display:inline;">
                            <div style="width:30%;display:inline-block;padding:20px;">
                            <strong>To Address</strong>
                            <p>{{$homeAddr['line1']}}, {{$homeAddr['line2']}}, {{$homeAddr['line3']}}, {{$homeAddr['city']}}, {{$homeAddr['state']}}, {{$homeAddr['country']}}</p>
                            <p>T: {{$contact['contact_number']}}</p>
                           </div>

                           <div style="width:30%;display:inline-block;padding:20px;">
                            <strong>Delivery Address</strong>
                            <p>{{$deliveryAddr['line1']}}, {{$deliveryAddr['line2']}}, {{$deliveryAddr['line3']}}, {{$deliveryAddr['city']}}, {{$deliveryAddr['state']}}, {{$deliveryAddr['country']}}</p>
                           </div>

                           <div style="width:30%;display:inline-block;padding:20px;">
                            <strong>The Yorkshine Resin Ltd</strong>
                            <p>T: 01132721030</p>
                            <p>E: info@Yorkshireresin.co.uk</p>
                           </div>
                        </div>

                        <br><br><br>

                               <div >
                                <table class="table1">
                                    <thead>
                                      <tr>
                                        <th scope="col">Invoice Number</th>
                                        <th scope="col">Job Ref</th>
                                        <th scope="col">Invoice Date</th>
                                        <th scope="col">Start date of Job</th>
                                        <th scope="col">Sys Ref</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>

                                        <td>{{$invoice['id']}}</td>
                                        <td>{{$invoice['ref_name']}} </td>
                                        <td>{{$invoice['added_date']}}</td>
                                        <td></td>
                                        <td scope="row">0</td>
                                      </tr>
                                    </tbody>
                                  </table>

                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Material & Labour Charges</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Per</th>
                                        <th scope="col">Total</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $grandTotal=0;
                                            $finalTotal=0;
                                        @endphp
                                        @foreach ($invoiceDetails as $invoiceDetail )


                                      <tr>
                                        <td>{{$invoiceDetail['quantity']}}</td>
                                        <td>{{$invoiceDetail['material']['title']}}</td>
                                        <td>{{$invoiceDetail['material']['sale_price']}}</td>
                                        <td>{{$invoiceDetail['price_unit']}}</td>
                                        <td>{{$invoiceDetail['material']['sale_price']*$invoiceDetail['quantity']}}</td>
                                      </tr>

                                        @php
                                            $grandTotal+=$invoiceDetail['material']['sale_price']*$invoiceDetail['quantity'];
                                        @endphp

                                      @endforeach
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Sub Total</td>
                                        <td>{{$grandTotal}}</td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Vat @ {{$invoice['vat']}}% </td>
                                        <td>
                                            @if ($invoice['vat']>0 && $invoice['show_vat']==1)

                                            @php
                                                $tempVat=$grandTotal*($invoice['vat']/100);
                                                $finalTotal=$grandTotal+$tempVat
                                            @endphp
                                            {{$tempVat}}

                                            @else
                                             {{'0'}}
                                            @endif
                                        </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Total Due</b></td>
                                        <td>{{$finalTotal}}</td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>All prices in GPB</td>
                                      </tr>

                                    </tbody>
                                  </table>



                               </div>
                            </div>


                            <br>
                            <br>

                            <div class="col-xs-12 col-sm-12 col-md-12 p-0 ">


                                <div class="col-md-12 details-cust"><strong>Bank Details : </strong></div>
                                <div class="p-20">
                                  Sort Code: 40-39-21 <br/>
                                  Account Number: 61484079


                                </div>
                                <br/>

                                  <div class="col-md-12 details-cust"><strong>Terms and Condition : </strong></div>
                                  <div class="p-20">

                                    All materials remain the property of the Yorkshire Resin CompanyLtd until payment is received in full. We reserve the right to remove all materials not paid for. We are not responsible for clearance and disposal of old materials due to government waste disposal legislation.

                                  </div>

                             </div>




                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br> <br>


                          <div class="col-xs-12 col-sm-12 col-md-12 p-0 ">


                            <hr/>
                            <div class="p-20">
                                The Yorkshire Resin Company Ltd- Company Number 08372543. VAT Number - 156213625. <br/>
                                Registered Office Address: Unit 10, Howley Park Road East, Howley Park Industrial Estate, Morley, Leeds, LS27 0SW.


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
</div>
</body>
</html>





