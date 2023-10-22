<?php
include ('dbconnect.php');
include 'cbssession.php';
if (!session_id())
{
	session_start();
}

if(isset($_GET['id']))
{
	$freg=$_GET['id'];
}

//SQL Delete
$sql="DELETE FROM tb_payslip WHERE Sal_ID='$freg'";

$result=mysqli_query($con,$sql);
      if($result){
         echo "<script> 
alert('Vehicle Succesfully Deleted!');
window.location.href='payslipviewadmin.php';
</script>";
      }
      else{
         die(mysqli_error($con));
      }

?>