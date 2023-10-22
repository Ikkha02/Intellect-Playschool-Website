<?php
if (!session_id())
{
    session_start();
}
include ("dbconnect.php");

//retrieve data from form
$childID = $_POST['childID'];
$Program_ID = $_POST['Program_ID'];
$comments = $_POST['comments'];
$date = $_POST['date'];
$type = $_POST['type'];

//update booking status
$sqlx = "INSERT INTO assessment (childID, ProgramID , Assessment_type , AssessmentComments,assessmentDate ) 
            VALUES ('$childID','$Program_ID','$type','$comments','$date')";

if(mysqli_query($con,$sqlx)){
    $assessmentID = mysqli_insert_id($con);
    header("location:fklinsertdetail.php?childID=$childID&Program_ID=$Program_ID&assessmentID=$assessmentID");
}else{
    echo "Error: " . mysqli_error($con);
}


?>