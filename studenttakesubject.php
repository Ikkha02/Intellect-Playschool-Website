<?php 


if (!session_id())

  {
    session_start();
  }

include ('headerparent.php');
include ("dbconnect.php");

//get booking id from URL
if(isset($_GET['id']))
{
  $bid = $_GET['id'];
}

$uid = $_SESSION['uid'];

//retrieve new bookings
$sql = "SELECT * FROM children 
      where childID = '$bid'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


?>

 <!-- banner part here -->
<section class="hero_banner_area" data-bg-color="#D7F0EB">
        <img class="bg_shape" src="img/home6/bg_illustrration.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero_banner_content">
                        <h2><?php echo $row['Child_name'];?><span class="title_overlay_effect"></span></h2>
                        <h3 class="title wow fadeInDown" data-wow-delay=".3s">Start Enroll Into Subjects</h3>
                        <br>

                        <div>                        
                        <form method="post" action="studenttakesubjectprocess.php" class="subscribe_mail input-group">
                             <a type="email"><?php $sqlstatus = "SELECT * FROM subject_list WHERE display = 0";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-control form-select" name="type" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_kod']."'>".$rowstatus['sub_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
                            <input type="hidden" name="childID" value="<?php echo $childID; ?>">
                            <button type="submit" class="cu_btn btn_2">Enroll</button>
                        </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/home6/man.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end -->