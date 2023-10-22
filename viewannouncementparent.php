<?php
include 'cbsession.php';
if (!session_id())
{
   session_start();
}

    include 'headerparent.php'; 

?>

      <!-- event section part here -->
      <?php

 include ('dbconnect.php'); 

 if(isset($_GET['id'])){
    $AnnounceID=$_GET['id'];
  }

$sql="SELECT * FROM announcement WHERE AnnounceID='$AnnounceID'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$filename = $row['A_image'];
?>
      <section class="event_section section_padding event_details">
        <div class="container custom_container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-12">
                    <div class="event_details_wrapper">
                    <h1><?php echo $row['A_title'];?></h1>
                    <br>
                        <div class="event_details_thumb">
                        <?php 
                        $sql="SELECT * FROM announcement WHERE AnnounceID='$AnnounceID'";
                         $result=mysqli_query($con,$sql);

                        if (mysqli_num_rows($result) > 0) {
                        while ($images = mysqli_fetch_assoc($result)) {  ?>
             
             <div class="event_details_wrapper" style="text-align: center;">
              <img src="image_announcement/<?=$images['A_image']?>"  alt="#" class="img-fluid">
             </div> 
<?php } }?> 
                    </div>
                    <p class="event_desc" style="color: palevioletred;"><b><?php echo $row['A_date'];?></b></p>
                    <p class="event_desc" style="color: black;"><b><?php echo $row['A_content'];?></b></p>
                </div>
            </div>
            <div>
    <br><a href='parent.php' class= 'cu_btn btn_2'>Back</a>
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

     <!-- footer part here -->
     <footer class="footer_section home_two_footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".3s">
                    <div class="single_footer_widget">
                        <a href="index.html" class="footer_logo"><img src="img/logo.png" alt="#"></a>
                        <p>Lorem ipsum dolor sit consectetur sicing elit, sed do eitempor idunt ut labor omagn aliqua
                            sed do.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_footer_widget footer_nav">
                        <h4>Class</h4>
                        <ul>
                            <li><a href="#">Master Mind</a></li>
                            <li><a href="#">Junior Lambs</a></li>
                            <li><a href="#">Happy Kiddo</a></li>
                            <li><a href="#">Master Mind</a></li>
                            <li><a href="#">Junior Lambs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_footer_widget footer_nav">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Classes</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".9s">
                    <div class="single_footer_widget instagram_feed">
                        <h4>Newsletter</h4>
                        <p>Lorem ipsum dolor sit consectetur sicing elit, sed do eitempor idunt ut labor elit, sed do
                            omagn aliqua</p>
                        <form action="#">
                            <div class="input-group">
                                <input type="Email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="ti-arrow-right"></i> </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <img src="img/footer_bg.png" alt="#" class="img-fluid">
        </div>
        <div class="footer_animation_3">
            <div data-parallax='{"x": 30, "y": 70, "rotateZ":0}'><img src="img/footer_img.png" alt="#"></div>
        </div>
    </footer>

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
