<?php 
 include('../dbConnection.php'); session_start(); 
 if(!isset($_SESSION['is_login']))
 { 
     if(isset($_REQUEST['rEmail']))
     {    
        $rEmail = mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
     $rPassword = mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
     $sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email='".$rEmail."' AND r_password='".$rPassword."' limit 1";
     $result = $conn->query($sql);
     if($result->num_rows == 1)
     {      
       $_SESSION['is_login'] = true;
       $_SESSION['rEmail'] = $rEmail;
       // Redirecting to RequesterProfile page on Correct Email and Pass
       echo "<script> location.href='RequesterProfile.php'; </script>";
       exit;
     } 
     else
    {
       $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
    }  
 }
 } 
 else 
 {   echo "<script> location.href='RequesterProfile.php'; </script>"; }




// include ("../dbconnection.php");
//     $atmp = 0;
//     session_start();
// if (!isset($_SESSION['is_login'])){
//   if(isset($_REQUEST['rEmail'])){
//     $rEmail = mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
//    // $rEmail = $_POST['rEmail'];
//    $rPassword = mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
    
//     $atmp = $_POST['hidden'];
//     if($atmp<3){
//     $sql  = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email='".$rEmail."' AND r_password='".$rPassword."' limit 1";
//     $result = $conn->query($sql);
//     if($result){
//       $_SESSION['is_login'] = true;
//            $_SESSION['rEmail'] = $rEmail;
//         if (mysqli_num_rows($result)){
//             while (mysqli_fetch_array($result)) {
//                 echo "<script> location.href='RequesterProfile.php'; </script>";
//             }
//         }
//         else{
//             $atmp++;
//            // echo'<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
//             echo '<script> alert("You have entered invalid username/password and the number of attempt left is '. $atmp .'";</script>';
//         }
//     }    
// }
// if ($atmp==3) {
//     echo '<script> alert("You have invalid username/password!");</script>';
//     echo'<style>.btn1{visibility:hidden;}</style>';
//   }
//  }
// }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css">

    <title>Login</title>




</head>

<body>
    <div class="mb-3 mt-5 text-center" style="font-size: 30px;">
        <i class="fas fa-stethoscope"></i>
        <span>Service management system</span>
    </div>
    <p class="text-center" style="font-size:20px;"><i class=" fa fad fa-user-tie text-danger mr-4"></i>Requester Area</p>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-4" method="POST">
                <?php
// echo "<input type = 'hidden' name = 'hidden' value =  '".$atmp."'>";
//     ?>

                    <div class="form-group">
                        <i class="fa fa-thin fa-envelope"></i><label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="rEmail">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label><input type="Password" class="form-control" placeholder="Password" name="rPassword">
                        <!-- <small class="form-text text-danger">Forgot Password ?</small> -->
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-3 font-weight-bold btn-block shadow-sm btn1">Login</button>
                    <div class="text-center"><a href="../index.php" class="btn btn-outline-success mt-3 btn-block font-weight-bold shadow-sm">Home</a></div>
                    <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?>
                </form>

            </div>
        </div>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/all.min.js"></script>

</body>

</html>