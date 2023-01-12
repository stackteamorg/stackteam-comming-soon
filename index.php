<?php include 'notify.php' ?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="سکوی ابری, پلتفورم ابری, Platform as a Service, سرویس ابری PaaS,سرویس ابری DBaaS">
		<meta name="description" content="پسیفای یک اپلیکیشن خدمات ابری پیشرفته است که با ایجاد زیرساخت کوبرنتیز و داکر سرویس سکوی ابری یا PaaS ارائه میدهد">
      	<meta property="og:site_name" content="PaaSify.ir">
      	<meta property="og:url" content="https://paasify.ir/">
      	<meta property="og:type" content="website">
      	<meta property="og:title" content="PaaSify: ارائه دهنده خدمات Platform as a Service">
		<meta name='og:image' content='images/assets/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#fd6a5e">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#fd6a5e">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#fd6a5e">
		<title>PaaSify: ارائه دهنده خدمات Platform as a Service</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<!-- yekan font style sheet -->
		<link rel="stylesheet" type="text/css" href="css/yekan-font.css">
		<!-- rtl font style sheet -->
		<link rel="stylesheet" type="text/css" href="css/rtl.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body style="direction: rtl;">
		<div class="h-100">

			<div class="full-height-layout d-flex align-items-center">
				<div class="coming-soon-content font-gordita">
					<h6>به زودی..</h6>
					<h1>سکوی ابری پسیفای</h1>
					<div class="row">
						<div class="col-lg-9 m-auto">
							<p>پسیفای یک اپلیکیشن خدمات ابری پیشرفته است که با ایجاد زیرساخت کوبرنتیز و داکر سرویس سکوی ابری یا PaaS ارائه میدهد</p>
						</div>
					</div>
					<form action="#" method="post" style="direction: ltr">
						<input type="text" name="notify" placeholder="09120186223">
						<button>به من اطلاع بده</button>
					</form>
					<div class="col-lg-9 m-auto notifme-text">
						<?php if (is_null($alert)) { ?>
						<p>شماره موبایل یا ایمیل خود را وارد کنید، ما به محض راه اندازی سرویس با ارسال یک کد تخفیف <code> 2 میلیون ریالی</code> به شما اطلاع رسانی خواهیم کرد</p>
						<?php } else { ?>
						<p><?php echo ($alert) ?></p>
						<?php } ?>
					</div>

					<ul class="social-icon d-flex justify-content-center">
						<li><a href="coming-soon-v1.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="coming-soon-v1.html#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="coming-soon-v1.html#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="coming-soon-v1.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>

					<img src="images/shape/179.svg" alt="" class="shapes shape-one">
					<img src="images/shape/180.svg" alt="" class="shapes shape-two">
					<img src="images/shape/181.svg" alt="" class="shapes shape-three">
					<img src="images/shape/182.svg" alt="" class="shapes shape-four">
					<img src="images/shape/183.svg" alt="" class="shapes shape-five">
					<img src="images/shape/184.svg" alt="" class="shapes shape-six">
					<img src="images/shape/185.svg" alt="" class="shapes shape-seven">
					<img src="images/shape/186.svg" alt="" class="shapes shape-eight">
					<img src="images/shape/187.svg" alt="" class="shapes shape-nine">
					<img src="images/shape/188.svg" alt="" class="shapes shape-ten">
				</div> <!-- /.coming-soon-content -->
			</div> <!-- /.full-height-layout -->
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.min.js"></script>
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div>
	</body>
</html>