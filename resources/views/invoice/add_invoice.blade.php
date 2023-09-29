@extends('includes.header')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-money"></i>
       </div>
       <div class="header-title">
          <h1>Add Invoice</h1>
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
                      <a class="btn btn-add" href="{{url('invoice')}}"><i class="fa fa-list"></i> Invoice List </a>
                     </div>
                 </div>
                 <div class="card-body">
                    <form action="{{route('invoice.add')}}" method="post">
                        @csrf

                   <div class="col-sm-12">
                      <div class="row">
                      <div class="form-group col-sm-5">
                         <label>Company Name</label>
                         <select class="form-control" name="company_id" id="company_id">
                            @foreach ($companies as $company)
                               <option value="{{$company->id}}">{{$company->name}}</option>
                           @endforeach

                         </select>
                      </div>
                      <div class="form-group col-sm-5">
                         <label>Type</label>
                         <select class="form-control" name="type_id">
                            @foreach ($invoiceTypes as $type)
                            <option value="{{$type->id}}">{{$type->type_name}}</option>
                            @endforeach

                         </select>
                      </div>
                      </div>
                      <div class="form-group">
                         <label>Reference Name</label>
                         <input type="text" class="form-control" placeholder="Reference Name" name="ref_name" required>
                      </div>
                      <div class="form-group">
                         <label>Job</label>
                         <input type="text" class="form-control" placeholder="Job" name="job"  id="job">
                         <input type="hidden" name="job_id" id="job_id" value=""/>
                      </div>
                       <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" placeholder="Enter Customer Name" name="contact_name" id="contact_name" required>
                        <input type="hidden" name="contact_id" id="contact_id" value=""/>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Phone/Mobile</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="number" class="form-control" placeholder="Enter Phone" name="phone"  id="phone" required>
                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Mobile" name="mobile"  id="mobile"></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Email Id</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="email" class="form-control" placeholder="Enter email" name="email1"  id="email1" required>
                        <input class="col-sm-5"  type="email" class="form-control" placeholder="Enter email" name="email2" id="email2"></div>
                     </div>
                     <div class="form-group">
                        <label>Tags</label>
                        <input type="text" class="form-control" placeholder="Tags" name="tags" >
                     </div>
                     <div class="form-group">
                        <label>To Address</label>
                           <div>
                           <input type="text" name="line1" placeholder="Address" value="" id="line1">
                           <input type="text" name="line2" placeholder="Address 2" value="" id="line2">
                           <input type="text" name="line3" placeholder="Address 3" value="" id="line3">
                           <input type="text" name="country" placeholder="Country " value="United Kingdom" id="country">
                           {{-- <select name="country">
                           <option value="">Select a country..</option></select></div> --}}
                           </div>
                           <div>
                           <input type="text" name="city" placeholder="City" value="" id="city">
                           <input type="text" name="state" placeholder="County/State" value="" id="state">
                           <input type="text" name="zip" placeholder="Postcode/Zip" value="" id="zip">
                           <a href="#" id="postcode_lookup">Find address</a>
                           </div>

                     </div>
                     <div class="form-group" name="">
                        <label>Delivery Address</label>
                           <div>
                           <input type="text" name="delivery_addr_line1" placeholder="Address" value="" id="delivery_addr_line1">
                           <input type="text" name="delivery_addr_line2" placeholder="Address 2" value="" id="delivery_addr_line2">
                           <input type="text" name="delivery_addr_line3" placeholder="Address 3" value="" id="delivery_addr_line3">
                           <input type="text" name="delivery_addr_country" placeholder="Country " value="United Kingdom" id="delivery_addr_country">
                           {{-- <select name="country">
                            <option value="">Select a country..</option></select></div> --}}
                           </div>
                           <div>
                           <input type="text" name="delivery_addr_city" placeholder="City" value="" id="delivery_addr_city">
                           <input type="text" name="delivery_addr_state" placeholder="County/State" value="" id="delivery_addr_state">
                           <input type="text" name="delivery_addr_zip" placeholder="Postcode/Zip" value="" id="delivery_addr_zip">
                           <a href="#" id="postcode_lookup">Find address</a>
                           </div>

                     </div>
                     <div class="form-group">
                        <label>Items</label>
                             <tr>
                                <td>
                                <table class="product_list">
                                    <thead>
                                        <tr class="item item_header">
                                            <td class="sml1">Quantity</td>
                                            <td>Item</td>
                                            <td>Details</td>
                                            <td class="sml">Price</td>
                                            <td class="sml">Per</td>
                                            <td colspan="2" class="sml1">Period</td>
                                            <td class="sml">Total</td>

                                     </tr>
                                    </thead>
                                <tbody>

                              <tr class="item" id="row_1">
                                    <td class="sml1">
                                     <input type="text" class="quantity" name="quantity[]" what="1" value="">
                                     </td>
                                     <td class="stb_pdf">
                                     <input type="text" class="search_type select_material" name="material[]" what="1"  placeholder="Item" value="">
                                     <span class="s_t_b search_type_box_items1" style="display: none;"></span>
                                     </td>
                                    <td>
                                    <textarea name="description[]" placeholder="Item Details" rows="1"></textarea>
                                    </td>
                                    <td class="sml">
                                    <input type="text" class="price" name="price[]" placeholder="Price" what="1" value="">
                                    </td>
                                    <td class="sml">
                                    <select name="priceunit[]" class="change_per" what="1"><option value="Each">Each</option><option value="Ton">Ton</option><option value="Day">Day</option><option value="Week">Week</option><option value="Month">Month</option></select>
                                    </td>
                                    <td class="sml1">
                                    <input type="text" class="chargeperiod" name="duration[]" what="1" value="">
                                    </td>
                                    <td class="sml">
                                        <select name="durationunit[]" class="change_per" what="1"><option value="Each">Each</option><option value="Ton">Ton</option><option value="Day">Day</option><option value="Week">Week</option><option value="Month">Month</option></select>
                                    </td>
                                    <td class="sml">
                                    <input type="text" class="a_total" name="rowTotal[]" placeholder="Total" what="1" readonly="" value="">
                                    </td>
                                    <td class="sml0">
                                    <i class="fa fa-times  deleterow" id="1"></i>
                                    </td>
                                    <input type="hidden" name="materialId[]" value="">

                                </tr>


                            </tbody>
                            </table>

                            <table>
                            <tbody><tr class="item">
                            <td colspan="9">
                            <span class="extra_more addmore"><a href="#" class="btn green_btn"><i class="fa fa-plus"></i> Add Items</a></span>
                            </td>
                            </tr>
                            </tbody></table>
                            </td>
                            </tr>
                    </div>


                      <div class="form-group">
                         <label>Terms & Condition</label>
                         <textarea class="form-control" rows="3" placeholder="description" name="terms_&_conditions" ></textarea>
                      </div>
                      <div class="form-group row mx-0">
                         <label>Discount</label>
                         <div class="col-sm-12 px-0">
                         <input class="col-sm-5" type="number" class="form-control" placeholder="Discount" name="discount" required></div>
                      </div>

                     <div class="form-group" name="total_price">
                        <label>Total Price</label>
                        <td>
                            <select name="price_unit">
                            <option value="EUR">Euro</option>
                            <option value="GBP" selected="">British Pound</option>
                            <option value="USD">United States Dollar</option>
                            </select>
                            <input type="text" name="total_price" class="small1" placeholder="Price"  id="total_price">
                            </td>
                     </div>


                      <div class="form-group">
                        <label>Vat %</label>
                        <input type="nuber" class="form-control" placeholder="VAT %" name="vat">
                     </div>
                     <div class="form-group row mx-0">
                        <label>Vat</label>
                        <div class="col-sm-12 px-0">
                           <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox1" value="1" name="vat"> Yes
                             </label>

                             <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox2" value="0" name="vat"> No
                             </label></div>
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
    var cid;

    $("#company_id").change(function(){
        cid= $("#company_id").val();
    });

    $('#job').on('keyup',function(){

        $("#job" ).autocomplete({
        source: function( request, response ) {

                $.ajax({
                url:"{{url('search-jobs')}}",
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
                $('#job_id').val(ui.item.value);
                return false;
            },
            select: function (event, ui) {
            event.preventDefault();
            $('#job').val(ui.item.label); // display the selected text
            $('#job_id').val(ui.item.value); // save selected id to input
            return false;
            }
        });

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
                        $('#line1').val(contactdata.line1);
                        $('#line2').val(contactdata.line2);
                        $('#line3').val(contactdata.line3);
                        $('#city').val(contactdata.city);
                        $('#state').val(contactdata.state);
                        $('#country').val(contactdata.country);
                        $('#zip').val(contactdata.pincode);
                        $('#phone').val(contactdata.contact_number);
                        $('#mobile').val(contactdata.mobile);
                        $('#email').val(contactdata.email1);
                        $('#email2').val(contactdata.email2);

                    }
                  });

                 return false;
                }
        });

    });

    $(document).on('keyup',".select_material",function(){
       $(".select_material").autocomplete({

              source: function( request, response ) {

                    $.ajax({
                    url:"{{url('search-material')}}",
                    type: 'get',

                    success: function( data ) {
                        console.log(data);
                        response(data);
                        console.log(response);
                    }
                });
                },
                 focus: function(event, ui) {
                     $("select_material").val(ui.item.label);
                     return false;
                  },
                select: function (event, ui) {
                 event.preventDefault();
                 $(this).val(ui.item.label); // display the selected text
                 $(this).closest('tr').find('input[type="hidden"]').val(ui.item.value);
                 var price=$(this).closest('tr').find('td:eq(3)').find('input');
                 var qty=$(this).closest('tr').find('td:eq(0)').find('input').val();
                 var total=$(this).closest('tr').find('td:eq(7)').find('input');
                 var description=$(this).closest('tr').find('td:eq(2)').find('textarea');
                    $.ajax({
                        url:"{{url('get-material-details')}}/"+ui.item.value,
                        type: 'get',

                        success: function( data ) {
                            console.log(data);

                            price.val(data.sale_price);
                            description.val(data.descriptions);
                            total.val(data.sale_price*qty);

                        }
                    });
                  return false;
                }
        });
    });

        $('.addmore').click(function(e){
            e.preventDefault();
            var row='<tr class="item" id="row_1">                                    <td class="sml1">                                     <input type="text" class="quantity" name="quantity[]" what="1" value="">                                     </td>                                     <td class="stb_pdf">                                     <input type="text" class="search_type select_material" name="material[]" what="1"  placeholder="Item" value="" id="select_material">                                     <span class="s_t_b search_type_box_items1" style="display: none;"></span>                                     </td><td>                                    <textarea name="description[]" placeholder="Item Details" rows="1"></textarea>                                    </td><td class="sml">                                    <input type="text" class="price" name="price[]" placeholder="Price" what="1" value="">                                    </td>                                    <td class="sml">                                    <select name="priceunit[]" class="change_per" what="1"><option value="Each">Each</option><option value="Ton">Ton</option><option value="Day">Day</option><option value="Week">Week</option><option value="Month">Month</option></select>                                    </td>                                    <td class="sml1">                                    <input type="text" class="chargeperiod" name="duration[]" what="1" value="">                                    </td>                                    <td class="sml">                                        <select name="durationunit[]" class="change_per" what="1"><option value="Each">Each</option><option value="Ton">Ton</option><option value="Day">Day</option><option value="Week">Week</option><option value="Month">Month</option></select>                                    </td>                                    <td class="sml">                                    <input type="text" class="a_total" name="rowTotal[]" placeholder="Total" what="1" readonly="" value="">                                    </td>                                    <td class="sml0">                                    <i class="fa fa-times deleterow" item_id="" id="1"></i>                                    </td>                                    <input type="hidden" name="materialId[]" value="">    </tr>';
            $('.product_list').append(row);
        });

        $(document).on('click','.deleterow',function(e){
            e.preventDefault();
            $(this).closest("tr").remove();
        });

        $('#total_price').focus(function(){
            var grandTotal=0;
            $(".product_list tbody tr").each(function(){
                grandTotal+= parseFloat($(this).find('td:eq(7)').find('input').val());


            });
            $(this).val(grandTotal);
        });

   });
</script>
@endsection
