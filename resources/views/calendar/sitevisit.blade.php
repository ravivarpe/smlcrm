@extends('includes.header')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon"><i class="fa fa-calendar-o"></i></div>
       <div class="header-title">
          <h1>Site Visit Calender</h1>
          <small>Show Events</small>
       </div>
    </section>
    <div class="btn-group">
       <div class="dropdown col">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Company
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @foreach ($companies as $company)
               <a class="dropdown-item" href="#">{{$company->name}}</a>
              @endforeach
          </div>
        </div>
        <div class="dropdown col">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories Type
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach ($calanders as $calander)
            <a class="dropdown-item" href="#">{{$calander->name}}</a>
           @endforeach
          </div>
        </div>


       </div>
    <!-- Main content -->
    <section class="content">
       <div class="row">

          <div class="col-sm-12 col-lg-12 col-md-12">
             <div class="card">
                <div class="card-body">
                   <div class="cal_selects toggle_area" style="display: block;">
                      <select class="formStyle advancedStyle" id="cat">
                      <option value="all">Filter Category..</option>
                      <option value="all">Show All</option>
                      <option value="Bank Holidays">Bank Holidays</option><option value="Call">Call</option><option value="Email">Email</option><option value="Follow Up">Follow Up</option><option value="Install">Install</option><option value="Job Pack Visit">Job Pack Visit</option><option value="Meeting">Meeting</option><option value="Quote Visit">Quote Visit</option> </select>
                      <select class="formStyle advancedStyle" id="assigned">
                      <option value="">Filter Assigned To..</option>
                      <option value="all">Everyone</option>
                      <option value="97">Admin</option><option value="72">Administrator</option><option value="62" selected="">Andrew Firth</option><option value="84">Arron T2</option><option value="89">Ash</option><option value="91">BAD TEAM 1 Tom</option><option value="101">BAD TEAM 2 Declan</option><option value="75">CARL T3</option><option value="81">Chris Hemingway</option><option value="98">Chris Stott</option><option value="67">Craige Hallam</option><option value="100">Go Media</option><option value="78">GRAB (SIMON)</option><option value="96">Grab 2 (Dave)</option><option value="64">Hayden Preshaw</option><option value="90">John Hurst</option><option value="99">Mark Oldroyd</option><option value="95">Matty T6</option><option value="79">Powerclean</option><option value="80">RESIN TEAM T1</option><option value="76">SAM T4</option><option value="77">SCOTT T5</option> </select>
                      </div>
                   <!-- calender -->
                   <br/>
                   <br/>
                   <br/>
                   <div id='calendar'></div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->

     <!-- Modal1 -->
   <div class="modal fade" id="addtask" tabindex="-1" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header modal-header-primary">
             <h3><i class="fa fa-plus m-r-5"></i> Add Site Visit</h3>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <form action="#" method="post" enctype="multipart/form-data" id="addTaskForm">
                @csrf
                <input type="hidden" name="contact_id" value="{{$contactId}}"/>

               <div class="row">
                <div id="tabs_container">
                    <ul id="tabs">
                    <li><a href="#tab0" data-toggle="tab" class="active">Task</a></li>
                    <li><a href="#tab1" data-toggle="tab"> Details</a></li>
                    </ul>
                <div id="" class="tab-content  clearfix">
                    <div id="tab0" class="tab_content active">
                   <div class="col-md-12">

                      <div class="row">


                            <!-- Text input-->
                            <div class="col-md-12 form-group">
                               <label class="control-label">The Task</label>
                               <input type="text" placeholder="Task Name" name="task_name"class="form-control" required>
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">When to do it?</label>
                               <input type="text" placeholder="dd-mm-yyyy"  name="start_date" class="form-control" id="start_date1" required>
                            </div>
                            <div class="col-md-6 form-group">
                               <label class="control-label">Add a deadline</label>
                               <input type="text" placeholder="dd-mm-yyyy"  name="end_date" class="form-control" id="end_date1" required>
                            </div>

                            <div class="col-md-6 form-group">
                               <label class="control-label">Who's Responsible</label>
                               <select class="form-control"  multiple="" name="team_id" required>
                                @foreach ($teams as $team)
                                     <option value="{{$team->id}}">{{$team->staff_name}}</option>
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
                               <label class="control-label"> Choose Categories</label>
                               <select class="form-control"  name="job_cat_id" required>
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

                            </div>
                         </div>
                        </div>
                        <div id="tab1" class="tab_content">
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">Priority</label>
                                        <select class="form-control"  name="priority" required>

                                           <option value="Normal">Normal</option>
                                           <option value="Medium">Medium</option>
                                           <option value="High">High</option>

                                        </select>
                                     </div>

                                     <div class="col-md-6 form-group">
                                        <label class="control-label">Repeatable</label>
                                        <select class="form-control"  name="repeatable" required>

                                           <option value="Not Repeatable">Not Repeatable</option>
                                           <option value="Repeat Daily">Repeat Daily</option>
                                           <option value="Repeat Weeky">Repeat Weekly</option>
                                           <option value="Repeat Monthly">Repeat Monthly</option>
                                           <option value="Repeat Quarterly">Repeat Quarterly</option>
                                           <option value="Repeat Yearly">Repeat Yearly</option>

                                        </select>
                                     </div>

                                     <div class="col-md-12 form-group">
                                        <label class="control-label">Note</label>
                                        <textarea class="form-control" rows="3" placeholder="Note"  name="discription" id="discription" required></textarea>
                                     </div>



                                </div>
                            </div>

                        </div>
                      </div>

                </div>
                <div class="col-md-12 form-group user-form-group">
                    <div class="float-right">
                       <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                       <button type="button" class="btn btn-add btn-sm">Save</button>
                    </div>
                 </div>
               </form>
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


 </div>
 <!-- /.content-wrapper -->

