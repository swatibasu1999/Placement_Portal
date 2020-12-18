<?php include 'connection.php'; ?>
<?php session_start(); ?>
<?php
//For first question, score will not be there.
if (!isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
}
if ($_POST) {
	//We need total question in process file too
	// $query = "SELECT * FROM questions";
	$var = $_SESSION['exam_category'];
	$temp = $db->$var;
	$total_questions = $temp->count();
	// $total_questions = $_SESSION["exam_category"]->count();
	// $total_questions = mysqli_num_rows(mysqli_query($connection,$query));

	//We need to capture the question number from where form was submitted
	$number = $_POST['number'];
	$var = $_SESSION['exam_category'];
	//Here we are storing the selected option by user
	$selected_choice = $_POST['choice'];

	//What will be the next question number
	$next = $number + 1;

	//Determine the correct choice for current question
	//  $query = "SELECT * FROM options WHERE question_number = $number AND is_correct = 1";
	//  $row = $collection1->findOne(array(array('question_number' => $number) array('is_correct'=> '1)));
	$tmp2 = $link->findOne(array('category' => $var));
	$s = $tmp2['answer'];
	$rv2 = $db->$s;

	$where = array('$and' => array(array('question_number' => $number), array('is_correct' => '1')));
	$row = $rv2->findOne($where);


	//  $result = mysqli_query($connection,$query);
	//  $row = mysqli_fetch_assoc($result);

	$correct_choice = $row['ID'];

	//Increase the score if selected cohice is correct
	if ($selected_choice == $correct_choice) {
		$_SESSION['score'] = $_SESSION['score'] + 1;
	}
	//Redirect to next question or final score page. 
	if ($number == $total_questions) {
		header("LOCATION: p4.php");
	} else {
		header("LOCATION: p3.php?n=" . $next);
	}
}



?>