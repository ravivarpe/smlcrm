@extends('includes.header')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-briefcase"></i>
       </div>
       <div class="header-title">
          <h1>Add Job</h1>
          <small>Details</small>
       </div>
    </section>
    <!-- Main content -->
    <div class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                 <div class="card-header all_card_btn">
                     <div class="card-title custom_title">
                      <a class="btn btn-add" href="{{url('jobs')}}"><i class="fa fa-list"></i> Job List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form action="{{route('job.add',$invoiceId)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-12">
                      <div class="row">
                      <div class="form-group col-sm-5">
                         <label>Company Name</label>
                         <select class="form-control" name="company_id">
                            @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                         </select>
                      </div>
                      <div class="form-group col-sm-5">
                         <label>Sub Categories</label>
                         <select class="form-control" name="job_cat_id">
                            @foreach ($jobcategories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                         </select>
                      </div>
                      </div>
                      <div class="form-group">
                         <label>Job Title</label>
                         <input type="text" class="form-control" placeholder="Job Title" name="job_title" required>
                         @if ($errors->has('job_title'))
                         <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('job_title') }}</div>
                         @endif
                      </div>
                      <div class="form-group">
                        <label>Tags</label>
                        <input type="text" class="form-control" placeholder="Tags" name="tags">
                     </div>
                     <div class="form-group row mx-0">
                        <label>Start Date/ End date</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="text" class="form-control" placeholder="DD-MM-YYYY" name="start_date" id="start_date" required></div>
                        <input class="col-sm-5" type="text" class="form-control" placeholder="DD-MM-YYYY" name="end_date" id="end_date" required></div>
                     </div>

                     <div class="form-group">
                        <label>Job Description</label>
                        <textarea class="form-control" rows="3" placeholder="description" name="jobdescription" ></textarea>
                     </div>
                     <div class="form-group">
                        <label>Delivery Address</label>
                           <div>
                           <input type="text" name="address" placeholder="Address" value="" id="line1">
                           <input type="text" name="address2" placeholder="Address 2" value="" id="line2">
                           <input type="text" name="address3" placeholder="Address 3" value="" id="line3">
                           <input type="text" name="country" placeholder="Country " value="United Kingdom" id="country">
                          </div>
                           <div>
                           <input type="text" name="city" placeholder="City" value="" id="city">
                           <input type="text" name="state" placeholder="County/State" value="" id="state">
                           <input type="text" name="zip" placeholder="Postcode/Zip" value="" id="zip">
                           <a href="#" id="postcode_lookup">Find address</a>
                           </div>

                     </div>


                     <div class="form-group">
                        <label>Referral Type</label>
                        <select class="form-control" name="ref_type">
                           <option>Online</option>
                           <option>Offline</option>
                           <option>Magzines</option>
                           <option>News Paper</option>
                           <option>Social Media</option>
                        </select>
                     </div>

                     <div class="form-group">
                        <label>Responsilble</label>
                        <select class="form-control" name="responsible" required>

                            <option value="">Select Resposiblity</option>
                             @foreach ($users as $user )
                             <option value="{{$user->id}}">{{$user->staff_name}}</option>
                            @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Team</label>
                        <select class="form-control" name="team_id" required>
                            <option value="">Select Team</option>
                           @foreach ($teams as $team )
                             <option value="{{$team->id}}">{{$team->team_name}}</option>
                           @endforeach

                        </select>
                     </div>
                     <div class="form-group">
                        <label>Job Priority</label>
                        <select class="form-control" name="priority" required>
                            <option value="">Select Job Priority</option>
                           <option value="High">High</option>
                           <option value="Low">Low</option>
                           <option value="Medium">Medium</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Planning Calendar</label>
                    <input type="checkbox" value="1" name="plan_calendar" checked> <label for="planning calender">Tick to add a new task to the planning calendar</label>
                    </div>
                    <div class="form-group">
                        <label>Resin Customers?</label>
                    <input type="checkbox" value="1" name="resin_cust">
                    </div>
                    <div class="form-group">
                        <label>Value (£)</label>
                        <input type="text" class="form-control" placeholder="Value (£)" name="job_value" required>
                     </div>
                     <div class="form-group">
                        <label>Contact Name</label>
                        <input type="text" class="form-control" placeholder="Contact" name="contact_name" id="contact_name" required>
                        <input type="hidden" name="contact_id" id="contact_id"/>
                     </div>
                     <div class="form-group row mx-0">
                      <label>Phone/Mobile</label>
                      <div class="col-sm-12 px-0">
                      <input class="col-sm-5" type="number" class="form-control" placeholder="Enter Phone" id="phone" required>
                      <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Mobile" id="phone1" ></div>
                   </div>
                   <div class="form-group row mx-0">
                      <label>Email Id</label>
                      <div class="col-sm-12 px-0">
                      <input class="col-sm-5" type="email" class="form-control" placeholder="Enter email" id="email" required>
                      <input class="col-sm-5"  type="email" class="form-control" placeholder="Enter email" id="email1"></div>
                   </div>
                     <div class="form-group">
                        <label>Individual</label>
                        <input type="text" class="form-control" placeholder="Individual" name="individual" required>
                     </div>
                     <div class="form-group">
                        <label>Tipping/stone site?</label>
                    <input type="checkbox" value="1" name="tip_stone_side">
                    </div>
                    <div class="form-group">
                        <label>Who can see this?</label>
                        <select class="form-control" name="who_see">
                           <option value="Everyone">Everyone</option>
                           <option value="Accountant Only">Accountant Only</option>
                           <option value="Management Only">Management Only</option>
                           <option value="Sales Only">Sales Only</option>
                        </select>
                     </div>
                     <div class="form-check">
                        <label>Job Status</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="status" value="Won" checked="checked"> Won</label>
                        <label class="radio-inline"><input type="radio" name="status" value="Lost"> Lost</label>
                        <label class="radio-inline"><input type="radio" name="status" value="Complete"> Complete</label>
                        <label class="radio-inline"><input type="radio" name="status" value="Pending"> Pending</label>
                     </div>

                     <div class="form-check">
                        <label>Job Status2</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="status_two" value="Quoted" checked="checked">Quoted</label>
                        <label class="radio-inline"><input type="radio" name="status_two" value="Ground Works" > Ground Works</label>
                        <label class="radio-inline"><input type="radio" name="status_two" value="Powerclean"> Powerclean</label>
                        <label class="radio-inline"><input type="radio" name="status" value="Resin Work" > Resin Work</label>
                        <label class="radio-inline"><input type="radio" name="status" value="Invoiced">Invoiced</label>
                     </div>

                     <div class="form-group">
                        <label>Job Picture upload</label>
                        <input type="file" name="photos[]" multiple>

                     </div>

                      <div class="reset-button">
                         <button type="submit" class="btn btn-success"> Save</button>
                         <button type="reset" class="btn btn-warning"> Reset</button>
                      </div>
                   </div>
                </form>
                </div>
             </div>
         </div>
       </div>
    </div>
    <!-- /.content -->
 </div>

