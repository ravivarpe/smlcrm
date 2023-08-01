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
          <h1>Add New Enquiry</h1>
          <small>Enquiry list</small>
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
                      <a class="btn btn-add" href="{{url('enquiries')}}"><i class="fa fa-list"></i> Enquiry List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form action="{{route('enquiries.add')}}" method="post">
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
                      {{-- <div class="form-group col-sm-5">
                         <label>Customer type</label>
                         <select class="form-control">
                            <option>Customer</option>
                            <option>Agent</option>
                            <option>Suppliers</option>
                         </select>
                      </div> --}}
                      </div>
                      <div class="form-group">
                         <label>Name</label>
                         <input type="text" class="form-control" name="name" placeholder="Enter Customer Name" required>
                      </div>
                      <div class="form-group">
                         <label>Phone</label>
                         <input type="text" class="form-control"  name="phone" placeholder="Phone No" >
                      </div>


                      <div class="form-group row mx-0">
                         <label>Email Id</label>
                         <div class="col-sm-12 px-0">
                         <input class="col-sm-5" type="email" name="email" class="form-control" placeholder="Enter email" required>

                      </div>
                    </div>
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="text" class="form-control" name="post_code" placeholder="Enter Post Code" required>
                     </div>
                     <div class="form-group">
                        <label>Enquiry From</label>

                        <select class="form-control" name="enquiry_form" required>
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                            <option value="Magzines">Magzines</option>
                            <option value="News Paper">News Paper</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Website">Website</option>
                         </select>
                    </div>

                      <div class="form-check">
                         <label>Customer Status</label><br>
                         <label class="radio-inline">
                         <input type="radio" name="status" value="Won" > Won</label>
                         <label class="radio-inline"><input type="radio" name="status" value="Lost" > Lost</label>
                         <label class="radio-inline"><input type="radio" name="status" value="Complete" > Complete</label>
                         <label class="radio-inline"><input type="radio" name="status" value="Pending" checked="checked"> Pending</label>
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
