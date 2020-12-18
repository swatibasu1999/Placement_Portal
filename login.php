<?php
include "connection.php";
include "library.php";
?>

<!DOCTYPE html5>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/login_sheet.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>



<body style="background :url(bg.jpg); padding-top:60px;padding-right:20px; background-repeat: no-repeat; background-attachment: fixed;
  background-size: cover;">


    <!--NAVBAR-->
    <section class="header" id="navbar" style="font-family: 'Montserrat', sans-serif;">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark header" style="height: 80px;background:#020203 ">
            <a class="navbar-brand" href="#">
                <h1><strong>LET'S GET HIRED</strong></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <!--NAVBAR-->

    <div id="logreg-forms" style="background: -webkit-linear-gradient(0deg, #3c96ff 0%, #2dfbff 100%); ">
        <form class="form-signin" method="POST" action="">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="input-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
            </div>

            <div class="input-group">
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="">
            </div>

            <div class="input-group" style="margin-top: 20px;">
                <button class="btn btn-md btn-rounded btn-block form-control submit" name="login" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            </div>
            <br>
            <div class="alert alert-success" id="success" role="alert" style="display: none;">
                <strong>Success!</strong> Account registered successfully.
            </div>
            <div class="alert alert-danger" id="failure" role="alert" style="display: none;">
                <strong>Already Exist!</strong> Account already Exist.
            </div>
            <div class="alert alert-danger" id="not-exist" role="alert" style="display: none;">
                <strong>Not Exist!</strong> Email ID not registered.
            </div>
            <div class="alert alert-danger" id="incorrect" role="alert" style="display: none;">
                <strong>Incorrect ID/Passsowrd!</strong> The ID/password is incorrect
            </div>

            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
        </form>

        <!-- <form action="#" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form> -->

        <form action="" method="POST" class="form-signup">


            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Register Here</h1>
            <input type="text" id="user-name" name="name" class="form-control" placeholder="Full name" required="" autofocus="">
            <input type="email" id="user-email" name="email" class="form-control" placeholder="Email address" required autofocus="">
            <input type="password" id="user-pass" name="pass" class="form-control" placeholder="Password" required autofocus="">
            <input type="password" id="user-repeatpass" name="cpass" class="form-control" placeholder="Confirm Password" required autofocus="">

            <div class="input-group" style="margin-top: 20px;">
                <button class="btn btn-md btn-block submit" name="sign-up" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
            </div>
            <br>
            <a href="#" id="cancel_signup"><i class="fa fa-angle-left"></i> Back</a>
        </form>
        <br>

    </div>
    <?php

    if (isset($_POST['sign-up'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $temp  = $_POST['pass'];
        $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);

        $arrays = array(

            "Name"    => $name,
            "Email Address" => $email,
            "Password"      => $pass

        );

        $query = chkemail($email);
        if ($query) {
            register($arrays);
    ?>
            <script>
                document.getElementById("success").style.display = "block";
            </script>
        <?php
        } else {
        ?>
            <script>
                document.getElementById("failure").style.display = "block";
            </script>
    <?php
        }
    }

    ?>


    <?php

    if (isset($_POST['login'])) {
        //        print_r($_POST);


        $email = $_POST['email'];
        $upass = $_POST['pass'];
        $criteria = array("Email Address" => $email);
        $query = $collection->findOne($criteria);
        //var_dump($query);
        if (empty($query)) {
    ?>
            <script>
                document.getElementById("not-exist").style.display = "block";
            </script>
            <?php
        } else {

            $pass = $query["Password"];
            if (password_verify($upass, $pass)) {
                $var = setsession($email);
                //                    echo"<pre>";   
                //                    print_r($_SESSION);


                if ($var) {
            ?>
                    <script>
                        window.location = "dashboard.php";
                    </script>
                <?php
                } else {
                    echo "Some error";
                }
            } else {
                ?>
                <script>
                    document.getElementById("incorrect").style.display = "block";
                </script>
    <?php
            }
        }
    }


    ?>


    <script>
        function toggleResetPswd(e) {
            e.preventDefault();
            $('#logreg-forms .form-signin').toggle() // display:block or none
            $('#logreg-forms .form-reset').toggle() // display:block or none
        }

        function toggleSignUp(e) {
            e.preventDefault();
            $('#logreg-forms .form-signin').toggle(); // display:block or none
            $('#logreg-forms .form-signup').toggle(); // display:block or none
        }

        $(() => {
            // Login Register Form
            $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
            $('#logreg-forms #cancel_reset').click(toggleResetPswd);
            $('#logreg-forms #btn-signup').click(toggleSignUp);
            $('#logreg-forms #cancel_signup').click(toggleSignUp);
        })
    </script>
</body>

</html>