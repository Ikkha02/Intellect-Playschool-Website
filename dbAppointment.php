<?php 



include 'cbsession.php';

if(!session_id())
{
  session_start();

}

include("dbconnect.php");
$fic=$_SESSION['uid'];
$appointment_date = $_POST['appointment_date'];
$appointment_method = $_POST['appointment_method'];
$appointment_status = $_POST['appointment_status'];


//  Retrieve individua bookings

$sql = "INSERT INTO appoinment_info(accID, appointment_date, appointment_method, appointment_status)
	VALUES ('$fic','$appointment_date','$appointment_method','1')";

$result = mysqli_query($con, $sql);

$sql = "SELECT * FROM appoinment_info
LEFT JOIN parent ON appoinment_info.accID = parent.accID 
LEFT JOIN appoinment_status ON appoinment_info.appointment_status = appoinment_status.appointment_status 
WHERE appoinment_info.accID = '$fic'";

// Recrod new booking into db


mysqli_query($con, $sql);

mysqli_close($con);
header('location: parentmanageapp.php');

?>

