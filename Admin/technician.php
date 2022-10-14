<?php 
define('TITLE','Technician');
define('PAGE','technician');


include('includes/header.php');
include('../dbConnection.php');

?>

<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white pt-2">
        List of Technicians
    </p>
    <?php 
    $sql="SELECT * FROM technician_tb";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo'<table class="table">';
        echo'<thead>';
        echo'<tr>';
        echo'<th scope="col">Emp ID</th>';
        echo'<th scope="col">Name</th>';
        echo'<th scope="col">City</th>';
        echo'<th scope="col">Mobile</th>';
        echo'<th scope="col">Email</th>';
        echo'<th scope="col">Action</th>';
        echo'</tr>';
        echo'</thead>';
        echo'<tbody>';
        while($row=$result->fetch_assoc()){
            echo'<tr>';
            echo'<td>'.$row["empid"].'</td>';
            echo'<td>'.$row["empName"].'</td>';
            echo'<td>'.$row["empCity"].'</td>';
            echo'<td>'.$row["empMobile"].'</td>';
            echo'<td>'.$row["empEmail"].'</td>';
            echo'<td>';
            echo'<form action="editemp.php" method="POST" class="d-inline">';
            echo'<input type="hidden" name="id" value='.$row["empid"].'><button type="submit" class="btn btn-danger mr-3" name="edit" value="Edit"><i class="fas fas fa-pen"></i></button>';
            echo'</form>';
            echo'<form action="" method="POST" class="d-inline">';
            echo'<input type="hidden" name="id" value='.$row["empid"].'><button type="submit" class="btn btn-dark mr-3" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>';
            echo'</form>';
            echo'</td>';
            echo'</tr>';


        }
        echo'</tbody>';
        echo'</table>';


    }else{
        '0 Results';
    }
    ?>
</div>
<?php
 if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM technician_tb WHERE empid = {$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo'<meta http-equiv="refresh" content="0; URL=?deleted" />';
    }else{
        echo'Unable to Delete';
    }
 }
 ?>



 </div><!-- end row -->
 <div class="float-right"><a href="insertemp.php" class="btn btn-warning text-dark border-dark"><i class="fas fa-plus fa-2x"></i></a></div>

    </div><!-- end container -->


    <!-- javascript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>