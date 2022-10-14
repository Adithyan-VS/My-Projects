<?php 
define('TITLE','Success');
//include('includes/header.php');
include('../dbConnection.php');
//session_start();
//if($_SESSION['is_login']){
  // $rEmail = $_SESSION['rEmail']; 
//}
//else{
  //  echo"<script> location.href='RequesterLogin.php'</script>";
//}
$sql ="SELECT * FROM submitrequest_tb ORDER BY request_id DESC LIMIT 1";
$result=$conn->query($sql);
if($result->num_rows == 1){
   $row = $result->fetch_assoc();
    //echo "Works";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo TITLE ?>
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="../css/custom.css">
	<style> 
.raw{
	padding-left: 300px;
	padding-right:300px;
	padding-top: 100px;
	
	
}
.btn-danger{
	width: 75%;
}
.btn-success{
	width:75%;
}
tr{
	border:solid 1px lightgray;
}
@media only screen and (max-width:600px) {
    .raw {
        margin-top: 275px;
        text-align: center;
		padding: 10px;
    }
}
</style>
</head>

 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">Service Management System</a>
    </nav>

<div class="raw mt-5 mt-5"><!-- Start 2nd Column Area of the Request Success -->
 	<table class="table">
 		<tbody>
 			<tr>
 				<th>Request ID</th>
 				<td><?php echo $row['request_id'] ?></td>
 			</tr>
 			<tr>
 				<th>Name</th>
 				<td><?php echo $row['requester_name'] ?></td>
 			</tr>
 			<tr>
 				<th>Email ID</th>
 				<td><?php echo $row['requester_email'] ?></td>
 			</tr>
 			<tr>
 				<th>Request Info</th>
 				<td><?php echo $row['request_info'] ?></td>
 			</tr>
 			<tr>
 				<th>Request Description</th>
 				<td><?php echo $row['request_desc'] ?></td>
 			</tr>

 			<tr>
 				<td class="prnt"><form class="d-print-none"><input type="submit" class="btn btn-danger" value="Print" onClick="window.print()"></form></td>
				 <!-- <td><form class="d-back-none"><input type="submit" class="btn btn-alert" value="Back"></form></td> -->
				 <td class="bck"><a href="RequesterProfile.php" class="btn btn-success">Back</a></td>
				
				</tr>
				
 		</tbody>
 	</table>
 </div>
<?php
include('includes/footer.php'); 
$conn->close();
?>