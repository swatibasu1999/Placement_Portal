<?php
session_start();
include '../../library.php';
if (chkLogin()) {
    header("Location: login.php");
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Interviews</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href=" ">LET'S GET HIRED</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../../index.php">Home</a></li>
					<li><a href="../../dashboard.php">Dashboard</a></li>
					
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1><b>INTERVIEW PROCEDURE</b></h1>
					<h1><p>{ CISCO }</p></h1>
				</div>
				
			</section>

		<!-- Highlights -->
			<section class="wrapper" id="companies">
				<div class="inner">
					<header class="special">
						<h2><b>INTERVIEW ROUNDS</b></h2>
						<p>So let's begin the Journey of getting placed in your dream company!</p>
					</header>
					<div class="highlights" style="padding-left:280px;">
						<section>
							<div class="content">
								<header>
									<h2>ROUND 1</h2>
									
								</header>
								<p><h4>ONLINE MCQ TEST OF DURATION 30 MINUTES. </h4></p>
								<p><a href="../../P1.php">Click here </a></p>
								<p><h4>2 CODING QUESTIONS TO BE PERFORMED AT HACKERRANK OR ANY CODING PLATFORM.</h4></p></p>
								<p><a href="https://practice.geeksforgeeks.org/explore/?company%5B%5D=Cisco&page=1">sample coding questions </a></p>
								
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<h2>ROUND 2</h2>
								</header>
								<p><h4>IT INCLUDES SUBROUNDS i.e. TECHNICAL ROUND, HR ROUND AND MANAGERIAL ROUND.</h4></p>
								<p><h4>YOU CAN PRACTICE ALL KIND OF SAMPLE QUESTIONS FROM HERE ITSELF...</h4></p>
								<p><a href="cisco2.php">check sample questions </a></p>
								</div>
						</section>
					</div>
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
		

	</body>
</html>