@endsection
@section('footer_scripts')
<script>
    $('#addtask').modal('show');
      $('#end_date1').datetimepicker({
        format: "dd-mm-yyyy",
      });
        $('#start_date1').datetimepicker({
        format: "dd-mm-yyyy",
      });

      $('.btn-add').click(function(){
           $.ajax({
            url:"{{route('sitevisit.TaskAdd')}}",
            type:'POST',
            data:$('#addTaskForm').serialize(),
            success:function(res){
              console.log(res);
             // $('#addtask').modal('hide');
              location.reload();
            }
           });
      });

    function calndr() {
       /* initialize the external events
        -----------------------------------------------------------------*/
         var calndr = $('#external-events .fc-event');

         $(calndr).each(function () {
           // store data so the calendar knows to render an event upon drop
           $(this).data('event', {
               title: $.trim($(this).text()), // use the element's text as the event title
               stick: true // maintain when user navigates (see docs on the renderEvent method)
           });

           // make the event draggable using jQuery UI
           $(this).draggable({
               zIndex: 999,
               revert: true, // will cause the event to go back to its
               revertDuration: 0  //  original position after the drag
           });

       });

       /* initialize the calendar
        -----------------------------------------------------------------*/
        var calender = $('#calendar');
       $(calender).fullCalendar({
           header: {
               left: 'prev,next today',
               center: 'title',
               right: 'month,agendaWeek,agendaDay,listMonth'
           },
          // defaultDate: '2023-12-12',
           navLinks: true, // can click day/week names to navigate views
           businessHours: true, // display business hours
           editable: true,
           clickable: true,
           selectable: true,
           droppable: true, // this allows things to be dropped onto the calendar
           select:function(res){
            console.log(res.startStr);
            $('#addtask').modal('show');
           },


           drop: function () {
               // is the "remove after drop" checkbox checked?
               if ($('#drop-remove').is(':checked')) {
                   // if so, remove the element from the "Draggable Events" list
                   $(this).remove();
               }
           },
           events:"{{url('get-site-visit-event')}}"
        //    events: [
        //        {
        //            title: 'Business Lunch',
        //            start: '2016-12-03T13:00:00',
        //            constraint: 'businessHours'
        //        },
        //        {
        //            title: 'Meeting',
        //            start: '2016-12-13T11:00:00',
        //            constraint: 'availableForMeeting', // defined below
        //            color: '#009688'
        //        },
        //        {
        //            title: 'Conference',
        //            start: '2016-12-18',
        //            end: '2016-12-20'
        //        },
        //        {
        //            title: 'Party',
        //            start: '2016-12-29T20:00:00'
        //        },
        //        // areas where "Meeting" must be dropped
        //        {
        //            id: 'availableForMeeting',
        //            start: '2016-12-11T10:00:00',
        //            end: '2016-12-11T16:00:00',
        //            rendering: 'background'
        //        },
        //        {
        //            id: 'availableForMeeting',
        //            start: '2016-12-13T10:00:00',
        //            end: '2016-12-13T16:00:00',
        //            rendering: 'background'
        //        },
        //        // red areas where no events can be dropped
        //        {
        //            start: '2016-12-24',
        //            end: '2016-12-28',
        //            overlap: false,
        //            rendering: 'background',
        //            color: '#ff9f89'
        //        },
        //        {
        //            start: '2016-12-06',
        //            end: '2016-12-08',
        //            overlap: false,
        //            rendering: 'background',
        //            color: '#ff9f89'
        //        }
        //    ]
       });
       }
       calndr();
    </script>

    @endsection
