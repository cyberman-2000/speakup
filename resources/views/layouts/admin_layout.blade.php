<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('adminaka/images/favicon.png')}}">--}}
    <!-- Pignose Calender -->
    <link href="{{asset('adminaka/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('adminaka/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminaka/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.cs')}}s">
    <!-- Custom Stylesheet -->
    <link href="{{asset('adminaka/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('adminaka/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="{{asset('adminaka/plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="{{asset('adminaka/plugins/jquery-asColorPicker-master/css/asColorPicker.css')}}" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="{{asset('adminaka/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="{{asset('adminaka/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminaka/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminaka/css/select.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="{{route('admin_home')}}">
                <b class="logo-abbr"><img src="{{asset('adminaka/images/LogoSpeakUpDD.png')}}" alt=""> </b>
                <span class="logo-compact"><img src="{{asset('adminaka/images/LogoSpeakUpDD.png')}}" alt=""></span>
                <span class="brand-title">
                        <img class="pb-2" src="{{asset('adminaka/images/LogoSpeakUpWD.png')}}" width="150px" height="50px" alt="">
                    </span>
            </a>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content clearfix">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                    <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="badge badge-pill gradient-1">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu">
                            <div class="dropdown-content-heading d-flex justify-content-between">
                                <span class="">3 New Messages</span>
                                <a href="javascript:void()" class="d-inline-block">
                                    <span class="badge badge-pill gradient-1">3</span>
                                </a>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="{{asset('adminaka/images/avatar/1.jpg')}}" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Saiful Islam</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="{{asset('adminaka/images/avatar/2.jpg')}}" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Adam Smith</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Can you do me a favour?</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="{{asset('adminaka/images/avatar/3.jpg')}}" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Barak Obama</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="{{asset('adminaka/images/avatar/4.jpg')}}" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Hilari Clinton</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hello</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge badge-pill gradient-2">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                            <div class="dropdown-content-heading d-flex justify-content-between">
                                <span class="">2 New Notifications</span>
                                <a href="javascript:void()" class="d-inline-block">
                                    <span class="badge badge-pill gradient-2">5</span>
                                </a>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Events near you</h6>
                                                <span class="notification-text">Within next 5 days</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Event Started</h6>
                                                <span class="notification-text">One hour ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Event Ended Successfully</h6>
                                                <span class="notification-text">One hour ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Events to Join</h6>
                                                <span class="notification-text">After two days</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{asset('adminaka/images/user/1.png')}}" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger"><i class="icon-key"></i> <span>Logout</span></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a class="" href="{{route('pochta.index')}}" aria-expanded="false">
                        <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{route('teachers.index')}}" aria-expanded="false">
                        <i class="icon-user menu-icon"></i><span class="nav-text">Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('courses.index')}}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('news.index')}}" aria-expanded="false">
                        <i class="mdi mdi-bullhorn menu-icon"></i><span class="nav-text">News List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('social.index')}}" aria-expanded="false">
                        <i class="fa fa-globe color-muted m-r-5"></i><span class="nav-text">Social Media</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
            @yield('admin_content')

        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

<script src="{{asset('adminaka/dashboard/app.js')}}"></script>
<script src="{{asset('adminaka/plugins/common/common.min.js')}}"></script>
<script src="{{asset('adminaka/js/custom.min.js')}}"></script>
<script src="{{asset('adminaka/js/settings.js')}}"></script>
<script src="{{asset('adminaka/js/gleek.js')}}"></script>
<script src="{{asset('adminaka/js/styleSwitcher.js')}}"></script>

<script src="{{asset('adminaka/plugins/moment/moment.js')}}"></script>
<script src="{{asset('adminaka/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<!-- Clock Plugin JavaScript -->
<script src="{{asset('adminaka/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="{{asset('adminaka/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
<script src="{{asset('adminaka/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
<script src="{{asset('adminaka/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="{{asset('adminaka/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- Date range Plugin JavaScript -->
<script src="{{asset('adminaka/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('adminaka/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('adminaka/js/plugins-init/form-pickers-init.js')}}"></script>



<script src="{{asset('adminaka/js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>
