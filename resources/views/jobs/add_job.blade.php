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
                <form action="{{route('job.add')}}" method="post" enctype="multipart/form-data">
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
                      </div>
                      <div class="form-group">
                        <label>Tags</label>
                        <input type="text" class="form-control" placeholder="Tags" name="tags">
                     </div>
                     <div class="form-group row mx-0">
                        <label>Start Date/ End date</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="date" class="form-control" placeholder="Start Date" name="start_date" required></div>
                        <input class="col-sm-5" type="date" class="form-control" placeholder="ENd Date" name="end_date" required></div>
                     </div>

                     <div class="form-group">
                        <label>Job Description</label>
                        <textarea class="form-control" rows="3" placeholder="description" name="jobdescription" ></textarea>
                     </div>
                     <div class="form-group">
                        <label>Delivery Address</label>
                           <div>
                           <input type="text" name="address" placeholder="Address" value="" id="address">
                           <input type="text" name="address2" placeholder="Address 2" value="" id="address2">
                           <input type="text" name="address3" placeholder="Address 3" value="" id="address3">
                           <select name="country">
                           <option value="">Select a country..</option></select></div>
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
                        <select class="form-control" name="responsible">
                           @foreach ($users as $user )
                             <option value="{{$user->id}}">{{$user->staff_name}}</option>
                            @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Team</label>
                        <select class="form-control" name="team_id">
                           @foreach ($teams as $team )
                             <option value="{{$team->id}}">{{$team->team_name}}</option>
                           @endforeach

                        </select>
                     </div>
                     <div class="form-group">
                        <label>Job Priority</label>
                        <select class="form-control" name="priority">
                           <option>High</option>
                           <option>Low</option>
                           <option>Medium</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Planning Calendar</label>
                    <input type="checkbox" value="1" name="plan_calendar"> <label for="planning calender">Tick to add a new task to the planning calendar</label>
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
                      <input class="col-sm-5" type="number" class="form-control" placeholder="Enter Phone" required>
                      <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Mobile" ></div>
                   </div>
                   <div class="form-group row mx-0">
                      <label>Email Id</label>
                      <div class="col-sm-12 px-0">
                      <input class="col-sm-5" type="email" class="form-control" placeholder="Enter email" required>
                      <input class="col-sm-5"  type="email" class="form-control" placeholder="Enter email"></div>
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
                           <option>High</option>
                           <option>Low</option>
                           <option>Medium</option>
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

                     <div class="form-group">
                        <label>Job Picture upload</label>
                        <input type="file" name="picture">
                        <input type="hidden" name="old_picture">
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
                  return false;
                }
        });


          //$('#editcustom').modal('show');
       });




   });
</script>
@endsection
