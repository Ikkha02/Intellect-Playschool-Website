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

<meta name="viewport" content="width=device-width, initial-scale=1">


<head>
<style>
html {
  scroll-behavior: smooth;
}
</style>
</head>


<body>

</div>
<!-- banner part here -->
    <section class="banner_part animated_hero">
        <div class="single_banner_part parallax_bg">
            <div class="container custom_container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-md-10">
                        <div class="banner_iner">
                           
                            <h2> <span>Imagination</span> Will <br>
                                Begin Explore New <br>
                                Things</h2>
                            <a href="#C4" class="cu_btn btn_2">Subject Offered</a>
                            <h2 id="C4"></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_animation_1">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ": 360}'>
                    <img src="img/icon/banner_icon/animated_banner_1.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_2">
                <div data-parallax='{"x": 15, "y": 100, "rotateZ": 720}'>
                    <img src="img/icon/banner_icon/animated_banner_2.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_3">
                <div data-parallax='{"x": 0, "y": 200, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_3.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_4">
                <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_4.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_5">
                <div data-parallax='{"x": 20, "y": 150, "rotateZ": 180}'>
                    <img src="img/icon/banner_icon/animated_banner_5.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_6">
                <div data-parallax='{"x": 15, "y": 100, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_6.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_7">
                <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_7.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_8">
                <div data-parallax='{"x": 10, "y": 150, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_8.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_9">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_9.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_10">
                <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_10.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_11">
                <div data-parallax='{"x": 0, "y": 100, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_11.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_12">
                <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>
                    <img src="img/icon/banner_icon/animated_banner_12.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_13">
                <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>
                    <img src="img/icon/banner_icon/animated_banner_13.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_14">
                <div data-parallax='{"x": 40, "y": 150, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_14.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_15">
                <div data-parallax='{"x": 10, "y": 200, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_15.png" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end -->

<!-- fetaures part here -->
    <section class="features_new_area section_padding">
        <img class="f_shap_bg" src="img/home6/features_bg_shap.png" alt="">
        <div class="container">
            <div class="section_tittle_style_02 new_style mb-1">

                <h2 class="title wow fadeInDown" data-wow-delay=".3s" >Subjects <span
                        class="title_overlay_effect">Offered</span></h2>
                <p class="description wow fadeInDown" data-wow-delay=".3s">Intellect Playschool mission is to provide affordable,
                    high-quality early education and childcare<br> services for working families to ensure every child.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/bookshelf.png" alt="">
                        <a id="myBtn">
                            <h4>Bahasa Malaysia</h4>
                        </a>
                        

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/school.png" alt="">
                        <a >
                            <h4>Bahasa Inggeris</h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/playground.png" alt="">
                        <a >
                            <h4>Bahasa Arab</h4>
                        </a>
                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/fruit.png" alt="">
                        <a >
                            <h4>Bahasa Cina</h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/medal.png" alt="">
                        <a >
                            <h4>Matematik</h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/teacher.png" alt="">
                        <a >
                            <h4>Sains</h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/paint.png" alt="">
                        <a >
                            <h4>Arts & Crafts</h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/playground.png" alt="">
                        <a>
                            <h4>Pendidikan Islam & Jawi</h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="features_new_item">
                        <img src="img/home6/playground.png" alt="">
                        <a>
                            <h4>Sports / Sensory Gym / Brain Gym</h4>
                        </a>
                        
                    </div>
                </div>

            </div>
            <div class="section_tittle_style_02 new_style mb-1">

                <a href="studentenrolllist.php" class="cu_btn btn_2">Start Enroll</a>
                            
            </div>
        </div>
    </section>
    </body>
    <!-- features part end -->
        



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
