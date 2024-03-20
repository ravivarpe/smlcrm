<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .table1 th,
      td {
        padding: 10px;
        border-bottom: 1px solid gray;
        border-collapse: collapse;
      }

      .table th,
      td {
        padding: 10px;
        border-bottom: 1px solid gray;
        border-collapse: collapse;
      }

      .table1 th {
        background-color: lightgray;
      }

      .table th {
        background-color: lightgray;
      }
      h4 {
    font-size: 1.5em;
  }

  /* Paragraph Text Size */
  p {
    font-size: 1em;
  }
  body {
      font-family: Arial, sans-serif; /* Font family */
      font-size: 14px; /* Font size */
    }
    h4 {
      font-size: 18px; /* Heading font size */
    }
    label {
      font-size: 16px; /* Label font size */
    }
    input[type="text"],
    input[type="date"],
    input[type="time"],
    select {
      font-size: 14px; /* Input font size */
    }


    </style>
  </head>
  <body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header"></section>
      <!-- Main content -->
      <section class="content">
        {{-- <form action="{{route('jobpack.create')}}" method="post"> @csrf <input type="hidden" name="contact_id" value="{{$contact->id}}" />
        <input type="hidden" name="invoice_id" value="{{$invoice->id}}" />
        <input type="hidden" name="job_id" value="{{$jobDetails->id}}" /> --}} <div class="row">
          <div class="col-lg-12 pinpin">
            <div class="card lobicard" data-sortable="true">
             <div class="row" style="display: table; width: 100%;">
    <div class="col-sm-12 col-md-6" style="display: table-cell; width: 50%; vertical-align: middle;">
        <a href="#" class="logo">
            <!-- Logo -->
            <span class="logo-lg">
                <img src="{{public_path('assets/dist/img/logo.png')}}" alt="" style="padding:15px; width:300px; height: 150px">
            </span>
        </a>
    </div>
    <div class="col-sm-12 col-md-3" style="display: table-cell; width: 40%; vertical-align: middle; margin-top:40px;">
        <h1 style="margin: 0; font-weight:bold;">Job Pack </h1>
    </div>
</div>

              <div class="card-body">
 <div class="row" style="display: table; width: 100%;">
    <div class="col-sm-12 col-md-4" style="display: table-cell; width: 30%; vertical-align: top;">
        <strong>To Address</strong>
        <p style="margin-bottom: 10px;">{{$homeAddr['line1']}}, {{$homeAddr['line2']}}, {{$homeAddr['line3']}}, {{$homeAddr['city']}}, {{$homeAddr['state']}}, {{$homeAddr['country']}}</p>
        <p style="margin-bottom: 10px;">T: {{$contact['contact_number']}}</p>
    </div>
    <div class="col-sm-12 col-md-4" style="display: table-cell; width: 30%; vertical-align: top;">
        <strong>Delivery Address</strong>
        <p style="margin-bottom: 10px;">{{$deliveryAddr['line1']}}, {{$deliveryAddr['line2']}}, {{$deliveryAddr['line3']}}, {{$deliveryAddr['city']}}, {{$deliveryAddr['state']}}, {{$deliveryAddr['country']}}</p>
    </div>
    <div class="col-sm-12 col-md-4" style="display: table-cell; width: 30%; vertical-align: top;">
        <strong>The Yorkshine Resin Ltd</strong>
        <p style="margin-bottom: 10px;">T: 01132721030</p>
        <p style="margin-bottom: 10px;">E: info@Yorkshireresin.co.uk</p>
    </div>
