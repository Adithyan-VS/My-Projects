<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?>
    </title>
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <style>
        .nav-item:hover {
            /* border-right: solid 5px red; */
            border-left: solid 5px red;

        }

        .nav-item:active {
            background-color: blue;
        }
    </style>
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-success p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Service Management System</a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-primary sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'dashboard') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="dashboard.php">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'work') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="work.php">
                                <i class="fab fa-accessible-icon mr-2"></i>
                                Work Order
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'requests') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="request.php">
                                <i class="fas fa-align-center mr-2"></i>
                                Requests
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-white <?php //if(PAGE == 'assets') {echo 'text-primary border border-primary bg-white rounded';}
                                                            ?>" href="assets.php">
                                <i class="fas fa-database mr-2"></i>
                                Assets
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'technician') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="technician.php">
                                <i class="fab fa-teamspeak mr-2"></i>
                                Technician
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'requester') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="requester.php">
                                <i class="fas fa-users mr-2"></i>
                                Requester
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'sellreport') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="soldproductreport.php">
                                <i class="fas fa-table mr-2"></i>
                                Sell Report
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'workreport') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="workreport.php">
                                <i class="fas fa-table mr-2"></i>
                                Work Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'changepassword') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="changepass.php">
                                <i class="fas fa-key mr-2"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white <?php if (PAGE == 'logout') {
                                                                echo 'text-primary border border-primary bg-white rounded';
                                                            } ?>" href="../logout.php">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--end 1st column-->
