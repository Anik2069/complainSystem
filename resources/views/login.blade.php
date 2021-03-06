<!DOCTYPE html>
<html lang="en">

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>DIU Complain Panel - Student LogIn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">

				</nav>
			</header>
			<!-- /Header -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/download.png" class="img-fluid" alt="Doccure Login">
                                        <div class="row">


                                        </div>
									</div>
									<div class="col-md-12 col-lg-6 login-right">
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @endif
										<div class="login-header">
											<h3>Login <span>DIU Complain System</span></h3>
										</div>
										<form action="/submitlogin" method="post">@csrf
											<div class="form-group form-focus">
												<input type="email" name="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>
										<!--	<div class="text-right">
												<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
												<a class="forgot-link" href="forgot-password.html">Actice Your Account ?</a>
											</div>
										-->

											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="/forget_stu" class="btn btn-facebook btn-block"> Forget Password</a>
												</div>
												<div class="col-6">
													<a href="/activeAccount" class="btn btn-google btn-block"> Active Account</a>
												</div>
											</div>

										</form>
									</div>
								</div>

							</div>

							<!-- /Login Tab Content -->

						</div>
					</div>
                    <div class="row ">
                        <div class=" col-md-1">
                        </div>
                        <div class=" col-md-5">
                            <h4 style="text-align: center"><u>About This System</u></h4>
                            <ul>
                                <li>Do you have any complains? <br>
                                    Share your complains with us and help us improve your experience with <strong>Daffodil International University</strong>.</li>



                            </ul>
                        </div>
                        <div class=" col-md-5">
                            <h4 style="text-align: center"><u>How to Login</u></h4>
                            <ul>
                                <li>At first Click On <strong>Active Account</strong> Button</li>
                                <li>Then,Provide Your Varsity Mail on that field.</li>
                                <li>A Password will send to your mail</li> <li>With that password Login to the panel</li>
                                <li>For More Query, Contact to Admin</li>


                            </ul>
                        </div>
                    </div>
				</div>

			</div>
			<!-- /Page Content -->

			<!-- Footer -->

			<!-- /Footer -->

		</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
</html>
