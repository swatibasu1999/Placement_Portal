
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
			<div class="rightmenu1">
				<ul>
					
                <li> <a href="dashboard.php"  style="text-decoration: none; color:white;">DASHBOARD</a> </li>
					
				</ul>
			</div>

        </div>
        
        <!--Timer-->
 <div id="countdowntimer" style="margin-left:720px; margin-right:670px; height: 30px; background-color: grey; margin-top:25px; padding-left:45px;">

</div>

<script>
    setInterval( function(){
        timer();
    },1000);
    function timer()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
           {  
               if(xmlhttp.responseText=="00:00:01")
               {
                   window.location="p4.test.php";
               }
               document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
        }
        };
        xmlhttp.open("GET", "folderajax/load_time.php",true);
        xmlhttp.send(null);
    }
</script>