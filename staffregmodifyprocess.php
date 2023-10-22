<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}
include("dbconnect.php");


$fic=$_SESSION['uid'];
$childname = $_POST['childname'];
$childID = $_POST['childID'];
$childage = $_POST['childage'];
$favfood = $_POST['favfood'];
$favcolour = $_POST['favcolour'];
$favtoy = $_POST['favtoy'];
$DOB = $_POST['DOB'];
$DOR = $_POST['DOR'];
$Child_Allergies = $_POST['Child_Allergies'];
$optionsRadios3 = $_POST['optionsRadios3'];

$sql = "UPDATE children
        SET Child_name='$childname', childID='$childID', Child_age='$childage', Child_favfood='$favfood', Child_favcolor='$favcolour', Child_favtoy='$favtoy',  Child_DOB='$DOB', Child_dateregs='$DOR', Child_Allergies='$Child_Allergies' , Child_diapers='$optionsRadios3'
        WHERE childID='$childID'";

mysqli_query($con,$sql);
mysqli_close($con);

    include 'headerparent.php';
?>

<div class="container">
   <h3>Child details updated successfully!</h3>
   <a href="staffmanagereg.php">Profile<a>
</div>


<?php include 'footer.php';?>