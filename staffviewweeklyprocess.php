<?php
session_start();

//DB CONNECTION
include("dbconnect.php");

//RETRIEVE INPUT
$cid = $_POST['cid'];
$type = $_POST['type'];


//GET THE USER DATA FROM DB
$sql = "SELECT * FROM assessment WHERE childID = $cid AND assessmentID =$type ";

//execute sql		
$result = mysqli_query ($con,$sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

//login check
if ($count==1) 		//user found
{
	if ($row['ProgramID'] ==1 )	//admin
			{
				header('Location: fklviewweekly.php?cid=' . urlencode($cid) . '&type=' . urlencode($type) . '&assessmentcomments=' . urlencode($row['AssessmentComments']));

			}
			else
			{
				header('Location: leviewweekly.php?cid=' . urlencode($cid) . '&type=' . urlencode($type) . '&assessmentcomments=' . urlencode($row['AssessmentComments']));

			}
}
else 				//user not found
{
	//display error
	include 'headerpublic.php';

}

mysqli_close($con);

?>


