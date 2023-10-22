<?php 

if (!session_id())

    {
        session_start();
    }

include ('headerparent.php');
include ("dbconnect.php");

$uid = $_SESSION['uid'];

//retrieve new bookings
$sql = "SELECT * FROM children 
      LEFT JOIN program ON children.Program_ID = program.Program_ID
      WHERE children.accountID = $uid";
$result = mysqli_query($con,$sql);


?>

   <!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" >Child List</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p> Team</p>
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

    <form class="form-horizontal" method ="POST" action="studenttakesubject.php">

<table class="table table-hover">   
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th scope="col" class="title wow fadeInDown" data-wow-delay=".3s" >Child Name</th>
      <th scope="col" class="title wow fadeInDown" data-wow-delay=".3s" >Operation</th>
     </tr>
  </thead>

<tbody>
    <?php
        while($row=mysqli_fetch_array($result))
        {
         echo'<tr>';
         echo"<td></td>";
         echo"<td></td>";  
         echo"<td></td>";  
         echo"<td></td>";      
         echo"<td>".$row['Child_name']."</td>";
           echo"<td>";
                    echo"<a href='studenttakesubject.php?id=".$row['childID']."'class='btn btn-warning'>View</a>&nbsp";  

         echo"</td>";

         echo'</tr>';
        }
    ?>
    </tbody>

</table>
    <!-- team part here -->
    <section class="team_section single_page_team section_padding">
        
        <div class="team_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="img/icon/story_animation_1.png" alt="#">
            </div>
        </div>
        <div class="team_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="img/icon/story_animation_2.png" alt="#">
            </div>
        </div>
        <div class="team_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="img/icon/story_animation_3.png" alt="#">
            </div>
        </div>
        <div class="team_animation_4">
            <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="img/icon/team_animation.png" alt="#"></div>
        </div>
        <div class="team_animation_5">
            <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="img/icon/story_animation_5.png" alt="#">
            </div>
        </div>
    </section>
    <!-- team part end -->

    

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
    <!-- parallax js -->
    <script src="vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="vendors/parallax/parallax.js"></script>
    <!-- wow js -->
    <script src="vendors/wow/wow.min.js"></script>
    <!-- isotop js -->
    <!-- isotop js -->
    <script src="vendors/isotop/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotop/isotope.pkgd.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>