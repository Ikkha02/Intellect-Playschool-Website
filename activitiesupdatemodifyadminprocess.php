<?php
include "dbconnect.php";
include 'cbsession.php';

if(isset($_GET['id'])){
  $carnumplate=$_GET['id'];
}

$fic=$_SESSION['uid'];
$Actid = $_POST['Actid'];
$acttitle = $_POST['acttitle'];
$actimage = $_FILES['actimage'];
$actcontent = $_POST['actcontent'];
$actdate = $_POST['actdate'];

if(!empty($_FILES['actimage']['name'])) {
   $actimage = $_FILES['actimage'];
  $img_name = $_FILES['actimage']['name'];
$img_size = $_FILES['actimage']['size'];
$tmp_name = $_FILES['actimage']['tmp_name'];
$error = $_FILES['actimage']['error'];

  if ($error === 0) {
    if ($img_size > 100000000) {
      echo "<script>
      window.location.href='activitiesupdatemodifyadmin.php?id=".$_POST['Actid']."';
      alert('Sorry, your file is too large');
      </script>"; 
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
         $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
         $img_upload_path ='image_activitiesupdate/'.$new_img_name;
         move_uploaded_file($tmp_name, $img_upload_path);

         // Insert into Database
         $sql = "UPDATE activity
         SET act_title='$acttitle ', act_image='$new_img_name', act_content='$actcontent', act_date='$actdate', act_status='1', accID='$fic'
         WHERE activityID='$Actid'";  
         mysqli_query($con, $sql);
         mysqli_close($con);
         echo "<script>
         window.location.href='admin.php';
         alert('The activity update has been modify');
         </script>";  
      }else {
        echo "<script>
        window.location.href='activitiesupdatemodifyadmin.php?id=".$_POST['Actid']."';
         alert('The inserted file is not a compatible image file. Please insert a JPEG, JPG or PNG file');
         </script>"; 
      }
   }
  }else {
    echo "<script>
    window.location.href='activitiesupdatemodifyadmin.php?id=".$_POST['Actid']."';
         alert('There is some error while modify the activity update. Please try again');
         </script>"; 
  }
} else {
  // Insert into Database without the image
  $sql = "UPDATE activity
  SET act_title='$acttitle ', act_content='$actcontent', act_date='$actdate', act_status='1', accID='$fic'
  WHERE activityID='$Actid'";  
      mysqli_query($con, $sql);
      mysqli_close($con);
  echo "<script>
  window.location.href='admin.php';
  alert('The activity update has been modify');
  </script>"; 
}


?>