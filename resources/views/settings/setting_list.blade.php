
@extends('includes.header')

@section('content')

<style>
   .error{
      color:red;
   }
</style>

 <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-gears"></i>
               </div>
               <div class="header-title">
                  <h1>General Settings</h1>
                  <small>General Settings</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-lg-12 pinpin">
                     <div class="card lobicard"  data-sortable="true">
                           <div class="card-header">
                                <div class="card-title custom_title">
                                    <h4>General Settings</h4>
                                </div>
                           </div>
                           <div class="card-body">

                               <!-- Nav tabs -->
                           <div class="col-12 col-sm-12 col-md-12 col-lg-12 m-b-20">
                        <div class=" custom_tabs">
                           <div class="card2-body card_card">
                              <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="enquiry-tab" data-toggle="tab" href="#enquiry" role="tab" aria-controls="enquiry" aria-selected="true">Enquiry</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                     </li>
                                     <li class="nav-item">
                                       <a class="nav-link" id="material-tab" data-toggle="tab" href="#material" role="tab" aria-controls="material" aria-selected="false">Material</a>
                                     </li>
                                     <li class="nav-item">
                                       <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">Finance</a>
                                     </li>
                                     <li class="nav-item">
                                       <a class="nav-link" id="tasks-tab" data-toggle="tab" href="#tasks" role="tab" aria-controls="tasks" aria-selected="true">Tasks</a>
                                     </li>
                                     <li class="nav-item">
                                       <a class="nav-link" id="team-tab" data-toggle="tab" href="#team" role="tab" aria-controls="team" aria-selected="true">Team</a>
                                     </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="calender-tab" data-toggle="tab" href="#calender" role="tab" aria-controls="calender" aria-selected="false">Calender</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#jobs" role="tab" aria-controls="jobs" aria-selected="false">Jobs</a>
                                     </li>

                                     <li class="nav-item">
                                       <a class="nav-link" id="staff-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="false">Staff</a>
                                     </li>
                                     <li class="nav-item">
                                       <a class="nav-link" id="info-tab" data-toggle="tab" href="#cominfo" role="tab" aria-controls="info" aria-selected="false">Company Information</a>
                                     </li>
                                  </ul>
                                  <div class="tab-content custom_tabs2" >
                                 <!--   <p><strong>Lorem Ipsum is simply dummy text of the printing and. </strong></p> -->
                                    {{-- <div class="tab-pane fade show active" id="enquiry" role="tabpanel" aria-labelledby="enquiry-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Enquiry Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                          <tr>
                                          <td><span>Agent</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr><tr>
                                          <td><span>Company</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr>
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addvalue">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div> --}}

                                 <!--contact Category-->
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Category Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                             @foreach($categories as $category)
                                          <tr>
                                          <td>{{$category->name}}</td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm editbtn" data-toggle="modal"
                                             data-target="#editcategory" data-id="{{$category->id}}" ><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm deletebtn" data-toggle="modal"
                                             data-target="#deletecategory" data-id="{{$category->id}}"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr>
                                          @endforeach

                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#contcategory">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>

                                       <!--contSubcat-->
                                          <table class="add_edit_table">
                                             <tbody><tr class="th">
                                             <td><strong>Sub-Category Value</strong></td>
                                             <td></td>
                                             </tr>
                                             </tbody><tbody>
                                              @foreach ($subcategories as $subcategory)

                                             <tr>
                                             <td>{{$subcategory->sub_category_name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm editsubbtn" data-toggle="modal"
                                                data-target="#editsubcategory" data-id="{{$subcategory->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deletesubbtn" data-toggle="modal"
                                                data-target="#deletesubcategory" data-id="{{$subcategory->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach

                                             <tr class="black">
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addsubcategory">Add New Value</button>
                                             </td>
                                             <td>
                                             </td>
                                             </tr>
                                             </tbody>
                                             </table>

                                          <!--contReferaalType-->
                                          <table class="add_edit_table">
                                             <tbody><tr class="th">
                                             <td><strong>Referral Type</strong></td>
                                             <td></td>
                                             </tr>
                                             </tbody><tbody>
                                              @foreach ($referraltypies as $referraltype)

                                             <tr>
                                             <td>{{$referraltype->name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm edittypebtn" data-toggle="modal"
                                                data-target="#editreferraltype" data-id="{{$referraltype->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deletetypebtn" data-toggle="modal"
                                                data-target="#deletereferraltype" data-id="{{$referraltype->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach

                                             <tr class="black">
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addreferraltype">Add New Value</button>
                                             </td>
                                             <td>
                                             </td>
                                             </tr>
                                             </tbody>
                                             </table>
                                    </div>

                                    <!--MaterialCat-->
                                    <div class="tab-pane fade" id="material" role="tabpanel" aria-labelledby="material-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Material Category Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                             @foreach($materialcategories as $materialcategory)
                                             <tr>
                                             <td>{{$materialcategory->name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm editmatbtn" data-toggle="modal"
                                                data-target="#editmaterialcat" data-id="{{$materialcategory->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deletematbtn" data-toggle="modal"
                                                data-target="#deletematerialcat" data-id="{{$materialcategory->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach

                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addmaterialcat">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>

                                          <table class="add_edit_table">
                                            <tbody><tr class="th">
                                            <td><strong>Material Sub Category Value</strong></td>
                                            <td></td>
                                            </tr>
                                            </tbody><tbody>
                                               @foreach($materialSubCats as $materialSubCat)
                                               <tr>
                                               <td>{{$materialSubCat->sub_cat_name}}</td>
                                               <td>
                                                  <button type="button" class="btn btn-add btn-sm editmatsubbtn" data-toggle="modal"
                                                  data-target="#editmaterialsubcat" data-id="{{$materialSubCat->id}}" ><i class="fa fa-pencil"></i></button>
                                                  <button type="button" class="btn btn-danger btn-sm deletematsubbtn" data-toggle="modal"
                                                  data-target="#deletematerialsubcat" data-id="{{$materialSubCat->id}}"><i class="fa fa-trash-o"></i> </button>
                                               </td>
                                               </tr>
                                               @endforeach

                                            <tr class="black">
                                            <td>
                                               <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addmaterialsubcat">Add New Value</button>
                                            </td>
                                            <td>
                                            </td>
                                            </tr>
                                            </tbody>
                                            </table>

                                    </div>

                                    <!--FinanceCat-->
                                    <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Finance Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                             @foreach($invoicecategories as $invoicecategory)
                                             <tr>
                                             <td>{{$invoicecategory->type_name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm editinvbtn" data-toggle="modal"
                                                data-target="#editinvoicecat" data-id="{{$invoicecategory->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deleteinvbtn" data-toggle="modal"
                                                data-target="#deleteinvoicecat" data-id="{{$invoicecategory->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addinvoicecat">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div>

                                    <!--Task-->
                                    {{-- <div class="tab-pane fade" id="tasks" role="tabpanel" aria-labelledby="tasks-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Tasks Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                          <tr>
                                          <td><span>Agent</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr><tr>
                                          <td><span>Company</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr>
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addvalue">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div> --}}

                                    <!--Team-->
                                    {{-- <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Team Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                          <tr>
                                          <td><span>Agent</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr><tr>
                                          <td><span>Company</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr>
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addvalue">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div> --}}

                                    <!--Calender-->
                                    <div class="tab-pane fade" id="calender" role="tabpanel" aria-labelledby="calender-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Calender Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                             @foreach($calendarcategories as $calendarcategory)
                                             <tr>
                                             <td>{{$calendarcategory->name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm editcalbtn" data-toggle="modal"
                                                data-target="#editcalendarcat" data-id="{{$calendarcategory->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deletecalbtn" data-toggle="modal"
                                                data-target="#deletecalendarcat" data-id="{{$calendarcategory->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addcalendar">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div>

                                    <!--Job Category-->
                                    <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Jobs Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                             @foreach($jobcategories as $jobcategory)
                                             <tr>
                                             <td>{{$jobcategory->name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm editjobbtn" data-toggle="modal"
                                                data-target="#editjobcat" data-id="{{$jobcategory->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deletejobbtn" data-toggle="modal"
                                                data-target="#deletejobcat" data-id="{{$jobcategory->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addjobcat">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div>

                                    {{-- <!--Staff-->
                                    <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Staff Value</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                          <tr>
                                          <td><span>Agent</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr><tr>
                                          <td><span>Company</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr>
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addvalue">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div> --}}

                                    <!--CompanyInf-->
                                    <div class="tab-pane fade" id="cominfo" role="tabpanel" aria-labelledby="info-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Company Information</strong></td>
                                          <td></td>
                                          </tr>
                                          </tbody><tbody>
                                             @foreach($campanycategories as $campanycategory)
                                             <tr>
                                             <td>{{$campanycategory->name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm editcompbtn" data-toggle="modal"
                                                data-target="#editcompanycat" data-id="{{$campanycategory->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deletecompbtn" data-toggle="modal"
                                                data-target="#deletecompanycat" data-id="{{$campanycategory->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach
                                          <tr class="black">
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addcompanycat">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div>
                                  </div>
                          </div>
                        </div>
                           </div>
                           </div>
                     </div>

               </div>

               <!-- Add Value -->
               <!-- contact DeleteCat-->
               <div class="modal fade" id="deletecategory" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Contact Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('catcontact.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="category_id" id="category_id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- contact EditCat-->
               <div class="modal fade" id="editcategory" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Contact Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="editForm" method="POST">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Category Name</label>
                                           <input type="text" placeholder="Category Name" class="form-control"
                                          name="name" id="name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- contact AddCat-->
               <div class="modal fade" id="contcategory" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                           Add Contact Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catcontact.add')}}" method="Post" id="addContCat">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Add Category</label>
                                          <input type="text" placeholder="Category Name" class="form-control" name="name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>


               <!-- contact AddSubcat-->
               <div class="modal fade" id="addsubcategory" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                              Add Contact Sub-Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('subcatcontact.add')}}" method="Post" id="addSubCat">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Add category</label>

                                          <select class="custom-select2 form-control" name="category_id" id="category_id"  required>
                                             <option value="">Select Category</option>
                                             @foreach ($categories as $category)
                                               <option value="{{$category->id}}">{{$category->name}}</option>
                                             @endforeach
                                          </select>
                                       </div>

                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Add Sub-Category</label>
                                          <input type="text" placeholder="Sub-Category Name" class="form-control" name="sub_category_name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

                <!-- Contact EditSubcat-->
                <div class="modal fade" id="editsubcategory" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Contact Sub-Category </h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="editSubform" method="POST">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Category</label>

                                          <select class="custom-select2 form-control" name="category_id" id="category_id"  required>
                                             <option value="">Select Category</option>
                                             @foreach ($categories as $category)
                                               <option value="{{$category->id}}">{{$category->name}}</option>
                                             @endforeach
                                          </select>
                                       </div>

                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Sub-Category</label>
                                          <input type="text" placeholder="Sub-Category Name" class="form-control" name="sub_category_name
                                          " id="sub_category_name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Contact DeleteSubcat-->
               <div class="modal fade" id="deletesubcategory" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Contact Sub-Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('subcatcontact.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="sub_category_id" id="sub_category_id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Sub-Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- ReferralType Add-->
               <div class="modal fade" id="addreferraltype" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                              Add Referral Type</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('referraltype.add')}}" method="Post" id="addType">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Add Referral Type</label>
                                          <input type="text" placeholder="Type" class="form-control" name="name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

                <!-- ReferralType Edit-->
                <div class="modal fade" id="editreferraltype" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Contact Sub-Category </h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="edittype" method="POST">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Referral Type</label>
                                          <input type="text" placeholder="Type" class="form-control" name="name" id="typename" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- ReferralType Delete-->
               <div class="modal fade" id="deletereferraltype" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Contact Sub-Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('subcatcontact.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="sub_category_id" id="sub_category_id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Sub-Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>


               <!-- material Addcat-->
               <div class="modal fade" id="addmaterialcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                              Add Material Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catmaterial.add')}}" method="Post" id="addMaterial">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label"> Add Material category</label>
                                          <input type="text" placeholder="Category Name" class="form-control" name="name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- material EditCat-->
               <div class="modal fade" id="editmaterialcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Material Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="editform" method="POST">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Material Category</label>
                                          <input type="text" placeholder="Category Name" class="form-control"
                                          name="name" id="materialname" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- material DeleteCat-->
               <div class="modal fade" id="deletematerialcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Material Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('catmaterial.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="mcategory_id" id="mcategory_id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>


               <!-- finance Addcat-->
               <div class="modal fade" id="addinvoicecat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                              Add Invoice Category </h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catinvoice.add')}}" method="Post" id="addInvoice">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label"> Add Invoice category</label>
                                          <input type="text" placeholder="Category Name" class="form-control" name="type_name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- finance EditCat-->
               <div class="modal fade" id="editinvoicecat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Invoice Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="formedit" method="Post">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Invoice Category </label>
                                          <input type="text" placeholder="Category Name" class="form-control"
                                          name="type_name" id="type_name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- finance DeleteCat-->
               <div class="modal fade" id="deleteinvoicecat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Invoice Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('catinvoice.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="type_id" id="type_id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Job Addcat-->
               <div class="modal fade" id="addjobcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                              Add Job Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catjob.add')}}" method="Post" id="addJob">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label"> Add Job category</label>
                                          <input type="text" placeholder="Category Name" class="form-control" name="name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Job EditCat-->
               <div class="modal fade" id="editjobcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Job Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="Formedit" method="Post">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Job Category </label>
                                          <input type="text" placeholder="Category Name" class="form-control"
                                          name="name" id="jobname" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Job DeleteCat-->
               <div class="modal fade" id="deletejobcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Job Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('catjob.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="job_cat_id" id="job_cat_id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Calendar Addcat-->
               <div class="modal fade" id="addcalendar" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                              Add Calendar Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catcalendar.add')}}" method="Post" id="addCalendar">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label"> Add Calendar category</label>
                                          <input type="text" placeholder="Category Name" class="form-control" name="name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Calendar EditCat-->
               <div class="modal fade" id="editcalendarcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Calendar Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="editcal" method="Post">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Calendar Category </label>
                                          <input type="text" placeholder="Category Name" class="form-control"
                                          name="name" id="calendarname" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Calendar DeleteCat-->
               <div class="modal fade" id="deletecalendarcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Calendar Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('catcalendar.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="calendar_id" id="calendar_id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Company Addcat-->
               <div class="modal fade" id="addcompanycat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>
                              Add Company Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catcompany.add')}}" method="Post" id="addCompany">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label"> Add Company category</label>
                                          <input type="text" placeholder="Category Name" class="form-control" name="name" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Company EditCat-->
               <div class="modal fade" id="editcompanycat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Edit Company Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal"   id="FormEdit" method="Post">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Edit Company Category </label>
                                          <input type="text" placeholder="Category Name" class="form-control"
                                          name="name" id="companyname" required>
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Company DeleteCat-->
               <div class="modal fade" id="deletecompanycat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Company Category</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="{{route('catcompany.delete')}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="id" id="id"/>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12 form-group user-form-group">
                                             <label class="control-label">Delete Category</label>
                                             <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                   <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>


               <!--Material Sub Category -->
                 <!-- Material SubCategory AddSubcat-->
                 <div class="modal fade" id="addmaterialsubcat" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header modal-header-primary">
                             <h3><i class="fa fa-user m-r-5"></i>
                                Add Material Sub-Category</h3>
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                          </div>
                          <div class="modal-body">
                             <div class="row">
                                <div class="col-md-12">
                                   <form  action="{{route('materialSubCat.add')}}" method="Post" id="addSubCat">
                                      @csrf
                                      <div class="row">
                                         <!-- Text input-->
                                         <div class="col-md-12 form-group">
                                            <label class="control-label">Select Material Category</label>

                                            <select class="custom-select2 form-control" name="category_id" id="category_id"  required>
                                               <option value="">Select Material Category</option>
                                               @foreach ($materialcategories as $mcategory)
                                                 <option value="{{$mcategory->id}}">{{$mcategory->name}}</option>
                                               @endforeach
                                            </select>
                                         </div>

                                         <div class="col-md-12 form-group">
                                            <label class="control-label">Material Sub-Category</label>
                                            <input type="text" placeholder="Sub-Category Name" class="form-control" name="sub_cat_name" required>
                                         </div>

                                         <div class="col-md-12 form-group user-form-group">
                                            <div class="float-right">
                                               <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                               <button type="submit" class="btn btn-add btn-sm">Save</button>
                                            </div>
                                         </div>
                                      </div>
                                   </form>
                                </div>
                             </div>
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                          </div>
                       </div>
                       <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                 </div>

                  <!-- Material SubCategory EditSubcat-->
                  <div class="modal fade" id="editmaterialsubcat" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header modal-header-primary">
                             <h3><i class="fa fa-user m-r-5"></i> Edit Material Sub-Category </h3>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                          </div>
                          <div class="modal-body">
                             <div class="row">
                                <div class="col-md-12">
                                   <form class="form-horizontal"   id="editformSubCatmaterial" method="POST">
                                      @csrf
                                      <div class="row">
                                         <!-- Text input-->
                                         <div class="col-md-12 form-group">
                                            <label class="control-label">Select Material Category</label>

                                            <select class="custom-select2 form-control" name="category_id" id="category_id"  required>
                                               <option value="">Select Material Category</option>
                                               @foreach ($materialcategories as $mcategory)
                                                 <option value="{{$mcategory->id}}">{{$mcategory->name}}</option>
                                               @endforeach
                                            </select>
                                         </div>

                                         <div class="col-md-12 form-group">
                                            <label class="control-label">Material Sub-Category</label>
                                            <input type="text" placeholder="Sub-Category Name" class="form-control" name="sub_cat_name"  id="sub_cat_name" required>
                                         </div>

                                         <div class="col-md-12 form-group user-form-group">
                                            <div class="float-right">
                                               <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                               <button type="submit" class="btn btn-add btn-sm">Save</button>
                                            </div>
                                         </div>
                                      </div>
                                   </form>
                                </div>
                             </div>
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                          </div>
                       </div>
                       <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                 </div>

                 <!-- Material SubCategory DeleteSubcat-->
                 <div class="modal fade" id="deletematerialsubcat" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header modal-header-primary">
                             <h3><i class="fa fa-user m-r-5"></i> Delete Material Sub-Category</h3>
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                             <div class="row">
                                <div class="col-md-12">
                                   <form class="form-horizontal" action="{{route('materialSubCat.delete')}}" method="Post">
                                      @csrf
                                      <input type="hidden" name="msubcategory_id" id="msubcategory_id"/>
                                      <fieldset>
                                         <div class="row">
                                            <div class="col-md-12 form-group user-form-group">
                                               <label class="control-label">Delete Material Sub-Category</label>
                                               <div class="float-right">
                                                  <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                     <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                  </div>
                                               </div>
                                         </div>
                                   </form>
                                </div>
                             </div>
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                          </div>
                       </div>
                       <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                 </div>




            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

@endsection

@section('footer_scripts')
<script>
   $(function()
   {
   //ContactCat
      $('.editbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-catcontact')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#editForm').attr('action','{{url("edit-catcontact")}}/'+id);
        $('#name').val(data.name);
    });
    $('#editcategory').modal('show');
});

$('.deletebtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#category_id').attr('value',id);
    $('#deletecategory').modal('show');

    $("#addContCat").validate();
    $("#editForm").validate();

});

 //ContactSub-Cat
 $('.editsubbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-subcatcontact')}}/"+id, function (data) {

        var d=data.id;
        $('#sub_category_name').val(data.sub_category_name);
        $('#editSubform').attr('action','{{url("edit-subcatcontact")}}/'+id);

      $('#category_id').val(data.category_id).trigger('change');


    });
    $('#editsubcategory').modal('show');
});

$('.deletesubbtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#sub_category_id').attr('value',id);
    $('#deletesubcategory').modal('show');

    $("#addSubCat").validate();
    $("#editSubform").validate();

});


//Contact ReferralType
$('.edittypebtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-referraltype')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#edittype').attr('action','{{url("edit-referraltype")}}/'+id);
        $('#typename').val(data.name);
        console.log(data.name)


    });
    $('#editreferraltype').modal('show');
});

$('.deletetypebtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#referral_id').attr('value',id);
    $('#deletereferraltype').modal('show');

    $("#addType").validate();
    $("#edittype").validate();

});

//MaterialCat
$('.editmatbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-catmaterial')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#editform').attr('action','{{url("edit-catmaterial")}}/'+id);
        $('#materialname').val(data.name);
    });
    $('#editmaterialcat').modal('show');
});

