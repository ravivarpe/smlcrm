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
          <h1>Add New Staff</h1>
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
                <form action="{{route('user.add')}}" method="post">
                    @csrf
                   <div class="col-sm-12">
                      <div class="row">
                      <div class="form-group col-sm-5">
                         <label>Company Name</label>
                         <select class="form-control" name="company_id" required>
                           @foreach ($companies as $company)
                               <option value="{{$company->id}}">{{$company->name}}</option>
                           @endforeach

                         </select>
                      </div>

                      <div class="col-md-6 form-group">
                        <label class="control-label">Staff Category</label>
                        <select class="form-control" name="role_id" required>

                           @foreach ($roles as $role)
                           <option value="{{$role->id}}">{{$role->role_name}}</option>
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
                      <div class="form-group col-sm-5">
                        <label>Sub Contractor</label>
                        <select class="form-control" name="sub_category_id">
                            @foreach ($subcategories as $sub_cat)
                             <option value="{{$sub_cat->id}}">{{$sub_cat->sub_category_name}}</option>
                           @endforeach
                         </select>
                       </div>
                      </div>
                      <div class="form-group">
                         <label>Staff Name</label>
                         <input type="text" class="form-control" name="staff_name" placeholder="Enter Staff Name" required>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" required>
                     </div>

                     <div class="form-group row mx-0">
                        <label>Phone</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="number" class="form-control" placeholder="Enter Phone No" name="phone" required>
                        </div>
                     </div>

                     <div class="form-group row mx-0">
                        <label>Landline </label>
                        <div class="col-sm-12 px-0">

                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Landline" name="llandline"></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Other Contact </label>
                        <div class="col-sm-12 px-0">

                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Landline" name="other_contact"></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Emergency Contact </label>
                        <div class="col-sm-12 px-0">

                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Emergency Contact" name="emergency_contact"></div>
                     </div>

                     <div class="form-group">
                        <label>Address</label>
                           <div>
                           <input type="text" name="line1" placeholder="Address" value="" id="line1" required>
                           <input type="text" name="line2" placeholder="Address 2" value="" id="line2">
                           <input type="text" name="line3" placeholder="Address 3" value="" id="line3">
                           <input type="text" name="country" placeholder="Country " value="United Kingdom" id="country">
                           {{-- <select name="country">
                           <option value="">Select a country..</option></select> --}}
                           </div>
                           <div>
                           <input type="text" name="city" placeholder="City" value="" id="city">
                           <input type="text" name="state" placeholder="County/State" value="" id="state">
                           <input type="text" name="pincode" placeholder="Postcode/Zip" value="" id="zip" required>
                           {{-- <a href="#" id="postcode_lookup">Find address</a> --}}
                           </div>

                     </div>

                     <div class="form-group row mx-0">
                        <label>Licence ID</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="text" class="form-control" placeholder="Enter Licence ID"  name="licence_id" required>
                       </div>
                     </div>


                     <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="text" class="form-control" placeholder="Expiration Date" name="expiration_date" id="expiration_date">
                     </div>

                     <div class="form-group">
                        <label>Insurance Type</label>
                        <input type="text" class="form-control" placeholder="Insurance Type" name="inshurance_type">
                     </div>
                     <div class="form-group">
                        <label>URT</label>
                        <input type="text" class="form-control" placeholder="URT " name="urt">
                     </div>

                     <div class="form-group">
                        <label>NI</label>
                        <input type="text" class="form-control" placeholder="NI " name="ni">
                     </div>

                     <div class="form-group">
                        <label>Contract Start Date</label>
                        <input type="text" class="form-control" placeholder="Contract Start Date" name="contract_start_date" id="contract_start_date">
                     </div>

                     <div class="form-group">
                        <label>Contract End Date</label>
                        <input id='contract_end_date' type="text" class="form-control" placeholder="Enter Contract End Date" name="contract_end_date">
                     </div>


                     <div class="form-check">
                        <label>Is Staff</label><br>
                        <label class="radio-inline">
                        <input type="checkbox" name="is_staff" value="1" checked="checked"> Yes</label>
                        {{-- <label class="radio-inline"><input type="radio" name="email_subscription" value="0" > No</label> --}}

                     </div>

                     <div class="form-group">
                        <label>Color Code</label>
                        <input id='color_code' type="color" class="form-control" placeholder="Enter color Code" name="color_code" required>
                     </div>


                     <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label">Teams</label>
                            <select class="form-control" name="team_id" required>

                               @foreach ($teams as $team)
                                 <option value="{{$team->id}}">{{$team->team_name}}</option>
                               @endforeach

                            </select>
                         </div>




                     </div>
                     <div class="form-check">
                        <label>Status</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="status" value="1" checked="checked"> Active</label>
                        <label class="radio-inline"><input type="radio" name="status" value="0" > InActive</label>

                     </div>

                     <div class="form-group">
                        <label>Created Date</label>
                        <input type="text" class="form-control" placeholder="Created Date" name="added_date" id="added_date" required>
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
        $('#postcode_lookup').click(function(){
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


    });
 </script>
 @endsection

