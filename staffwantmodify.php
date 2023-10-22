<?php
include 'cbsession.php';
if (!session_id())
{
	session_start();
}

include 'headerstaff.php'; 
include ('dbconnect.php'); 



if(isset($_GET['id']))  
{
    $frid = $_GET['id'];
}

$sql="SELECT * FROM program WHERE Program_ID='$frid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
 
?>

<!-- breadcrumb part -->
<section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Program details update</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p> Program ID: <?php echo $frid ;?></p>
                          
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


<section class="contact_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                    <br><br>
                    <div class="contact_form form_style">
                        <h2 class="kid_title mb-4"> <span class="title_overlay_effect">Update program's details</span>
                        </h2>
                        <form action="staffwantmodifyprogramprocess.php" method="POST">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="text" name="Program_name" value = "<?php echo $row['Program_name']?>" placeholder="Program name">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="hidden" name="Program_ID" value = "<?php echo $row['Program_ID']?>" placeholder="Program ID">
                                    </div>
                                </div>

                                <div class="col-lg-30">
                                    <div class="form_single_item">
                                        <input type="text" name="Program_desc" value = "<?php echo $row['Program_desc']?>" style="width: 1000px; " placeholder="Program Desc">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="text" name="Program_fee" value = "<?php echo $row['Program_fee']?>" placeholder="Program Fee">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <input type="hidden" name="frid" value = "<?php echo $row['Program_ID']?>">


                            <button type="submit" class="cu_btn btn_2">Save</button>
                            <button type="reset" class="cu_btn btn_3">Clear Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </section>      
<?php include 'footer.php';?>

<br>