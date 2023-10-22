<?php 


if (!session_id())

    {
        session_start();
    }

include ('dbassessment.php');


//retrieve data from approval page
$type = $_POST['type'];
$childID = $_POST['childID'];

//update booking status
    $sql = "INSERT INTO student_enroll (ChildID,sub_kod) VALUES ('$childID','$type')";
var_dump($sql);

mysqli_query ($con,$sql);
mysqli_close ($con);

header('location:staffenroll.php');

?>