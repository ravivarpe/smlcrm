@extends('includes.header')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon"><i class="fa fa-calendar-o"></i></div>
       <div class="header-title">
          <h1>Planning Calender</h1>
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
                   <div class="cal_selects toggle_area" style="overflow-x: scroll;padding:5px;">
                         @foreach ($teams as $team )
                               <a class="btn btn-show" style="background-color: {{$team->colour_code}};color:#fbfbfb;" href="#" data-id={{$team->id}}>  {{$team->team_name}}
                               </a>


                         @endforeach
                   </div>
                   <!-- calender -->
                   <br/>
                   <br/>
                   <br/><br/>
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
                       <button type="button" class="btn btn-add btn-sm" id="addTaskBtn">Save</button>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<script>
    var userId=0;
    var defaultEvents=[];
   // $('#addtask').modal('show');
    $('#addtask').draggable();

      $('#end_date1').datetimepicker({
        format: "d-m-Y H:i",
      });
        $('#start_date1').datetimepicker({
        format: "d-m-Y H:i",
      });

      $('#addTaskBtn').click(function(){
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

      $('.btn-show').click(function(event){
        event.preventDefault();
         var uid=$(this).attr('data-id');
         userId=uid;
         var events = {
             url: "{{url('get-site-visit-event')}}/"+userId,
             type: 'GET'
        }

        // var eventSources = $('#calendar').getEventSources();
        // var len = eventSources.length;
        // for (var i = 0; i < len; i++) {
        //     eventSources[i].remove();
        // }


        $('#calendar').fullCalendar('removeEvents');
       // $('#calendar').fullCalendar('removeEventSource',events);
        $('#calendar').fullCalendar('addEventSource', events);

        //$('#calendar').fullCalendar('refetchEvents');
      });


      $(window).load(function(event){

        defaultEvents = {
             url: "{{url('get-site-visit-event')}}/"+userId,
             type: 'GET'
        }

       // $('#calendar').fullCalendar('removeEventSource', events);
        $('#calendar').fullCalendar('addEventSource', defaultEvents);
        $('#calendar').fullCalendar('refetchEvents');
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
            $('#addtask').draggable();
           },


           drop: function () {
               // is the "remove after drop" checkbox checked?
               if ($('#drop-remove').is(':checked')) {
                   // if so, remove the element from the "Draggable Events" list
                   $(this).remove();
               }
           },
        //    events:"{{url('get-site-visit-event')}}/"+userId,
           eventRender: function( event, element, view ) {
           // console.log(event);
           // console.log(element);

 	        var title = element.find('.fc-content' ).find('.fc-title');
	        console.log(title.html());
            title.html(event.title);
           }
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
