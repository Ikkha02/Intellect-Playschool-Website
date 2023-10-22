<?php 

if (!session_id()) {
    session_start();
}

include ("dbconnect.php");

//retrieve data from approval page
$assessmentID = $_POST['assessmentID'];
$visual = $_POST['visual'];
$audio = $_POST['audio'];
$kinestetik = $_POST['kinestetik'];
$comments = $_POST['comments'];

//update booking status
$sqlstatus = "INSERT INTO  vak (AssessmentID , VAK_type , VAK_comm ) 
                VALUES 
                ('$assessmentID', '1', '$visual'),
                ('$assessmentID', '2', '$audio'),
                ('$assessmentID', '3', '$kinestetik'),
                ('$assessmentID', '4', '$comments')";

if(!mysqli_query($con, $sqlstatus)){
    echo mysqli_error($con);
}else{
    header('location:fklinsert.php');
}

?>