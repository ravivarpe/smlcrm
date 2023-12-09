@extends('includes.header')

@section('content')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-users"></i>
       </div>
       <div class="header-title">
          <h1>Edit Staff</h1>
          <small>Staff list</small>
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
                      <a class="btn btn-add" href="{{url('users')}}"><i class="fa fa-list"></i> Staff List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form action="{{route('user.edit',$user->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                   <div class="col-sm-12">
                    <div class="form-group">
                        <label>Staff Name</label>
                        <input type="text" class="form-control" name="staff_name" placeholder="Enter Staff Name" value="{{$user->staff_name}}" required>
                        @if ($errors->has('staff_name'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('staff_name') }}</div>
                        @endif
                     </div>
                      <div class="row">
                      <div class="form-group col-sm-3">
                         <label>Company Name</label>
                         <select class="form-control" name="company_id" required>
                           @foreach ($companies as $company)
                               <option value="{{$company->id}}" @if ($user->company_id==$company->id)
                                {{'selected'}}

                               @endif>{{$company->name}}</option>
                           @endforeach

                         </select>
                      </div>

                      <div class="col-md-3 form-group">
                        <label class="control-label">User Permission</label>
                        <select class="form-control" name="role_id" required>

                           @foreach ($roles as $role)
                           <option value="{{$role->id}}" @if ($user->role_id==$role->id)
                            {{'selected'}}

                           @endif>{{$role->role_name}}</option>
                           @endforeach
                        </select>
                     </div>
                      {{-- <div class="form-group col-sm-5">
                         <label>Staff Category</label>
                         <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                               <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                         </select>
                      </div> --}}
                      <div class="form-group col-sm-3">
                        <label>Staff Category</label>
                        <select class="form-control" name="sub_category_id">
                            @foreach ($subcategories as $sub_cat)
                             <option value="{{$sub_cat->id}}">{{$sub_cat->sub_category_name}}</option>
                           @endforeach
                         </select>
                       </div>
                      </div>
                      <div class="form-group">
                        <label>Rate of Pay</label>
                        <input type="text" class="form-control" name="rate_of_pay" placeholder="Enter Rate of Pay" value="{{$user->rate_of_pay}}" required>
                        @if ($errors->has('rate_of_pay'))
                       <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('rate_of_pay') }}</div>
                       @endif
                     </div>
                     <div class="form-group">
                        <label>Frequency of Pay</label>
                        <select class="form-control" name="freq_of_pay"  required>
                            <option value="Per Day" @if ($user->freq_of_pay=='Per Day')
                                {{'selected'}}
                            @endif>Per Day</option>
                            <option value="Per Week" @if ($user->freq_of_pay=='Per Week')
                                {{'selected'}}
                            @endif>Per Week</option>
                            <option value="Per Month" @if ($user->freq_of_pay=='Per Month')
                                {{'selected'}}
                            @endif>Per Month</option>
                            <option value="Per Anum" @if ($user->freq_of_pay=='Per Anum')
                                {{'selected'}}
                            @endif>Per Anum</option>
                        </select>
                        @if ($errors->has('freq_of_pay'))
                       <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('freq_of_pay') }}</div>
                       @endif
                     </div>


                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email"  value="{{$user->email}}" required>
                        @if ($errors->has('email'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('email') }}</div>
                        @endif
                     </div>

                     <div class="form-group row mx-0">
                        <label>Phone</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="number" class="form-control" placeholder="Enter Phone No" name="phone" value="{{$user->phone}}" required>
                        @if ($errors->has('phone'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('phone') }}</div>
                        @endif
                        </div>
                     </div>

                     <div class="form-group row mx-0">
                        <label>Landline </label>
                        <div class="col-sm-12 px-0">

                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Landline" name="llandline" value="{{$user->llandline}}"></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Emergency Contact Name </label>
                        <div class="col-sm-12 px-0">

                        <input class="col-sm-5"  type="text" class="form-control" placeholder="Emergency Contact Name" name="other_contact" value="{{$user->other_contact}}"></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Emergency Contact Number </label>
                        <div class="col-sm-12 px-0">

                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Emergency Contact Number" name="emergency_contact" value="{{$user->emergency_contact}}"></div>
                     </div>

                     <div class="form-group">
                        <label>Address</label>
                           <div>
                           <input type="text" name="line1" placeholder="Address" @if ($user->address!=null)

                            value="{{$user->address->line1}}"  @endif id="line1"  required>
                            @if ($errors->has('line1'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('line1') }}</div>
                        @endif
                           <input type="text" name="line2" placeholder="Address 2"  id="line2"  @if ($user->address!=null)

                           value="{{$user->address->line2}}"  @endif>
                           <input type="text" name="line3" placeholder="Address 3" id="line3"  @if ($user->address!=null)

                           value="{{$user->address->line3}}"  @endif>
                           <input type="text" name="country" placeholder="Country " value="United Kingdom" id="country">
                           {{-- <select name="country">
                           <option value="">Select a country..</option></select> --}}
                           </div>
                           <div>
                           <input type="text" name="city" placeholder="City"  id="city"  @if ($user->address!=null)

                           value="{{$user->address->city}}"  @endif>
                           <input type="text" name="state" placeholder="County/State"  id="state"  @if ($user->address!=null)

                           value="{{$user->address->state}}"  @endif>
                           <input type="text" name="pincode" placeholder="Postcode/Zip"  id="zip"  @if ($user->address!=null)

                           value="{{$user->address->pincode}}"  @endif required>
                           @if ($errors->has('pincode'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('pincode') }}</div>
                        @endif
                           <a href="#" id="postcode_lookup">Find address</a>
                           </div>

                     </div>

                     <div class="form-group row mx-0">
                        <label>Driving Licence ID</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="text" class="form-control" placeholder="Enter Licence ID"  name="licence_id" value="{{$user->licence_id}}" required>
                        @if ($errors->has('licence_id'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('licence_id') }}</div>
                        @endif
                       </div>
                     </div>


                     <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="text" class="form-control" placeholder="Expiration Date" name="expiration_date" id="expiration_date" value="{{$user->expiration_date}}">
                     </div>

                     <div class="form-group">
                        <label>DOB</label>
                        <input type="text" class="form-control" placeholder="DOB" name="dob" value="{{$user->dob}}" id="dob">
                     </div>
                     <div class="form-group">
                        <label>UTR</label>
                        <input type="text" class="form-control" placeholder="UTR " name="urt" value="{{$user->urt}}">
                     </div>

                     <div class="form-group">
                        <label>NI Number</label>
                        <input type="text" class="form-control" placeholder="NI " name="ni" value="{{$user->ni}}">
                     </div>

                     <div class="form-group">
                        <label>Contract Start Date</label>
                        <input type="text" class="form-control" placeholder="Contract Start Date" name="contract_start_date" id="contract_start_date" value="{{$user->contract_start_date}}">
                     </div>

                     <div class="form-group">
                        <label>Contract End Date</label>
                        <input id='contract_end_date' type="text" class="form-control" placeholder="Enter Contract End Date" name="contract_end_date" value="{{$user->contract_end_date}}">
                     </div>


                     <div class="form-check">
                        <label>Details Complete</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="is_staff" value="1"   @if($user->is_staff==1){{'checked'}} @endif> Yes</label>
                        {{-- <label class="radio-inline"><input type="radio" name="email_subscription" value="0" > No</label> --}}
                        <label class="radio-inline"><input type="radio" name="is_staff" value="0"  @if($user->is_staff==0){{'checked'}} @endif> No</label>
                     </div>

                     <div class="form-group">
                        <label>Color Code</label>
                        <input id='color_code' type="color" class="form-control" placeholder="Enter color Code" name="color_code" value="{{$user->color_code}}" required>
                        @if ($errors->has('color_code'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('color_code') }}</div>
                        @endif
                     </div>


                     <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label">Teams</label>
                            <select class="form-control" name="team_id">
                                <option value="">NO TEAM</option>
                               @foreach ($teams as $team)
                                 <option value="{{$team->id}}"  @if ($user->team_id==$team->id)
                                    {{'selected'}}

                                   @endif>{{$team->team_name}}</option>
                               @endforeach

                            </select>
                            @if ($errors->has('team_id'))
                            <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('team_id') }}</div>
                            @endif
                         </div>




                     </div>
                     <div class="form-check">
                        <label>Status</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="status" value="1" checked="checked"> Active</label>
                        <label class="radio-inline"><input type="radio" name="status" value="0" > InActive</label>

                     </div>

                     <div class="form-group" id="job_description_div">
                        <label>Note</label>
                        <textarea class="form-control" rows="3" placeholder="Note" name="note" id="note">{{$user->note}}</textarea>
                     </div>

                     <div class="form-group">
                        <label>Created Date</label>
                        <input type="text" class="form-control" placeholder="Created Date" name="added_date" id="added_date" value="{{$user->added_date}}" required>
                        @if ($errors->has('added_date'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('added_date') }}</div>
                        @endif
                     </div>
                     <div class="form-group">
                        <label>Picture Photo</label>
                        <input type="file" name="profile_image">

                     </div>

                      <div class="reset-button">
                         <button type="reset" class="btn btn-warning"> Reset</button>
                         <button type="submit" class="btn btn-success"> Save</button>
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
 <!-- /.content-wrapper -->

@endsection
@section('footer_scripts')
 <script>
    $(document).ready(function(){
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


        $('#expiration_date').datepicker({
           format: "dd-mm-yyyy",
        })
        $('#contract_start_date').datepicker({
           format: "dd-mm-yyyy",
        })
        $('#contract_end_date').datepicker({
           format: "dd-mm-yyyy",
        })
        $('#added_date').datepicker({
           format: "dd-mm-yyyy",
        })

        $('#dob').datepicker({
           format: "dd-mm-yyyy",
        })


    });
 </script>
 @endsection