</div>


                <br>
                <br>
                <br>




                <div class="table-responsive" style="margin-bottom: 20px; width: 100%;">
  <table class="table table-striped table-hover" style="width: 100%;">
    <thead>
      <tr>
        <th scope="col">Job Pack Number</th>
        <th scope="col">Job Ref</th>
        <th scope="col">Job Pack Date</th>
        <th scope="col">Start Date of Pack</th>
        <th scope="col">Sys Ref</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">2744</th>
        <td>{{$jobDetails['id']}}</td>
        <td>{{$jobDetails['start_date']}}</td>
        <td>{{$jobDetails['end_date']}}</td>
        <td>{{$invoice['id']}}</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="table-responsive" style="margin-bottom: 20px; width: 100%;">
  <table class="table table-striped table-hover" style="width: 100%;">
    <thead>
      <tr>
        <th scope="col">Quantity</th>
        <th scope="col">Material & Labour Charges</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($invoiceDetails as $invoiceDetail)
      <tr>
        <th>{{$invoiceDetail['id']}}</th>
        <td>{{$invoiceDetail['material']['title']}} --{{$invoiceDetail['material']['sale_price']}} -- {{$invoiceDetail['total']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 p-0" style="margin-bottom: 10px; width: 100%;">
  <div class="inbox-customer p-15 border-btm" style="width: 100%;">
    <div class="col-md-12 details-cust" style="margin-bottom: 10px;">
      <strong>Job Description : </strong>{{$jobDetails['jobdescription']}}.
    </div>
    <div class="col-md-12 details-cust" style="width: 100%;">
      <strong>Job Details : </strong>{{$jobDetails['jobdescription']}}
    </div>
  </div>
</div>

<div class="row" style="width: 100%;">
  @foreach ($jobImages as $jobImage)
  <div class="col-sm-12 col-md-3" style="width: 25%; float: left;">
    <img src="{{public_path('uploads/jobphotos')}}/{{$jobImage['image_name']}}" class="rounded float-start" alt="{{$jobImage['image_name']}}" style="height: 250px;width:100%">
  </div>
  @endforeach
</div>


<div class="row">
  <h4 style="margin-left: 15px;">On Site Survey</h4>
</div>

<div class="row">
  <div class="col-sm-12 col-md-12" style="width: 100%;">
    <table class="table table-hover" style="width: 100%;">
      <thead>
        <tr>
          <th style="width: 14%;">Underground Hazard</th>
          <th style="width: 10%;">LR</th>
          <th style="width: 10%;">HR</th>
          <th style="width: 10%;">NA</th>
          <th style="width: 36%;">Description</th>
          <th style="width: 20%;">Video</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($undergroundHz as $item1)
        <input type="hidden" name="ughazardid[]" value="{{$item1['id']}}" />
        <tr class="">
          <td>{{$item1['option_name']}}</td>
          <td><input type="radio" value="1" name="ughzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='1')
                {{'checked'}}
            @endif

          @endif></td>
          <td><input type="radio" value="2" name="ughzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='2')
                {{'checked'}}
            @endif

          @endif></td>
          <td><input type="radio" value="3" name="ughzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='3')
                {{'checked'}}
            @endif

          @endif></td>
          <td style="width: 36%;"><input type="text" placeholder="Description" class="form-control" name="ugDes[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            value="{{$jpDetails[$key]['jp_desc']}}"

          @endif></td>
          <td><input type="checkbox" value="1" name="ugVideo[{{$item1['id']}}][]"></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="col-sm-12 col-md-12" style="width: 100%;">
    <table class="table table-hover" style="width: 100%;">
      <thead>
        <tr>
          <th style="width: 14%;">Overhead Hazard</th>
          <th style="width: 10%;">LR</th>
          <th style="width: 10%;">HR</th>
          <th style="width: 10%;">NA</th>
          <th style="width: 36%;">Description</th>
          <th style="width: 20%;">Video</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($overheadHz as $item1)
        <input type="hidden" name="ovhazardid[]" value="{{$item1['id']}}" />
        <tr class="">
          <td>{{$item1['option_name']}}</td>
          <td><input type="radio" value="1" name="ovhzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='1')
                {{'checked'}}
            @endif

          @endif></td>
          <td><input type="radio" value="2" name="ovhzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='2')
                {{'checked'}}
            @endif

          @endif></td>
          <td><input type="radio" value="3" name="ovhzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='3')
                {{'checked'}}
            @endif

          @endif></td>
          <td style="width: 36%;"><input type="text" placeholder="Description" class="form-control" name="ovDes[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            value="{{$jpDetails[$key]['jp_desc']}}"

          @endif></td>
          <td><input type="checkbox" value="1" name="ovVideo[{{$item1['id']}}][]"></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="col-sm-12 col-md-12" style="width: 100%;">
    <table class="table table-hover" style="width: 100%;">
      <thead>
        <tr>
          <th style="width: 14%;">Hazard To Others</th>
          <th style="width: 10%;">LR</th>
          <th style="width: 10%;">HR</th>
          <th style="width: 10%;">NA</th>
          <th style="width: 36%;">Description</th>
          <th style="width: 20%;">Video</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($otherHz as $item1)
        <input type="hidden" name="othazardid[]" value="{{$item1['id']}}" />
        <tr class="">
          <td>{{$item1['option_name']}}</td>
          <td><input type="radio" value="1" name="othzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='1')
                {{'checked'}}
            @endif

          @endif></td>
          <td><input type="radio" value="2" name="othzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='2')
                {{'checked'}}
            @endif

          @endif></td>
          <td><input type="radio" value="3" name="othzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            @if ($jpDetails[$key]['opt_val']=='3')
                {{'checked'}}
            @endif

          @endif></td>
          <td style="width: 36%;"><input type="text" placeholder="Description" class="form-control" name="otDes[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
            @php
             $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

            @endphp
            value="{{$jpDetails[$key]['jp_desc']}}"

          @endif></td>
          <td><input type="checkbox" value="1" name="otVideo[{{$item1['id']}}][]"></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>





              <div class="row">
  <h4 style="margin-left: 15px;">Access & Storage</h4>
</div>
<table class="table table-hover" style="width: 100%;">
  <thead class="table-header">
    <tr>
      <th>Hazard</th>
      <th>Yes</th>
      <th>No</th>
      <th>Description</th>
      <th>Video</th>
    </tr>
  </thead>
  <tbody class="table-data">
    @foreach ($accStorage as $item1)
    <input type="hidden" name="acsthazardid[]" value="{{$item1['id']}}" />
    <tr class="">
      <td>{{$item1['option_name']}}</td>
      <td><input type="radio" value="1" name="acsthzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
        @php
         $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

        @endphp
        @if ($jpDetails[$key]['opt_val']=='1')
            {{'checked'}}
        @endif

      @endif></td>
      <td><input type="radio" value="2" name="acsthzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
        @php
         $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

        @endphp
        @if ($jpDetails[$key]['opt_val']=='2')
            {{'checked'}}
        @endif

      @endif></td>
      <td><input type="text" placeholder="Description" class="form-control" name="acstDes[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))
        @php
         $key= array_search($item1['id'], array_column($jpDetails, 'jp_option_id'))

        @endphp
        value="{{$jpDetails[$key]['jp_desc']}}"

      @endif></td>
      <td><input type="checkbox" value="1" name="acstVideo[{{$item1['id']}}][]"></td>
    </tr>
    @endforeach
  </tbody>
</table>
<br />



<div class="row">
  <h4 style="margin-left: 15px;">Job Declaration & System of Work</h4>
</div>





<br />
<div class="row">
  <div class="col-lg-6 pinpin">
    <div class="row">
      <label for="inputdate" class="col-sm-2">Job Start Date : {{$jobPack['job_start_date']}}</label>
      <div class="col-sm-3">
        <input type="date" name="job_start_date" class="form-control" value="{{$jobPack['job_start_date']}}">
      </div>
    </div>
    <br />
    <table class="table table-hover" style="width: 100%;">
      <tbody class="table-data">
        @foreach ($jobWorks as $item1)
        <input type="hidden" name="jwhazardid[]" value="{{$item1['id']}}" />
        <tr class="">
          <td>{{$item1['option_name']}}</td>
          <td><input type="checkbox" value="1" name="jwhzopt[{{$item1['id']}}][]" @if (in_array($item1['id'], array_column($jpDetails, 'jp_option_id')))

            {{'checked'}}

          @endif></td>
        </tr>
        @endforeach
        <tr class="">
          <td>Method of Payment</td>
          <td><input type="radio" value="1" name="payment_method" @if($jobPack['payment_method']=='1') {{'checked'}} @endif> Cheque</td>
          <td><input type="radio" value="2" name="payment_method" @if($jobPack['payment_method']=='2') {{'checked'}} @endif> POS</td>
          <td><input type="radio" value="3" name="payment_method" @if($jobPack['payment_method']=='3') {{'checked'}} @endif> Card</td>
          <td><input type="radio" value="4" name="payment_method" @if($jobPack['payment_method']=='4') {{'checked'}} @endif> Cash</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-lg-6 pinpin">
    <table class="table table-hover" style="width: 100%;">
      <tbody class="table-data">
        <tr class="">
            <td></td>
            <td>Yes</td>
            <td>No</td>
            <td></td>
          </tr>
        <tr class="">

          <td>Flexible</td>
          <td><input type="radio" value="1" name="flexibal" @if($jobPack['flexibal']=='1') {{'checked'}} @endif></td>
          <td><input type="radio" value="0" name="flexibal" @if($jobPack['flexibal']=='0') {{'checked'}} @endif></td>
          <td><input type="text" name="flex_desc" placeholder="Description" class="form-control" value="{{$jobPack['flex_desc']}}"></td>
        </tr>
        <tr class="">
          <td>Annual PC</td>
          <td><input type="radio" value="1" name="annual_pc" @if($jobPack['annual_pc']=='1') {{'checked'}} @endif></td>
          <td><input type="radio" value="0" name="annual_pc" @if($jobPack['annual_pc']=='0') {{'checked'}} @endif></td>
          <td><input type="text" name="annual_pc_desc" placeholder="Description" class="form-control" value="{{$jobPack['annual_pc_desc']}}"></td>
        </tr>
      </tbody>
    </table>
    <br />
    <div>
      <label>Notes/Special requirements</label>
      <textarea class="form-control" name="note">{{$jobPack['note']}}</textarea>
    </div>
  </div>
</div>

  {{-- <div class="mb-3 row">
    <label for="inputFinalprice" class="col-sm-2">Final Price</label>
    <div class="col-sm-2">
      <input type="text" name="final_price" class="form-control" value="{{$jobPack['final_price']}}">
    </div>
  </div> --}}
  <div class="mb-3 row">
    {{-- <label for="inputDepositetaken" class="col-sm-2">Deposit Taken</label>
    <div class="col-sm-2">
      <input type="text" name="adv_amt_taken" class="form-control" value="{{$jobPack['adv_amt_taken']}}">
    </div> --}}
    <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________</label>
    <label for="inputDepositetaken" class="col-sm-4">Surveyor Signature _________________</label>
  </div>
  {{-- <div class="mb-3 row">
    <label for="inputBalanceoncompletion" class="col-sm-2">Balance On Completion</label>
    <div class="col-sm-2">
      <input type="text" name="balance_amt" class="form-control" value="{{$jobPack['balance_amt']}}">
    </div>
  </div> --}}
  <div class="mb-3 row">
    <label for="inputdate" class="col-sm-2">Date: {{$jobPack['added_date']}}</label>
    <div class="col-sm-2">
      <input type="date" name="added_date" class="form-control" value="{{$jobPack['added_date']}}">
    </div>
  </div>
  <br />
  <div class="mb-3 row">
    <label for="inputdate" class="col-sm-2">Date</label>
    <div class="col-sm-2">
      <input type="date" name="added_date1" class="form-control" value="{{$jobPack['added_date']}}">
    </div>
    <label for="inputDepositetaken" class="col-sm-4">Customer Signature _________________</label>
    <label for="inputDepositetaken" class="col-sm-4">Surveyor Signature _________________</label>
  </div>
</form>
<br />


<div class="row" style="margin-bottom: 15px;">
  <h4 style="margin-left: 15px;">Planner Section</h4>
</div>

<div class="row">
  <label for="inputteam Assined" class="col-sm-2">Team Assigned</label>
  <div class="col-sm-4">
    <select class="form-control" name="team_id" style="width: 100%;">
      @foreach ($teams as $team)
      <option value="{{$team['id']}}">{{$team['team_name']}}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="row"  style="display: table; width: 100%;">
  <label for="inputJobStartDate" class="col-sm-2" >Job Start Date : {{$jobPack['job_start_date']}}</label>
  <div class="col-sm-2">
    <input type="date" name="job_start_date1" class="form-control" value="{{$jobPack['job_start_date']}}">
  </div>
  <label for="inputJobStartTime" class="col-sm-2">Job Start Time : {{$jobPack['job_start_time']}}</label>
  <div class="col-sm-2">
    <input type="time" name="job_start_time" class="form-control" value="{{$jobPack['job_start_time']}}">
  </div>
</div>

<div class="row" style="display: table; width: 100%;">
  <label for="inputJobEndDate" class="col-sm-2">Job End Date : {{$jobPack['job_end_date']}}</label>
  <div class="col-sm-2">
    <input type="date" name="job_end_date" class="form-control" value="{{$jobPack['job_end_date']}}">
  </div>
  <div class="col-sm-2">
    <input type="checkbox" value="1" name="add_plan_cal" style="margin-top: 10px;"> Update PCal
  </div>
</div>

<div class="row" style="display: table; width: 100%;">
  <div class="col-auto">
    {{-- <input type="submit" class="btn btn-primary mb-3" value="Create Purchase Order" /> --}}
  </div>
</div>





              </div>
            </div>
          </div>
        </div>
        {{-- </form> --}}
      </section>
      <!-- /.content -->
    </div>

    </div>
  </body>
</html>
