<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>CRM Admin Panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{url('assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <!-- Pe-icon-7-stroke -->
        <link href="{{url('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
        <!-- style css -->
        <link href="{{url('assets/dist/css/stylecrm.css')}}" rel="stylesheet" />

    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="back-link">
                <a href="{{url('/')}}" class="btn btn-add">Back to Dashboard</a>
            </div>
            <div class="container-center row">
            <div class="col-12 col-sm-6 login-left text-center text-white pl-0">
                <img src="{{url('assets/dist/img/logo.png')}}" alt="" >
                <h2>Welcome to <br/>Yorkshire Resin Company LTD</h2>
            </div>
            <div class="login-area col-12 col-sm-6 px-0">
                <div class=" panel-custom">
                    <div class="card-heading custom_head">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post" id="loginForm" novalidate>
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
                                <i class="pe-7s-users"></i>
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div class="login-btn">
                                <button class="btn text-white" type="submit">Login</button>
                            </div>
                            <div class="forget-url text-center">
                                <a class="btn" href="#"><u>Forget Paasword?</u></a>
                            </div>
                            @if (session('error'))

                                <div class="forget-url text-center">
                                    <div class="alert alert-danger">{{session('error')}}</div>
                                </div>
                            @endif
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logocrm">
            <img src="{{url('assets/dist/img/logocrm.jpg')}}" alt="">
        </div>

    </body>
</html>

