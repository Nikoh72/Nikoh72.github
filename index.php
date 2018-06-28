<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<link rel="stylesheet" href="style.css">
		
		<title>LAMBA LOLO HIGH</title>

		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/icomoon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body><nav class="navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"></a>
			</div>
			<ul class="navbar-nav" style="list-style-type: none">
				<li class="active"><a href="">HOMEPAGE  </a></li>
				<li><a href="#sisi">ABOUTUS  </a></li>
				<li><a href="#foo">CONTACTUS</a></li>
			</ul>
		</div>
	</nav>
		
		<div class="site-content">
			<div class="container">
				<main class="main-content">
					<div class="content">
						<header class="site-header">
							<a href="" class="logo"><img src="images.jpeg" alt=""></a>
							<div class="header-type">
                                <h1><b><u>EMOBILIS UNIVERSITY</u></b></h1>
								<p>The best of the best for the best of best.discpline and unity to better our best.yes we can</p>
							</div>
						</header> <!-- .site-header -->

						<div class="banner">
						</div>

						<h2>What is so cool in our university?</h2>
						<p>Offers a wide range of marketable skills in a unique condusive enviroment!</p>

						<div class="row">
							<div class="col-md-6">
								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-compass"></i></div>
									<h3 class="feature-title">Mission</h3>
									<p>deliver qualified peronel</p>
								</div>

								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-ruler"></i></div>
									<h3 class="feature-title">Vision</h3>
									<p> to stay on ttop of the market and promise to deliver.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-soft-ball"></i></div>
									<h3 class="feature-title">Goals</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio facilis labdis unde voluptate?</p>
								</div>

								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-rocket"></i></div>
									<h3 class="feature-title">Objective </h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut dolores, laboriosam molestiae .</p>
								</div>
							</div>
						</div>

						<div class="features">
							<div class="feature">
								<div class="feature-icon large" id="sisi"><i class="icon-mark"></i></div>
								<h2 class="feature-title">About us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, perspiciatis repellat? Cupiditate id quas quia veritatis! Animi</p>
							</div>

						</div>
					</div>
					<div class="aside">
						<form action="index.php" class="signup-form" method="POST">
                            <?php  include ('errors.php');?>
							<div class="form-header">
								<h2>Students details</h2>
								<p>please fill out the form below to view your results.</p>
							</div>
							<div class="form-content">
								<p><label >USERNAME</label><br>
                                    <input type="text" placeholder="First name..." name="usernamek"></p>
								<p><label>EMAIL</label><br>
                                    <input type="email" placeholder="Email address..." name="email"></p>
									<p><input type="password" placeholder="input password" name="password1"></p>
									<input type="password" placeholder="confirm password" name="password2">
								<p>
								</p>


									<p>
										<pre><a href="#"><button>login as a student</button></a><a href="register.php">
                                        <input type="submit" name="login_user" value="LOGIN AS LEC">


								<p class="info"></p>


							</div>
						</form>
					</div>
				</main>

				<div class="graduates">
					<ul class="slides">
						<li>
							<div class="student-data">
								<div class="student-image">
									<img src="dummy/person-1@2x.jpg" alt="">
								</div>
								<div class="student-details">
									<h2 class="student-name">Nikoh</h2>
									<ul class="student-info">
										<li>Graduation: <strong>2018</strong></li>
										<li>Course: <strong>Mit</strong></li>
										<li>Current job: <strong>Peddler</strong></li>
									</ul>

									<p>n an unlicensed dealer in illegal drugs. Synonyms: drug dealer, drug trafficker, peddler, pusher Type of: criminal, crook, felon, malefactor, outlaw. someone who has committed a crime or has been legally convicted of a crime. dealer.</p>
								</div>
								
							</div>
						</li>
						<li>
							<div class="student-data">
								<div class="student-image">
									<img src="dummy/person-1.jpg" alt="">
								</div>
								<div class="student-details">
									<h2 class="student-name">Good boy</h2>


									<p> .n an unlicensed dealer in illegal drugs. Synonyms: drug dealer, drug trafficker, peddler, pusher Type of: criminal, crook, felon, malefactor, outlaw. someone who has committed a crime or has been legally convicted of a crime. dealer</p>
								</div>
								
							</div>
						</li>
					</ul>
				</div>

				<footer class="site-footer" id="foo">
					<p>Copyright &copy; 2018 NIKOH.  All rights reserved</p>

					<div class="social-links">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
					</div>
				</footer>
				
			</div>

		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		

	
		
	</body>

</html>