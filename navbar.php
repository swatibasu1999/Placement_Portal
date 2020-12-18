 <!--NAVBAR-->
 <section class="header" id="navbar" style="font-family: 'Montserrat', sans-serif;">
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark header" style="height: 80px;">
     <a class="navbar-brand" href="#">
       <h1><strong>LET'S GET HIRED</strong></h1>
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
       <ul class="navbar-nav">
         <li class="nav-item active">
           <a class="nav-link" href="#id-about">About <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#company-drive">Drive</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#id=contact">Contact</a>
         </li>
         <?php
          if(isset($_SESSION["userLoggedIn"]))
          {
          ?>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
             <ul class="nav navbar-nav nav-flex-icons ml-auto ">
               <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["uname"]; ?></a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <!-- <a class="dropdown-item" href="changepassword.php">Change Account Password</a> -->
                 <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                 <a class="dropdown-item" href="logout.php">Logout</a>
               </div>
             </ul>
           </div>
         <?php
          } else {
          ?>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
             <ul class="nav navbar-nav nav-flex-icons ml-auto ">
               <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login/Sign-Up</a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <!-- <a class="dropdown-item" href="changepassword.php">Change Account Password</a> -->
                 <a class="dropdown-item" href="login.php">Login/Sign-Up</a>
                 <a class="dropdown-item" href="admin.php">Admin Login</a>
               </div>
             </ul>
           </div>
         <?php
          }
          ?>
       </ul>
     </div>
   </nav>
 </section>
 <!--NAVBAR-->