<!DOCTYPE html>
<html lang="zxx">
<?php
include 'headerpublic.php'; 

include ('dbconnect.php');
$sql = "SELECT * FROM program WHERE Program_ID = '1'";
$result = mysqli_query($con, $sql);


?>





    <!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Fun KindyLand</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="Allprogram.php">Home</a>
                            <span>|</span>
                            <p> Program Details</p>
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


    <!-- event section part here -->
    <section class="event_section section_padding event_details">
        <div class="container custom_container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-12">
                    <div class="event_details_wrapper">
                        <div class="event_details_thumb">
                            <img src="img/funkindyland.jpg" alt="#" class="img-fluid">
                        </div>
                        	

                    </div>
                </div>
            </div>
            <div class="container">
<table class="table table-hover" enctype = "multipart/form-data">
  <thead>
    <tr>
      <th scope="col">Description</th>
      

    </tr>
  </thead>

  </tbody>

    <?php 
        $sel = "SELECT Program_desc FROM program WHERE program_ID='1'";

  		while($row=mysqli_fetch_array($result))
  		{
			echo '<try>';
			echo "<td>" .$row['Program_desc']. "</td>";
			
			echo "<td>"  ;

			echo "</td>" ;
			echo '</tr>';

  		}

  	?> 
    </tbody>
</table>

</div>
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