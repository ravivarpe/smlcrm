@extends('includes.header')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon"><i class="fa fa-calendar-o"></i></div>
       <div class="header-title">
          <h1>Calender</h1>
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
             <a class="dropdown-item" href="#">Planning Calender</a>
            <a class="dropdown-item" href="#">Calenders</a>
            <a class="dropdown-item" href="#">Site Vists</a>
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
 </div>
 <!-- /.content-wrapper -->

@endsection
@section('footer_scripts')
<script>
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
           droppable: true, // this allows things to be dropped onto the calendar
           drop: function () {
               // is the "remove after drop" checkbox checked?
               if ($('#drop-remove').is(':checked')) {
                   // if so, remove the element from the "Draggable Events" list
                   $(this).remove();
               }
           },
           events:"{{url('get-cal-event')}}"
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
