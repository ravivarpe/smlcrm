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
          <h1>Edit Snagging</h1>
          <small>Snagging list</small>
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
                      <a class="btn btn-add" href="{{url('snagging-lists')}}"><i class="fa fa-list"></i> Snagging List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form action="{{route('snagging.edit',$snagging->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                   <div class="col-sm-12">
                      <div class="row">
                      <div class="form-group col-sm-5">
                         <label>Company Name</label>
                         <select class="form-control" name="company_id">
                           @foreach ($companies as $company)
                               <option value="{{$company->id}}" @if ($snagging->company_id==$company->id)
                                   {{'selected'}}
                               @endif>{{$company->name}}</option>
                           @endforeach

                         </select>
                      </div>
                     <div class="form-group col-sm-5">
                        <label>Category</label>
                        <select class="form-control" name="sub_cat_id">
                           @foreach ($categories as $category)
                              <option value="{{$category->id}}" @if ($snagging->sub_cat_id==$category->id)
                                {{'selected'}}
                            @endif>{{$category->name}}</option>
                           @endforeach
                        </select>
                     </div>

                      </div>
                      <div class="form-group">
                         <label>Title</label>
                         <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$snagging->title}}" required>
                         @if ($errors->has('title'))
                         <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('title') }}</div>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Report Date</label>
                        <input id='report_datetime' type="text" class="form-control" placeholder="Enter Date..." name="report_datetime" value="{{$snagging->report_datetime}}">
                     </div>

                     <div class="form-group">
                        <label>Complete Date</label>
                        <input id='complete_date' type="text" class="form-control" placeholder="Enter Date..." name="complete_date" value="{{$snagging->complete_date}}">
                     </div>

                     <div class="form-group">
                        <label>Customer Name</label>
                        <input type="hidden" name="contact_id" id="contact_id" value="{{$snagging->contact_id}}"/>
                        <input type="text" class="form-control" placeholder="Customer Name" name="contact_name" id="contact_name" value="{{$snagging->contact->name}}" >
                     </div>

                     <div class="form-group">
                        <label>Customer Address</label>
                        <input type="text" class="form-control" placeholder="Customer Address" name="address" id="address" >
                     </div>

                     <div class="form-group col-sm-5">
                        <label>Assign Team</label>
                        <select class="form-control" name="team_id">
                            @foreach ($teams as $team)
                             <option value="{{$team->id}}" @if ($snagging->team_id==$team->id)
                                {{'selected'}}
                            @endif>{{$team->team_name}}</option>
                           @endforeach
                        </select>
                     </div>

                      <div class="form-group">
                        <label>Tags</label>
                        <input type="text" class="form-control" placeholder="Tags" name="tags" value="{{$snagging->tags}}">
                     </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="description" name="descriptions" >{{$snagging->descriptions}}</textarea>
                     </div>


                     </div>

                     <div class="form-check">
                        <label>Add To Calendar</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="add_to_cal" value="1" @if ($snagging->add_to_cal==1)
                        {{'checked'}}
                    @endif > Yes</label>
                        <label class="radio-inline"><input type="radio" name="add_to_cal" value="0"  @if ($snagging->add_to_cal==0)
                            {{'checked'}}
                        @endif> No</label>

                     </div>

                     <div class="form-check">
                        <label>Status</label><br>
                        <label class="radio-inline">
                        <input type="radio" name="status" value="0" @if ($snagging->status==0)
                        {{'checked'}}
                    @endif style="accent-color:red;"> <div ></div></label>
                        <label class="radio-inline"><input type="radio" name="status" value="1"  @if ($snagging->status==1)
                            {{'checked'}}
                        @endif style="accent-color:green;"> </label>
                        <label class="radio-inline"><input type="radio" name="status" @if ($snagging->status==2)
                            {{'checked'}}
                        @endif  value="2" style="accent-color:yellow;"> </label>

                     </div>

                     <div class="form-group">
                        <label>Sangging Images</label>
                        <input type="file" name="snag_images[]" multiple>

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
        $('#report_datetime').datepicker({
        format: "dd-mm-yyyy",
      });
        $('#complete_date').datepicker({
        format: "dd-mm-yyyy",
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
      var cid=$('#contact_id').val();
      $.ajax({
         url:"{{url('get-contact-details')}}/"+cid,
         type: 'get',
         success: function( data ) {
             console.log(data);
             var contactdata=data;
             $('#address').val(contactdata.line1 +""+ contactdata.line2);
            //  $('#line2').val(contactdata.line2);
            //  $('#line3').val(contactdata.line3);
            //  $('#city').val(contactdata.city);
            //  $('#state').val(contactdata.state);
            //  $('#country').val(contactdata.country);
            //  $('#zip').val(contactdata.pincode);
         }
       });

      return false;
     }
});

});


    });
 </script>
 @endsection

