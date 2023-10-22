<?php
session_start(); //make sure session is started
include ('dbconnect.php');

if(isset($_POST['type']) && !empty($_POST['type'])){
    $type = $_POST['type'];
    $sql = "INSERT INTO i_type (i_desc, view_status) VALUES ('$type','0')";
    var_dump($sql);
    mysqli_query ($con,$sql);
}else{
    echo "The type field is empty";
}


header('location:insertintelligencetype.php');

?>