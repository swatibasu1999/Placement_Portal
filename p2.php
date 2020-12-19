<?php
include 'connection.php';
include 'header_test.php';
$query = $collection1->find();
$var = $_SESSION['exam_category'];
$temp = $db->$var;
$total_questions = $temp->count();
?>
<div class="text">

	<h2> MOCK TEST INSTRUCTIONS</h2>
	<p>
		This is a multiple choise quiz to test your PHP Knowledge.
	</p>
	<p>
	<br>
		<h3><strong>Number of Questions:</strong><?php echo $total_questions; ?></h3>
	</br>
	</p>
	<br>
	
	<br>
		<strong>Number of Questions:</strong><?php echo $total_questions; ?> </br>
	<br>
		<strong>Type:</strong> Multiple Choise</br>
	<br>
		<strong>Estimated Time:</strong> <?php echo $total_questions * 3; ?></br>

	
	<!-- <p>
		<h3>------------ --------------</h3>
	</p>
	<p>
		<h3>------------ --------------</h3>
	</p>
	<p>
		<h3>------------ --------------</h3>
	</p> -->
	<div class="card1">
		<p><button><a href="p3.php?n=1" class="start">Start Quiz</a></button></p>
	</div>

</div>

<?php
include 'footer_test.php';
?>