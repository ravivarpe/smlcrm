@extends('includes.header')

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-truck"></i>
       </div>
       <div class="header-title">
          <h1>Edit Asset</h1>
          <small>Asset list</small>
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
                      <a class="btn btn-add" href="{{url('asset')}}"><i class="fa fa-truck"></i> Asset List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form action="{{route('asset.edit', $asset->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-12">
                        <div class="row">
                        <div class="form-group col-sm-4">
                            <label>Company Name</label>
                            <select class="form-control" name="company_id">
                                @foreach ($companies as $company)
                                <option value="{{$company->id}}" @if($asset->company_id==$company->id) {{'selected'}}@endif>{{$company->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('company_id'))
                            <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('company_id') }}</div>
                            @endif
                        </div>

                       <div class="form-group col-sm-4">
                            <label>Categories</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}"  @if($asset->category_id==$category->id) {{'selected'}}@endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                            <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('category_id') }}</div>
                            @endif
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Reg/Vin</label>
                            <input type="text" class="form-control" name="regvin" placeholder="Reg/Vin" value="{{$asset->regvin}}"/>
                            @if ($errors->has('subcat_id'))
                            <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('subcat_id') }}</div>
                            @endif
                        </div>
                        </div>

                        <div class="form-group">
                            <label>Asset Make & Model</label>
                            <input type="text" class="form-control"
                            name="asset_type" placeholder="Asset Make & Model" value="{{$asset->asset_type}}">
                            @if ($errors->has('asset_type'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('asset_type') }}</div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label>Asset Supplier</label>
                            <input type="text" class="form-control"
                            name="asset_name" placeholder="Asset Supplier" value="{{$asset->asset_name}}" id="contact_name" @if ($asset->supplier!=null)
                                value="{{$asset->supplier->name}}"
                            @endif  required>
                            @if ($errors->has('asset_nmae'))
                            <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('asset_name') }}</div>
                            @endif

                            <input type="hidden" name="contact_id" id="contact_id" @if ($asset->supplier!=null)
                            value="{{$asset->supplier->id}}"
                        @endif/>
                        </div>

                        <div class="form-group">
                        <label>Asset value</label>
                        <input type="number" class="form-control"
                        name="asset_value" placeholder="Asset Value £" value="{{$asset->asset_value}}" required>
                        @if ($errors->has('asset_value'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('asset_value') }}</div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label>Purchase Date</label>
                            <input id='purchase_date' type="text" class="form-control" name="purchase_date" placeholder="Purchase Date..." value="{{$asset->purchase_date}}">
                            @if ($errors->has('purchase_date'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('purchase_date') }}</div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Assigned Team</label>
                            <select class="form-control" name="team_id">
                            @foreach($teams as $team)
                                <option value="{{$team->id}}" @if($asset->team_id==$team->id){{'selected'}} @endif>{{$team->team_name}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="row">
                        <div class="form-group col-sm-6">
                           <label>Service Required</label>
                        <div class="col-sm-12 px-0">
                            <label class="checkbox-inline">
                            <input type="radio"
                            name="service_required" id="inlineCheckbox1" value="1" @if($asset->service_required==1){{'checked'}} @endif> Yes
                            </label>

                            <label class="checkbox-inline">
                            <input type="radio"
                            name="service_required" id="inlineCheckbox2" value="0" @if($asset->service_required==0){{'checked'}} @endif> No
                            </label>
                        </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>MOT Required</label>
                         <div class="col-sm-12 px-0">
                             <label class="checkbox-inline">
                             <input type="radio"
                             name="mot" id="inlineCheckbox1" value="1" @if($asset->service_required==1){{'checked'}} @endif> Yes
                             </label>

                             <label class="checkbox-inline">
                             <input type="radio"
                             name="mot" id="inlineCheckbox2" value="0" @if($asset->service_required==0){{'checked'}} @endif> No
                             </label>
                         </div>
                         </div>

                    </div>



                        <div class="row">

                        <div class="form-group col-sm-6">
                            <label>Service Date</label>
                            <input id='service_date' type="text" class="form-control" name="service_date" placeholder="Service Date..." value="{{$asset->service_date}}">
                            @if ($errors->has('service_date'))
                            <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('service_date') }}</div>
                            @endif
                        </div>

                        <div class="form-group col-sm-6">
                            <label>MOT Date</label>
                            <input id='mot_date' type="text" class="form-control" name="mot_date" placeholder="Mot Date..." value="{{$asset->mot_date}}" required>
                            @if ($errors->has('mot_date'))
                            <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('mot_date') }}</div>
                            @endif

                        </div>

                        </div>


                        <div class="form-group">
                            <label>Person Assigned</label>
                            <input type="text" class="form-control"
                            name="staff_name" placeholder="Person Assigned" id="staff_name"  @if ($asset->staff!=null)
                            value="{{$asset->staff->staff_name}}"
                        @endif  required>
                            @if ($errors->has('staff_name'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('staff_name') }}</div>
                        @endif

                        <input type="hidden" name="staff_id" id="staff_id" @if ($asset->staff!=null)
                        value="{{$asset->staff->id}}"
                    @endif/>

                      </div>

                    <div class="form-group">
                        <label>Set Reminder</label>
                        <div class="col-sm-12 px-0">
                           <label class="checkbox-inline">
                            <input type="radio" name="set_reminder" id="inlineCheckbox1" value="1" @if($asset->set_reminder==1){{'checked'}} @endif> Yes
                            </label>

                            <label class="checkbox-inline">
                            <input type="radio" name="set_reminder" id="inlineCheckbox2" value="0" @if($asset->set_reminder==0){{'checked'}} @endif> No
                            </label></div>
                     </div>

                        <div class="form-group">
                            <label>Additional Notes and Details</label>
                            <textarea class="form-control" name="additional_details" rows="3" placeholder="description">{{$asset->additional_details}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Picture upload</label>
                            <input type="file" name="image" accept="image/png, image/jpeg">
                            @if ($asset->image!=null)
                            <img src="{{url('uploads/assetimages')}}/{{$asset->image}}"  width="150" height="150"/>
                            @endif

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
    $('#purchase_date').datepicker({
        format: "dd-mm-yyyy",
      });
        $('#service_date').datepicker({
        format: "dd-mm-yyyy",
      });

      $('#mot_date').datepicker({
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


      return false;
     }
});

});

$("#staff_name" ).autocomplete({
   source: function( request, response ) {

         $.ajax({
         url:"{{url('search-staff')}}",
         type: 'get',

         success: function( data ) {
             console.log(data);
             response(data);
             console.log(response);
         }
     });
     },
      focus: function(event, ui) {
          $("staff_name").val(ui.item.label);
          $('#staff_id').val(ui.item.value);
          return false;
       },
     select: function (event, ui) {
      event.preventDefault();
      $('#staff_name').val(ui.item.label); // display the selected text
      $('#staff_id').val(ui.item.value); // save selected id to input


      return false;
     }
    });






  });

</script>
@endsection

