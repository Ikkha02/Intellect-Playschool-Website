<?php 

include("dbconnect.php");


$fname = $_POST['fname'];
$fic = $_POST['fic'];
$fpwd = password_hash($_POST['fpwd'], PASSWORD_DEFAULT);
$fphone = $_POST['fphone'];
$femail = $_POST['femail'];

$sql = "INSERT INTO parent (Acc_Name, accID, Acc_Pass, Acc_Pnum, Acc_Email, Acc_Type) VALUES('$fname', '$fic', '$fpwd', '$fphone', '$femail', '4')";

$result = mysqli_query($con,$sql);

$sql1 = "SELECT * FROM parent WHERE accID = '$fic'";

$result = mysqli_query($con,$sql1);
if($result)
{
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo"<script>
      window.location.href='createacc.php';
      alert('User Already Exist!');
      </script>";
	}
	else
	{
		$sql = "INSERT INTO parent (Acc_Name, accID, Acc_Pass, Acc_Pnum, Acc_Email, Acc_Type) VALUES('$fname', '$fic', '$fpwd', '$fphone', '$femail', '4')";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo	"<script>
      window.location.href='login.php';
      alert('Registeration Succesfull! Please login to book!');
      </script>";
	
		}
		else
		{
			die(mysqli_close($con));
		}

	}
}


include 'header.php';

?>

<?php include 'footer.php'; ?>
