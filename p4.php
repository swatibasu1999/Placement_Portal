<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>

<body>

	<div class="bgimage">
		<div class="menu">

			<div class="leftmenu">
				<h5> LET'S GET HIRED! </h5>
			</div>

		</div>

		<div class="text">

			<h2> MOCK TEST RESULT</h2>
			<p>
				<h3>TEST SUBMITTED SUCCESSFULLY...</h3>
			</p>
			<h2>Your Result</h2>
			<p>Congratulation You have completed this test succesfully.</p>
			<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?> </p>
			<?php unset($_SESSION['score']); ?>
			<div class="card1">
				<p><a href="dashboard.php"><button>
							<h5>Go to DASHBOARD!!</h5>
						</button></a></p>
			</div>

		</div>
		<?php unset($_SESSION['score']); ?>
	</div>
	<div class="footer">

		<p>GOOD LUCK FOR THE INTERVIEW !</p>
	</div>
</body>

</html>