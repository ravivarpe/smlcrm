
@extends('includes.header')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
   <section class="content-header">
      <div class="header-img">

         <div class="inbox-customer p-20 border-btm inbox-avatar ">
         <img src="assets/dist/img/avatar5.png" class="border-green " alt="">
      </div>
      </div>
      <div class="header-title">
         <h1>{{$job->job_title}}</h1>
         <small><div class="inbox-date text-left ">
           <div><strong>Created Date :</strong>{{$job->added_date}}</div>
           <div><strong></strong></div>

         </div></small>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="mailbox">
               <div class="mailbox-header">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="inbox-customer">
                           <div class="inbox-customer-text ">
                              <div class="ava2tar-name text-black"></div>
                              <div class="ava2tar-name text-black"></div>
                              <div class="details-ref text-black">Job Stage : <span class="bg-custom badge"><small>{{$job->status_two}}</small></span></div>

                              <div class="details-ref text-black">Ref no. : <span>{{$job->id}}</span></div>
                              <div class="details-ref text-black">Status : <span class="bg-custom badge"><small>{{$job->status}}</small></span></div>

                           </div>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="inbox-toolbar btn-toolbar">
                           <div class="detailsalign">
                            <div class="btn-group d-flex" role="group">
                                <div class="buttonexport">
                                   <a href="#" class="btn btn-add" data-toggle="modal" data-target="#jobStageModel"><i class="fa fa-plus"></i> Chnage Stage</a>
                                </div>
                            </div>
                            <div class="btn-group d-flex" role="group">
                                <div class="buttonexport">
                                   <a href="#" class="btn btn-add" data-toggle="modal" data-target="#callLogModel"><i class="fa fa-phone"></i> Add Call Log</a>
                                </div>
                            </div>
                            {{-- <div class="btn-group d-flex" role="group">
                                <div class="buttonexport">
                                   <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addtask"><i class="fa fa-plus"></i> Add Tasks</a>
                                </div>
                            </div> --}}

                           <div class="btn-group">
                              <a href="{{url('jobs')}}" class="btn btn-default"><span class="fa fa-long-arrow-left"></span></a>
                           </div>

                           <div class="btn-group">
                              <button type="button" class="btn btn-default" onclick="myFunction()"><span class="fa fa-print"></span></button>
                           </div>


                           <div class="btn-group" role="group">
                           <button class="btn btn-sm" data-toggle="dropdown"><i class="fa fa-cog"></i> </button>
                           <ul class="dropdown-menu exp-drop" role="menu">
                              <li>
                                 <a  href="{{route('job.edit',$job->id)}}">Edit Job</a>
                              </li>
                              <li class="dropdown-divider"></li>




                              <li>
                                 <a  href="{{route('job.delete',$job->id)}}">Delete Job</a>
                              </li>
                              <li class="dropdown-divider"></li>

                              <li>
                                 <a href="#" href="">Send Email</a>
                              </li>
                              <li class="dropdown-divider"></li>

                              <li>
                                 <a href="#" href="">Send Text</a>
                              </li>
                              <li class="dropdown-divider"></li>
                           </ul>
                        </div></div>


                        </div>
                     </div>
                  </div>
               </div>
               <div class="mailbox-body">
                  <div class="row m-0">

                     <div class="col-xs-12 col-sm-12 col-md-12 p-0 inbox-mail border-btm">
                        <div class="inbox-mail-details p-20">
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Company Name </strong> </span><span class="col-md-9 text-right">{{$job->company->name}}</span></div>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Job Category</strong> </span><span class="col-md-9 text-right">{{$job->category->name}}</span></div>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Job Name</strong> </span><span class="col-md-9 text-right">{{$job->job_title}}</span></div>


                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Responsible</strong> </span><span class="col-md-9 text-right">{{$job->staff->responsible}}</span></div>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Team</strong> </span><span class="col-md-9 text-right">{{$job->team->team_name}}</span></div>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Job Description </strong> </span><span class="col-md-9 text-right">{{$job->jobdescription}}</span></div>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Job Status </strong> </span><span class="col-md-9 text-right">{{$job->status}}</span></div>
                              <h5>Contact</h5>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Name</strong> </span><span class="col-md-9 text-right">{{$job->contact->name}}</span></div>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Phone</strong> </span><span class="col-md-9 text-right">{{$job->contact->contact_number}}</span></div>
                              <div class="customer-name col-md-12"><span class="det_cust col-md-3 col-sm-3"><strong>Email</strong> </span><span class="col-md-9 text-right">{{$job->contact->email1}}</span></div>

                              <br/><br/>
                              <h5>Lagest Call</h5>

                              <div>
                                   <table>
                                       @foreach ($callLogs as $callLog)
                                        <tr>
                                            <td>
                                                <span >{{date('d/m/Y H:i:s',strtotime($callLog->added_date))}}</span>&nbsp;&nbsp;&nbsp;
                                                <span>@if ($callLog->staff!=null)
                                                    {{$callLog->staff->staff_name}}
                                                @endif</span>&nbsp;&nbsp;&nbsp;
                                                <span >{{$callLog->calllogs}}</span>
                                            </td>
                                        </tr>
                                       @endforeach

                                   </table>
                              </div>

                           </div>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 p-0 inbox-mail border-btm ">
                  <div class="inbox-avatar-text ">
                  <div class="avatar-name"><h3>Information</h3></div>
               </div></div>
               <div class="inbox-mail-details ">
               <div class="mailbox-body">
                  <div class="row m-0 p-20" id="tabs_wrapper">
                     <div id="tabs_container">
                        <ul id="tabs">
                        <li><a href="#tab0" data-toggle="tab" class="active"><i class="fa fa-pencil-square-o"></i></a></li>
                        <li><a href="#tab1" data-toggle="tab"> <i class="fa fa-paperclip"></i> 0</a></li>
                        <li><a href="#tab3" data-toggle="tab"><i class="fa fa-info-circle"></i></a></li>
                        <span>
                        <li><a href="#tab_snagging" data-toggle="tab">Snagging</a></li>
                        <li><a href="#tab_site_visits" data-toggle="tab">Site Visits (1)</a></li>


                        <li><a href="#tab7" data-toggle="tab">Materials </a></li>
                        @foreach ($invoiceTypes as $key=>$invoiceType )
                         <li><a href="#tab{{$key+8}}" data-toggle="tab" data-id="{{$invoiceType->id}}}">{{$invoiceType->type_name}}</a></li>

                        @endforeach


                        </span>

                         <span>

                           <li><a href="#tab13" data-toggle="tab">Task </a></li>
                           </span>
                        </ul>
                     </div>


                     <div id="tabs_content_container" class="tab-content  clearfix">
                        <div id="tab0" class="tab_content active" >
                           <form action="{{route('contact.addNote')}}" method="post">
                               @csrf
                                  <input type="hidden" name="contact_id" value="{{$job->id}}"/>
                                  <textarea class="note_text" resize="vertical" id="the_note" name="notes" placeholder="Add a note about  .." required></textarea>

                                  <button class="normal_button button" id="add_note" item_id="10" type="submit">Add this note</button>
                              </form>
                          <p class="next_to_button">Include in newsfeed? <input type="checkbox" value="yes" checked="" id="in_newsfeed"></p>
                          <ul class="notes">
                             {{-- @foreach ($notesdata as $note)


                             <li class="sent_doc com"><span class="task_cat sent_doc"></span> <i class="fa fa-paper-plane"></i> {{$note->notes}}<span><a href="{{route('contact.delNote',$note->id)}}" class="delete_note" id="43832">delete</a></span></li>
                             @endforeach --}}
                             {{-- <li class="sent_doc com"><span class="task_cat sent_doc">SENT_DOC</span> <i class="fa fa-paper-plane"></i> Sent email with the subject 'Purchase (ref: 2038)' and with The Yorkshire Resin Company Ltd Purchase (2038-898).pdf attached to <a href="mailto:hayden@yorkshireresin.co.uk " target="_blank">hayden@yorkshireresin.co.uk </a> by Hayden Preshaw on Friday, 13th Aug 2021 at 08:05 <span><a href="#" class="delete_note" id="43832">delete</a></span></li>
                             <li class="sent_doc com"><span class="task_cat sent_doc">SENT_DOC</span> <i class="fa fa-paper-plane"></i> Sent email with the subject 'Purchase (ref: 2038)' and with The Yorkshire Resin Company Ltd Purchase (2038-898).pdf attached to <a href="mailto:hayden@yorkshireresin.co.uk " target="_blank">hayden@yorkshireresin.co.uk </a> by Hayden Preshaw on Friday, 13th Aug 2021 at 08:05 <span><a href="#" class="delete_note" id="43832">delete</a></span></li>

                             <li class="sent_doc com"><span class="task_cat sent_doc">SENT_DOC</span> <i class="fa fa-paper-plane"></i> Sent email with the subject 'Invoice (ref: 1)' and with The Yorkshire Resin Company Ltd Invoice (1-2eb).pdf attached to <a href="mailto:tecnibuild@gmail.com" target="_blank">tecnibuild@gmail.com</a> by Hayden Preshaw on Monday, 27th Oct 2014 at 14:37 <span><a href="#" class="delete_note" id="59">delete</a></span></li>--}}
                          </ul></div>

                        <div id="tab1" class="tab_content">
                        <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                        <div class="row fileupload-buttonbar">
                        <div class="span7">
                        <input type="file" name="files[]" multiple="" id="choose_files">
                        </div>
                        </div>
                        <div class="fileupload-loading"></div>
                        <br>
                        <table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
                        <input type="hidden" name="product_id" value="con_10" id="for_upload">
                        </form>
                        <table id="images_here" class="col_cont_large">
                        <tbody><tr>
                        <td colspan="7" class="add">
                        <p>Add files by dragging and dropping them here or <span class="choose_files" onclick="$(&quot;#choose_files&quot;).click();">choose them manually</span>..</p>
                        <a href="change_document?create_id=10&amp;type=contact" class="normal_button button">Create pdf document</a>
                        </td>
                        </tr></tbody></table></div>

                        <div id="tab2" class="tab_content"> </div>
                        <div id="tab3" class="tab_content print_show">

                        <table class="col_cont_large">
                        </table>
                        </div>
                        <div id="tab4" class="tab_content print_show">
                        <h2 class="print_only">People</h2>
                        <table class="col_cont_large">
                        <tbody><tr>
                        <td colspan="5" class="add"><a href="change_individual?company_id=10" class="normal_button button">Add a person</a></td>
                        </tr>
                        </tbody></table>	</div>

                        <div id="tab_site_visits" class="tab_content print_show" >
                        <h2 class="print_only">Site Visits</h2>
                        <table>
                        <tbody><tr>
                        <td colspan="5" class="add"><a href="{{url('get-site-visit')}}/{{$job->id}}" class="normal_button button">Add a site visit</a></td>
                        </tr>
                        </tbody></table>
                        </div>
                        <div id="tab_snagging" class="tab_content print_show" >
                           <h2 class="print_only">Snagging</h2>
                            <table>
                           <tbody><tr>
                           <td colspan="5" class="add"><a href="{{url('create-snagging')}}" class="normal_button button">Add a Snagging</a></td>
                           </tr>
                           @foreach ($snaggings as $snagging)


                            <td class="no_mob" style="max-width:200px;">{{$snagging->title}}</td>
                            <td class="no_mob">@if($snagging->contact!=null){{$snagging->contact->name}}@endif</td>
                            <td class="no_mob">@if($snagging->company!=null){{$snagging->company->name}}@endif</td>
                            <td class="no_mob">@if($snagging->team!=null){{$snagging->team->team_name}}@endif</td>
                            <td class="no_mob">@if($snagging->report_datetime!=null){{date('d/m/Y',strtotime($snagging->report_datetime))}}@endif</td>

                           <td>
                           <a href="#" class="send_email" type="company" id="10" finance_id="8">Send</a> |

                           <a href="{{route('snagging.edit',$snagging->id)}}"><i class="fa fa-pencil-square-o"></i></a> |

                           <a href="{{route('snagging.delete',$snagging->id)}}" class="delete_quick" id="8" type="finances"><i class="fa fa-trash-o"></i></a>
                           </td>
                           </tr>
                           @endforeach
                           </tbody></table>
                           </div>
                        <div id="tab5" class="tab_content print_show" >
                        <h2 class="print_only">Jobs</h2>
                        <table class="col_cont_large">
                        <tbody>
                           <tr>
                           <td colspan="3" class="add"><a href="{{url('create-job')}}" class="normal_button button">Add a job</a></td>
                          </tr>
                        {{-- @foreach ($jobs  as $job )
                           <tr class="Complete">
                               <td>{{$job->id}}</td>
                           <td><a href="#">{{$job->job_title}}</a></td>
                           <td>@if($job->category!=null){{$job->category->name}}@endif</td>
                           <td><span class="task_cat Complete">Complete</span> </td>
                           <td><a href="#">View</a></td>
                           </tr>
                        @endforeach --}}
                        </tbody></table>	</div>
                        <div id="tab7" class="tab_content print_show" >
                        <h2 class="print_only">Materials</h2>
                        <table class="col_cont_large">
                        <tbody><tr>
                        <td colspan="2" class="add">
                        <a class="normal_button button" href="change_product?company_id=10">Add a material</a></td>
                        </tr>
                        </tbody></table>
                        </div>
                        @foreach ($invoiceTypes as $key=>$invoiceType )
                        @php
                        $invoices=\App\Helper\CustomerManager::invoicesByType($invoiceType->id,$job->id);
                        @endphp

                        <div id="tab{{$key+8}}" class="tab_content" ><table class="col_cont_large">
                        <tbody><tr>
                        <td colspan="10" class="add">
                        <a href="{{url('create-invoice')}}/{{$job->id}}/{{$invoiceType->id}}" class="normal_button button">Create {{$invoiceType->type_name}}</a></td>
                        </tr>
                        @foreach ($invoices as $quote)


                        <tr><td>{{$quote->id}}</td>
                        <td class="no_mob">{{$invoiceType->type_name}} </td>
                        <td class="no_mob" style="max-width:200px;">{{$quote->contact->name}},{{$quote->price_unit}} ,{{$quote->total_price}}</td>
                        <td>{{$quote->price_unit}} {{$quote->total_price}}</td>
                        <td>{{$quote->total_price}}</td>
                        <td></td>
                        <td>
                        <a href="#" class="send_email" type="company" id="10" finance_id="8">Send</a> |
                        <a href="{{url('view-invoice-pdf')}}/{{$quote->id}}" target="_blank"><i class="fa fa-eye"></i></a> |
                        <a href="#"><i class="fa fa-pencil-square-o"></i></a> |
                        <a href="{{url('view-jobdetails')}}/{{$quote->id}}">Create Job Pack</a> |
                        <a href="{{url('create-invoice')}}/{{$job->id}}">Create Invoice</a> |
                        <a href="change_finance?copy_id=8"><i class="fa fa-copy"></i></a> |
                        <a href="{{route('invoice.delete',$quote->id)}}" class="delete_quick" id="8" type="finances"><i class="fa fa-trash-o"></i></a>
                        </td>
                        </tr>
                        @endforeach
                        </tbody></table>
                       </div>

                       @endforeach



                        <div id="tab13" class="tab_content" ><table class="col_cont_large">
                           <tbody>
                               {{-- <tr>
                           <td colspan="10" class="add">
                           <a href="#" class="normal_button button">Add to Task</a></td>
                           </tr> --}}
                           {{-- @foreach ( $contasks as $task  )


                           <tr>
                               <td>{{$task->id}}</td>
                               <td>{{$task->task_name}}</td>
                               <td>@if($task->jobcategories!=null){{$task->jobcategories->name}}@endif</td>
                               <td>@if($task->team!=null){{$task->team->team_name}}@endif</td>
                               <td>{{$task->start_date}}</td>
                               <td>{{$task->end_date}}</td>

                               <td>{{$task->discription}}</td>
                           <td>
                           <a href="#" class="send_email" type="company" id="10" finance_id="17743">Send</a> |
                           <a href="#" target="_blank"><i class="fa fa-eye"></i></a> |
                           <a href="#"><i class="fa fa-pencil-square-o"></i></a> |
                           <a href="#"><i class="fa fa-copy"></i></a> |
                           <a href="#" class="delete_quick  deletebtn" type="finances" data-toggle="modal"  data-id="{{$task->id}}"><i class="fa fa-trash-o"></i></a>
                           </td>
                           </tr>
                           @endforeach --}}
                           </tbody></table></div>
                     </div>



                  </div>


                  </div>
               </div>
            </div>
         </div>
      </div>


      <!-- Model to change Job state -->
      <!-- Customer Modal2 -->
      <div class="modal fade" id="jobStageModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header modal-header-primary">
                 <h3><i class="fa fa-user m-r-5"></i> Change Job Stage</h3>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                 <div class="row">
                    <div class="col-md-12">
                       <form class="form-horizontal" method="post" action="{{route('job.stage',$job->id)}}">
                          @csrf

                             <div class="row">
                                   <div class="col-md-12 form-group user-form-group">
                                    <div class="form-check">
                                        <label>Job Stages</label><br>
                                        <label class="radio-inline">
                                        <input type="radio" name="status_two" value="Quoted" checked="checked"> Quoted</label>
                                        <label class="radio-inline"><input type="radio" name="status_two" value="Ground Works" > Ground Works</label>
                                        <label class="radio-inline"><input type="radio" name="status_two" value="Powerclean"> Powerclean</label>
                                        <label class="radio-inline"><input type="radio" name="status" value="Resin Work" > Resin Work</label>
                                        <label class="radio-inline"><input type="radio" name="status" value="Invoiced"> Invoiced</label>
                                     </div>
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
     <!-- /.modal -->

     <!-- /. Model to add Call Log -->
     <!-- Customer Modal2 -->
     <div class="modal fade" id="callLogModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header modal-header-primary">
                 <h3><i class="fa fa-user m-r-5"></i> Add Call Log</h3>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                 <div class="row">
                    <div class="col-md-12">
                       <form class="form-horizontal" method="post" action="{{route('job.callLog',$job->id)}}">
                          @csrf
                          <input type="hidden" name="staff_id" id="staff_id" value="{{auth()->user()->id}}"/>
                             <div class="row">
                                   <div class="col-md-12 form-group user-form-group">

                                    <div class="col-md-12 form-group">
                                        <label class="control-label">User Name</label>
                                        <input type="text" placeholder="user Name" name="staff_name"class="form-control" value="{{auth()->user()->staff_name}}">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Call Log Details</label>
                                        <textarea class="form-control" rows="3" placeholder="Call Logs"  name="calllogs" ></textarea>
                                    </div>


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
     <!-- /.modal -->


       <!-- Customer Modal2 -->
       <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header modal-header-primary">
                    <h3><i class="fa fa-user m-r-5"></i> Delete Tasks</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 </div>
                 <div class="modal-body">
                    <div class="row">
                       <div class="col-md-12">
                          <form class="form-horizontal" method="post" action="{{route('task.delete')}}">
                             @csrf
                             <input type="hidden" name="task_id" id="task_id"/>
                                <div class="row">
                                      <div class="col-md-12 form-group user-form-group">
                                         <label class="control-label">Delete Tasks</label>
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
        <!-- /.modal -->



          <!-- Modal1 -->
    <div class="modal fade" id="addtask" tabindex="-1" role="dialog">
     <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header modal-header-primary">
            <h3><i class="fa fa-plus m-r-5"></i> Add New Task</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
           <form action="{{route('task.add')}}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" name="contact_id" value="{{$job->id}}"/>
               <input type="hidden" name="en_contact" value="Contact"/>
            <div class="row">
               <div class="col-md-12">

                     <div class="row">
                           <!-- Text input-->
                           <div class="col-md-12 form-group">
                              <label class="control-label">Task Name</label>
                              <input type="text" placeholder="Task Name" name="task_name"class="form-control">
                           </div>
                           <div class="col-md-6 form-group">
                              <label class="control-label">When to do it?</label>
                              <input type="text" placeholder="yyyy-mm-dd" id="start_date"  name="start_date" class="form-control">
                           </div>
                           <div class="col-md-6 form-group">
                              <label class="control-label">Add a deadline</label>
                              <input type="text" placeholder="yyyy-mm-dd" id="end_date" name="end_date" class="form-control">
                           </div>
                           <div class="col-md-12 form-group">
                              <label class="control-label">Description</label>
                              <textarea class="form-control" rows="3" placeholder="description"  name="discription" ></textarea>
                           </div>
                           <div class="col-md-6 form-group">
                              <label class="control-label">Responsible to</label>
                              <select class="form-control"  multiple="" name="team_id">
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->team_name}}</option>
                                 @endforeach
                                 {{-- <option>Team A</option>
                                 <option>Team Build Drive</option>
                                 <option>Team Power Clean</option>
                                 <option>Team A</option>
                                 <option>Team A</option> --}}
                              </select>
                           </div>
                           <!-- Text input-->
                           <div class="col-md-6 form-group">
                              <label class="control-label">Job Categories</label>
                              <select class="form-control"  name="job_cat_id">
                               @foreach ($jobcategories as $cat)
                              <option value="{{$cat->id}}">{{$cat->name}}</option>
                               @endforeach
                                 {{-- <option>Meeting</option>
                                 <option>Follow Up</option>
                                 <option>Job Pack</option>
                                 <option>Site Visit</option>
                                 <option>Callback</option> --}}
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
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('footer_scripts')
<script>
   $(document).ready(function(){
       $('#end_date').datepicker({
       format: "yyyy-mm-dd",
     });
       $('#start_date').datepicker({
       format: "yyyy-mm-dd",
     });

     $('.deletebtn').on('click',function(){

       var id=$(this).attr('data-id');
       $('#task_id').attr('value',id);
       $('#customer2').modal('show');

       });

   });
</script>
@endsection
