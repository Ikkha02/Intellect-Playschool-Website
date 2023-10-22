<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}
include ('dbconnect.php');

//get booking ID from URL
if(isset($_GET['id'])){
    $activityID=$_GET['id'];
  }


//Update selected announcement into db
$sql = "UPDATE activity
        SET act_status='2'
        WHERE activityID='$activityID'";	

$result=mysqli_query($con,$sql);
mysqli_close($con);

echo "<script>
window.location.href='staff.php';
alert('The activity update has been deleted');
</script>";
?>