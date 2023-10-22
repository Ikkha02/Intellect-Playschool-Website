<?php 


if (!session_id())

    {
        session_start();
    }

include ('dbconnect.php');

//retrieve data from approval page

$delete = $_POST['delete'];

//update booking status
$sql = "UPDATE i_type
        SET view_status='1'
        WHERE Intel_ID='$delete'";
var_dump($sql);

mysqli_query ($con,$sql);
mysqli_close ($con);

header('location:staffpaidview.php');

?>