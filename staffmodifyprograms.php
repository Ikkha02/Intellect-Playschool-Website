
<?php 

include 'cbsession.php';
if(!session_id())
{
	session_start();

	
}

include ('dbconnect.php');
include 'headerstaff.php'; 


//  Retrieve individua bookings
$uid =  $_SESSION['uid'];

$sql = "SELECT * FROM program";

$result = mysqli_query($con, $sql);
$sel = "SELECT Program_fee FROM program WHERE program_ID='3'";



?>
<!-- breadcrumb part -->
<section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Programs List</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p> Programs</p>
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
<div class="container">
	<br><h3>Programs currently offered</h3>
<table  style="width:120%" class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Program ID</th>
      <th scope="col">Program Name</th>
      <th scope="col">Program Description</th>
      <th scope="col">Program Fee</th>
      


    </tr>
  </thead>
  <tbody>

  </tbody>

  	<?php 
  		while($row=mysqli_fetch_array($result))
  		{
			echo '<try>';
			echo "<td>" .$row['Program_ID']. "</td>";
			echo "<td>" .$row['Program_name']. "</td>";
            echo "<td>" .$row['Program_desc']. "</td>";
			echo "<td>" .$row['Program_fee']. "</td>";
          


			echo "<td>"  ;

            echo "<a href='staffwantmodify.php?id=".$row['Program_ID']."' class= 'btn btn-warning'>Modify</a> &nbsp";
			echo "</td>" ;
			echo '</tr>';

  		}

  	?>

  
  </tbody>
</table>

</div>	

<style>
  p.round3 {
  border-radius: 25px;
  border: 2px solid black;
  padding: 20px;
  width: 1000px;
  height: 240px;
  }
  </style>






<!-- contact page -->
<section class="contact_page section_padding">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-4 pl-lg-5">
                    <div class="blog_sidebar">
                        <div class="contact_sidebar">
                            <h2 class="kid_title mb-4"> <span class="title_overlay_effect">Office Info</span></h2>
                            <div class="single_contact_sidebar">
                                <i class="icon_pin"></i>
                                <div class="contact_sidevar_content">
                                    <h5>Location</h5>
                                    <p>9 Road, Mirpur Dohs, <br>
                                        New York</p>
                                </div>
                            </div>
                            <div class="single_contact_sidebar">
                                <i class="icon_phone"></i>
                                <div class="contact_sidevar_content">
                                    <h5>Phone</h5>
                                    <p>+642 205 745 695</p>
                                </div>
                            </div>
                            <div class="single_contact_sidebar">
                                <i class="icon_mail"></i>
                                <div class="contact_sidevar_content">
                                    <h5>Email</h5>
                                    <p>info@kidzo.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="social_icon">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>
                            <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://dribbble.com/"><i class="ti-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact page end -->