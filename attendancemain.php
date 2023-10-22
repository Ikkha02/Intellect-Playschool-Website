<?php
if (!session_id())
{
	session_start();
}

include 'headerparent.php';
include ('dbconnect.php'); 

$fic=$_SESSION['uid'];

?>

   <!-- breadcrumb part -->
   <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Child Attendance</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p>Child Attendance</p>
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



<!-- contact part here -->
<section class="contact_part section_bg section_padding">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-6 col-md-12">
                    <div class="contact_form">
                        <h2>Attendance Form</h2>
                        <form method="POST" action="attmainprocess.php">
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                <label for="childName"> Child Name: </label>
                                <?php
                                    $sql = "SELECT * FROM children where accountID = $fic";
                                    $result = mysqli_query($con, $sql);
                                    echo '<select class="form-select" id="exampleSelect1" name="cid">';

                                    while($row=mysqli_fetch_array($result)){
                                        echo '<option value="' . $row["childID"] . '">' . $row["Child_name"] . '</option>';
                                    }
                                    echo '</select>';
                                    ?>   
                                </div>
                            </div>

                            <div class="form-inline">
                            <div class="form-group col-md-6">
                                    <label for="dateFirst"> First Date</label>
                                    <input type="date" class="form-control" id="dateFirst" name="dateFirst" placeholder="First date">
                            </div>
                                <div class="form-group col-md-6">
                                    <label for="dateLast"> Last Date</label>
                                    <input type="date" class="form-control" id="dateLast" name="dateLast" placeholder="Last date">
                                </div>
                                
                            </div>
                            <div class="form-group col-lg-3">
                                <?php
                                    $sqlaa = "SELECT * FROM status_attendance";
                                    $result = mysqli_query($con, $sqlaa);
                                    echo '<select class="form-select" id="exampleSelect122" name="attstatus">';

                                    while($row=mysqli_fetch_array($result)){
                                        echo '<option value="' . $row["statusID"] . '">' . $row["statusDesc"] . '</option>';
                                    }
                                    echo '</select>';
                                    ?>   
                                </div>
                                <div class="form-group col-md-9">
                                <textarea class="form-control" id="attend_reason" name="attend_reason"placeholder="Reason"></textarea>
                            </div>
                            <button type="submit" class="cu_btn btn_2">Submit</button>
                            <button type="reset" class="cu_btn btn_3">Clear</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact_animation_1">
            <div data-parallax='{"x": 30, "y": 100, "rotateZ":0}'>
                <img src="img/icon/cta_1.png" alt="#">
            </div>
        </div>
        <div class="contact_animation_2">
            <div data-parallax='{"x": 20, "y": 150, "rotateZ": 180}'>
                <img src="img/icon/contact_icon.png" alt="#">
            </div>
        </div>
        <div class="contact_animation_3">
            <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>
                <img src="img/icon/banner_two_3.png" alt="#">
            </div>
        </div>
        <div class="contact_animation_4">
            <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                <img src="img/icon/event_6.png" alt="#">
            </div>
        </div>
        <div class="contact_animation_5">
            <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>
                <img src="img/icon/icon_8.png" alt="#">
            </div>
        </div>
        <div class="contact_animation_6">
            <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>
                <img src="img/icon/icon_7.png" alt="#">
            </div>
        </div>
    </section>
    <!-- contact part end -->
