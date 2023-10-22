<?php
  

include ("dbconnect.php");


if(isset($_POST['submit'])){

    $vak_new_values = $_POST['VAK_new_value'];
    $vak_types = $_POST['v_type'];
    $assessmentID = $_POST['assessmentID'];
    $Intel_new_values = $_POST['Intel_new_value'];
    $Intel_types = $_POST['Intel_ID'];

    // $subject_desc = $_POST['subject_desc'];
    // $manner = $_POST['manner'];
    // $writing = $_POST['writing'];
    // $reading = $_POST['reading'];
    // $counting = $_POST['counting'];

    // for ($i = 0; $i < count($subject_desc); $i++) {
    //     $sql = "UPDATE subject SET manner='$manner[$i]', writing='$writing[$i]', reading='$reading[$i]', counting='$counting[$i]' WHERE subject_desc='$subject_desc[$i]'";
    //     mysqli_query($con, $sql);
    // }

    foreach ($vak_types as $v_type) {
        if(empty($vak_new_values[$v_type]) OR empty($vak_types[$v_type])){
            continue;
        }else{
            $update_query = "UPDATE vak SET VAK_comm = '".$vak_new_values[$v_type]."' WHERE VAK_type = '".$v_type."' AND AssessmentID = '".$assessmentID."'";
            mysqli_query($con, $update_query);
        }
    }
    foreach ($Intel_types as $i_type) {

        if(empty($Intel_new_values[$i_type]) OR empty($Intel_types[$i_type])){
            continue;
        }else{
            $update_query2 = "UPDATE intelligence SET intelComm = '".$Intel_new_values[$i_type]."' WHERE Intel_type = '".$i_type."'AND AssessmentID = '".$assessmentID."' ";
            mysqli_query($con, $update_query2);
        }
    }


  
  }
?>