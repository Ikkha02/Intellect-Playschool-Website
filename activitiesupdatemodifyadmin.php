<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}

include 'headeradmin.php'; 
include ('dbconnect.php'); 

  if(isset($_GET['id'])){
    $activityID=$_GET['id'];
  }

$sql="SELECT * FROM activity WHERE activityID='$activityID'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
 
?> 

    <!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Modify Activity Update</h2>
                        <div class="breadcrumb_iner_link">
                            <a href='viewactivitiesupdateadmin.php?id=<?php echo $row['activityID'];?>'>Activity update</a>
                            <span>.</span>
                            <p>Modify Activity Update</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_animation_4">
            <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>
                <img src="img/icon/banner_icon/animated_banner_4.png" alt="#">
            </div>
        </div>
        <div class="breadcrumb_animation_5">
            <div data-parallax='{"x": 20, "y": 150, "rotateZ": 180}'>
                <img src="img/icon/banner_icon/animated_banner_5.png" alt="#">
            </div>
        </div>
        <div class="breadcrumb_animation_7">
            <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>
                <img src="img/icon/banner_icon/animated_banner_15.png" alt="#">
            </div>
        </div>
        <div class="breadcrumb_animation_10">
            <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                <img src="img/icon/banner_icon/animated_banner_10.png" alt="#">
            </div>
        </div>
        <div class="breadcrumb_animation_12">
            <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>
                <img src="img/icon/banner_icon/animated_banner_20.png" alt="#">
            </div>
        </div>
        <div class="breadcrumb_animation_13">
            <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>
                <img src="img/icon/banner_icon/animated_banner_21.png" alt="#">
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!--Modify announcement start--> 

    <body>
<section class="home-banner-area">
<div class="container">
  <form method="POST" action="activitiesupdatemodifyadminprocess.php" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label for="AnnouncementTitle" class="form-label mt-4">Title</label>
      <input type="text" class="form-control" name="acttitle" id="acttitle" aria-describedby="emailHelp" placeholder="The activity title" 
      value="<?php echo $row['act_title']?>" required>
    </div>
    <div class="form-group">
        <label for="AnnouncementImage">Insert Image:</label>
        <input type="file" name="actimage" id="actimage">
        <p>jpg, jpeg, png only</p>
    </div>
    <label>Existing Image:</label>
    <div class="form-group">
        <img src="image_activitiesupdate/<?php echo $row['act_image']?>" alt="image" style="height:250px">
    </div>
    <div class="form-group">
      <label for="AnnouncementContent" class="form-label mt-4">Content</label>
      <textarea class="form-control"  name="actcontent" id="actcontent" rows="5" required><?php echo $row['act_content']?></textarea>
    </div>
    <div class="form-group">
      <label for="AnnouncementDate" class="form-label mt-4">Date</label>
      <input type="date" name="actdate" class="form-control" id="actdate" placeholder="Date of activity publish" 
      value="<?php echo $row['act_date']?>" required>
    </div>
    <input type="hidden" name="Actid" value="<?php echo $row['activityID']?>">
    <button type="submit" class="cu_btn btn_2" onclick="return confirm('Are you sure you want modify this activity update?');">Post</button>
    <button type="reset" class="cu_btn btn_3" onclick="return confirm('Are you sure you want reset back all the modify activity update details you make?');">Reset</button>
  </fieldset>
</form>
</div>
</section>
</body>
   <!--Modify announcement end-->

     <!-- footer part here -->
     <?php include 'footer.php'; ?>