<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRM Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="{{url('assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->

      <!-- lobicard tather css -->
      <link rel="stylesheet" href="{{url('assets/plugins/lobipanel/css/tether.min.css')}}" />
      <!-- Bootstrap -->
      <link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
       <!-- lobicard tather css -->
      <link rel="stylesheet" href="{{url('assets/plugins/lobipanel/css/jquery-ui.min.css')}}" />
      <!-- lobicard min css -->
      <link href="{{url('assets/plugins/lobipanel/css/lobicard.min.css')}}" rel="stylesheet" />
      <!-- lobicard github css -->
      <link href="{{url('assets/plugins/lobipanel/css/github.css')}}" rel="stylesheet" />
      <!-- Pace css -->
      <link href="{{url('assets/plugins/pace/flash.css" rel="stylesheet')}}" />
      <!-- Font Awesome -->
      <link href="{{url('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Pe-icon -->
      <link href="{{url('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
      <!-- Themify icons -->
      <link href="{{url('assets/themify-icons/themify-icons.css')}}" rel="stylesheet" />
      <link href="{{url('assets/plugins/datatables/dataTables.min.css')}}" rel="stylesheet" />
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="{{url('assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" />
      <!-- Monthly css -->
      <link href="{{url('assets/plugins/monthly/monthly.css')}}" rel="stylesheet" />
      <!-- End page Label Plugins
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="{{url('assets/dist/css/stylecrm.css')}}" rel="stylesheet" />
      <!-- Theme style rtl -->
      <!--<link href="{{url('assets/dist/css/stylecrm-rtl.css')}}" rel="stylesheet" />-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="{{url('dashboard')}}" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="{{url('assets/dist/img/mini-logo.png')}}" alt="">
               </span>
               <span class="logo-lg">
               <img src="{{url('assets/dist/img/logo.png')}}" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-expand py-0">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                  <button type="button" class="close">×</button>
                  <form>
                     <input type="search" value="" placeholder="Search.." />
                     <button type="submit" class="btn btn-add">Search...</button>
                  </form>
               </div>
               <div class="collapse navbar-collapse navbar-custom-menu" >
                 <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown notifications-menu">
                     <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="pe-7s-bell"></i>
                        <span class="label bg-warning">1</span>
                     </a>
                     <div class="dropdown-menu drop_drops custom_drop_scroll" >
                       <a class="dropdown-item" href="#">
                          <div class="menues">
                              <p>
                              <i class="fa fa-dot-circle-o color-red"></i>
                              Change Your font style</p>
                          </div>
                       </a>

                     </div>
                   </li>
                  <!-- Tasks -->
                   <li class="nav-item dropdown tasks-menu">
                     <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown">
                        <i class="pe-7s-note2"></i>
                        <span class="label bg-danger">5</span>
                     </a>
                     <div class="dropdown-menu drop_dropr custom_drop_scroll" >
                       <a class="dropdown-item" href="#">
                          <div class="menuers">
                              <div class="single_menuers_item">
                                 <h3><i class="fa fa-check-circle"></i> All Won Tasks <span><span class="label label-success float-right">100%</span></span></h3>
                              </div>
                          </div>
                       </a>
                       <a class="dropdown-item" href="#">
                          <div class="menuers">
                              <div class="single_menuers_item">
                                 <h3><i class="fa fa-check-circle"></i> Meeting <span><span class="label label-warning float-right">90%</span></span></h3>
                              </div>
                          </div>
                       </a>
                       <a class="dropdown-item" href="#">
                          <div class="menuers">
                              <div class="single_menuers_item">
                                 <h3><i class="fa fa-check-circle"></i> Quote Visit <span><span class="label label-danger float-right">80%</span></span></h3>
                              </div>
                          </div>
                       </a>
                       <a class="dropdown-item" href="#">
                          <div class="menuers">
                              <div class="single_menuers_item">
                                 <h3><i class="fa fa-check-circle"></i> Follow Up <span><span class="label label-info float-right">30%</span></span></h3>
                              </div>
                          </div>
                       </a>

                       <a class="dropdown-item" href="#">
                          <div class="menuers">
                              <div class="single_menuers_item">
                                 <h3><i class="fa fa-check-circle"></i> Pending<span><span class="label label-info float-right">20%</span></span></h3>
                              </div>
                          </div>
                       </a>
                     </div>
                   </li>
                  <!-- Help -->
                  <li class="nav-item dropdown  dropdown-help">
                     <a class="nav-link hidden_hidden" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="pe-7s-settings"></i></a>

                     <div class="dropdown-menu drop_down">
                        <div class="menus">
                           <a class="dropdown-item" href="#"> <i class="fa fa-user"></i> User Setting</a>
                           <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Genaral Setting</a>
                           <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Add New User</a>
                           <a class="dropdown-item" href="#"><i class="fa fa-user-secret"></i> User Permission</a>
                        </div>
                     </div>
                   </li>
                  <!-- User -->
                   <li class="nav-item dropdown dropdown-user">
                     <a class="nav-link" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="{{url('assets/dist/img/avatar5.png')}}" class="rounded-circle" width="50" height="50" alt="user"></a>

                     <div class="dropdown-menu drop_down">
                          <div class="menus">
                              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> User Profile</a>
                              <a class="dropdown-item" href="#"><i class="fa fa-inbox"></i> Inbox</a>
                              <a class="dropdown-item" href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Signout</a>
                          </div>
                     </div>
                   </li>
                 </ul>
               </div>
             </nav>
            </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="{{url('dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="active">
                     <a href="{{url('enquiries')}}">
                     <i class="fa fa-envelope-o"></i> <span>Enquiry <small class="label float-right bg1-green">0</small></span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="active">
                    <a href="{{url('contacts')}}">
                    <i class="fa fa-envelope-o"></i> <span>Contacts</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
                 </li>

                 <li class="active">
                    <a href="{{url('materials')}}">
                    <i class="fa fa-envelope-o"></i> <span>Material </span>
                    <span class="pull-right-container">
                    </span>
                    </a>
                 </li>




                  {{-- <li class="treeview active">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Customers</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left float-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li class="active"><a href="clist.html">List</a></li>
                        <li><a href="add-customer.html">Add Customer</a></li>
                     </ul>
                  </li> --}}
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>

            <div>
                @yield('content')
             </div>
            <div>
              @include('includes.footer')
            </div>

            @yield ('footer_scripts')
</body>
</html>
