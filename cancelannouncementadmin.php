<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}
include ('dbconnect.php');

//get booking ID from URL
if(isset($_GET['id'])){
	$AnnounceID=$_GET['id'];
}


//Update selected announcement into db
$sqlaa = "UPDATE announcement
        SET A_status='2'
        WHERE AnnounceID='$AnnounceID'";	

$result=mysqli_query($con,$sqlaa);
mysqli_close($con);

echo "<script>
window.location.href='admin.php';
alert('The announcement has been deleted');
</script>";
?>