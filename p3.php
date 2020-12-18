<?php
include 'connection.php';
include 'header_test.php';

$number = $_GET['n'];
$var = $_SESSION['exam_category'];
$rv = $db->$var;

$question = $rv->findOne(array('question_number' => $number));
$_SESSION['answer'] = $rv->findOne(array('answer'));

$tmp2 = $link->findOne(array('category' => $var));
$s = $tmp2['answer'];
$rv2 = $db->$s;

$choices = $rv2->find(array('question_number' => $number));
// Get Total questions
$total_questions = $rv->count();
?>

<div class="text">

	<h2>MOCK TEST</h2>
	<p>
		<h3>Question <?php echo $number; ?> of <?php echo $total_questions; ?></h3>
		<br>
		<h3><?php echo $question['ques_text']; ?></h3></br>
	</p>
	<form method="POST" action="process.php">
		<?php
		foreach ($choices as $document) {
		?>
			<input type="radio" name="choice" value= "<?php echo $document['ID']; ?>"><?php echo $document['coption']; ?>
			<br></br>
		<?php
		}
		?>
		<input type="hidden" name="number" value="<?php echo $number; ?>">
		<p style="padding-bottom:25px; align-self:center">
		
		<input type="submit" name="submit" value="Next" style="cursor: pointer; border: 1px solid #ffffff; background-color: transparent; height: 30px; width: 80px; color: #d3d3d3; font-size: 1.3em; box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6); margin-left: 30px; margin-top: 50px; text-decoration: none;">
		</p>

	</form>
	<!-- <p>
		<h3>a)------------ --------------</h3>
	</p>
	<p>
		<h3>b)------------ --------------</h3>
	</p>
	<p>
		<h3>c)------------ --------------</h3>
	</p>
	<p>
		<h3>d)------------ --------------</h3>
	</p> -->
	<!-- <div class="card1">
		<p><button>NEXT</button></p>
	</div> -->

</div>

<?php
include 'footer_test.php';
?>