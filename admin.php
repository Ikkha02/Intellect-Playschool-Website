<?php 

include 'cbsession.php';
if(!session_id())
{
  session_start();

}

include 'headeradmin.php'; 

include 'dbconnect.php';

$fic=$_SESSION['uid'];

$sql="SELECT * FROM staff WHERE accID='$fic'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);



?>

<style>
  p.round3 {
  border-radius: 25px;
  border: 2px solid black;
  padding: 20px;
  width: 1000px;
  height: 240px;
  }
  </style>

  <!-- breadcrumb part -->
<section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>WELCOME TO WORK!</h2>
                        <h2> <?php echo $row['Acc_Name'];?> </h2>
                        <p style="color:white">Wish you a wonderful day at work!</p>
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

    <!-- event list part here -->
    <?php

    include ('dbconnect.php');

    if(isset($_GET['id'])){
        $AnnounceID=$_GET['id'];
        }


    $sql = "SELECT * FROM announcement
    LEFT JOIN announcement_status ON announcement.A_status=announcement_status.A_status
    WHERE announcement.A_status=1 ORDER BY A_date DESC";
    $result=mysqli_query($con,$sql);
    ?>

    <section class="event_list section_padding section_bg_1">
        <div class="container custom_container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span
                                class="title_overlay_effect">Related Announcement</span></h2>
                        <p class="description wow fadeInDown" data-wow-delay=".3s">We bring you the latest announcement to 
                            ensure you get the latest info.</p>
                    </div>
                </div>
            </div>
            <?php
	while($row=mysqli_fetch_array($result)){
                echo '<div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single_event_list">
                    <div class="event_list_img">
                            <img src="image_announcement/'.$row['A_image'].'"  alt="#" class="img-fluid">
                        </div>         
                        <div class="event_list_content">
                            <h5>'.$row['A_date'].'</h5>
                            <h3> <a href="viewannouncementadmin.php?id='.$row['AnnounceID'].'">'.$row['A_title'].'</a></h3>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            </div>';
    	}
        ?>
        </div>
        <div class="event_list_animation_1">
            <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="img/icon/icon_5.png" alt="#"></div>
        </div>
        <div class="event_list_animation_3">
            <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="img/icon/icon_7.png" alt="#"></div>
        </div>
        <div class="event_list_animation_4">
            <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'><img src="img/icon/icon_8.png" alt="#"
                    class="img-fluid"></div>
        </div>
    </section>
    <!-- event list part end -->

     <!-- event list part here -->
     <?php

include ('dbconnect.php');

if(isset($_GET['id'])){
    $AnnounceID=$_GET['id'];
    }


$sql = "SELECT * FROM activity
LEFT JOIN activity_status ON activity.act_status=activity_status.act_status
WHERE activity.act_status=1 ORDER BY act_date DESC";
$result=mysqli_query($con,$sql);
?>

<section class="program_list program_list_page section_padding" id="program_list">
    <div class="container custom_container">
            <div class="col-md-12">
                <div class="section_tittle_style_02">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span
                            class="title_overlay_effect">Related Activities update</span></h2>
                    <p class="description wow fadeInDown" data-wow-delay=".3s">We are delighted to bring you the latest update on our 
                        previous activities.</p>
                </div>
                <div class="col-md-12">
                    <div class="rows grid program_list_filter">
        <?php
while($row=mysqli_fetch_array($result)){
            echo '<div class="col-lg-4 col-sm-12 col-md-6 grid-item Group Primary">
                        <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                        <img src="image_activitiesupdate/'.$row['act_image'].'"  alt="#" class="img-fluid" style="height:370px">    
                    <div class="single_program_list_content">
                        <h5 style="color:rgb(255, 0, 118);">'.$row['act_date'].'</h5>
                        <h4> <a href="viewactivitiesupdateadmin.php?id='.$row['activityID'].'">'.$row['act_title'].'</a></h4>
                    </div>
                </div>
            </div>';
    }
    ?>
    </div>
</div>
</div>
</div>
<div class="list_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="img/icon/story_animation_5.png" alt="#">
            </div>
        </div>
        <div class="list_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="img/icon/event_6.png" alt="#">
            </div>
        </div>
        <div class="list_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="img/icon/icon_8.png" alt="#">
            </div>
        </div>
        <div class="list_animation_4">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="img/icon/contact_icon.png" alt="#"></div>
        </div>
        <div class="list_animation_5">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="img/icon/story_animation_5.png" alt="#">
            </div>
        </div>
        <div class="list_animation_6">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="img/icon/icon_9.png" alt="#">
            </div>
        </div>
</section>
<!-- event list part end -->

     <!-- footer part here -->
     <?php include 'footer.php'; ?>