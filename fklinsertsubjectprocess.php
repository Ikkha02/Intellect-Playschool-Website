<?php 

if (!session_id()) {
    session_start();
}

include ("dbconnect.php");

//retrieve data from approval page
$assessmentID = $_POST['assessmentID'];
$manner1 = $_POST['manner1'];
$writing1 = $_POST['writing1'];
$reading1 = $_POST['reading1'];
$counting1 = $_POST['counting1'];
$manner2 = $_POST['manner2'];
$writing2 = $_POST['writing2'];
$reading2 = $_POST['reading2'];
$counting2 = $_POST['counting2'];
$manner3 = $_POST['manner3'];
$writing3 = $_POST['writing3'];
$reading3 = $_POST['reading3'];
$counting3 = $_POST['counting3'];
$manner4 = $_POST['manner4'];
$writing4 = $_POST['writing4'];
$reading4 = $_POST['reading4'];
$counting4 = $_POST['counting4'];
$manner5 = $_POST['manner5'];
$writing5 = $_POST['writing5'];
$reading5 = $_POST['reading5'];
$counting5 = $_POST['counting5'];
$manner6 = $_POST['manner6'];
$writing6 = $_POST['writing6'];
$reading6 = $_POST['reading6'];
$counting6 = $_POST['counting6'];
$manner7 = $_POST['manner7'];
$writing7 = $_POST['writing7'];
$reading7 = $_POST['reading7'];
$counting7 = $_POST['counting7'];
$manner8 = $_POST['manner8'];
$writing8 = $_POST['writing8'];
$reading8 = $_POST['reading8'];
$counting8 = $_POST['counting8'];
$manner9 = $_POST['manner9'];
$writing9 = $_POST['writing9'];
$reading9 = $_POST['reading9'];
$counting9 = $_POST['counting9'];
$visual = $_POST['visual'];
$audio = $_POST['audio'];
$kinestetik = $_POST['kinestetik'];
$comments = $_POST['comments'];
$Bahasa = $_POST['Bahasa'];
$Logik = $_POST['Logik'];
$Muzikal = $_POST['Muzikal'];
$Visual = $_POST['Visual'];
$Kinestetik = $_POST['Kinestetik'];
$Interpersonal = $_POST['Interpersonal'];
$Intrapersonal = $_POST['Intrapersonal'];
$Naturalis = $_POST['Naturalis'];
$Existentialis = $_POST['Existentialis'];


//update booking status
$sqlstatus = "INSERT INTO  vak (AssessmentID , VAK_type , VAK_comm ) 
                VALUES ('$assessmentID', '1', '$visual'),
                ('$assessmentID', '2', '$audio'),
                ('$assessmentID', '3', '$kinestetik'),
                ('$assessmentID', '4', '$comments')";


//insert into new table1
$sqlstatus2 = "INSERT INTO intelligence (AssessmentID, Intel_type, intelComm)
VALUES
    ('$assessmentID', '1', '$Bahasa'),
    ('$assessmentID', '2', '$Logik'),
    ('$assessmentID', '3', '$Muzikal'),
    ('$assessmentID', '4', '$Visual'),
    ('$assessmentID', '5', '$Kinestetik'),
    ('$assessmentID', '6', '$Interpersonal'),
    ('$assessmentID', '7', '$Intrapersonal'),
    ('$assessmentID', '8', '$Naturalis'),
    ('$assessmentID', '9', '$Existentialis') ";



$sqlstatus3 = "INSERT INTO subject (AssessmentID, Sub_kod, Sub_Achievement, Sub_category)
                VALUES 
			   ('$assessmentID' , '1' , '$manner1' , '1'),
			   ('$assessmentID' , '1' , '$writing1' ,'2'),
			   ('$assessmentID' , '1' , '$reading1' ,'3'),
			   ('$assessmentID' , '1' , '$counting1','4'),
			   ('$assessmentID' , '2' , '$manner2' , '1'),   
			   ('$assessmentID' , '2' , '$writing2' ,'2'),
			   ('$assessmentID' , '2' , '$reading2' ,'3'),
			   ('$assessmentID' , '2' , '$counting2','4'),
			   ('$assessmentID' , '3' , '$manner3' , '1'),
			   ('$assessmentID' , '3' , '$writing3' ,'2'),
			   ('$assessmentID' , '3' , '$reading3', '3'),
			   ('$assessmentID' , '3' , '$counting3','4'),
			   ('$assessmentID' , '4' , '$manner4' , '1'),
			   ('$assessmentID' , '4' , '$writing4' ,'2'),
			   ('$assessmentID' , '4' , '$reading4' ,'3'),
			   ('$assessmentID' , '4' , '$counting4','4'),
			   ('$assessmentID' , '5' , '$manner5' , '1'),
			   ('$assessmentID' , '5' , '$writing5' ,'2'),
			   ('$assessmentID' , '5' , '$reading5' ,'3'),
			   ('$assessmentID' , '5' , '$counting5','4'),
			   ('$assessmentID' , '6' , '$manner6' , '1'),
			   ('$assessmentID' , '6' , '$writing6' ,'2'),
			   ('$assessmentID' , '6' , '$reading6' ,'3'),
			   ('$assessmentID' , '6' , '$counting6','4'),
			   ('$assessmentID' , '7' , '$manner7' , '1'),
			   ('$assessmentID' , '7' , '$writing7' ,'2'),
			   ('$assessmentID' , '7' , '$reading7' ,'3'),
			   ('$assessmentID' , '7' , '$counting7','4'),
			   ('$assessmentID' , '8' , '$manner8' , '1'),
			   ('$assessmentID' , '8' , '$writing8' ,'2'),
			   ('$assessmentID' , '8' , '$reading8' ,'3'),
			   ('$assessmentID' , '8' , '$counting8','4'),
			   ('$assessmentID' , '9' , '$manner9' , '1'),
			   ('$assessmentID' , '9' , '$writing9' ,'2'),
			   ('$assessmentID' , '9' , '$reading9' ,'3'),
			   ('$assessmentID' , '9' , '$counting9','4')";




if(!mysqli_query($con, $sqlstatus)){
    echo mysqli_error($con);
}else{
    if(!mysqli_query($con, $sqlstatus2)){
        echo mysqli_error($con);
    }else{
        if(!mysqli_query($con, $sqlstatus3)){
            echo mysqli_error($con);
        }else{
            header('location:fklinsert.php');
        }
    }
}

?>