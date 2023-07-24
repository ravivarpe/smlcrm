@extends('includes.header')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-dashboard"></i>
       </div>
       <div class="header-title">
          <h1>The YorkShire Resin Company</h1>
          <small>Vey detailed & featured admin.</small>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class=" col-sm-6 col-md-6 col-lg-3">
             <div id="cardbox1">
                <div class="statistic-box">
                   <i class="fa fa-user-plus fa-3x"></i>
                   <div class="counter-number pull-right">
                      <span class="count-number">11</span>
                      <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                      </span>
                   </div>
                   <h3> All Contacts</h3>
                </div>
             </div>
          </div>
          <div class=" col-sm-6 col-md-6 col-lg-3">
             <div id="cardbox2">
                <div class="statistic-box">
                   <i class="fa fa-user-secret fa-3x"></i>
                   <div class="counter-number pull-right">
                      <span class="count-number">4</span>
                      <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                      </span>
                   </div>
                   <h3> Add Active Job</h3>
                </div>
             </div>
          </div>
          <div class=" col-sm-6 col-md-6 col-lg-3">
             <div id="cardbox3">
                <div class="statistic-box">
                   <i class="fa fa-money fa-3x"></i>
                   <div class="counter-number pull-right">
                      {{-- <i class="ti ti-money"></i> --}}<span class="count-number">£965</span>
                      <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                      </span>
                   </div>
                   <h3> Total Expense </h3>
                </div>
             </div>
          </div>
          <div class=" col-sm-6 col-md-6 col-lg-3">
             <div id="cardbox4">
                <div class="statistic-box">
                   <i class="fa fa-files-o fa-3x"></i>
                   <div class="counter-number pull-right">
                      <span class="count-number">11</span>
                      <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                      </span>
                   </div>
                   <h3> Running Projects</h3>
                </div>
             </div>
          </div>
       </div>
        <div class="row">
          <div class="col-lg-6 pinpin">
              <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                  <div class="card-header">
                      <div class="card-title custom_title">
                         <h4>Upcoming Events</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="work-touchpoint">
                         <div class="work-touchpoint-date">
                            <span class="day">28</span>
                            <span class="month">Apr</span>
                         </div>
                      </div>
                      <div class="detailswork">
                         <span class="label-custom label label-default float-right">Email</span>
                         <a href="#" title="headings">Zoom Call - Martin</a> <br>
                         <p>Notes about the call</p>
                      </div>
                      <div class="work-touchpoint">
                         <div class="work-touchpoint-date">
                            <span class="day">2</span>
                            <span class="month">Apr</span>
                         </div>
                      </div>
                      <div class="detailswork">
                         <span class="label-custom label label-default float-right">skype</span>
                         <a href="#" title="headings">Zoom Call - Martin</a> <br>
                         <p>Notes about the call</p>
                      </div>
                      <div class="work-touchpoint">
                         <div class="work-touchpoint-date2">
                            <span class="day">17</span>
                            <span class="month">Mrc</span>
                         </div>
                      </div>
                      <div class="detailswork">
                         <span class="label-custom label label-default float-right">phone</span>
                         <a href="#" title="headings">Zoom Call - Martin</a> <br>
                         <p>Notes about the call</p>
                      </div>
                      <div class="work-touchpoint">
                         <div class="work-touchpoint-date2">
                            <span class="day">3</span>
                            <span class="month">jan</span>
                         </div>
                      </div>
                      <div class="detailswork">
                         <span class="label-custom label label-default float-right">Mobile</span>
                         <a href="#" title="headings">Zoom Call - Martin</a> <br>
                         <p>Notes about the call</p>
                      </div>
                   </div>
              </div>
          </div>
          <div class="col-lg-6 pinpin">
             <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                 <div class="card-header">
                     <div class="card-title custom_title">
                           <h4>Company Running Projects</h4>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="Workslist">
                        <div class="worklistdate">
                           <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>Company Name</th>
                                    <th>No. of Jobs</th>
                                    <th>Total Value</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="info1">
                                    <td>The Yorkshire Resin Company</td>
                                    <td>25</td>
                                    <td>£189000</td>
                                 </tr>
                                 <tr>
                                    <td>Build a Drive</td>
                                    <td>2</td>
                                    <td>£18900</td>
                                 </tr>
                                 <tr>
                                    <td>Power Clean</td>
                                    <td>10</td>
                                    <td>£9999</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
             </div>
         </div>

          <div class="col-lg-6 pinpin">
              <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                  <div class="card-header">
                      <div class="card-title custom_title">
                            <h4>Upcoming Tasks</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="runnigwork">
                         <span class="label-danger label label-default float-right">Failed</span>
                         <i class="fa fa-dot-circle-o"></i>
                         <a href="#">visiting </a><br>
                         <div class="progress runningprogress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="25%"></div>
                         </div>
                      </div>
                      <div class="runnigwork">
                         <span class="label-warning label label-default float-right">progressing</span>
                         <i class="fa fa-dot-circle-o"></i>
                         <a href="#">Design tool</a><br>
                         <div class="progress runningprogress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="15%"></div>
                         </div>
                      </div>
                      <div class="runnigwork">
                         <span class="label-success label label-default float-right">progressing</span>
                         <i class="fa fa-dot-circle-o"></i>
                         <a href="#">Internet configuration</a><br>
                         <div class="progress runningprogress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="45%"></div>
                         </div>
                      </div>
                      <div class="runnigwork">
                         <span class="label-info label label-default float-right">progressing</span>
                         <i class="fa fa-dot-circle-o"></i>
                         <a href="#">Banner completation</a><br>
                         <div class="progress runningprogress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="75%"></div>
                         </div>
                      </div>
                      <div class="runnigwork">
                         <span class="label-success label label-default float-right">Success</span>
                         <i class="fa fa-dot-circle-o"></i>
                         <a href="#">IT Solution</a><br>
                         <div class="progress runningprogress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="50%"></div>
                         </div>
                      </div>
                   </div>
              </div>
          </div>

          <div class="col-lg-6 pinpin">
             <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                 <div class="card-header">
                     <div class="card-title custom_title">
                           <h4>Live Projects</h4>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="Workslist">
                        <div class="worklistdate">
                           <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>Contact Name</th>
                                    <th>No. of Jobs</th>
                                    <th>Total Value</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="info1">
                                    <td>Martin Garix</td>
                                    <td>25</td>
                                    <td>£189000</td>
                                 </tr>
                                 <tr>
                                    <td>Ricky Martin</td>
                                    <td>2</td>
                                    <td>£18900</td>
                                 </tr>
                                 <tr>
                                    <td>Akon</td>
                                    <td>10</td>
                                    <td>£9999</td>
                                 </tr>
                                 <tr>
                                  <td>Akon</td>
                                  <td>10</td>
                                  <td>£9999</td>
                               </tr>
                               <tr>
                                  <td>Akon</td>
                                  <td>10</td>
                                  <td>£9999</td>
                               </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
             </div>
         </div>

          <div class="col-lg-6 pinpin">
              <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                  <div class="card-header">
                      <div class="card-title custom_title">
                         <h4>Pending Tasks</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="Pendingwork">
                         <span class="label-warning label label-default float-right">progressing</span>
                         <i class="fa fa-ban"></i>
                         <a href="#">Database tools</a>
                         <div class="upworkdate">
                            <p>Jul 25, 2017 for Alimul Alrazy</p>
                         </div>
                      </div>
                      <div class="Pendingwork">
                         <span class="label-success label label-default float-right">success</span>
                         <i class="fa fa-ban"></i>
                         <a href="#">Cabels</a>
                         <div class="upworkdate">
                            <p>Jul 25, 2017 for Alimul</p>
                         </div>
                      </div>
                      <div class="Pendingwork">
                         <span class="label-danger label label-default float-right">Failed</span>
                         <i class="fa fa-ban"></i>
                         <a href="#">Technologycal tools</a>
                         <div class="upworkdate">
                            <p>Feb 25, 2017 for Alrazy</p>
                         </div>
                      </div>
                      <div class="Pendingwork">
                         <span class="label-warning label label-default float-right">progressing</span>
                         <i class="fa fa-ban"></i>
                         <a href="#">Transaction</a>
                         <div class="upworkdate">
                            <p>apr 25, 2017 for Mahfuz</p>
                         </div>
                      </div>
                      <div class="Pendingwork">
                         <span class="label-success label label-default float-right">success</span>
                         <i class="fa fa-ban"></i>
                         <a href="#">Training tools</a>
                         <div class="upworkdate">
                            <p>jun 25, 2017 for Alrazy</p>
                         </div>
                      </div>
                   </div>
              </div>
          </div>
          <div class="col-lg-6 pinpin">
              <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                  <div class="card-header">
                      <div class="card-title custom_title">
                            <h4>Works Deadlines</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="Workslist">
                         <div class="worklistdate">
                            <table class="table table-hover">
                               <thead class="border_border">
                                  <tr>
                                     <th>Task Name</th>
                                     <th>End Deadlines</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr class="info1">
                                     <th scope="row">Alrazy</th>
                                     <td>Feb 25,2017</td>
                                  </tr>
                                  <tr>
                                     <th scope="row">Jahir</th>
                                     <td>jun 05,2017</td>
                                  </tr>
                                  <tr>
                                     <th scope="row">Sayeed</th>
                                     <td>Feb 05,2017</td>
                                  </tr>
                                  <tr>
                                     <th scope="row">Shipon</th>
                                     <td>jun 25,2017</td>
                                  </tr>
                                  <tr>
                                     <th scope="row">Rafi</th>
                                     <td>Jul 15,2017</td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
              </div>
          </div>
          <div class="col-lg-6 pinpin">
              <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                  <div class="card-header">
                      <div class="card-title custom_title">
                            <h4>Won Jobs</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="Workslist">
                         <div class="worklistdate">
                            <table class="table table-hover">
                               <thead>
                                  <tr>
                                     <th>Company Name</th>
                                     <th>No. of Jobs</th>
                                     <th>Total Value</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr class="info1">
                                     <td>The Yorkshire Resin Company</td>
                                     <td>25</td>
                                     <td>£189000</td>
                                  </tr>
                                  <tr>
                                     <td>Build a Drive</td>
                                     <td>2</td>
                                     <td>£18900</td>
                                  </tr>
                                  <tr>
                                     <td>Power Clean</td>
                                     <td>10</td>
                                     <td>£9999</td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
              </div>
          </div>
          <div class="col-lg-6 pinpin">
              <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                  <div class="card-header">
                      <div class="card-title custom_title">
                            <h4>Notice Board</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="Workslist">
                         <div class="worklistdate">
                            <table class="table table-hover">
                               <thead>
                                  <tr>
                                     <th>Notice</th>
                                     <th>Published By</th>
                                     <th>Date Added</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr class="info1">
                                     <td>new notice</td>
                                     <td>Mr. Alrazy</td>
                                     <td>20th April 2017</td>
                                  </tr>
                                  <tr>
                                     <td>Urgent notice</td>
                                     <td>Mr. Alrazy</td>
                                     <td>20th june 2017</td>
                                  </tr>
                                  <tr>
                                     <td>Urgent notice</td>
                                     <td>Mr. Jahir</td>
                                     <td>26th june 2017</td>
                                  </tr>
                                  <tr>
                                     <td>Urgent notice</td>
                                     <td>Mr. leo</td>
                                     <td>3rd june 2017</td>
                                  </tr>
                                  <tr>
                                     <td>Notice</td>
                                     <td>Mr. Karim</td>
                                     <td>3rd July 2017</td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
              </div>
          </div>
      </div>
       <div class="row">
          <!-- Barchart -->
          <div class="col-lg-8  col-md-12 col-sm-12 ">
                <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                    <div class="card-header">
                        <div class="card-title custom_title">
                            <h4>This Year Earnings & Expenses(Bar chart)</h4>
                        </div>
                    </div>
                    <div class="card-body">
                      <canvas id="barChart" height="150"></canvas>
                   </div>
                </div>
            </div>
          <!-- bar chart -->
          <div class="col-lg-4  col-md-12 col-sm-12 ">
                <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                    <div class="card-header">
                        <div class="card-title custom_title">
                            <h4>Weekly Earnings & Expenses</h4>
                        </div>
                    </div>
                    <div class="card-body">
                         <canvas id="singelBarChart" height="323"></canvas>
                      </div>
                </div>
            </div>
       </div>
       <!-- /.row -->
       <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card lobicard"  data-sortable="true">
                      <div class="card-header">
                          <div class="card-title custom_title">
                               <h4>Google Map</h4>
                          </div>
                      </div>
                      <div class="card-body">
                            <div class="google-maps">
                               <iframe src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                            </div>
                         </div>
                  </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                      <div class="card-header">
                          <div class="card-title custom_title">
                               <h4>Calender</h4>
                          </div>
                      </div>
                      <!-- Monthly calender widget -->
                   <div class="panel panel-bd">
                      <div class="card-body">
                         <div class="monthly_calender">
                            <div class="monthly" id="m_calendar"></div>
                         </div>
                      </div>
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
    function dash() {
    // single bar chart
    var ctx = document.getElementById("singelBarChart");
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
    datasets: [
    {
    label: "My First dataset",
    data: [40, 55, 75, 81, 56, 55, 40],
    borderColor: "rgba(0, 150, 136, 0.8)",
    width: "1",
    borderWidth: "0",
    backgroundColor: "rgba(0, 150, 136, 0.8)"
    }
    ]
    },
    options: {
    scales: {
    yAxes: [{
        ticks: {
            beginAtZero: true
        }
    }]
    }
    }
    });
          //monthly calender
          £('#m_calendar').monthly({
            mode: 'event',
            //jsonUrl: 'events.json',
            //dataType: 'json'
            xmlUrl: 'events.xml'
        });

    //bar chart
    var ctx = document.getElementById("barChart");
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
    datasets: [
    {
    label: "My First dataset",
    data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
    borderColor: "rgba(0, 150, 136, 0.8)",
    width: "1",
    borderWidth: "0",
    backgroundColor: "rgba(0, 150, 136, 0.8)"
    },
    {
    label: "My Second dataset",
    data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
    borderColor: "rgba(51, 51, 51, 0.55)",
    width: "1",
    borderWidth: "0",
    backgroundColor: "rgba(51, 51, 51, 0.55)"
    }
    ]
    },
    options: {
    scales: {
    yAxes: [{
        ticks: {
            beginAtZero: true
        }
    }]
    }
    }
    });
        //counter
        £('.count-number').counterUp({
            delay: 10,
            time: 5000
        });
    }
    dash();
   </script>
 @endsection
