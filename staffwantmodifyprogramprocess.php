<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}
include("dbconnect.php");


$fic=$_SESSION['uid'];
$Program_ID = $_POST['Program_ID'];
$Program_name = $_POST['Program_name'];
$Program_desc = $_POST['Program_desc'];
$Program_fee = $_POST['Program_fee'];


$sql = "UPDATE program
        SET Program_name='$Program_name', Program_ID='$Program_ID' , Program_desc='$Program_desc', Program_fee='$Program_fee'
        WHERE Program_ID='$Program_ID'";

mysqli_query($con,$sql);
mysqli_close($con);

    include 'headerparent.php';
?>

<div class="container">
   <h3>Program details have been updated!</h3>
   <a href="staffmodifyprograms.php">Go back<a>
</div>


<?php include 'footer.php';?>