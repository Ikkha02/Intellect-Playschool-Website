<?php 

include 'cbsession.php';
if(!session_id())
{
  session_start();

}

include("dbconnect.php");
$fic=$_SESSION['uid'];
$childname = $_POST['childname'];
$childID = $_POST['childID'];
$childage = $_POST['childage'];
$favfood = $_POST['favfood'];
$favcolour = $_POST['favcolour'];
$favtoy = $_POST['favtoy'];
$DOB = $_POST['DOB'];
$DOR = $_POST['DOR'];
$optionsRadios2 = $_POST['optionsRadios2'];
$optionsRadios3 = $_POST['optionsRadios3'];


$sql = "INSERT INTO children(childID,  RegistrationID, accountID, Program_ID, Child_name, Child_age, Child_Allergies, Child_favfood, Child_favcolor, Child_favtoy, Child_diapers, Child_dateregs, Child_DOB)
	VALUES ('$childID','' ,'$fic', '2','$childname','$childage','$optionsRadios2','$favfood','$favcolour','$favtoy', '$optionsRadios3', '$DOR', '$DOB')";





mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Intellect Playschool</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
    <!-- elegent icon CSS -->
    <link rel="stylesheet" href="vendors/elegant_Icon/elegent_icon.css" />
    <!-- themify icon CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- nice select CSS -->
    <link rel="stylesheet" href="vendors/magnify_popup/magnific-popup.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/audio_player/css/audioplayer.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Preloader  -->
    <div class='preloder'>
        <div class='loader'>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--text'></div>
        </div>
    </div>
    <!-- End Preloader  -->

    <!-- hearder part  -->
    <header class="header_part">
        <div class="sub_header section_bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-md-8">
                        <div class="header_contact_info">
                            <a href="#" target="_blank"><i
                                    class="fas fa-envelope"></i>intelek.ria.villa@gmail.com</a>
                            <a href="tel:+4641468425"><i class="fas fa-phone"></i>012-586 0816</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-4">
                        <div class="header_social_icon">
                            <p>Follow Us:</p>
                            <a href="https://www.facebook.com/intellect.islamic.playschool/"><i class="fab fa-facebook-f"></i></a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="parent.php"><img src="img/logo.png"
                                    srcset="img/ratina_logo.png 2x" alt="Kidzo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                                <ul class="navbar-nav">

                                    
                                </ul>
                                <a href="parent.php" class="cu_btn btn_1">Back to home</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header part end -->

    <!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Weekly Playgroups</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p>Registration</p>
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

    <!-- contact page -->
    <section class="contact_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact_form form_style">

                    <h2 class="kid_title mb-4"> <span class="title_overlay_effect">Can we know more about you?</span>
                    </h2>
                    <form action="dbWPpar.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_single_item">
                                    <input type="text" name="ParOccu" placeholder="Your Occupation">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_single_item">
                                    <input type="number" name="childcount" placeholder="How many children do you have?">
                                </div>
                            </div>
                        </div><br><br>
						<button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    </div>
                    <br><br>
                    
                    

                    
                </div>
				<br>
				<br>

                <div class="col-lg-4 pl-lg-5">
                    <div class="blog_sidebar">
                        <div class="contact_sidebar">
                            <h2 class="kid_title mb-4"> <span class="title_overlay_effect">Office Info</span></h2>
                            <div class="single_contact_sidebar">
                                <i class="icon_pin"></i>
                                <div class="contact_sidevar_content">
                                    <h5>Location</h5>
                                    <p>No 24, jalan pulai mutiara 1/1, Taman Pulai Mutiara,Johor Bahru, <br>
                                    Johor Bahru, Malaysia</p>
                                </div>
                            </div>
                            <div class="single_contact_sidebar">
                                <i class="icon_phone"></i>
                                <div class="contact_sidevar_content">
                                    <h5>Phone</h5>
                                    <p>012-586 0816</p>
                                </div>
                            </div>
                            <div class="single_contact_sidebar">
                                <i class="icon_mail"></i>
                                <div class="contact_sidevar_content">
                                    <h5>Email</h5>
                                    <p>intelek.ria.villa@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="social_icon">
                            <a href="https://www.facebook.com/intellect.islamic.playschool/"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact page end -->



    <!-- footer part here -->
    

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
    <!-- map js -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDs3mrTgrYd6_hJS50x4Sha1lPtS2T-_JA"></script>
    <script src="vendors/gmp3/map.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>