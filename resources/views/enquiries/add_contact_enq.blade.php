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
          <h1>Add New Contact</h1>
          <small>Contact list</small>
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
                      <a class="btn btn-add" href="{{url('contacts')}}"><i class="fa fa-list"></i> Contact List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form action="{{route('contact.add')}}" method="post">
                    @csrf
                   <div class="col-sm-12">
                      <div class="row">
                      <div class="form-group col-sm-5">
                         <label>Company Name</label>
                         <select class="form-control" name="company_id">
                           @foreach ($companies as $company)
                               <option value="{{$company->id}}" @if ($enquiry->company_id==$company->id)
                                   {{'selected'}}
                               @endif>{{$company->name}}</option>
                           @endforeach

                         </select>
                      </div>
                      <div class="form-group col-sm-5">
                         <label>Customer Category</label>
                         <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                               <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                         </select>
                      </div>
                      <div class="form-group col-sm-5">
                        <label>Customer Sub Category</label>
                        <select class="form-control" name="sub_category_id">
                            @foreach ($subcategories as $sub_cat)
                             <option value="{{$sub_cat->id}}">{{$sub_cat->sub_category_name}}</option>
                           @endforeach
                        </select>
                     </div>
                      </div>
                      <div class="form-group">
                         <label>Name</label>
                         <input type="text" class="form-control" name="name" placeholder="Enter Customer Name" value="{{$enquiry->name}}" required>
                      </div>
                      <div class="form-group">
                        <label>Tags</label>
                        <input type="text" class="form-control" placeholder="Tags" name="tags">
                     </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="description" name="description" ></textarea>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Phone/Mobile</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="number" class="form-control" placeholder="Enter Phone" name="contact_number" value="{{$enquiry->phone}}" required>
                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Mobile" name="mobile"></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Email Id</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="email" class="form-control" placeholder="Enter email"  name="email1" value="{{$enquiry->email}}" required>
                        <input class="col-sm-5"  type="email" class="form-control" placeholder="Enter email" name="email2"></div>
                     </div>




                     <div class="form-group">
                        <label>Referral Type</label>
                        <select class="form-control" name="referance_from">
                           <option value="Online">Online</option>
                           <option value="Offline">Offline</option>
                           <option value="Magzines">Magzines</option>
                           <option value="News Paper">News Paper</option>
                           <option value="Social Media">Social Media</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Social Id </label>
                           <div>
                           <input type="text" name="Facebook" placeholder="Facebook" value="" name="facebook_handle">
                           <input type="text" name="Twitter" placeholder="Twitter" value="" name="twitter_handle">
                           <input type="text" name="Skype" placeholder="Skype" value="" name="skype_handle">
                           <input type="text" name="Other" placeholder="Other" value="" name="google_handle">
                           </div>
                     </div>


                     <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" placeholder="Website" name="website">
                     </div>

                     <div class="form-group">
                        <label>Vat No</label>
                        <input type="text" class="form-control" placeholder="Vat No" name="vat_no">
                     </div>

                     <div class="form-group">
                        <label>Date of Birth</label>
                        <input id='minMaxExample' type="text" class="form-control" placeholder="Enter Date..." name="dob">
                     </div>
                     <div class="form-group">
                        <label>Address</label>
                           <div>
                           <input type="text" name="line1" placeholder="Address" value="" id="line1">
                           <input type="text" name="line2" placeholder="Address 2" value="" id="line2">
                           <input type="text" name="line3" placeholder="Address 3" value="" id="line3">
                           <input type="text" name="country" placeholder="Country " value="United Kingdom" id="country">
                           {{-- <select name="country">
                           <option value="">Select a country..</option></select> --}}
                           </div>
                           <div>
                           <input type="text" name="city" placeholder="City" value="" id="city">
                           <input type="text" name="state" placeholder="County/State" value="" id="state">
                           <input type="text" name="pincode" placeholder="Postcode/Zip" value="{{$enquiry->post_code}}" id="zip">
                           <a href="#" id="postcode_lookup">Find address</a>
                           </div>

                     </div>

                     <div class="form-check">
                        <label>Email Subscriptions</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="email_subscription" value="1" checked="checked"> Yes</label>
                        <label class="radio-inline"><input type="radio" name="email_subscription" value="0" > No</label>

                     </div>
                     {{-- <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="profile_photo">
                        <input type="hidden" name="old_picture">
                     </div> --}}

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


    });
 </script>
 @endsection

