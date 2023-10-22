<?php 

include("dbconnect.php");
include 'headeradmin.php';


$fname = $_POST['fname'];
$fic = $_POST['fic'];
$fpwd = password_hash($_POST['fpwd'], PASSWORD_DEFAULT);
$fadd = $_POST['fadd'];
$fstreet = $_POST['fstreet'];
$fcity = $_POST['fcity'];
$fpostcode = $_POST['fpostcode'];
$fphone = $_POST['fphone'];
$femail = $_POST['femail'];

$sql1 = "SELECT * FROM staff where accID = '$fic'";
$result = mysqli_query($con,$sql);

if($result)
{
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo"<script>
      window.location.href='createaccstaff.php';
      alert('User Already Exist!');
      </script>";
	}
	else
	{
		$sql = "INSERT INTO staff (accID, Acc_Name, Acc_Pass, Acc_Address, Acc_Street, Acc_City, Acc_Postcode, Acc_Pnum, Acc_Email, Acc_Type) VALUES('$fic', '$fname', '$fpwd', '$fadd', '$fstreet', '$fcity', '$fpostcode', '$fphone', '$femail', '2')";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo	"<script>
      window.location.href='admin.php';
      alert('Registeration Succesfull! Please login to book!');
      </script>";
	
		}
		else
		{
			die(mysqli_close($con));
		}

	}
}


?>

<?php include 'footer.php'; ?>