$('.deletematbtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#mcategory_id').attr('value',id);
    $('#deletematerialcat').modal('show');

    $("#addMaterial").validate();
    $("#editform").validate();

});

//material sub category


    $('.editmatsubbtn').on('click',function(){
        var id=$(this).attr('data-id');
        $.get("{{url('edit-material-sub-cat')}}/"+id, function (data) {
            console.log(data);
            var d=data.id;
            $('#editformSubCatmaterial').attr('action','{{url("edit-material-sub-cat")}}/'+id);
            $('#sub_cat_name').val(data.sub_cat_name);
        });
        $('#editmaterialsubcat').modal('show');
    });

    $('.deletematsubbtn').on('click',function(){

        var id=$(this).attr('data-id');
        $('#msubcategory_id').attr('value',id);
        $('#deletematerialsubcat').modal('show');

       // $("#addMaterial").validate();
       // $("#editform").validate();

    });


//FinanceCat
$('.editinvbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-catinvoice')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#formedit').attr('action','{{url("edit-catinvoice")}}/'+id);
        $('#type_name').val(data.type_name);
    });
    $('#editinvoicecat').modal('show');
});

$('.deleteinvbtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#type_id').attr('value',id);
    $('#deleteinvoicecat').modal('show');

    $("#addInvoice").validate();
    $("#formedit").validate();

});

//CalendarCat
$('.editcalbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-catcalendar')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#editcal').attr('action','{{url("edit-catcalendar")}}/'+id);
        $('#calendarname').val(data.name);

    });
    $('#editcalendarcat').modal('show');
});

$('.deletecalbtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#calendar_id').attr('value',id);
    $('#deletecalendarcat').modal('show');

    $("#addCalendar").validate();
    $("#editcal").validate();

});

//JobCat
$('.editjobbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-catjob')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#Formedit').attr('action','{{url("edit-catjob")}}/'+id);
        $('#jobname').val(data.name);


    });
    $('#editjobcat').modal('show');
});

$('.deletejobbtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#job_cat_id').attr('value',id);
    $('#deletejobcat').modal('show');

    $("#addJob").validate();
    $("#Formedit").validate();


});

//CompanyCat
$('.editcompbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-catcompany')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#FormEdit').attr('action','{{url("edit-catcompany")}}/'+id);
        $('#companyname').val(data.name);


    });
    $('#editcompanycat').modal('show');
});

$('.deletecompbtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#id').attr('value',id);
    $('#deletecompanycat').modal('show');

    $("#addCompany").validate();
    $("#FormEdit").validate();
});

});
</script>
@endsection

