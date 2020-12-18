<?php
include '../../connection.php';
include '../../library.php';
if (chkLogin()) {
    header("Location: login.php");
}
//  require_once  'connect.php';  
$cursor1 = $ques1->find();
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
				<a class="logo" href="">LET'S GET HIRED</a>
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
					<h2><b>PERSONAL INTERVIEW,MANAGERIAL AND HR ROUND QUESTIONS</b></h2>
					<p>{ TATA CONSULTANCY SERVICES }</p>
					
				</div>
				
			</section>

		<!-- Highlights -->
			<section class="wrapper" id="companies">
				<div class="inner">
						<p>
							
							<?php
							foreach ($cursor1 as $document1) {
							?>
							<div class="content">
							<p><h4>
							<b><?php echo $document1["q"] . "\n"; ?></b>
							<br>
							</h4></p>
							<?php
							}
							?>
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