<?php
include('dbconnect.php');


$cid = $_POST['cid'];
$dateFirst =$_POST['dateFirst'];
$dateLast =$_POST['dateLast'];
$attend_reason =$_POST['attend_reason'];
$att_status = $_POST['attstatus'];


$sqlqq = "INSERT INTO expect_attendance(childID, attend_type, expectattStatus,dateFirst, dateLast, attend_reason) 
                VALUES ('$cid','0','$att_status','$dateFirst','$dateLast','$attend_reason')";

mysqli_query($con,$sqlqq);
mysqli_close($con);

header('location: viewexpectatt.php');


?>