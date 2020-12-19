<?php
// session_start();
require_once 'library.php';
include 'connection.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/navbar_stylesheet.css">
  <!--Bootstrap CS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!--Just for trial , font will be changed-->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <!--NAVBAR-->
  <?php include 'navbar.php'; ?>
  <!--NAVBAR-->

  <!--CAROUSAL IMAGES WITH CAPTIONS-->
  <section class="first-side" style="height: 85%; font-family: 'Dancing Script', cursive;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/d6.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p><strong>Never put off till tomorrow</strong></p>
            <p><strong>what you can do today!!</strong></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/c7.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p><strong>Want help in Preperation ?</strong></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/c8.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Let's Get Hired...</h2>
            <p>Kick Start your Preperation right from here...</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!--ABOUT SECTION- ROADMAP-->
  <section id="id-about" class="about">
    <div class="d-flex justify-content-center py-5">
      <img src="images/roadmap.jpeg" class="img-fluid roadmap" alt="Responsive image">
    </div>
  </section>

  <!--COMPANY DRIVES-->
  <section id="company-drive" class="company py-5" style="font-family: 'Montserrat', sans-serif;">
    <div class="company-header text-center py-2">
      <h1><strong>Current Mock Drives</strong></h1>
    </div>
    <div class="row justify-content-center" style="margin-left: 0px; margin-right: 0px;">
      <div class="card-deck col-md-7 text-center">
        <div class="card card-company">
          <img src="images/Accenture-Logo.png" class="card-img-top image" alt="..." class="img-thumbnail">
          <div class="card-body">
            <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#exampleModal1">Start</button>
          </div>
        </div>
        <div class="card card-company">
          <img src="images/Cisco-logo.png" class="card-img-top image" alt="..." class="img-thumbnail">
          <div class="card-body">
            <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#exampleModal2">Start</button>
          </div>
        </div>
        <div class="card card-company">
          <img src="images/IBM-Logo.png" class="card-img-top image" alt="..." class="img-thumbnail">
          <div class="card-body">
            <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#exampleModal3">Start</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center" style="margin-left: 0px; margin-right: 0px;">
      <div class="card-deck col-md-5 text-center">
        <div class="card card-company">
          <img src="images/Infosys-Logo.png" class="card-img-top image" alt="..." class="img-thumbnail">
          <div class="card-body">
            <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#exampleModal4">Start</button>
          </div>
        </div>
        <div class="card card-company">
          <img src="images/tata-consultancy-services-tcs-logo.png" class="card-img-top image" alt="..." class="img-thumbnail">
          <div class="card-body">
            <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#exampleModal5">Start</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--CONTACT SECTION-->
  <section id="id=contact" class="contact" style="font-family: 'Montserrat', sans-serif;">
    <div class="contact-heading">
      <h1>Contact Our Team</h1>
    </div>
    <div class="container px-lg-5 mb-5">
      <div class="row mx-lg-n5">
        <div class="col py-3 px-lg-5 mr-2 border">
          <img src="images/swati.jpg" class="img-fluid contact-image" alt="Responsive image">
          <div class="link">
            <a class="link-decorate" href="https://www.linkedin.com/in/swati-basu-818509168/">
              <h4>Swati Basu</h4>
            </a>
          </div>
        </div>
        <div class="col py-3 px-lg-5 mr-2 border">
          <img src="images/a4.jpeg" class="img-fluid contact-image" alt="Responsive image">
          <div class="link">
            <a class="link-decorate" href="https://www.linkedin.com/in/hritika-verma-96a2a01a5/">
              <h4>Hritika Verma</h4>
            </a>
          </div>
        </div>
        <div class="col py-3 px-lg-5 mr-2 border">
          <img src="images/a7.jpg" class="img-fluid contact-image" alt="Responsive image">
          <div class="link">
            <a class="link-decorate" href="https://www.linkedin.com/in/sangeetha-panicker-339827140">
              <h4>Sangeetha</h4>
            </a>
          </div>
        </div>
        <div class="col py-3 px-lg-5 border">
          <img src="images/a5.jpg" class="img-fluid contact-image" alt="Responsive image">
          <div class="link">
            <a class="link-decorate" href="https://www.linkedin.com/in/sonam-prasad-2b28141b7">
              <h4>Sonam</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--CONTACT SECTION-->

  <!-- Modal LOGIN/SIGN-UP-->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Montserrat', sans-serif;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">LOGIN/SIGN-UP</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: black;">

          <div class="card">
            <div class="login-box">
              <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-space">
                  <form method="POST" action="login_action.php">
                    <div class="login">
                      <div class="form-group"> <label for="user" class="label">Email</label> <input id="user" type="email" name="email" class="input" placeholder="Enter your username"> </div>
                      <div class="form-group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="pass" class="input" data-type="password" placeholder="Enter your password"> </div>
                      <div class="form-group"> <input type="submit" name="login" class="button" value="Sign In" onclick="validate()"> </div>
                      <div class="hr"></div>
                      <div class="foot"> <a href="#">Forgot Password?</a> </div>
                      <p id="text"></p>
                    </div>
                  </form>

                  <form method="POST" action="signup_action.php">
                    <div class="sign-up-form">
                      <div class="form-group"> <label for="user" class="label">Name</label> <input id="user" type="text" class="input" name="name" placeholder="Create your Username"> </div>
                      <div class="form-group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="pass" class="input" data-type="password" placeholder="Create your password"> </div>
                      <div class="form-group"> <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" name="cpass" class="input" data-type="password" placeholder="Repeat your password"> </div>
                      <div class="form-group"> <label for="pass" class="label">Email Address</label> <input id="pass" type="email" name="email" class="input" placeholder="Enter your email address"> </div>
                      <div class="form-group"> <input type="submit" class="button" name="sign-up" value="Sign Up"> </div>
                      <div class="hr"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Modal LOGIN/SIGN-UP-->

  <!--MODAL SECTION FOR ACCENTURE-->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Montserrat', sans-serif;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header drive-m">
          <h5 class="modal-title" id="exampleModalLabel"><strong>ACCENTURE</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-body">
          <p>Accenture is a global professional services company with leading capabilities in digital, cloud and security.</p>
          <p>Accenture embraces the power of change to create 360° value and shared success in India for our clients, people, shareholders, partners and communities.</p>
          <p>CEO: Julie Sweet (1 Sep 2019–)</p>
          <p>Headquarters: Dublin, Ireland</p>
          <p><strong>Login/Sign-Up to kick-start your preparation</strong></p>
        </div>
        <div class="modal-footer drive-m">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Login/Sign-Up</button>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL SECTION FOR ACCENTURE-->

  <!--MODAL SECTION FOR CISCO-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Montserrat', sans-serif;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header drive-m">
          <h5 class="modal-title" id="exampleModalLabel"><strong>CISCO</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-body">
          <p>Cisco Systems, Inc. is an American multinational technology conglomerate headquartered in San Jose, California, in the center of Silicon Valley.</p>
          <p>Cisco develops, manufactures and sells networking hardware, software, telecommunications equipment and other high-technology services and products.</p>
          <p><strong>Login/Sign-Up to kick-start your preparation</strong></p>
        </div>
        <div class="modal-footer drive-m">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Login/Sign-Up</button>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL SECTION FOR CISCO-->

  <!--MODAL SECTION FOR IBM-->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Montserrat', sans-serif;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header drive-m">
          <h5 class="modal-title" id="exampleModalLabel"><strong>IBM</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-body">
          <p>International Business Machines Corporation is an American multinational technology and consulting company headquartered in Armonk, New York, with more than 350,000 employees serving clients in 170 countries.</p>
          <p>CEO: Arvind Krishna (6 Apr 2020–)</p>
          <p>Founder: Charles Ranlett Flint</p>
          <p><strong>Login/Sign-Up to kick-start your preparation</strong></p>
        </div>
        <div class="modal-footer drive-m">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Login/Sign-Up</button>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL SECTION FOR IBM-->

  <!--MODAL SECTION FOR INFOSYS-->
  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Montserrat', sans-serif;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header drive-m">
          <h5 class="modal-title" id="exampleModalLabel"><strong>INFOSYS</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-body">
          <p>Infosys Limited, is an Indian multinational corporation that provides business consulting, information technology and outsourcing services. The company is headquartered in Bangalore, Karnataka, India.</p>
          <p>Founded: 7 July 1981, Pune</p>
          <p>CEO: Salil Parekh (2 Jan 2018–)</p>
          <p><strong>Login/Sign-Up to kick-start your preparation</strong></p>
        </div>
        <div class="modal-footer drive-m">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Login/Sign-Up</button>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL SECTION FOR INFOSYS-->

  <!--MODAL SECTION FOR TCS-->
  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Montserrat', sans-serif;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header drive-m">
          <h5 class="modal-title" id="exampleModalLabel"><strong>TCS</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-body">
          <p>Tata Consultancy Services Limited is an Indian multinational information technology services and consulting company headquartered in Mumbai, Maharashtra, India.</p>
          <p>It is a subsidiary of the Tata Group and operates in 149 locations across 46 countries.</p>
          <p>Founded: 1 April 1968</p>
          <p>CEO: Rajesh Gopinathan (21 Feb 2017–)</p>
          <p><strong>Login/Sign-Up to kick-start your preparation</strong></p>
        </div>
        <div class="modal-footer drive-m">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Login/Sign-Up</button>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL SECTION FOR TCS-->


  <!--FORM-VALIDATION-->
  <!-- <script>
    function validate()
    {
      var name = document.getElementById("user").value;
      var pass = document.getElementById("pass").value;
      var p = document.getElementById("text");
      var regAlpha=/^[A-Za-z]{1,}$/;

      if(!name==""&&!pass=="")
      {
        if(regAlpha.test(name)){
          return true;
        }
        else{
          window.alert("Enter your correct name");
        }
      }
      else{
        window.alert("Enter all your details");
      }
    }
  </script> -->

  <script>
    function chk() {

      // alert("1");
      var pass = document.getElementById("pass").value;
      var cpass = document.getElementById("cpass").value;

      if (pass != cpass) {
        document.getElementById("error").innerHTML = "Passwords do not match!";
        document.getElementById("cpass").value = "";
      } else {
        document.getElementById("error").innerHTML = "Passwords match!";
      }
    }
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <!-- Always remember to call the above files first before calling the bootstrap.min.js file -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <!--JS CODE FOR NAVBAR SCROLLING-->
  <script>
    $(window).scroll(function() {
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 500);
    });
  </script>
</body>

</html>