
<?php
include "connection.php";
$cursor = $link->find();
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

			<div class="rightmenu">
				<ul>
					
						<li> <a href="index.html" style="text-decoration: none; color:white;">HOME</a> </li>
						<li> <a href="dashboard.php"  style="text-decoration: none; color:white;">DASHBOARD</a> </li>
						<li><a href="logout.php"  style="text-decoration: none; color:white;">LOGOUT  </a></li>

				</ul>
			</div>

		</div>
        

		<div class="card">
			<?php
			foreach ($cursor as $document) {
			?>
				<p><button value="<?php echo $document["category"] ?>" onclick="set_exam_type_session(this.value);"><?php echo $document["category"] ?></button></p>
			    <br>
			<?php
			}
			?>
		</div>

		<div class="footer">
			<p>SIT BACK AND PREPARE WELL...</p>
			<p>ALL THE BEST !</p>
		</div>
	</div>
</body>
<script>
    function set_exam_type_session(exam_category)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
           {  window.location="p2.php";
        }
        };
        xmlhttp.open("GET", "folderajax/set_exam_type_session.php?exam_category=" + exam_category,true);
        xmlhttp.send(null);
    }
</script>
</html>