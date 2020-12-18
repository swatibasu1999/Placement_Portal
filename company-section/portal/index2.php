<?php require_once  'connect.php';  
$cursor = $collection->find();
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>questions</title>
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
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Dashboard</a></li>
					
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2><b>PERSONAL INTERVIEW,MANAGERIAL AND HR ROUND QUESTIONS</b></h2>
					<p>{ COMPANY NAME }</p>
				</div>
				
			</section>

		<!-- Highlights -->
			<section class="wrapper" id="companies">
				<div class="inner">
						<p>
							<h2><b>PERSONAL INTERVIEW</b></h2>
							<?php
							foreach ($cursor as $document) {
							?>
							<div class="content">
							<p><h4>
							<?php echo $document["title"] . "\n"; ?>
							</h4></p>
							<?php
							}
							?>
							
							
							<p><h4>Q2: -----------------------------------------------------</h4></p>
							<p><h4>Q3: -----------------------------------------------------</h4></p>
						</div>
						</p>
						<p>
							<h2><b>MANAGERIAL ROUND</b></h2>
							<div class="content">
							<p><h4>Q1: -----------------------------------------------------</h4></p>
							<p><h4>Q2: -----------------------------------------------------</h4></p>
							<p><h4>Q3: -----------------------------------------------------</h4></p>
						</div>
						</p>
						<p>
							<h2><b>HR ROUND</b></h2>
							<div class="content">
							<p><h4>Q1: -----------------------------------------------------</h4></p>
							<p><h4>Q2: -----------------------------------------------------</h4></p>
							<p><h4>Q3: -----------------------------------------------------</h4></p>
						</div>
						</p>
							
				</div>
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
		

	</body>
</html>
