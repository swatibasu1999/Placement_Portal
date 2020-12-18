<?php
include 'connection.php';
include 'library.php';
if (chkLogin()) {
    header("Location: login.php");
}
?>
<?php
$var = $_SESSION['email'];
$data = $user->findOne(array('Email ID' => $var));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <title>Dashboard</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/dashboard_stylesheet.css" />

</head>

<body>
    <!-- Top Menu -->
    <div id="page-wraper">
        <div class="header" id="navbar">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark header" style=" background:balck;height: 80px;background-color:black">
                <a class="navbar-brand" href="#">
                    <h1>Let's Get Hired</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="nav navbar-nav nav-flex-icons ml-auto ">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account Setting</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <a class="dropdown-item" href="changepassword.php">Change Account Password</a> -->
                            <a class="dropdown-item" href="index.php">Home</a>
                            <a class="dropdown-item" href="logout.php">Sign Out</a>
                        </div>
                    </ul>
                </div>
            </nav>

        </div>
        <!-- Sidebar Menu -->
        <div class="responsive-nav">

            <div id="menu" class="menu">


                <div class="container">

                    <div class="image">
                        <img src="assets/images/userimage/username.jpg" alt="no-img" />
                    </div>

                    <div class="username">
                        <h4><?php echo $_SESSION["uname"] ?></h4>
                    </div>
                    <nav class="main-nav" role="navigation">
                        <ul class="main-menu">
                            <li><a href="dashboard.php">Profile</a></li>
                            <li><a href="company-section/list_companies.php">List Of Companies</a></li>
                            <!-- <li><a href="" >Scoreboard</a></li> -->
                            <li><a href="p1.php">Mock Drive</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>


        <?php
        if (isset($data['Name'])) {
        ?>

            <section class="section about-me" data-section="section1">
                <div class="container">
                    <div class="section-heading">
                        <h2>Dashboard</h2>
                        <div class="line-dec"></div>
                    </div>
                    <div class="row">
                        <div class="About">
                            <div class="container" id="about">
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                Name
                                                <input name="name" type="text" class="form-control" id="name" value="<?php echo $data['Name'];  ?>" placeholder="sangeetha" required="" readonly />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Email Id
                                                <input name="email" type="email" class="form-control" id="email" value="<?php echo $data['Email ID'];  ?>" placeholder="Your email..." required="" readonly />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                College
                                                <input name="college" type="text" class="form-control" id="college" value="<?php echo $data['College'];  ?>" placeholder="course..." required readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Course
                                                <input name="course" type="text" class="form-control" id="course" value="<?php echo $data['Course'];  ?>" placeholder="course..." required readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Branch
                                                <input name="branch" type="text" class="form-control" id="branch" value="<?php echo $data['Branch'];  ?>" placeholder="Branch..." required readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Year Of Passing
                                                <input name="passing" type="text" class="form-control" id="passing" value="<?php echo $data['Year of passing'];  ?>" placeholder="passing..." required readonly>
                                            </fieldset>

                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Phone Number
                                                <input name="number" type="text" class="form-control" id="mobile" value="<?php echo $data['Phone'];  ?>" placeholder="add phone number..." required="" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Gender
                                                <input name="gender" type="text" class="form-control" id="gender" value="<?php echo $data['Gender'];  ?>" placeholder="gender..." readonly>
                                            </fieldset>
                                        </div>

                                        <!-- <div class="col-sm-4" style=" margin: 0 auto; ">
                    <label>Upload Image</label>
                    <input type="file" name="image" id="pic">
                  </div> -->
                                        <!-- onClick="return confirm('Are you sure you want to Save? '); -->
                                        <!-- <div class="col-md-12">
                                            <fieldset>
                                               
                                                <button type="submit" id="form-submit" class="button" name="save">
                                                    Save
                                                </button>

                                            </fieldset>
                                        </div> -->

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        } else {
        ?>
            <section class="section about-me" data-section="section1">
                <div class="container">
                    <div class="section-heading">
                        <h2>Dashboard</h2>
                        <div class="line-dec"></div>
                    </div>
                    <div class="row">
                        <div class="About">
                            <div class="container" id="about">
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                Name
                                                <input name="name" type="text" class="form-control" id="name" value="<?php echo $_SESSION["uname"] ?>" placeholder="sangeetha" required="" readonly />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Email Id
                                                <input name="email" type="email" class="form-control" id="email" value="<?php echo $_SESSION["email"] ?>" placeholder="Your email..." required="" readonly />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                College
                                                <input name="college" type="text" class="form-control" id="college" placeholder="College..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Course
                                                <input name="course" type="text" class="form-control" id="course" placeholder="course..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Branch
                                                <input name="branch" type="text" class="form-control" id="branch" placeholder="Branch..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Year Of Passing
                                                <input name="passing" type="text" class="form-control" id="passing" placeholder="passing..." required>
                                            </fieldset>

                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Phone Number
                                                <input name="number" type="text" class="form-control" id="mobile" placeholder="add phone number..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                Gender
                                                <input name="gender" type="text" class="form-control" id="gender" placeholder="gender..." required>
                                            </fieldset>
                                        </div>

                                        <!-- <div class="col-sm-4" style=" margin: 0 auto; ">
                          <label>Upload Image</label>
                          <input type="file" name="image" id="pic">
                        </div> -->
                                        <div class="col-md-12">
                                            <fieldset>
                                                <!-- onClick="return confirm('Are you sure you want to Save? '); -->
                                                <button type="submit" id="form-submit" class="button" name="save">
                                                    Save
                                                </button>

                                            </fieldset>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>


        <!-- Form section -->

    </div>

    <?php
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $college = $_POST['college'];
        $course = $_POST['course'];
        $branch = $_POST['branch'];
        $passing = $_POST['passing'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];


        $document = array(
            "Name" => "$name",
            "Email ID" => "$email",
            "College" => "$college",
            "Course" => "$course",
            "Branch" => "$branch",
            "Year of passing" => "$passing",
            "Phone" => "$number",
            "Gender" => "$gender",
            // "Image"=>"$photo"
        );
        $user->insertone($document);
    ?>
        <script>
            alert("PROFILE UPDATES!!");
            window.location.href = window.location.href;
        </script>

    <?php
        // $cursor = $collection->find();
        // echo "Document inserted successfully";
    }
    ?>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>


</body>

</html>