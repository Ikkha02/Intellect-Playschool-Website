<?php
include("dbconnect.php");

   $fic = $_POST['fic'];
   $fdate = $_POST['fdate'];
   $fmonth = $_POST['fmonth'];
   $fpic = $_FILES['fpic'];

   $imagefilename=$fpic['name'];
   $imagefileerror=$fpic['error'];
   $imagefiletemp=$fpic['tmp_name'];


   $filename_separate=explode('.', $imagefilename);
   //$file_extension=strtolower($filename_separate[1]);
   //print_r($file_extension);
   $file_extension=strtolower(end($filename_separate));

   $extension=array('jpeg', 'jpg', 'png', 'jfif', 'pdf');
   if(in_array($file_extension, $extension)){
      $upload_image='payslip/'.$imagefilename;
      move_uploaded_file($imagefiletemp, $upload_image);
      $sql = "INSERT INTO tb_payslip(staff_ID, month, DATE, pic_sal) VALUES ('$fic', '$fmonth', '$fdate', '$imagefilename')";   
      $result=mysqli_query($con,$sql);
      if($result){
        // echo "Data inserted successfully";
      }else{
         die(mysqli_error($con));
      }

   }

   include 'headeradmin.php';



?>

<div class="container">
	<h1>PAYSLIP UPLOAD SUCCESSFULLY</h1>
	<a href="payslipviewadmin.php">Return</a>
</div>


<?php include 'footer.php'; ?>
