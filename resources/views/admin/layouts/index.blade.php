<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard 1 | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{asset('')}}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin_asset/assets\images\favicon.ico">

    <!-- Plugins css-->
    <link href="admin_asset/assets\libs\sweetalert2\sweetalert2.min.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="admin_asset/assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="admin_asset/assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="admin_asset/assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        @include('admin.layouts.header')
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.menu')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        @yield('content')

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, layout, etc.
                </div>
                <div class="mb-2">
                    <img src="admin_asset/assets\images\layouts\light.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="admin_asset/assets\images\layouts\dark.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsstyle="admin_asset/assets/css/bootstrap-dark.min.css" data-appstyle="admin_asset/assets/css/app-dark.min.css">
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                

            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
        <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
    </a>

    <!-- Vendor js -->
    <script src="admin_asset/assets\js\vendor.min.js"></script>

    <script src="admin_asset/assets\libs\moment\moment.min.js"></script>
    <script src="admin_asset/assets\libs\jquery-scrollto\jquery.scrollTo.min.js"></script>
    <script src="admin_asset/assets\libs\sweetalert2\sweetalert2.min.js"></script>

    <!-- Chat app -->
    <script src="admin_asset/assets\js\pages\jquery.chat.js"></script>

    <!-- Todo app -->
    <script src="admin_asset/assets\js\pages\jquery.todo.js"></script>

    <!--Morris Chart-->
    <script src="admin_asset/assets\libs\morris-js\morris.min.js"></script>
    <script src="admin_asset/assets\libs\raphael\raphael.min.js"></script>

    <!-- Sparkline charts -->
    <script src="admin_asset/assets\libs\jquery-sparkline\jquery.sparkline.min.js"></script>

    <!-- Dashboard init JS -->
    <script src="admin_asset/assets\js\pages\dashboard.init.js"></script>

    <!-- App js -->
    <script src="admin_asset/assets\js\app.min.js"></script>

</body>

</html>