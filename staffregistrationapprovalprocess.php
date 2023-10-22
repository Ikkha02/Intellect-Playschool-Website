<?php 
include 'cbsession.php';

if(!session_id())
{
	session_start();
}
include("dbconnect.php");

//retrieve data from approval page
$fstatus = $_POST['fstatus'];
$fid = $_POST['fbid'];





// Update new booking into db
$sql = "UPDATE children
SET Reg_status='$fstatus' 
WHERE RegistrationID ='$fid'";
mysqli_query($con, $sql);

//kita ambil accID 
$sql2 = "SELECT accountID FROM children WHERE RegistrationID ='$fid'";
$result = mysqli_query($con, $sql2);
$row = mysqli_fetch_array($result);
$accID = $row['accountID'];

$sql3 = "UPDATE tb_user 
    SET Acc_Type = '1'
	WHERE accID = '$accID'"; 
mysqli_query($con, $sql3);
//var_dump($sql)





mysqli_close($con);

header('location: staffregapproval.php');

?>