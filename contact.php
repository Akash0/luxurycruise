<?php
define('SITE_KEY', '6Lc2wrMUAAAAACgd7c2Jqr0H0_Mgzz0fbW-Il6e7');
define('SECRET_KEY', '6Lc2wrMUAAAAAIxfWEXqBafPPZTjko5cqWfWPorJ');

if($_POST){
    /*function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    //var_dump($Return);
    if($Return->success == true && $Return->score > 0.5){
        include ('formvalidator.php');
    }else{
        echo "You are a Robot!!";
    }*/
    include ('formvalidator.php');
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Luxury Cruise Recruitment Ltd</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>

		<script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.php">
								<img src="images/logo.jpg" width="" height="">
						</a>
						
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li><a href="index.php" class="effect-3">Home</a></li>
									<li ><a href="jobs.php" class="effect-3">Jobs</a></li>
									<li><a href="professional.php" class="effect-3">Professionals</a></li>
									
									<li class="active"><a href="contact.php" class="effect-3">Contact</a></li>
								</ul>
							</nav>
						</div>
						<h4> <p align="center">
						<span style="color:red;"> <br>Government Authorised International Recruitment Agent</span> </p> </h4> <br>
						<h5> <p align="center">
						<span style="color:red;"> Helping you acheive your highest goal in life.</span> </p> </h5>
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div class="inner_page_agile">
		<h3>Contact</h3>
	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Contact Us</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-4 agile_info_mail_img_info">
					<div class="address-grid">
						<h4>Contact <span>Info</span></h4>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Telephone </p><span>+(230)59-38-13-06</span>
								<p> </p><span>+(230)59-59-04-04</span>
								<p> </p><span>+(230)59-59-04-03</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Mail </p>
								<a href="mailto:luxurycruiserecruitment@gmail.com"><b>luxurycruiserecruitment@gmail.com</b></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Location</p><span>Royal Road, Post de Flacq, Mauritius</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits_w3layouts_nav_right contact">
							<div class="social two">
								<ul>
									<li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 agile_info_mail_img">

				</div>
				<div class="clearfix"> </div>
				<div class="w3layouts_mail_grid">
					<form action="contact.php" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<input type="text" name="Subject" placeholder="Subject" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<textarea name="Message" placeholder="Message..." required=""></textarea>
							<input type="submit" value="Submit">
						</div>

						<!--<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >-->
						<div class="clearfix"> </div>

	<!--<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('?php echo SITE_KEY; ?>', {action: 'homepage'})
    .then(function(token) {
        //console.log(token);
        document.getElementById('g-recaptcha-response').value=token;
    });
    });
    </script>-->

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //mid-services -->
	
	<!-- /map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d936.289009865644!2d57.73236592916311!3d-20.16922754028819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217cf9107705a85d%3A0x8b408667cc779d2!2sLuxury+Cruise+Recruitment+Ltd!5e0!3m2!1sen!2smu!4v1566233895308!5m2!1sen!2smu"
		    style="border:0"></iframe>
	</div>
	<!-- //map -->

	<!-- footer -->
	<?php include 'footer.php';?>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>