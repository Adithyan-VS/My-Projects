<?php
// if(isset($_REQUEST['submit'])) {

//  if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")){
  

//   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  
//  } else {
//  $name = $_REQUEST['name'];
//  $subject = $_REQUEST['subject'];
//  $email = $_REQUEST['email'];
//  $message = $_REQUEST['message'];

//  $mailTo = "contact@geekyshows.com";
//  $headers = "From: ". $email;
//  $txt = "You have received an email from ". $name. ".\n\n".$message;
//  mail($mailTo, $subject, $txt, $headers);
//  $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';

// }
// }
?>

<?php
//myphp
if(isset($_REQUEST['submitcon'])){
    //check for empty field
if(($_REQUEST['name']=="")||($_REQUEST['subject']=="")||($_REQUEST['email'])==""||($_REQUEST['message']=="")){
   
    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Fields</div>';
}
else{
    $conname = $_REQUEST['name'];
    $conemail = $_REQUEST['subject'];
    $consubject = $_REQUEST['email'];
    $conmessage = $_REQUEST['message'];
    
    
   $sql = "INSERT INTO contact_tb(con_name, con_email, con_subject, con_message) VALUES ('$conname','$conemail', '$consubject', '$conmessage')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $genid = mysqli_insert_id($conn);
   $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Message Submitted Successfully </div>';
    
    // include('submitrequestsuccess.php');
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit Message </div>';
   }
}
}
?>

<div class="container" id="Contact">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-md-8">
                    <form action="" method="POST">
                        <input type="text" class="form-control" name="name" placeholder="Name"><br>
                        <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                        <input type="email" class="form-control" name="email" placeholder="Email"><br>
                        <textarea class="form-control" name="message" placeholder="How can we help you ?" style="height:150px;"></textarea><br>
                        <input type="submit" class="btn btn-primary" value="Send" name="submitcon"><br><br>
                        <?php 
if(isset($msg)){echo $msg;}
?>
                    </form>
                </div>
                <!--End First column -->
                <div class="col-md-4 text-center">
                    <!-- Start 2nd column -->
                    <strong>Headquarter:</strong><br>
                    ABC Service Ltd,<br>
                    Jalahalli<br>
                    Bangalore - 562524<br>
                    Phone : +0000000000<br>

                    <br> <br>
                    <strong>Branches:</strong><br>
                    ABC Service Ltd,<br>
                    MG Road<br>
                    Bangalore - 562544<br>
                    Phone : +0000000000<br>
                    </div> <!--End 2nd Column-->
                </div>