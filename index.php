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
							<!--<h1><span class="fa fa-signal" aria-hidden="true"></span> Soft <label>Hr Agency</label></h1>-->
							<img src="images/logo.jpg" width="" height="">
						</a>
						
						
						
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
						    
						    
						    
							<ul class="nav navbar-nav">
							    
								<li class="active"><a href="index.php" class="effect-3">Home</a></li>
								<!--
								<li class="dropdown">
									<a href="services.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Services <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="services.html">Services 2</a></li>
										<li class="divider"></li>
										<li><a href="services.html">Services 3</a></li>
										<li class="divider"></li>
										<li><a href="codes.html">Codes</a></li>
										<li class="divider"></li>
										<li><a href="icons.html">Icons</a></li>
										<li class="divider"></li>
										<li><a href="services.html">One more separated link</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="jobs.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Jobs<b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-2">
										<div class="row">
											<div class="col-sm-6">
												<ul class="multi-column-dropdown">
													<li><a href="jobs.html">Walk-ins</a></li>
													<li><a href="jobs.html">Bpo Jobs</a></li>
													<li><a href="jobs.html">Teaching Jobs</a></li>
													<li><a href="jobs.html">Diploma Jobs</a></li>
													<li><a href="jobs.html">Tech Support</a></li>
													<li><a href="jobs.html">Finance Jobs</a></li>
													<li><a href="jobs.html">Part time Jobs</a></li>
													<li><a href="jobs.html">Health Care</a></li>
													<li><a href="jobs.html">Hospitality</a></li>
													<li><a href="jobs.html">Internships</a></li>
													<li><a href="jobs.html">Research Jobs</a></li>
													<li><a href="jobs.html">Defence Jobs</a></li>
												</ul>
											</div>
											<div class="col-sm-6">
												<ul class="multi-column-dropdown">
													<li><a href="login.html">Recruiter Updates</a></li>
													<li><a href="upload.html">Upload Resume</a></li>
													<li><a href="codes.html">Shortcodes</a></li>
												</ul>
											</div>
										</div>
									</ul>
								</li>
								<li><a href="events.html" class="effect-3">Events</a></li>
								-->
								<li><a href="jobs.php" class="effect-3">Jobs</a></li>
								<li><a href="professional.php" class="effect-3">Professionals</a></li>
								
								<li><a href="contact.php" class="effect-3">Contact</a></li>
							</ul>
						</nav>
					</div>
					<h4> <p align="center">
						<span style="color:red;"> <br>Government Authorised International Recruitment Agent</span> </p> </h4> <br>
						<h5> <p align="center">
						<span style="color:red;"> Helping you acheive your highest goal in life.</span> </p> </h5>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3><span>Luxury Cruise Recruitment Ltd</span> <br>is a <span style="color:red;">Government Authorised International Recruitment Agent</span>.</p>
						<div class="agileits-button top_ban_agile">
							<!--<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>-->
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Our jobs on offer are guaranteed to suit your taste with free service</h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<!--<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>-->
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Improving workplace <span>Productivity.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<!--<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>-->
						</div>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>Inspiring leadership <span>innovation.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg scroll" href="#welcome" role="button">Read More »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->

	<!--
		//search_form
	<div id="search_form" class="search_top">
		<h2>Start your job search</h2>
		<form action="#" method="post">
			<input type="text" name="Enter Keyword(s)" placeholder="Enter Keyword(s)" required="">
			<input class="email" name="Location" type="text" placeholder="Location" required="">
			<select id="country12" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select Category</option>
														<option value="city">Banking</option>
														<option value="city">Finance</option>
														<option value="city">It</option>
														<option value="city">Specialists</option>
														
										</select>
			<input type="submit" value="Find Jobs">
			<div class="clearfix"></div>
		</form>
	</div>

	-->
	<div class="banner-bottom">
		<div class="container">
			<div class="tittle_head_w3ls">
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-6 banner_bottom_left">
					<h4>Employment opportunities for <span>Professionals</span></h4>
					<p>The company is here to give the opportunity to examine the life of work abroad (Foreign Companies) and on cruise.
					 New on the market we are here to give you a push in finding your dream work abroad or on cruise.
					</p>

					<h4>Mission</h4>
					<p>Our mission is to get local workers to explore job opportunities abroad (Foreign Companies) and on cruise and live wonderful lifelong experiences by providing excellent services and labor demands in a variety of fields and countries.</p>

					<h4>Vision</h4>
					<p>Our vision is to strengthen international relationships via labor force while adapting to the changing global environment of work. </p>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 banner_bottom_right">
					<div class="agileits_w3layouts_banner_bottom_grid">
						<img src="images/ab1.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //banner-bottom -->
	<div class="team_work_agile">
		<h4>Our jobs on offer are guaranteed to suit your taste with absolutely free service</h4>
	</div>
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Selection Process</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-3 services-left">
					<div class="services-left-top">

						<h5>Identify Need & Job Position</h5>

					</div>
					<div class="services-left-top services-left-top1">

						<h5>Recruitment Planning</h5>

					</div>
				</div>
				<div class="col-md-6 services-middle">
					<div class="services-middle-img">
						<img src="images/client2.jpg" alt="" />
					</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 services-left">
					<div class="services-left-top">

						<h5>Assess & Interview Candidates</h5>

					</div>
					<div class="services-left-top services-left-top1">

						<h5>Onboarding for Success</h5>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- /mid-services -->
	<div class="mid_services">

		<div class="col-md-6 according_inner_grids">
			<h3 class="agile_heading two">Receiving a Job offer</h3>
			<div class="according_info">
				<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
								    aria-controls="collapseTwo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What’s the salary like?
							</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
									The salary is worth the work.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What’s the nightlife and social life like?
							</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
									Your night life and social life depends on the job you will get. You can always find a balance in what you are doing and what you want to do.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false"
								    aria-controls="collapsesix">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Do I need to learn new languages?
							</a>
							</h4>
						</div>
						<div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
									No need. However, on your journey you might learn new languages on your own by interacting with different people
							</div>
						</div>
					</div>
					<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false"
										aria-controls="collapsefour">
								  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What about natural calamities at sea?
								</a>
								</h4>
							</div>
							<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body panel_text">
										Medical insurance is a must in the maritime field. About bad weather, your crew are always in constant contact with the meteorological stations. Any issues are attended to immediately.

								</div>
							</div>
						</div>
						<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title asd">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false"
											aria-controls="collapsefive">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>How secure is working abroad?
									</a>
									</h4>
								</div>
								<div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body panel_text">
											This depends where you will be working. Law and order are maintained in all countries where we intend to send you. However, law-breakers are everywhere, even here in Mauritius.
									</div>
								</div>
							</div>
				</div>
			</div>

		</div>
		<div class="col-md-6 mid_services_img">
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //mid-services -->
	<div class="candidate_cv">
		<div class="tittle_head_w3ls">
			<h3 class="tittle two">Contact Us</h3>
		</div>
		<div class="inner_sec_grids_info login-form">
			<form action="index.php" method="post">
				<div class="col-md-6 form-left">
					<div class="form-inputs email">
						<p>Full name</p>
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" name="Name" placeholder="" required="" />
					</div>
					<div class="form-inputs name">
						<p>Email</p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" name="Email" placeholder="" required="" />
					</div>
					<div class="form-inputs name">
						<p>Phone</p>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" name="Telephone" placeholder="" required="" />
					</div>

				</div>
				<div class="col-md-6 form-right">
					<div class="form-inputs name">
						<p>Comment</p>
						<i class="fa fa-comment" aria-hidden="true"></i>
						<textarea name="Subject" placeholder="" required=""></textarea>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="form-inputs">
					<p>Specify your current employment status</p>
					<ul>
						<li>
							<input type="radio" id="a-option" name="selector1">
							<label for="a-option">Employed </label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="b-option" name="selector1">
							<label for="b-option">Unemployed</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="c-option" name="selector1">
							<label for="c-option">Self-Employed</label>
							<div class="check"></div>
						</li>
						
					</ul>
					<div class="clearfix"></div>
				</div>
				<!--
				<div class="form-inputs upload">
					<p>Upload your resume</p>
					<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
					<div id="filedrag">Upload</div>
				</div>
				-->
				<input type="submit" value="Submit">
			</form>

		</div>
	</div>
	 <!-- 
	//testimonials 
	<div class="testimonials_section">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Testimonials</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div id="Carousel" class="carousel slide two">

					<ol class="carousel-indicators second">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>

					<!-- Carousel items 
					<div class="carousel-inner">

						<div class="item active">
							<div class="testimonials_grid_wthree">
								<img src="images/test1.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque
									nihil impedit quo minus id quod maxime placeat facere possimus,Morbi viverra congue nisi vel pulvinar posuere sapien
									eros. omnis voluptas.</h4>
								<h5>Dan Adams</h5>

							</div>

						</div>
						<!--.item
						<div class="item">
							<div class="testimonials_grid_wthree">
								<img src="images/test2.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque
									nihil impedit quo minus id quod maxime placeat facere possimus,Morbi viverra congue nisi vel pulvinar posuere sapien
									eros. omnis voluptas.</h4>
								<h5>Jessica Doe</h5>

							</div>
						</div>
						<!--.item

						<div class="item">
							<div class="testimonials_grid_wthree">
								<img src="images/test3.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque
									nihil impedit quo minus id quod maxime placeat facere possimus,Morbi viverra congue nisi vel pulvinar posuere sapien
									eros. omnis voluptas.</h4>
								<h5>Michael Doe</h5>

							</div>
						</div>
						<!--.item

					</div>
					<!--.carousel-inner

				</div>
				<!--.Carousel

				-->

			</div>
		</div>
	</div>

	<!-- footer -->
 <?php include 'footer.php';?>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>