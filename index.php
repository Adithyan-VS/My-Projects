<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nova+Square&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <style>
/* .fnt{ */
    /* font-family:Verdana, Geneva, Tahoma, sans-serif; */
/* }  */

    </style>


    <title>Service Management System</title>
</head>

<body>
    <!-- Start Navigation -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-danger  pl-5 fixed-top">

        <a href="index.php" class="navbar-brand fnt"> Service Management System</a>
        <span class="navbar-text"><!--<pre>                                                  </pre>--></span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link" style="@import url('https://fonts.googleapis.com/css2?family=Nova+Square&family=Ubuntu:wght@300&display=swap');">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#Registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Start Header Jumboton-- boot strap class(jumbotron)-->
    <!-- Adding image and buttons inside jumbotron-->
    <header class="jumbotron back-image" style="background-image:url(images/Bannerrrr.jpg); ">
        <div class="myclass mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Welcome to Service Management System </h1>
            <p class="font-italic"></p>
            <!-- button for login and signup inside jumbotron-->
            <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#Registration" class="btn btn-danger mr-4">Sign Up</a>
        </div>
    </header>
    <div class="container">
        <div class="jumbotron">
            <!-- that box -->
            <h3 class="text-center">Our Service</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate quia odit, aliquid possimus impedit similique ut iste vitae reprehenderit accusantium maiores tempora quis nostrum distinctio, quae molestiae. Labore atque magnam quaerat, laboriosam aliquam illo, velit excepturi ipsa, maxime officia tempore ex! Dolorum itaque amet veritatis, nesciunt sed, quos est tempora blanditiis neque, ex quaerat modi earum. Laborum explicabo voluptatum earum error ipsum odio corporis.</p>
        </div>
        <!-- start service section -->
        <div class="container text-center border-bottom" id="Services">
            <h2>Our Services</h2>
            <div class="row mt-4">
                <div class="col-sm-4 mb-4">
                    <a href="#"><i class="fas fa-tv fa-8x text-primary"></i></a>
                    <h4 class="mt-4">Electronic Appliances</h4>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="#"><i class="fas fa-sliders-h fa-8x text-warning"></i></a>
                    <h4 class="mt-4">Preventive Maintainance</h4>
                </div>
                <div class="col-sm-4 mb-4">
                    <a href="#"><i class="fas fa-cogs fa-8x text-secondary"></i></a>
                    <h4 class="mt-4">Fault Repair</h4>
                </div>
            </div>
        </div>
        <!-- End Service section -->

        <!-- Start registration form -->
        <?php include('UserRegistration.php')?>
       
        <!-- End registration form -->

        <!-- Start Customer Review -->

        <!-- Customer 1 -->
        <div class="jumbotron bg-danger">
            <div class="container">
                <h2 class="text-center text-white">Happy Customers</h2>
                <div class="row mt-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-2">
                            <div class="card-body text-center">
                                <img src="images/downloadd.png" class="img-fluid" style="border-radius:100px;" alt="Loading Error">
                                <h4 class="card-title">Customer 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- customer 2 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-2">
                            <div class="card-body text-center">
                                <img src="images/downloaddd.png" class="img-fluid" style="border-radius:100px;" alt="Loading Error">
                                <h4 class="card-title">Customer 2</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- customer 3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-2">
                            <div class="card-body text-center">
                                <img src="images/downloadddd.png" class="img-fluid" style="border-radius:100px;" alt="Loading Error">
                                <h4 class="card-title">Customer 3</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- customer 4 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-2">
                            <div class="card-body text-center">
                                <img src="images/downloaddddd.png" class="img-fluid" style="border-radius:100px;" alt="Loading Error">
                                <h4 class="card-title">Customer 4</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact us -->
        <?php include('contactform.php')?>
       
           <!--End contact us -->

            <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->



            <!-- End Jumbotron -->
            <!-- Bootstrap & JavaScript-->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/all.min.js"></script>
</body>

</html>