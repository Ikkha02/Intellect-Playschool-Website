<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}

    include 'headerstaff.php'; 

?>

    <!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Create Announcement</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="staff.php">Home</a>
                            <span>|</span>
                            <p>Create Announcement</p>
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
<body>
<section>
<div class="container">
  <form method="POST" action="createannouncementstaffprocess.php" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label for="AnnouncementTitle" class="form-label mt-4">Title</label>
      <input type="text" class="form-control" name="Atitle" id="Atitle" aria-describedby="emailHelp" placeholder="The announcement title" required>
    </div>
    <div class="form-group">
      <label for="AnnouncementImage" class="form-label mt-4">Insert Image <br> <p>jpg, jpeg, png file only</p></label>
      <input class="form-control" type="file" name="Aimage" id="Aimage" required>
    </div>
    <div class="form-group">
      <label for="AnnouncementContent" class="form-label mt-4">Content</label>
      <textarea class="form-control"  name="Acontent" id="Acontent" rows="5" required></textarea>
    </div>
    <div class="form-group">
      <label for="AnnouncementDate" class="form-label mt-4">Date</label>
      <input type="date" name="Adate" class="form-control" id="InputICNumber" placeholder="Date of announcement publish" required>
    </div>
    <button type="submit" class="cu_btn btn_2" onclick="return confirm('Are you sure you want post this announcement?');">Post</button>
    <button type="reset" class="cu_btn btn_3" onclick="return confirm('Are you sure you want clear all the details?');">Clear Form</button>
  </fieldset>
</form>
</div>
</section>
</body>

   <!-- footer part here -->
   <?php include 'footer.php'; ?>