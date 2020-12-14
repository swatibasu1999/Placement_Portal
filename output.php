<?php
    require_once 'library.php';
    if(chkLogin()){
       
        echo "Logged in!";
        $name = $_SESSION["uname"];
        echo "Welcome $name!!!";
        

    }
    else{
        header("Location: index.php");
    }

    if(isset($_POST['logout'])){
        
        $var = removeall();
        if($var){
            header("Location:index.php");
        }
        else{
            echo "Error!";
        }
    
    }
?>
<html>
    <body>
        <form method="post" action="">
            <input type="submit" name="logout" value="Logout!">
        </form>
    </body>
</html>