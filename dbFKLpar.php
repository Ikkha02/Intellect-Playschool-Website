<?php 

include 'cbsession.php';
if(!session_id())
{
  session_start();

}
include("dbconnect.php");

$ParOccu = $_POST['ParOccu'];
$childcount = $_POST['childcount'];
$fic=$_SESSION['uid'];





$sql2 = "INSERT INTO parents_info(accountID, parent_Occupation, parent_Childcount)
	VALUES ('$fic' , '$ParOccu','$childcount')";
mysqli_query($con, $sql2);

$sql = "SELECT * FROM parent
LEFT JOIN parents_info ON parent.accID = parents_info.accountID 
WHERE parent.accID = '$fic'";

mysqli_query($con, $sql);

mysqli_close($con);

header('location: parentmanagereg.php');

?>

<div class= "container">
	<h3>Registration submitted! View your registration status here.</h3>
	<a href="parentmanagereg.php">View Registration <a>
	
</div>
