<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DIU Complai System - Details</title>

    <link rel="shortcut icon" type="image/x-icon" href="../assets/assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../assets/assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="../assets/assets/css/feathericon.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="../assets/assets/plugins/datatables/datatables.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/assets/css/style.css">


    <script src="../assets/assets/js/html5shiv.min.js"></script>
    <script src="../assets/assets/js/respond.min.js"></script>

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="../assets/assets/img/logo.png" alt="Logo">
            </a>
            <a href="index.html" class="logo logo-small">
                <img src="../assets/assets/img/logo-small.png" alt="Logo" width="30" height="30">
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
@include("admin.nav")
<!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->

            <!-- /Page Header -->

            <div class="row" id="printableArea">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">

                            <div class="col ml-md-n2 profile-user-info">
                                <h4>Student Details</h4>
                                <h5 class="user-name mb-0">Name: {{$value1['name']}}</h5>
                                <h6 class="text-muted"> {{$value1['email']}}</h6>
                                <div class="user-Location"><i class="fa fa-map-marker"></i> {{$value1['address']}}</div>

                                <br><br>
                                <br>
                                <p><strong>Subject:</strong>{{$value['title']}}</p>

                                <br><br>

                                <h5>Application Status: Served</h5>

                                <br><br>

                                <p>Complain:{{$value['description']}} </p>

                                <br><br>
                                <p>Status: {{$value['status']}}</p>

                                @if($value['status']=="Pending")

                                <a class="btn btn-warning" href="/process/{{$value['id']}}">Processing
                                </a>
                                <a class="btn btn-danger" href="/done/{{$value['id']}}">Done
                                </a>
                                    @elseif($value['status']=="Processing")
                                    <button class="btn btn-warning" disabled>Processing
                                    </button>
                                    <a class="btn btn-danger" href="/done/{{$value['id']}}">Done
                                    </a>
                                @elseif($value['status']=="Done")
                                    <button class="btn btn-warning" disabled >Processing
                                    </button>
                                    <button class="btn btn-danger" disabled >Done
                                    </button>
                                @endif
                                <br>  <br>
                                <button class="btn btn-primary" onclick="printDiv('printableArea')">Print</button>
                            </div>

                        </div>

                    </div>

                    <div class="tab-content profile-tab-cont">

                        <!-- Personal Details Tab -->
                        <div class="tab-pane fade show active" id="per_details_tab">

                            <!-- Personal Details -->

                            <!-- /Personal Details -->

                        </div>
                        <!-- /Personal Details Tab -->

                        <!-- Change Password Tab -->
                        <div id="password_tab" class="tab-pane fade">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Change Password Tab -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
<!-- jQuery -->
<script src="assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>
