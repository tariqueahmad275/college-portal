<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>College Portal </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="bg-top navbar-light">
		<div class="container">
			<div class="row no-gutters d-flex align-items-center align-items-stretch">
				<div class="col-md-4 d-flex align-items-center py-4">
					<a class="navbar-brand" href="home.php">Thakur College . <span>of Engineering& Technology</span></a>
				</div>
				<div class="col-lg-8 d-block">
					<div class="row d-flex">
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span
									class="icon-paper-plane"></span></div>
							<div class="text">
								<span>Email</span>
								<span>tcet@thakureducation.org</span>
							</div>
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span
									class="icon-phone2"></span></div>
							<div class="text">
								<span>Call</span>
								<span>Call Us: + 91 9555542222</span>
							</div>
						</div>
						<div class="col-md topper d-flex align-items-center justify-content-end">
							<p class="mb-0">
								<a href="#"
									class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
									<span><img
									src="https://img.icons8.com/metro/26/000000/guest-male.png">
								<?php echo "Welcome ". $_SESSION['username']?></span>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center px-4">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<form action="#" class="searchform order-lg-last">
				<div class="form-group d-flex">
					<input type="text" class="form-control pl-3" placeholder="Search">
					<button type="submit" placeholder="" class="form-control search"><span
							class="ion-ios-search"></span></button>
				</div>
			</form>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a href="home.php" class="nav-link pl-0">Home</a></li>
					
					
	        	<li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="study.php" class="nav-link">Study</a></li>
					
					<li class="nav-item"><a href="query.php" class="nav-link">Queries</a></li>
	        	<li class="nav-item"><a href="community.php" class="nav-link">Community</a></li>
					<li class="nav-item"><a href="library.php" class="nav-link">Library</a></li>
					

					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					 
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>

				</ul>
				
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start"
					data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">Chairman's Message</h1>
						<p>In century, science and technological advancements have altered the lives of people providing
							them luxuries in each and every sector. Science and technological revolutions are
							unstoppable as it corroborates economic advances, improvements in health systems, education,
							infrastructure and al I human wants.</p>
						<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image:url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start"
					data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">CEO's Message</h1>
						<p>India is fast becoming the technological capital of the world and the most buzzing place on
							the globe today with a huge manpower potential ready to be harnessed. As a result, the role
							of technical education is much more than just to increase employability.</p>
						<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image:url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start"
					data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">Principal's Message</h1>
						<p>Engineers are the architect for developing our nation and also play a very important role in
							every walk of life. They convert knowledge of basic sciences into products and services.
							They are versatile minds who build bridges between sciences, technology and society.</p>
						<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start"
					data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">TCET</h1>
						<p>The Thakur College of Engineering & Technology (TCET) was established in academic year
							2001-02 with a clear objective of providing quality technical education in tune with
							international standards and contemporary global requirements.</p>
						<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-services ftco-no-pb">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-teacher"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Certified Teachers</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-reading"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Special Education</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-books"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Book &amp; Library</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-diploma"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Sport Clubs</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
					<div class="img" style="background-image: url(images/about.jpg); border"></div>
				</div>
				<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
					<h2 class="mb-4">What We Offer</h2>
					<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
						would have been rewritten a thousand times and everything that was left from its origin would be
						the word.</p>
					<div class="row mt-5">
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
										class="flaticon-security"></span></div>
								<div class="text pl-3">
									<h3>Safety First</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
										class="flaticon-reading"></span></div>
								<div class="text pl-3">
									<h3>Regular Classes</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
										class="flaticon-diploma"></span></div>
								<div class="text pl-3">
									<h3>Certified Teachers</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
										class="flaticon-education"></span></div>
								<div class="text pl-3">
									<h3>Sufficient Classrooms</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
										class="flaticon-jigsaw"></span></div>
								<div class="text pl-3">
									<h3>Creative Lessons</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
										class="flaticon-kids"></span></div>
								<div class="text pl-3">
									<h3>Sports Facilities</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);"
		data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2 d-flex">
				<div class="col-md-6 align-items-stretch d-flex">
					<div class="img img-video d-flex align-items-center"
						style="background-image: url(images/about-2.jpg);">
						<div class="video justify-content-center">
							<a href="https://www.youtube.com/watch?v=4PEFkUPw1_s"
								class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
								<span class="ion-ios-play"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
					<h2 class="mb-4">TCET</h2>
					<p>The Thakur College of Engineering & Technology (TCET) was established in academic year 2001-02
						with a clear objective of providing quality technical education in tune with international
						standards and contemporary global requirements. The College is recognized by All India Council
						for Technical Education (AICTE) & Govt. of Maharashtra and is affiliated to the University of
						Mumbai (UOM). All the courses at the U.G. level, eligible for accreditation in 2011 i.e.
						Electronics & Telecommunication (EXTC), Information Technology (IT) and Computer Engineering
						(CMPN) were accredited by NBA for three years w.e.f. 16.9.2011. Moreover, these programmes are
						also given permanent affiliation w.e.f. A.Y. 2015-16.

					</p>
				</div>
			</div>
			<div class="row d-md-flex align-items-center justify-content-center">
				<div class="col-lg-12">
					<div class="row d-md-flex align-items-center">
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="500">0</strong>
									<span>Certified Teachers</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="4000">0</strong>
									<span>Students</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="40">0</strong>
									<span>Courses</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="500">0</strong>
									<span>Awards Won</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>Our</span> Courses</h2>
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the
						necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/course-1.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="#">Computer Engineering</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with
							the necessary regelialia. It is a paradisematic country</p>
						<p><a href="#" class="btn btn-primary">Apply now</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/course-2.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="#">I.T</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with
							the necessary regelialia. It is a paradisematic country</p>
						<p><a href="#" class="btn btn-primary">Apply now</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/course-3.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="#">Electronics and telecommunication</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with
							the necessary regelialia. It is a paradisematic country</p>
						<p><a href="#" class="btn btn-primary">Apply now</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/course-4.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="#">Electronics Engineering</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with
							the necessary regelialia. It is a paradisematic country</p>
						<p><a href="#" class="btn btn-primary">Apply now</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>



	</div>
	</div>
	</div>
	</div>
	</div>
	</section>


	<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 py-5 px-md-5">
					<div class="py-md-5">
						<div class="heading-section heading-section-white ftco-animate mb-5">
							<h2 class="mb-4">Request A Quote</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
						</div>
						<form action="#" class="appointment-form ftco-animate">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Select Your Course</option>
												<option value="">Art Lesson</option>
												<option value="">Language Lesson</option>
												<option value="">Music Lesson</option>
												<option value="">Sports</option>
												<option value="">Other Services</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="2" class="form-control"
										placeholder="Message"></textarea>
								</div>
								<div class="form-group ml-md-4">
									<input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Student Says About Us</h2>
					<p></p>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Racky Henderson</p>
									<span class="position">Computer Systems Analyst</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Henry Dee</p>
									<span class="position">Software Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Mark Huff</p>
									<span class="position">Data Scientist</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts.</p>
									<p class="name">Rodel Golez</p>
									<span class="position">Software Engineer</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url(images/course-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url(images/image_2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url(images/image_3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url(images/image_4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text"> A-Block, Thakur
										Educational Campus, Shyamnarayan Thakur Marg, Thakur Village, Kandivali East,
										Mumbai, Maharashtra 400101</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+91
											9555542222</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">tcet@thakureducation.org</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Recent Blog</h2>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
								</h3>
								<div class="meta">

								</div>
							</div>
						</div>
						<div class="block-21 mb-5 d-flex">
							<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
								</h3>
								<div class="meta">

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Subscribe Us!</h2>
						<form action="#" class="subscribe-form">
							<div class="form-group">
								<input type="text" class="form-control mb-2 text-center"
									placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div>
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a
							href="https://www.tcetmumbai.in" target="_blank">TCET</a>
						
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>