<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>College Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.php">Thakur College . <span>of Engineering& Technology</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>tcet@thakureducation.org</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: + 91 9555542222</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
							<p class="mb-0">
								<a href="erp.php"
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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
				 
				<li class="nav-item active"><a href="about.php" class="nav-link">About Us</a></li>
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/1341_logo.png); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">Thakur College of Engineering and Technology</h2>
						<p>Thakur College of Science and Commerce was established by Thakur Education Trust (TET) in 1992 to serve the needs of students passing SSC examination from the schools around Kandivali area and its vicinity. The establishment began with one division of FYJC Commerce accommodating just 57 students. It expanded in the year 1997 with FYJC Science and degree programs in the stream of science and commerce. The college has been granted minority status whereby 50% of the seats are reserved for Hindi speaking linguistic minority as per G. R. NO. ASN 1099/Lang (278/99) MASHI-3 dated 1 October 1994. Thakur College of Science and Commerce was reaccredited with Grade 'A' by the National Assessment and Accreditation Council (NAAC), an Autonomous Institution of the University Grants Commission</p>
						<p>The college now has more than 15000 students, 225 teaching staff and 150 non-teaching staff in degree and junior college together.</p>
					
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/thakur\ img.jpeg);">
    					<div class="video justify-content-center">
								<a href="https://www.youtube.com/watch?v=rLBJ6JuseDw" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Thakur College of Engineering and Technology</h2>
            <p><b>Vision</b>
              "Thakur College of Engineering and Technology will excel in Technical Education to become an internationally renowned premier Institute of Engineering and Technology"</p>
            <p><b>Mission</b>
              "To provide state-of-the-art infrastructure and right academic ambience for developing professional skills as well as an environment for growth of leadership and managerial skills to students which will make them competent engineers to deliver quality results in industry"</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="225">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="15000">0</strong>
		                <span>Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="17">0</strong>
		                <span>UG & PG Courses</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
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
            <p>"The aim of the college, for the individual student, is to eliminate the need in his life for the college; the task is to help him become a self-educating man."</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/dummy-image.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>My branch is electronics and telecommunication. Uptil now it is good. Now there will be certain chamges since it's become an autonomous college. Curriculum sometimes lags but they sure provide you with different courses as well to fill the gap.</p>
                    <p class="name">Urja</p>
                    <span class="position">STUDENT</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/dummy-image.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>The college is concerned about the student's placements. They give lots of opportunities. There are many companies that come and take the students. Before placements there are training sessions for practicing aptitude, there are gds.. so that people can clear these rounds</p>
                    <p class="name">Rahul</p>
                    <span class="position">STUDENT</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/dummy-image.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">STUDENT</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/dummy-image.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>The faculty of this college is very caring and supporting even if you are a not a bright student</p>
                    <p class="name">Akhilesh Burangale</p>
                    <span class="position">STUDENT</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/dummy-image.jpg)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>The infrastructure of the college is so amazing and the study environment is  supereb</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">STUDENT</span>
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
						<a href="images/images (2).jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/images\ \(2\).jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/images.jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/images.jfif);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">ages
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/CLASS.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/CLASS.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/images (1).jfif" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/images\ \(1\).jfif);">
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>