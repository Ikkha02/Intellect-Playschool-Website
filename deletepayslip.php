<?php
include ('dbconnect.php');
include 'cbsession.php';
if (!session_id())
{
	session_start();
}

if(isset($_GET['id'])){
	$freg=$_GET['id'];
}

if(isset($_POST['confirm'])){
//SQL Delete
$sql="DELETE FROM tb_payslip WHERE Sal_ID='$freg'";

$result=mysqli_query($con,$sql);
    if($result){
        echo "<script> 
        alert('Payslip deleted successfully');
        window.location.href='payslipviewadmin.php';
        </script>";
    }else
    {
        die(mysqli_error($con));
    }
}
else{
    echo "<script> 
    var c = confirm('Are You Sure You Want to delete this Booking?');
    if(c){
        window.location.href='deletepayslipprocess.php?id=".$freg."&confirm=1';
    }else{
        window.location.href='payslipviewadmin.php';
    }
    </script>";
}