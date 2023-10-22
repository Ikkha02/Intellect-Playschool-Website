<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}

    include ('dbconnect.php');

    include 'headerstaff.php'; 

?>

      <!-- event section part here -->
      <?php

 include ('dbconnect.php'); 

 if(isset($_GET['id'])){
    $activityID=$_GET['id'];
  }

$sql="SELECT * FROM activity WHERE activityID='$activityID'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$filename = $row['act_image'];
?>
      <section class="event_section section_padding event_details">
        <div class="container custom_container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-12">
                    <div class="event_details_wrapper">
                    <h1><?php echo $row['act_title'];?></h1>
                    <br>
                        <div class="event_details_thumb">
                        <?php 
                        $sql="SELECT * FROM activity WHERE activityID='$activityID'";
                         $result=mysqli_query($con,$sql);

                        if (mysqli_num_rows($result) > 0) {
                        while ($images = mysqli_fetch_assoc($result)) {  ?>
             
             <div class="event_details_wrapper" style="text-align: center;">
              <img src="image_activitiesupdate/<?=$images['act_image']?>"  alt="#" class="img-fluid">
             </div> 
<?php } }?> 
                    </div>
                    <p class="event_desc" style="color: palevioletred;"><b><?php echo $row['act_date'];?></b></p>
                    <p class="event_desc" style="color: black;"><b><?php echo $row['act_content'];?></b></p>
                </div>
            </div>
        </div>
        <div>
    <br><a href='staff.php' class= 'cu_btn btn_2'>Back</a>
    <a href='activitiesupdatemodifystaff.php?id=<?php echo $row['activityID'];?>' class= 'cu_btn btn_3'>Modify</a>
    <a href='cancelactivitiesupdatestaff.php?id=<?php echo $row['activityID'];?>' class= 'cu_btn btn_3'  onclick="return confirm('Are you sure you want to delete this activity update?');">Delete</a> <br>
    </div>
        <div class="about_page_animation_1">
            <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="img/icon/icon_7.png" alt="#"></div>
        </div>
        <div class="about_page_animation_2">
            <div data-parallax='{"x": 10, "y": 80, "rotateZ":0}'><img src="img/icon/event_6.png" alt="#"></div>
        </div>
        <div class="about_page_animation_3">
            <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="img/icon/banner_two_2.png" alt="#"></div>
        </div>
        <div class="about_page_animation_4">
            <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'><img src="img/icon/team_animation.png" alt="#"
                    class="img-fluid"></div>
        </div>
  </section>
    
    <!-- event section part end -->

   <!-- footer part here -->
   <?php include 'footer.php'; ?>