@endsection

@section('footer_scripts')
<script>
   $(document).ready(function(){
    var cid;

    $("#company_id").change(function(){
        cid= $("#company_id").val();
    });

       $('#contact_name').on('keyup',function(){

           $("#contact_name" ).autocomplete({
              source: function( request, response ) {

                    $.ajax({
                    url:"{{url('search-contact')}}",
                    type: 'get',

                    success: function( data ) {
                        console.log(data);
                        response(data);
                        console.log(response);
                    }
                });
                },
                 focus: function(event, ui) {
                     $("contact_name").val(ui.item.label);
                     $('#contact_id').val(ui.item.value);
                     return false;
                  },
                select: function (event, ui) {
                 event.preventDefault();
                 $('#contact_name').val(ui.item.label); // display the selected text
                 $('#contact_id').val(ui.item.value); // save selected id to input

         // save selected id to input
                var cid=$('#contact_id').val();
                $.ajax({
                    url:"{{url('get-contact-details')}}/"+cid,
                    type: 'get',
                    success: function( data ) {
                        console.log(data);
                        var contactdata=data;
                        $('#line1').val(contactdata.line1);
                        $('#line2').val(contactdata.line2);
                        $('#line3').val(contactdata.line3);
                        $('#city').val(contactdata.city);
                        $('#state').val(contactdata.state);
                        $('#country').val(contactdata.country);
                        $('#zip').val(contactdata.pincode);
                        $('#phone').val(contactdata.contact_number.replace(" ", ""));
                        $('#phone1').val(contactdata.mobile);
                        $('#email').val(contactdata.email1);
                        $('#email2').val(contactdata.email2);

                    }
                });

                  return false;
                }
        });



       });

       $('#end_date').datepicker({
        format: "dd-mm-yyyy",
      });
        $('#start_date').datepicker({
        format: "dd-mm-yyyy",
      });


      $('#postcode_lookup').click(function(event){
            event.preventDefault();
             var postcode=$('#zip').val();
             if(postcode!=null && postcode!='undefined' && postcode!='')
             {
                $.ajax({
                    url:"{{url('get-address')}}/"+postcode,
                    type: 'get',

                    success: function( data ) {
                        console.log(data);
                        var  addr=data.split('<~>');
                        $('#line2').val(addr[0]);
                        $('#city').val(addr[1]);
                        $('#state').val(addr[2]);

                    }
                });
             }
        });










   });
</script>
@endsection
