
@extends('includes.header')

@section('content')

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
                                    <div class="tab-pane fade show active" id="enquiry" role="tabpanel" aria-labelledby="enquiry-tab">
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
                                    </div>

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
                                                <!--@foreach($subcategories as $subcategory)
                                             <tr>
                                             <td>{{$subcategory->sub_category_name}}</td>
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm editbtn" data-toggle="modal"
                                                data-target="#editcategory" data-id="{{$subcategory->id}}" ><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm deletebtn" data-toggle="modal"
                                                data-target="#deletecategory" data-id="{{$subcategory->id}}"><i class="fa fa-trash-o"></i> </button>
                                             </td>
                                             </tr>
                                             @endforeach-->
                                            
                                             <tr class="black">
                                             <td>
                                                <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addvalue">Add New Value</button>
                                             </td>
                                             <td>
                                             </td>
                                             </tr>
                                             </tbody>
                                             </table>
                                    </div> 

                                    <!--Material-->
                                    <div class="tab-pane fade" id="material" role="tabpanel" aria-labelledby="material-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Material Value</strong></td>
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
                                    </div>
                                    
                                    <!--Finance-->
                                    <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Finance Value</strong></td>
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
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#addvalue">Add New Value</button>
                                          </td>
                                          <td>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                    </div>


                                    <div class="tab-pane fade" id="tasks" role="tabpanel" aria-labelledby="tasks-tab">
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
                                    </div>

                                    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
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
                                    </div>


                                    <div class="tab-pane fade" id="calender" role="tabpanel" aria-labelledby="calender-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Calender Value</strong></td>
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
                                    </div>

                                    <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Jobs Value</strong></td>
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
                                    </div>

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
                                    </div>

                                    <div class="tab-pane fade" id="cominfo" role="tabpanel" aria-labelledby="info-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Company Information</strong></td>
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
                           <h3><i class="fa fa-user m-r-5"></i> Delete Category</h3>
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
                           <h3><i class="fa fa-user m-r-5"></i> Edit ContCategory</h3>
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
                              Add Contact</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catcontact.add')}}" method="Post">
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
                              Add Contact</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('subcatcontact.add')}}" method="Post">
                                    @csrf
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Add Subcategory</label>
                                          <input type="text" placeholder="Subcategory Name" class="form-control" name="sub_category_nam" required>
                                          <select class="form-control input-sm" id="addsubcategory" name="sub_category_nam">
                                             <option value="Accountant">Accountant</option>
                                             <option value="Aggregates">Aggregates</option>
                                              
                                           </select>
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


               <!-- materila Addcat-->
               <div class="modal fade" id="addmaterialcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>  	
                              Add Contact</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form  action="{{route('catmaterial.add')}}" method="Post">
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
                           <h3><i class="fa fa-user m-r-5"></i> Edit MaterialCategory</h3>
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

               <!-- material DeleteCat-->
               <div class="modal fade" id="deletematerialcat" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Category</h3>
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

});

//MaterialCat
$('.editmatbtn').on('click',function(){
    var id=$(this).attr('data-id');
    $.get("{{url('edit-catmaterial')}}/"+id, function (data) {
        console.log(data);
        var d=data.id;
        $('#editform').attr('action','{{url("edit-catmaterial")}}/'+id);
        $('#name').val(data.name);
        
 
    });
    $('#editmaterialcat').modal('show');
});

$('.deletematbtn').on('click',function(){

    var id=$(this).attr('data-id');
    $('#mcategory_id').attr('value',id);
    $('#deletematerialcat').modal('show');

});




});
    

</script>
@endsection

