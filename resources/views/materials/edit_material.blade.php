@extends('includes.header')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-archive"></i>
       </div>
       <div class="header-title">
          <h1>Edit Materials</h1>
          <small>Materials list</small>
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
                      <a class="btn btn-add" href="{{url('materials')}}"><i class="fa fa-list"></i> Materials List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form action="{{route('material.edit', $material->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                   <div class="col-sm-12">
                      <div class="row">
                        <div class="form-group col-sm-4">
                            <label>Material Category</label>
                            <select class="form-control" name="company_id">
                              @foreach ($companies as $company)
                                  <option value="{{$company->id}}" @if ($material->id==$company->id)
                                      {{"selected"}}
                                  @endif>{{$company->name}}</option>
                              @endforeach

                            </select>
                         </div>
                         <div class="form-group col-sm-4">
                            <label>Material Sub Category</label>
                            <select class="form-control" name="mcategory_id" id="mcategory_id">
                               @foreach ($categories as $category)
                                  <option value="{{$category->id}}" @if ($material->id==$category->id)
                                    {{"selected"}}
                                @endif>{{$category->name}}</option>
                              @endforeach
                            </select>
                         </div>
                         <div class="form-group col-sm-4">
                            <label>Material Sub Sub Category</label>
                            <select class="form-control" name="material_sub_cat" id="material_sub_cat">

                            </select>
                         </div>
                      </div>
                      <div class="form-group">
                         <label>Material Name</label>
                         <input type="text" class="form-control" placeholder="Enter Material Name" name="title" value="{{$material->title}}" required>
                         @if ($errors->has('title'))
                         <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('title') }}</div>
                         @endif
                      </div>
                      <div class="form-group">
                         <label>Tags</label>
                         <input type="text" class="form-control" placeholder="Tags" name="tags" value="{{$material->tags}}">
                      </div>
                      <div class="form-group row mx-0">
                        <label>Non-Consumable</label>
                        <div class="col-sm-12 px-0">
                           <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox1" name="non_consumable"  value="1" @if ($material->id==1)
                               {{"checked"}}
                           @endif> Yes
                             </label>

                             <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox2" name="non_consumable" value="2" @if ($material->id==2)
                               {{"checked"}}
                           @endif> No
                             </label></div>
                     </div>
                      <div class="form-group">
                         <label>Material Description</label>
                         <textarea class="form-control" rows="3" placeholder="description" name="descriptions">{{$material->descriptions}}</textarea>
                      </div>
                      <div class="form-group row mx-0">
                         <label>Quantity</label>
                         <div class="col-sm-12 px-0">
                         <input class="col-sm-5" type="number" class="form-control" placeholder="Quantity" name="quantity" value="{{$material->quantity}}" required>  
                         @if ($errors->has('quantity'))
                         <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('quantity') }}</div>
                         @endif
                        </div>
                      </div>

                      <div class="form-group row mx-0">
                        <label>Minimum Quantity</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="number" class="form-control" name="minimum_quntity" placeholder="Minimum Quantity" value="{{$material->minimum_quntity}}" required>  
                        @if ($errors->has('minimum_quntity'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('minimum_quntity') }}</div>
                        @endif
                     </div>
                     </div>

                     <div class="form-group row mx-0">
                        <label>Purchase Price</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="number" class="form-control" name="purchase_price" placeholder="Purchase Price £" value="{{$material->purchase_price}}" required>
                        @if ($errors->has('purchase_price'))
                        <div class="form-control-feedback has-danger" style="color:red;">{{ $errors->first('purchase_price') }}</div>
                        @endif
                     </div>
                     </div>
                     <div class="form-group row mx-0">
                       <label>Sale Price</label>
                       <div class="col-sm-12 px-0">
                       <input class="col-sm-5" type="number" class="form-control" name="sale_price" placeholder="Sale Price £" value="{{$material->sale_price}}" required></div>
                    </div>
                    <div class="form-group row mx-0">
                        <label>Purchase Vat</label>
                        <div class="col-sm-12 px-0">
                           <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox1" value="1" name="purchase_vat" @if ($material->id==1)
                               {{"checked"}}
                           @endif> Yes
                             </label>

                             <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox2" value="0" name="purchase_vat" @if ($material->id==0)
                               {{"checked"}}
                           @endif> No
                             </label></div>
                     </div>



                      <div class="form-group">
                         <label>Contact</label>
                         <input type="text" class="form-control" placeholder="Contact" name="contact" value="{{$material->contact}}">
                      </div>


                      <div class="form-group">
                        <label>Individual</label>
                        <input type="text" class="form-control" placeholder="Individual" name="indivisuals" value="{{$material->indivisuals}}">
                     </div>


                      <div class="form-check">
                         <label>Materials Status</label><br>
                         <label class="radio-inline">
                         <input type="radio" name="material_status" value="1" @if ($material->id==1)
                         {{"checked"}}
                     @endif> Active</label>
                         <label class="radio-inline"><input type="radio" name="material_status" value="0" @if ($material->id==0)
                            {{"checked"}}
                        @endif>Inactive</label>

                      </div>
                      {{-- <div class="form-group">
                         <label>Picture upload</label>
                         <input type="file" name="mpicture">
                         {{-- <input type="hidden" name="old_picture">
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

       $('#mcategory_id').on('change',function(){
           var id=$(this).val();
           $.get("{{url('get-sub-cat')}}/"+id, function (data) {
               console.log(data);

               $('#material_sub_cat').html(data);

           });

       });


   });
</script>
@endsection
