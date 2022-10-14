<!-- Start registration form -->
<?php
include('dbconnection.php');
if (isset($_REQUEST['rSignup'])) {
    // check for empty fields
    if (($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "") || ($_REQUEST['rPhone'] == "")) {
        $regmsg = '<div class="alert alert-warning mt-2" role="alert">All fields are required</div>';
    } else {
        //check for email req already
        $sql = "select r_email from requesterlogin_tb where r_email='" . $_REQUEST['rEmail'] . "'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $regmsg = '<div class="alert alert-warning mt-2" role="alert">Email Registered Already</div>';
        } else {
            // saving id to php variable
            $rName = $_REQUEST['rName'];
            $rEmail = $_REQUEST['rEmail'];
            $rPassword = $_REQUEST['rPassword'];
            $rPhone = $_REQUEST['rPhone'];

            $sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_phone,r_password) values('$rName','$rEmail','$rPhone','$rPassword')";
            if ($conn->query($sql) == true) {
                $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Successfully Created</div>';
            } else {
                $regmsg = '<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
                $mysqli->close();
            }
        }
    }
}
?>

<div class="container pt-5" id="Registration">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <!-- Name Field-->
                <div class="form-group">
                    <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="rName">
                </div>
                <!-- Email Field-->
                <div class="form-group">
                    <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="rEmail">
                </div>
                <!-- Phonr no -->
                <div class="form-group">
                    <i class="fas fa-phone"></i> <label for="pass" class="font-weight-bold pl-2">Phone Number</label><input type="tel" class="form-control" placeholder="10-Digit-Phone Number" name="rPhone" maxlength="10" pattern="[1-9]{1}[0-9]{9}">
                </div>

                <!-- Password Field-->
                <div class="form-group">
                    <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
                </div>
                <!-- Seq Question -->
                <!-- <div class="form-group">
                    <i class="fas fa-phone"></i> <label for="pass" class="font-weight-bold pl-2">Sequrity Question</label><br>
                    <select class="form-select form-select-sm">
                        <option value="volvo">First School Name ?</option>
                        <option value="saab">First Pet Name ?</option>
                        <option value="opel">Favorite Subject ? </option>
                    </select>
                </div> -->
                <!-- <div class="form-group">
                    <i class="fas fa-phone"></i> <label for="pass" class="font-weight-bold pl-2">Phone Number</label><input type="tel" class="form-control" placeholder="10-Digit-Phone Number" name="rPhone" pattern="[1-9]{1}[0-9]{9}">
                </div> -->
                <button type="Submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                <!-- <em style="font-size:10px">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy</em> -->
                <?php if (isset($regmsg)) {
                    echo $regmsg;
                }
                ?>
            </form>

        </div>
    </div>
</div>
<!-- End registration form -->