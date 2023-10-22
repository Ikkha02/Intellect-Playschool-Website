<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}
include("dbconnect.php");

	$fic=$_SESSION['uid'];
	$Atitle = $_POST['Atitle'];
   $Aimage = $_FILES['Aimage'];
   $Acontent = $_POST['Acontent'];
   $Adate = $_POST['Adate'];

	$imagefilename=$Aimage['name'];
	print_r($imagefilename);
	echo "<br>";
	$imagefileerror=$Aimage['error'];
	print_r($imagefileerror);
	echo "<br>";
	$imagefiletemp=$Aimage['tmp_name'];
	print_r($imagefiletemp);
	echo "<br>";


	$filename_separate=explode('.', $imagefilename);
	print_r($filename_separate);
	echo "<br>";
	//$file_extension=strtolower($filename_separate[1]);
	//print_r($file_extension);
	$file_extension=strtolower(end($filename_separate));
	print_r($file_extension);
	echo "<br>";

	$extension=array('jpeg', 'jpg', 'png');
	if(in_array($file_extension, $extension)){
		$upload_image='image_announcement/'.$imagefilename;
		move_uploaded_file($imagefiletemp, $upload_image);
		$sql = "INSERT INTO announcement(A_title, A_image, A_content, A_date, A_status, accID)
                        VALUES ('$Atitle', '$imagefilename', '$Acontent', '$Adate', '1' , '$fic')";	
		$result=mysqli_query($con,$sql);
		if($result){
			echo "<script>
      		window.location.href='admin.php';
      		alert('The announcement has been post');
     	 	</script>";
		}else{
			echo "<script>
      		window.location.href='createannouncementadmin.php';
      		alert('There is some error while post the announcement. Please try again');
     	 	</script>";
			die(mysqli_error($con));
		}

	}
	else {
		echo "<script>
      		window.location.href='createannouncementadmin.php';
      		alert('The inserted file is not a compatible image file. Please insert a JPEG, JPG or PNG file');
     	</script>";
	}
?>>
