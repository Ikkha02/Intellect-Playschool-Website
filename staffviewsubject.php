<?php 


if (!session_id())

  {
    session_start();
  }

include ('headerstaff.php');
include ("dbconnect.php");

//get booking id from URL
if(isset($_GET['id']))
{
  $bid = $_GET['id'];
}

$uid = $_SESSION['uid'];


//retrieve new bookings
$sql = "SELECT * FROM staff_took
      LEFT JOIN staff ON staff_took.staffID = staff.accID
      LEFT JOIN subject_list ON staff_took.Sub_kod = subject_list.Sub_kod
      WHERE staffID = $uid";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);



?>


<!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner" >
                        <h2>Teacher Detail</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p> Team </p>
                            <span>.</span>
                            <p> Team Details </p>
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

        <!-- teacher details part here -->
    <section class="teacher_details_info section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="profile_img pr-lg-3">
                        <img src="img/teacher_profile_img.png" alt="#" class="img-fluid">
                        <img src="img/teacher_profile_shape.png" alt="#" class="img-fluid teacher_profile_shape">
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 wow fadeInUp" data-wow-delay=".5s">
                    <div class="profile_content mt-5 mt-lg-0">
                        <h2 class="mb-0 kid_title"> <span class="title_overlay_effect"><?php echo $row['Acc_Name'];?></span></h2>
                        <a href="staffenroll.php" class="teacher_category">Add subject enroll</a>
                        <ul class="teacher_profile_info">
                            <li> <span>Subject Teached :</span><?php 
                                    $sqlstatus = "SELECT * FROM staff_took 
                                    LEFT JOIN staff ON staff_took.staffID = staff.accID
                                    LEFT JOIN subject_list ON staff_took.Sub_kod = subject_list.Sub_kod
                                    where staffID = $uid and displayEnroll = 0";
                                    $resultstatus = mysqli_query($con,$sqlstatus); 
                                    while($rowstatus=mysqli_fetch_array($resultstatus))
                                    {
                                      echo"<div class='example-class' value ='".$rowstatus['Sub_kod']."'>".$rowstatus['sub_desc']."</div>";
                                    } 
                                    ?></li>
                            <li> <span>Email:</span> gleb3241@gmail.com</li>
                            <li> <span>Phone:</span> +0188 321 4578</li>
                        </ul>
                        <div class="teacher_social_info">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>
                            <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://dribbble.com/"><i class="ti-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="teacher_details_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="img/icon/story_animation_5.png" alt="#">
            </div>
        </div>
        <div class="teacher_details_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="img/icon/event_6.png" alt="#">
            </div>
        </div>
        <div class="teacher_details_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="img/icon/icon_8.png" alt="#">
            </div>
        </div>
        <div class="teacher_details_animation_4">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="img/icon/contact_icon.png" alt="#"></div>
        </div>
        <div class="teacher_details_animation_5">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="img/icon/story_animation_5.png" alt="#">
            </div>
        </div>
        <div class="teacher_details_animation_6">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="img/icon/icon_9.png" alt="#">
            </div>
        </div>
    </section>
    <!-- teacher details part end -->