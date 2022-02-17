
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>WorkWise Html Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<?php inc





























































































































lude "server/"?>
<body class="sign-in">
	

	<div class="wrapper">		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						
						<div class="col-lg-6" style="margin:auto">
							<div class="login-sec">
								<ul class="sign-control" style="width:300px; margin-left:20px">
									<li data-tab="tab-1" class="current"><a href="#" title="">تسجيل الدخول</a></li>				
									<li data-tab="tab-2"><a href="#" title="">تسجيل جديد</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>تسجيل الدخول</h3>
									<form action="server/login.php" method="POST">
										<div class="wrong-infos" style="margin-bottom:15px; color:rgb(248, 36, 36); text-decoration:underline; border:1px solid gray; padding:5px;">  
											خطاء في كلمة السر او البريد الالكتروني
										</div>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="email" placeholder="الايميل">
													<i class="fas fa-envelope"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="كلمة المرور">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													
													<a href="forget-password.html" title="">نسيت كلمة المرور ؟</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">تسجيل الدخول</button>
											</div>
										</div>
									</form>
									
								</div><!--sign_in_sec end-->
								<div class="sign_in_sec" id="tab-2">
									
									<div class="dff-tab current" id="tab-3">
										<form action="server/sign_users.php" method="POST">
											<?php include "server/errors.php"?>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="الاسم بالكامل">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="phone" placeholder="رقم الهاتف">
														<i class="fas fa-phone-square-alt"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="email" placeholder="البريد الاكتروني">
														<i class="fas fa-envelope"></i>
													</div>
												</div>
												
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="كلمة المرور">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="اعد كتابة كلمة المرور">
														<i class="la la-lock"></i>
													</div>
												</div>
												
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">تسجيل</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
									
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>