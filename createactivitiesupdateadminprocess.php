<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}
include("dbconnect.php");

	 $fic=$_SESSION['uid'];
	 $acttitle = $_POST['acttitle'];
    $actimage = $_FILES['actimage'];
    $actcontent = $_POST['actcontent'];
    $actdate = $_POST['actdate'];

	$imagefilename=$actimage['name'];
	print_r($imagefilename);
	echo "<br>";
	$imagefileerror=$actimage['error'];
	print_r($imagefileerror);
	echo "<br>";
	$imagefiletemp=$actimage['tmp_name'];
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
		$upload_image='image_activitiesupdate/'.$imagefilename;
		move_uploaded_file($imagefiletemp, $upload_image);
		$sql = "INSERT INTO activity(act_title, act_image, act_content, act_date, act_status, accID)
                        VALUES ('$acttitle', '$imagefilename', '$actcontent', '$actdate ', '1', '$fic')";	
		$result=mysqli_query($con,$sql);
		if($result){
			echo "<script>
      		window.location.href='admin.php';
      		alert('The activity update has been post');
     	 	</script>";
		}else{
			echo "<script>
      		window.location.href='createactivitiesupdateadmin.php;
      		alert('There is some error while post the announcement. Please try again');
     	 	</script>";
			die(mysqli_error($con));
		}

	}
	else {
		echo "<script>
      		window.location.href='createactivitiesupdateadmin.php';
      		alert('The inserted file is not a compatible image file. Please insert a JPEG, JPG or PNG file');
     	</script>";
	}
?>
