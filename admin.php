<?php
// session_start();
include 'connection.php';
// include "library.php";
?>

<!DOCTYPE html5>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/login_sheet.css">
    <!-- <link rel="stylesheet" href="css/navbar_stylesheet.css"> -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>



<body style="background :url(bg.jpg); padding-top:60px;padding-right:20px;">


    <!--NAVBAR-->
    <section class="header" id="navbar" style="font-family: 'Montserrat', sans-serif;">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark header" style="height: 80px;background:#020203;  font-size: 1.5rem; ">
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
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Admin Login</h1>
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
            <!-- <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button> -->
        </form>
    </div>


    <?php
    if (isset($_POST['login'])) {
        ?>
         <script>
                 window.location = "admin/admin.php";
                </script>
        <?php
    //     $email = $_POST['email'];
    //     $upass = $_POST['pass'];
    //     // $criteria = array("Email Address" => $email);
    //     $query = $admin->findOne(array("Email Address" => $email));
    //     //var_dump($query);
    //     if (empty($query)) {
    // ?>
    //         <script>
    //             document.getElementById("not-exist").style.display = "block";
    //         </script>
    //         <?php
        } else {

    //         $pass = $query['Password'];
    //         if ($upass == $pass) {

    //         ?>
    //             <script>
    //                 window.location = "admin/admin.php";
    //             </script>
    //             <?php
    //             } else {
    //                 echo $query['Email Address'];
    //                 echo $query['Password'];
    //                 echo "Some error";
    //             }
    //         }} else {
    //             ?>
    //             <script>
    //                 document.getElementById("incorrect").style.display = "block";
    //             </script>
    <?php
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