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
                        </div>

                       <div class="form-group col-sm-4">
                            <label>Categories</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}"  @if($asset->category_id==$category->id) {{'selected'}}@endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Sub Categories</label>
                            <select class="form-control" name="subcat_id">
                                @foreach ($subcategories as $sub_cat)
                                <option value="{{$sub_cat->id}}"  @if($asset->subcat_id==$sub_cat->id) {{'selected'}}@endif>{{$sub_cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <label>Asset Type</label>
                            <input type="text" class="form-control"
                            name="asset_type" placeholder="Asset Type" value="{{$asset->asset_type}}">
                        </div>

                        <div class="form-group">
                            <label>Asset Name</label>
                            <input type="text" class="form-control"
                            name="asset_name" placeholder="Asset Name" value="{{$asset->asset_name}}" required>
                        </div>

                        <div class="form-group">
                        <label>Asset value</label>
                        <input type="number" class="form-control"
                        name="asset_value" placeholder="Asset Value £" value="{{$asset->asset_value}}" required>
                        </div>

                        <div class="form-group">
                            <label>Purchase Date</label>
                            <input id='purchase_date' type="text" class="form-control" name="purchase_date" placeholder="Purchase Date..." value="{{$asset->purchase_date}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Assigned Team</label>
                            <select class="form-control" name="team_id">
                            @foreach($teams as $team)
                                <option value="{{$team->id}}" @if($asset->team_id==$team->id){{'selected'}} @endif>{{$team->team_name}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                           <label>Service Required</label>
                        <div class="col-sm-12 px-0">
                            <label class="checkbox-inline"> 
                            <input type="checkbox"
                            name="service_required" id="inlineCheckbox1" value="1" @if($asset->service_required==1){{'checked'}} @endif> Yes
                            </label>
                             
                            <label class="checkbox-inline">
                            <input type="checkbox"
                            name="service_required" id="inlineCheckbox2" value="0" @if($asset->service_required==0){{'checked'}} @endif> No
                            </label>
                        </div>
                        </div>

                        <div class="form-group">
                            <label>Service Date</label>
                            <input id='service_date' type="text" class="form-control" name="service_date" placeholder="Service Date..." value="{{$asset->service_date}}">
                        </div>

                    <div class="form-group">
                        <label>Set Reminder</label>
                        <div class="col-sm-12 px-0">
                           <label class="checkbox-inline"> 
                            <input type="checkbox" name="set_reminder" id="inlineCheckbox1" value="1" @if($asset->set_reminder==1){{'checked'}} @endif> Yes
                            </label>
                             
                            <label class="checkbox-inline">
                            <input type="checkbox" name="set_reminder" id="inlineCheckbox2" value="0" @if($asset->set_reminder==0){{'checked'}} @endif> No
                            </label></div>
                     </div>

                        <div class="form-group">
                            <label>Additional Details</label>
                            <textarea class="form-control" name="additional_details" rows="3" placeholder="description">{{$asset->additional_details}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Picture upload</label>
                            <input type="file" name="image" accept="image/png, image/jpeg">
                            
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
  });

</script>
@endsection

