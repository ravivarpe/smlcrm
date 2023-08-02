
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
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Contact Value</strong></td>
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
                                          <td><span>Customer</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr><tr>
                                          <td><span>Services</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr><tr>
                                          <td><span>Supplier</span> </td>
                                          <td>
                                             <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#editvalue"><i class="fa fa-pencil"></i></button>
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletevalue"><i class="fa fa-trash-o"></i> </button>
                                          </td>
                                          </tr><tr>
                                          <td><span>Trade Resin</span> </td>
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

                                    <div class="tab-pane fade" id="material" role="tabpanel" aria-labelledby="material-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Material Value</strong></td>
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
                                    
                                    <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                                       <table class="add_edit_table">
                                          <tbody><tr class="th">
                                          <td><strong>Finance Value</strong></td>
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

               <div class="modal fade" id="deletevalue" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Value</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                       <div class="row">
                                             <div class="col-md-12 form-group user-form-group">
                                                <label class="control-label">Delete Value</label>
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


               <div class="modal fade" id="editvalue" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i>  	
                              Edit Value</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <div class="row">
                                       <!-- Text input-->
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Value</label>
                                          <input type="text" placeholder="Customer Name" class="form-control">
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

               <div class="modal fade" id="addvalue" tabindex="-1" role="dialog" aria-hidden="true">
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
                                          <input type="text" placeholder="Customer Name" class="form-control">
                                          
                                         
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

             
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
  
@endsection

@section('footer_scripts')
<script>


   
</script>
@endsection

