<?php 

include ('headerparent.php');
include ('dbconnect.php');


if (isset($_GET['cid']) && isset($_GET['type'])) {
  $cid = $_GET['cid'];
  $assessmentID = $_GET['type'];

  $sql = "SELECT AssessmentComments FROM assessment WHERE childID = $cid AND assessmentID = $assessmentID";
  $result = mysqli_query ($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $AssessmentComments = $row['AssessmentComments'];
}


$subassessment = "SELECT * FROM assessment
                  LEFT JOIN children ON assessment.ChildID = children.childID
                  LEFT JOIN subject ON assessment.assessmentID = subject.AssessmentID
                  LEFT JOIN subject_list ON subject.Sub_kod = subject_list.Sub_kod
                  LEFT JOIN achievementtype ON subject.Sub_Achievement = achievementtype.Sub_achievement
                  WHERE assessment.ChildID = $cid AND assessment.assessmentID = subject.AssessmentID
                  AND assessment.Assessment_type = '1' AND assessment.assessmentID = $assessmentID";

$subresult = mysqli_query($con,$subassessment);
$row=mysqli_fetch_array($subresult);

$vakassessment = "SELECT * FROM vak
                  LEFT JOIN assessment ON vak.AssessmentID = assessment.assessmentID
                  LEFT JOIN vak_type ON vak.VAK_type = vak_type.v_type
                  WHERE assessment.childID =$cid AND assessment.assessmentID = vak.AssessmentID
                  AND assessment.Assessment_type = '1'AND assessment.assessmentID = $assessmentID";

$vakresult = mysqli_query($con,$vakassessment);


$intelassessment = "SELECT * FROM intelligence
                  LEFT JOIN assessment ON intelligence.AssessmentID = assessment.assessmentID
                  LEFT JOIN i_type ON intelligence.Intel_type = i_type.Intel_ID
                  WHERE assessment.childID =$cid AND assessment.assessmentID = intelligence.AssessmentID 
                  AND assessment.Assessment_type = '1'AND assessment.assessmentID = $assessmentID";

$intelresult = mysqli_query($con,$intelassessment);

$subjectassessment = "SELECT * FROM subject
                  LEFT JOIN assessment ON subject.AssessmentID = assessment.assessmentID
                  LEFT JOIN subject_list ON subject.Sub_kod = subject_list.Sub_kod
                  LEFT JOIN achievementtype ON subject.Sub_Achievement = achievementtype.Sub_achievement
                  LEFT JOIN categorytype ON subject.Sub_category = categorytype.Sub_category
                  WHERE assessment.childID =$cid AND assessment.assessmentID = subject.AssessmentID 
                  AND assessment.Assessment_type = '1'AND assessment.assessmentID = $assessmentID";

$subjectresult = mysqli_query($con,$subjectassessment);
?>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

html {
  scroll-behavior: smooth;
}

</style>
</head>

 <!-- banner part here -->
    <section class="hero_banner_area" data-bg-color="#D7F0EB">
        <img class="bg_shape" src="img/home6/bg_illustrration.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero_banner_content">
                        <h2>Student Assessment <span class="title_overlay_effect"></span></h2>
                        <p><?php echo $AssessmentComments;?></p>
                        <p><?php echo $assessmentID;?></p>
                        <br>
                        <br>
                            <a type="submit" class="cu_btn btn_2" role="button" href="#c4">View Assessment</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/home6/man.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end -->
<!-- fetaures part here -->
    <section class="features_new_area section_padding">
        <img class="f_shap_bg" src="img/home6/features_bg_shap.png" alt="">
        <div class="container">
<br>
<br>
<br>

<div class="container">
            <div class="section_tittle_style_02 new_style mb-1">
                <h2 class="title wow fadeInDown" data-wow-delay=".3s" id="c4">V.A.K Assessment</h2>
                <p class="description wow fadeInDown" data-wow-delay=".3s">Kidzo mission is to provide affordable,
                    high-quality early education and childcare<br> services for working families to ensure every child.
                </p>
            </div>

         <br>
            <br>

<table>
  <tr>
    <th>Cara Pembelajaran (V.A.K) </th>
    <th>Description</th>

  </tr>
<?php
while($vakrow = mysqli_fetch_array($vakresult)){
  echo '<tr>';
  echo"<td>".$vakrow['v_desc']."</td>";
  echo  "<td>".$vakrow['VAK_comm']."</td>";
  echo'</tr>';
}
?>

</table>

<br>
<br>
<br>
<br>
<br>

<div class="container">
            <div class="section_tittle_style_02 new_style mb-1">
                <h2 class="title wow fadeInDown" data-wow-delay=".3s">Intelligence Assessment</h2>
                <p class="description wow fadeInDown" data-wow-delay=".3s">Kidzo mission is to provide affordable,
                    high-quality early education and childcare<br> services for working families to ensure every child.
                </p>
            </div>

         <br>
            <br>

<table>
<tr>
    <th>Kepelbagaian Kecerdasan </th>
    <th>Catatan / Komen</th>
  </tr>
<?php

while($vakrow = mysqli_fetch_array($intelresult)){
  echo '<tr>';
  echo"<td>".$vakrow['i_desc']."</td>";
  echo  "<td>".$vakrow['intelComm']."</td>";
  echo'</tr>';

}
?>
</table>
        </div>
    </section>
    <!-- features part end -->