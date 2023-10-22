<?php 

include ('headerstaff.php');
include ('dbconnect.php');


if (isset($_GET['id'])){

  $cid = $_GET['id'];
}

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

 <!-- banner part here -->
        <section class="hero_banner_area" data-bg-color="#D7F0EB">
        <img class="bg_shape" src="img/home6/bg_illustrration.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero_banner_content">
                        <h2>Funkindyland Assessment <span class="title_overlay_effect"></span></h2>
                        <p>Kidzo mission is to provide affordable, high-quality early education and childcare services
                            for
                            working families.<?php echo $cid; ?></p>
                            <form action="parentviewassessmentprocess.php" class="subscribe_mail input-group" method="POST">
                              <input type="hidden" name="assessmentDate" value="<?php echo $rowstatus['assessmentID']; ?>">
                              <input type="hidden" name="cid" value="<?php echo $cid; ?>">
                              <div class="form-group">
                                <label for="type">Assessment Date:</label>
                                <?php 
                                  $sqlstatus = "SELECT * FROM assessment WHERE ChildID = $cid AND Assessment_type = '1'";
                                  $resultstatus = mysqli_query($con,$sqlstatus); 
                                  if (mysqli_num_rows($resultstatus) > 0) {
                                    echo '<select class="form-control form-select" name="type" id="exampleSelect1">';
                                    while($rowstatus=mysqli_fetch_array($resultstatus))
                                    {
                                      echo"<option value ='".$rowstatus['assessmentID']."'>".$rowstatus['assessmentDate']."</option>";
                                    } 
                                    echo '</select>';
                                  } else {
                                    echo '<div id="noAssessmentPopup">No assessments available</div>';
                                  }
                                ?>
                                <br><br>
                                <button type="submit" class="cu_btn btn_2">View Assessment</button>
                              </div>
                            </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/home6/man.png" alt="">
                </div>
            </div>
        </div>

        <script>
          let noAssessmentPopup = document.getElementById("noAssessmentPopup");
          if (noAssessmentPopup) {
            alert("No assessments available");
          }
        </script>
    </section>
    <!-- banner part end -->
