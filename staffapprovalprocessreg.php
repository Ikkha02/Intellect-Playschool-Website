<?php 


if (!session_id())

	{
		session_start();
	}

include ('dbconnect.php');

//retrieve data from approval page
$fbid = $_POST['fbid'];
$fstatus = $_POST['fstatus'];
$amount = $_POST['amount'];


//update booking status
$sql = "UPDATE registrationPayment
		SET r_status='$fstatus' , r_amount = '$amount' 
		WHERE ReceiptID='$fbid'";
var_dump($sql);

mysqli_query ($con,$sql);
mysqli_close ($con);

header('location:staffpaidview.php');

?>