<?php
include "dbconnect.php";
include 'cbsession.php';

if(isset($_GET['id'])){
  $carnumplate=$_GET['id'];
}

   $Atitle = $_POST['Atitle'];
   $Aimage = $_FILES['Aimage'];
   $Acontent = $_POST['Acontent'];
   $Adate = $_POST['Adate'];
   $Aid = $_POST['Aid'];
   $fic=$_SESSION['uid'];

   if(!empty($_FILES['Aimage']['name'])) {
    $Aimage = $_FILES['Aimage'];
    $img_name = $_FILES['Aimage']['name'];
    $img_size = $_FILES['Aimage']['size'];
    $tmp_name = $_FILES['Aimage']['tmp_name'];
    $error = $_FILES['Aimage']['error'];
  
    if ($error === 0) {
      if ($img_size > 100000000) {
        echo "<script>
        window.location.href='announcementmodifystaff.php?id=".$_POST['Aid']."';
        alert('Sorry, your file is too large');
        </script>"; 
      }else {
           $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
           $img_ex_lc = strtolower($img_ex);
  
           $allowed_exs = array("jpg", "jpeg", "png"); 
  
           if (in_array($img_ex_lc, $allowed_exs)) {
              $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
              $img_upload_path ='image_announcement/'.$new_img_name;
              move_uploaded_file($tmp_name, $img_upload_path);
  
              // Insert into Database
              $sql = "UPDATE announcement
              SET A_title='$Atitle', A_image='$new_img_name', A_content='$Acontent', A_date='$Adate', A_status='1',accID='$fic'
              WHERE AnnounceID= ' $Aid'";  
              mysqli_query($con, $sql);
              mysqli_close($con);
           echo "<script>
           window.location.href='staff.php';
           alert('The announcement has been modify');
           </script>";  
        }else {
          echo "<script>
           window.location.href='announcementmodifystaff.php?id=".$_POST['Aid']."';
           alert('The inserted file is not a compatible image file. Please insert a JPEG, JPG or PNG file');
           </script>"; 
        }
     }
    }else {
      echo "<script>
           window.location.href='announcementmodifystaff.php?id=".$_POST['Aid']."';
           alert('There is some error while modify the announcement. Please try again');
           </script>"; 
    }
  } else {
    // Insert into Database without the image
    $sql = "UPDATE announcement
    SET A_title='$Atitle', A_content='$Acontent', A_date='$Adate', A_status='1',accID='$fic'
    WHERE AnnounceID= ' $Aid'";  
    mysqli_query($con, $sql);
    mysqli_close($con);
    echo "<script>
    window.location.href='staff.php';
    alert('The announcement has been modify');
    </script>"; 
  }
  


?>