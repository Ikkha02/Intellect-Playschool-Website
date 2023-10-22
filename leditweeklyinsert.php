<?php 

include ('headerstaff.php');
include ('dbconnect.php');


if (isset($_GET['cid']) && isset($_GET['type'])){

  $cid = $_GET['cid'];
  $assessmentID = $_GET['type'];
}


$sql = "SELECT * FROM assessment where assessmentID ='$assessmentID'";
 
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

$subassessment = "SELECT * FROM assessment
                  LEFT JOIN children ON assessment.ChildID = children.childID
                  LEFT JOIN subject ON assessment.assessmentID = subject.AssessmentID
                  LEFT JOIN subject_list ON subject.Sub_kod = subject_list.Sub_kod
                  LEFT JOIN achievementtype ON subject.Sub_Achievement = achievementtype.Sub_achievement
                  WHERE assessment.ChildID = $cid AND assessment.assessmentID = subject.AssessmentID
                  AND assessment.Assessment_type = '0' AND assessment.ProgramID = '2' AND assessment.assessmentID = $assessmentID";

$subresult = mysqli_query($con,$subassessment);

$vakassessment = "SELECT * FROM vak
                  LEFT JOIN assessment ON vak.AssessmentID = assessment.assessmentID
                  LEFT JOIN vak_type ON vak.VAK_type = vak_type.v_type
                  WHERE assessment.childID =$cid AND assessment.assessmentID = vak.AssessmentID
                  AND assessment.Assessment_type = '0'AND assessment.ProgramID = '2' AND assessment.assessmentID = $assessmentID";

$vakresult = mysqli_query($con,$vakassessment);


$intelassessment = "SELECT * FROM intelligence
                  LEFT JOIN assessment ON intelligence.AssessmentID = assessment.assessmentID
                  LEFT JOIN i_type ON intelligence.Intel_type = i_type.Intel_ID
                  WHERE assessment.childID =$cid AND assessment.assessmentID = intelligence.AssessmentID 
                  AND assessment.Assessment_type = '0'AND assessment.ProgramID = '2' AND assessment.assessmentID = $assessmentID";

$intelresult = mysqli_query($con,$intelassessment);

$subjectassessment = "SELECT * FROM subject
                  LEFT JOIN assessment ON subject.AssessmentID = assessment.assessmentID
                  LEFT JOIN subject_list ON subject.Sub_kod = subject_list.Sub_kod
                  LEFT JOIN achievementtype ON subject.Sub_Achievement = achievementtype.Sub_achievement
                  LEFT JOIN categorytype ON subject.Sub_category = categorytype.Sub_category
                  WHERE assessment.childID =$cid AND assessment.assessmentID = subject.AssessmentID 
                  AND assessment.Assessment_type = '0'AND assessment.ProgramID = '2' AND assessment.assessmentID = $assessmentID";

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
</style>
</head>

 <!-- fetaures part here -->
    <section class="features_new_area section_padding">

        <img class="f_shap_bg" src="img/home6/features_bg_shap.png" alt="">
        <div class="container">
            <div class="section_tittle_style_02 new_style mb-1">
                <h3 class="title wow fadeInDown" data-wow-delay=".3s">Edit The Assessment Details <?php echo $assessmentID?></h3>
                <br>
            </div>
</form>
</div>
<div class="container">

<br>
<br>
<br>
<form class="form-horizontal" method ="POST" action="leditprocess.php">
<div class="container">
            <div class="section_tittle_style_02 new_style mb-1">
                <h2 class="title wow fadeInDown" data-wow-delay=".3s">V.A.K Assessment</h2>
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
  echo '<td>
    <input type="text" name="VAK_new_value['.$vakrow['v_type'].']" placeholder='.$vakrow['VAK_comm'].'>
    <input type="hidden" name="v_type['.$vakrow['v_type'].']" value="'.$vakrow['v_type'].'">

  </td>';
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

while($intelrow = mysqli_fetch_array($intelresult)){
  echo '<tr>';
  echo"<td>".$intelrow['i_desc']."</td>";
  echo '<td>
    <input type="text" name="Intel_new_value['.$intelrow['Intel_ID'].']" placeholder='.$intelrow['intelComm'].'>
    <input type="hidden" name="Intel_ID['.$intelrow['Intel_ID'].']" value="'.$intelrow['Intel_ID'].'">
  </td>';
  echo'</tr>';
}
?>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</table>
        </div>
<input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Submit" name="submit">
<button type="reset" class="btn btn-block btn-warning text-white py-3 px-5">Clear</button>

  <input type="hidden" name="assessmentID" value="<?php echo $assessmentID?>">
</div>
</form>
    </section>
    <!-- features part end -->