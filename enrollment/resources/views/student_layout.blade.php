@php
    $student_id=Session::get('student_id');
    $student_info=DB::table('student_tbl')
                 ->where('student_id',$student_id)
                 ->first();
                 
    $messages = \Illuminate\Support\Facades\DB::table('message')->where('email', '=', $student_info->student_email)->get();
@endphp
        <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>student's care</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/node_modules/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="/node_modules/rickshaw/rickshaw.min.css"/>
    <link rel="stylesheet" href="/bower_components/chartist/dist/chartist.min.css"/>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.html"/>
</head>
<body class="sidebar-dark">
<!-- partial:partials/_settings-panel.html -->
<div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab"
               aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
               aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
        </li>
    </ul>
    <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
            <div class="color-tiles">
                <div class="tiles primary" id="primary-theme"></div>
                <div class="tiles success" id="success-theme"></div>
                <div class="tiles warning" id="warning-theme"></div>
                <div class="tiles danger" id="danger-theme"></div>
                <div class="tiles pink" id="pink-theme"></div>
                <div class="tiles info" id="info-theme"></div>
                <div class="tiles dark" id="dark-theme"></div>
                <div class="tiles light" id="light-theme"></div>
            </div>


            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sidebar Mode
                </button>
                <div class="dropdown-menu" aria-labelledby="sidebar-color">
                    <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
                    <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
                </div>
            </div>
            <div class="dropdown d-none d-md-block">
                <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layouts
                </button>
                <div class="dropdown-menu" aria-labelledby="Layouts-type">
                    <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
                    <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
                    <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
                    <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
                    <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
                    <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
                </div>
            </div>
        </div>
        <!-- layout section tabends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span>
                    </div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span>
                    </div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span>
                    </div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span>
                    </div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- chat section tabends -->
    </div>
</div>
<!-- partial -->

<p>
    <?php
    $message = Session::get('message');

    if ($message) {
        echo $message;
        Session::put('message', 'null');
    }
    ?>
</p>


<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">


        <div class="text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="{{URL::to('/studentdashboard')}}"><img src="Diu Reg Admin" 
            alt="Student's Care"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                <span class="navbar-toggler-icon"></span>
            </button>


            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count bg-warning">{{count($notifications)}}</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown notification-drop-down"
                         aria-labelledby="notificationDropdown">

                        @foreach($notifications as $notification)
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                                <span class="notification-text">{{ $notification->notification_content }}</span>
                            </a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-message-outline"></i>
                        <span class="count bg-danger">{{ count($messages) }}</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
                        @foreach($messages as $message)
                            <a class="dropdown-item" href="#">
                                <div class="sender">
                                    <p class="Sende-name">{{ $message->teacher_name }}</p>
                                    <p class="Sender-message">{{ $message->message }}</p>
                                </div>
                            </a>
                        @endforeach
                        <a href="#" class="dropdown-item view-all">View all</a>
                        <a href="{{URL::to('/student_message')}}" class="dropdown-item view-all">Send Message</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <div class="profile">
                         <img src="{{URL::to($student_info->student_image)}}"  style="height: 47px;width: 47px">
                    </div>
                    <div class="details">
                        <p class="user-name">{{$student_info->student_name}}</p>

                    </div>
                </div>
                <ul class="nav">
                    <!--main pages start-->
                    


                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/student_profile')}}">
                            <i class="mdi mdi-puzzle menu-icon"></i>
                            <span class="menu-title">Profile</span>

                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/student_setting')}}">
                            <i class="mdi mdi-puzzle menu-icon"></i>
                            <span class="menu-title">Update Result</span>

                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/addWithTeacher')}}">
                            <i class="mdi mdi-gauge menu-icon"></i>
                            <span class="menu-title">Join With Teacher</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/student_logout')}}">
                            <i class="mdi mdi-gauge menu-icon"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>


                    <!--main pages end-->
                    <!--sample pages start-->


                    <!--forms end-->
                    <!--Apps start-->


                    <!--Apps end-->

                </ul>
            </nav>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="row">


                    @yield('content')

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">prolay</a> &copy; 2017
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="/node_modules/flot/jquery.flot.js"></script>
<script src="/node_modules/flot/jquery.flot.resize.js"></script>
<script src="/node_modules/flot/jquery.flot.categories.js"></script>
<script src="/node_modules/flot/jquery.flot.pie.js"></script>
<script src="/node_modules/rickshaw/vendor/d3.v3.js"></script>
<script src="/node_modules/rickshaw/rickshaw.min.js"></script>
<script src="/bower_components/chartist/dist/chartist.min.js"></script>
<script src="/node_modules/chartist-plugin-legend/chartist-plugin-legend.js"></script>
<script src="/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- End plugin js for this page-->

<script src="/node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="/js/data-table.js"></script>

<!-- inject:js -->
<script src="/js/off-canvas.js"></script>
<script src="/js/hoverable-collapse.js"></script>
<script src="/js/misc.js"></script>
<script src="/js/settings.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/js/dashboard_1.js"></script>
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
