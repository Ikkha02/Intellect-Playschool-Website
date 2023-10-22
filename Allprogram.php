<!DOCTYPE html>
<html lang="zxx">
<?php
include ('dbconnect.php');
include 'headerappointedparent.php'; 

$sql = "SELECT * FROM program";
$result = mysqli_query($con, $sql);
$sel = "SELECT Program_fee FROM program WHERE program_ID='3'";

?>

<!DOCTYPE html>
<html lang="zxx">


    <!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Our Programs</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p>Programs</p>
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

     <!-- program list part here -->
 <section class="program_list program_list_page section_padding" id="program_list">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="is-checked" data-filter="*">All</li>
                            <li data-filter=".Kindergarten">Fun Kindyland</li>
                            <li data-filter=".Group">Little Explorer</li>
                            <li data-filter=".Primary">Weekly Playgroups</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="rows grid program_list_filter">
                        <div class="col-lg-4 col-sm-12 col-md-6 grid-item Kindergarten Story">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                            <img src="img/home6/lambs.png" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <h4><a href="FKLprogramdetails.php">View Fun Kindyland</a></h4>
                                    <p>Click View to learn more about Fun Kindyland.
                                    </p>
                                    <div class="program_list_details">
                                        <h5>Age <span>5-6 yrs</span> </h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-6 grid-item Group">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                            <img src="img/home6/kinder.png" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <h4><a href="LEprogramdetails.php">View Little Explorer</a></h4>
                                    <p>Click View to learn more about Little Exploprer.</p>
                                    <div class="program_list_details">
                                        <h5>Age <span>3-6 yrs</span> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-6 grid-item Primary">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                            <img src="img/home6/childcare.png" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <h4><a href="RegWP.php">Apply for Weekly Playgroups</a></h4>
                                    <p>Fun weekly playgroups to keep your child occupied with entertaining learning experience. Click Apply to register. </p>
                                    <div class="program_list_details">


                                        <h5>Age <span>3-6 yrs</span> </h5>
                                        <h5>Tution Fee<span>RM
                                        <?php 
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            echo '<try>';
                                            echo "<td>" .$row['Program_fee']. "</td>";
                                            
                                            echo "<td>"  ;

                                            echo "</td>" ;
                                            echo '</tr>';

                                        }

                                    ?></span></h5>
                                    </div>
                                </div>
                            </div>
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
    <!-- program list part end -->

    

    <!-- jquery slim -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice select -->
    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>
    <!-- owl carousel js -->
    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>
    <!-- parallax js -->
    <script src="vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="vendors/parallax/parallax.js"></script>
    <!-- wow js -->
    <script src="vendors/wow/wow.min.js"></script>
    <!-- countup js -->
    <script src="vendors/magnify_popup/jquery.magnific-popup.js"></script>
    <!-- isotop js -->
    <!-- isotop js -->
    <script src="vendors/isotop/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotop/isotope.pkgd.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>