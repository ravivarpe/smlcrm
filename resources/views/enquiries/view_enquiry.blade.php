@extends('includes.header')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-envelope-o"></i>
       </div>
       <div class="header-title">
          <h1>Enquiry Details</h1><span class="bg-custom badge"><small>{{$enquiry->status}}</small></span>
          <small><div class="inbox-date text-right ">
             <div><strong>Date :</strong>{{date('M d Y, h:i A',strtotime($enquiry->added_date))}}</div>
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
                               <div class="ava2tar-name text-black">{{ucfirst($enquiry->name)}}</div>
                               <div class="details-ref text-black">Ref no. : <span>{{$enquiry->id}}</span></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-8">
                         <div class="inbox-toolbar btn-toolbar">
                            <div class="detailsalign">
                            <div class="btn-group">
                               <a href="{{url('enquiries')}}" class="btn btn-default"><span class="fa fa-long-arrow-left"></span></a>
                            </div>

                            <div class="btn-group">
                               <button type="button" class="btn btn-default printbtn" ><span class="fa fa-print"></span></button>
                            </div>

                            <div class="btn-group d-flex" role="group">
                               <div class="buttonexport">
                                  <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addtask"><i class="fa fa-plus"></i> Add Tasks</a>
                               </div>
                            </div>
                            <div class="btn-group" role="group">
                            <button class="btn btn-sm" data-toggle="dropdown"><i class="fa fa-bars"></i> </button>
                            <ul class="dropdown-menu exp-drop" role="menu">

                               <li class="dropdown-divider"></li>
                               <li>
                                  <a href="{{route('enquiries.addcontact',$enquiry->id)}}" > Add to Contact</a>
                               </li>

                               <li class="dropdown-divider"></li>

                               <li>
                                  <a href="{{route('enquiries.delete',$enquiry->id)}}"> Delete</a>
                               </li>
                            </ul>
                         </div></div>


                         </div>
                      </div>
                   </div>
                </div>
                <div class="mailbox-body" >
                   <div class="row m-0" id="printablearea">

                      <div class="col-xs-12 col-sm-12 col-md-12 p-0 inbox-mail">
                         <div class="inbox-customer p-20 border-btm">
                           <!-- <img src="assets/dist/img/avatar5.png" class="border-green " alt=""> -->
                            <div class="inbox-customer-text">
                                <div class="customer-name">Ref no. : <span>{{$enquiry->id}}</span></div>
                                <div class="customer-name"><strong>Customer Name :</strong> <span>{{$enquiry->name}}</span></div>
                               <div class="customer-name"><strong>Enquiry Description :</strong> <small>{{$enquiry->enquiry_form}}</small></div>
                            </div>

                         </div>
                         <div class="inbox-mail-details p-20">
                            <div class="col-md-12 details-cust"><strong>Email : </strong><span class="det_cust">{{$enquiry->email}}</span> </div>
                            <div class="col-md-12 details-cust"><strong>Mobile/Phone : </strong><span class="det_cust"class="">{{$enquiry->phone}}</span> </div>
                            <div class="col-md-12 details-cust"><strong>Post Code : </strong><span class="det_cust">{{$enquiry->post_code}}</span> </div>
                         </div>
                      </div>
                   </div>
                   <div class="in
                   <div class="inbox-mail-details">

               <div class="mailbox-body">

                  <div class="row m-0 p-20" id="tabs_wrapper">
                     <div id="tabs_container">
                        <ul id="tabs">
                        <li class="active"><a href="#tab0" data-toggle="tab" class="active"><i class="fa fa-pencil-square-o"></i></a></li>
                        <li><a href="#tab1" data-toggle="tab"> <i class="fa fa-paperclip"></i> 0</a></li>
                        <li><a href="#tab3" data-toggle="tab"><i class="fa fa-info-circle"></i></a></li>
                        <span>

                        {{-- <li><a href="#tab11" data-toggle="tab">Task </a></li> --}}
                        </span>
                        </ul>
                     </div>


                     <div id="tabs_content_container" class="tab-content  clearfix">
                        <div id="tab0" class="tab_content active" >
                            <form action="{{route('enquiries.addNote')}}" method="post">
                             @csrf
                                <input type="hidden" name="enquiry_id" value="{{$enquiry->id}}"/>
                                <textarea class="note_text" resize="vertical" id="the_note" name="notes" placeholder="Add a note here" required></textarea>

                                <button class="normal_button button" id="add_note" item_id="10" type="submit">Add this note</button>
                            </form>
                        <p class="next_to_button">Include in newsfeed? <input type="checkbox" value="yes" checked="" id="in_newsfeed"></p>
                        <ul class="notes">
                           @foreach ($notesdata as $note)


                           <li class="sent_doc com"><span class="task_cat sent_doc"></span> <i class="fa fa-paper-plane"></i> {{$note->notes}}<span><a href="{{route('enquiries.deleNote',$note->id)}}" class="delete_note" id="43832">delete</a></span></li>
                           @endforeach
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



                        <div id="tab11" class="tab_content" ><table class="col_cont_large">
                        <tbody>
                            {{-- <tr>
                        <td colspan="10" class="add">
                        <a href="#" class="normal_button button">Add to Task</a></td>
                        </tr> --}}
                        @foreach ( $entasks as $task  )


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
                        @endforeach
                        </tbody></table></div>

                     </div>



                  </div>


                  </div>
               </div>

               </div>
            </div>
         </div>
      </div>

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
                <input type="hidden" name="contact_id" value="{{$enquiry->id}}"/>
                <input type="hidden" name="en_contact" value="Enquiry"/>
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
                               <input type="text" placeholder="dd-mm-yyyy" id="start_date"  name="start_date" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Add a deadline</label>
                               <input type="text" placeholder="dd-mm-yyyy" id="end_date" name="end_date" class="form-control">
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
        format: "dd-mm-yyyy",
      });
        $('#start_date').datepicker({
        format: "dd-mm-yyyy",
      });

      $('.deletebtn').on('click',function(){

        var id=$(this).attr('data-id');
        $('#task_id').attr('value',id);
        $('#customer2').modal('show');

     });


     $('.printbtn').click(function(){
        $('#printablearea').print();
     });



    });
 </script>
 @endsection
