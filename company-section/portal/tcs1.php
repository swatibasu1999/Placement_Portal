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
				<a class="logo" href="index.html">LET'S GET HIRED</a>
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
					<h1><p>{ TATA CONSULTANCY SERVICES }</p></h1>
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
									<h2><b>ROUND 1</b></h2>
									
								</header>
								<p><h4><b>THIS ROUND CONSISTS OF 3 SECTIONS(ALLOTTED TIME: 90 MINS)</b></h4></p>
								<p><h4>1.  QUANTITATIVE APTITUDE+PROGRAMMING LANGUAGE TEST(30 QUESTIONS)</h4></p>
								<p><a href="../../P1.php">Click here </a></p>
								<p><h4>2.  CODING ROUND (UPTO 2 QUESTIONS)</h4></p>
								
								<p><a href="https://prepinsta.com/tcs-coding-question-1/">try here...</a></p>
								<p><a href="https://prepinsta.com/tcs-coding-question-2/">explore more... </a></p>
								<p><h4>3.  EMAIL WRITING</h4></p>
								
								
								
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<h2>ROUND 2</h2>
								</header>
								<p><h4>IT INCLUDES SUBROUNDS i.e. TECHNICAL ROUND, HR ROUND AND MANAGERIAL ROUND.</h4></p>
								<p><h4>YOU SHOULD BE PREPARED WITH CONCEPTS OF DSA,DBMS,OS AND PROGRAMMING LANGUAGE OF YOUR CHOICE.</h4></p>
								<p><h4>YOU CAN PRACTICE ALL KIND OF SAMPLE QUESTIONS FROM HERE ITSELF...</h4></p>
								<p><a href="tcs2.php">check sample questions </a></p>
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