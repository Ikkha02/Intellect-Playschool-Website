<?php

include('dbconnect.php');


$chid = $_POST['chid'];
$datef =$_POST['fdatemod'];
$datel =$_POST['ldatemod'];
$attend_approvalexp =$_POST['exp_attapprovalmod'];
$expatt_status = $_POST['exp_attstatusmod'];


$expsql = "UPDATE expect_attendance 
          SET dateLast = '$datef', dateFirst ='$datef', expectattstatus = '$expatt_status', attend_type = '$attend_approvalexp' 
          WHERE expectID = '$chid'";

mysqli_query($con,$expsql);
mysqli_close($con);

header('location: viewexpectatt.php');


?>