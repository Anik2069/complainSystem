<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-basic-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DIU Complain System - Complains </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/assets/css/feathericon.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="assets/assets/js/html5shiv.min.js"></script>
    <script src="assets/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="assets/assets/img/logo.png" alt="Logo">
            </a>
            <a href="index.html" class="logo logo-small">
                <img src="assets/assets/img/logo-small.png" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->

        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
@include("student.nav")
<!-- /Sidebar -->


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Write Your Complain</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Write Your Complain</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <form action="/submit_complain" method="post">@csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Listed Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Type of Complain</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="type">
                                            <option>-- Select --</option>
                                            @foreach($value as $val)
                                            <option value="{{$val["name"]}}">{{$val["name"]}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Semester</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="sname">
                                            <option>-- Select --</option>
                                            <option value="summer_2020">Summer 2020</option>
                                            <option value="sprint_2020">Spring 2020</option>
                                            <option value="fall_2019">Fall 2019</option>
                                            <option value="summer_2019">Summer 2019</option>
                                            <option value="sprint_2019">Spring 2019</option>
                                            <option value="fall_2018">Fall 2018</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Complain Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Description</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control"
                                               name="des"  placeholder="Enter text here"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2"> </label>
                                    <div class="col-md-10">
                                        <input class="form-control btn btn-primary" type="submit">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/assets/js/popper.min.js"></script>
<script src="assets/assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom JS -->
<script src="assets/assets/js/script.js"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-basic-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:54 GMT -->
</html>
