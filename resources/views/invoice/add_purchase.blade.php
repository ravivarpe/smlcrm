@extends('includes.header')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-money"></i>
       </div>
       <div class="header-title">
          <h1>Add Purchase</h1>
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
                      <a class="btn btn-add" href="invoicelist.html"><i class="fa fa-list"></i> Purchase List </a>
                     </div>
                 </div>
                 <div class="card-body">
                <form>
                   <div class="col-sm-12">
                      <div class="row">
                      <div class="form-group col-sm-5">
                         <label>Company Name</label>
                         <select class="form-control" name="company_id" >
                            <option>Yorkshire Resin</option>
                            <option>Build Drive</option>
                            <option>Power Clean</option>
                         </select>
                      </div>
                      <div class="form-group col-sm-5">
                         <label>Type</label>
                         <select class="form-control" name="type_id">
                            <option>Invoice</option>
                            <option>Job Pack</option>
                            <option>Purchase</option>
                            <option>Quote</option>
                         </select>
                      </div>
                      </div>
                      <div class="form-group">
                         <label>Reference Name</label>
                         <input type="text" class="form-control" placeholder="Reference Name" name="ref_name" required>
                      </div>
                      <div class="form-group">
                         <label>Job</label>
                         <input type="text" class="form-control" placeholder="Job" name="job" >
                      </div>
                       <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" placeholder="Enter Customer Name" required>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Phone/Mobile</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="number" class="form-control" placeholder="Enter Phone" name="phone" required>
                        <input class="col-sm-5"  type="number" class="form-control" placeholder="Enter Mobile" name="mobile" ></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Email Id</label>
                        <div class="col-sm-12 px-0">
                        <input class="col-sm-5" type="email" class="form-control" placeholder="Enter email" required>
                        <input class="col-sm-5"  type="email" class="form-control" placeholder="Enter email"></div>
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
                     <div class="form-group">
                        <label>Items</label>
                             <tr>
                                <td>
                                <table class="product_list">
                                <tbody>
                                <tr class="item item_header">
                                    <td class="sml1">Quantity</td>
                                    <td>Item</td>
                                    <td>Details</td>
                                    <td class="sml">Price</td>
                                    <td class="sml">Per</td>
                                    <td colspan="2" class="sml1">Period</td>
                                    <td class="sml">Total</td>

                             </tr>
                             <tr class="item" id="row_1">
                                    <td class="sml1">
                                     <input type="text" class="quantity" name="item[1][quantity]" what="1" value="">
                                     </td>
                                     <td class="stb_pdf">
                                     <input type="text" class="search_type" name="item[1][title]" what="1" autocomplete="off" placeholder="Item" value="">
                                     <span class="s_t_b search_type_box_items1" style="display: none;"></span>
                                     </td>
                                    <td>
                                    <textarea name="item[1][description]" placeholder="Item Details" rows="1"></textarea>
                                    </td>
                                    <td class="sml">
                                    <input type="text" class="price" name="item[1][price]" placeholder="Price" what="1" value="">
                                    </td>
                                    <td class="sml">
                                    <select name="item[1][terms]" class="change_per" what="1"><option value="Each">Each</option><option value="Ton">Ton</option><option value="Day">Day</option><option value="Week">Week</option><option value="Month">Month</option></select>
                                    </td>
                                    <td class="sml1">
                                    <input type="text" class="chargeperiod" name="item[1][chargeperiod]" what="1" value="">
                                    </td>
                                    <td class="sml">
                                        <select name="item[1][terms]" class="change_per" what="1"><option value="Each">Each</option><option value="Ton">Ton</option><option value="Day">Day</option><option value="Week">Week</option><option value="Month">Month</option></select>
                                    </td>
                                    <td class="sml">
                                    <input type="text" class="a_total" name="item[1][total]" placeholder="Total" what="1" readonly="" value="">
                                    </td>
                                    <td class="sml0">
                                    <i class="fa fa-times" item_id="" id="1"></i>
                                    </td>
                                    <input type="hidden" name="item[1][id]" value="">
                                    <input type="hidden" name="item[1][product_id]" value="">
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
                        <label>Delivery Instruction</label>
                        <textarea class="form-control" rows="1" placeholder="description" name="delivery_instruction"></textarea>
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
                            <select name="currency">
                            <option value="EUR">Euro</option>
                            <option value="GBP" selected="">British Pound</option>
                            <option value="USD">United States Dollar</option>
                            </select>
                            <input type="text" name="total_value" class="small1" placeholder="Price" >
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
                               <input type="checkbox" id="inlineCheckbox1" value="option1"> Yes
                             </label>

                             <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox2" value="option2"> No
                             </label></div>
                     </div>
                     <div class="form-group row mx-0">
                        <label>Add To Planning Calender</label>
                        <div class="col-sm-12 px-0">
                           <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox1" value="option1" name="add_to_cal" > Yes
                             </label>

                             <label class="checkbox-inline">
                               <input type="checkbox" id="inlineCheckbox2" value="option2" name="add_to_cal"> No
                             </label></div>
                     </div>

                      <div class="reset-button">
                         <a href="#" class="btn btn-warning"> Reset</a>
                         <a href="#" class="btn btn-success"> Save</a>
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
