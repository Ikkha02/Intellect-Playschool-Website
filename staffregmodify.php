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

$sql="SELECT * FROM children WHERE RegistrationID='$frid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
 
?>

<!-- breadcrumb part -->
<section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Registration details update</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p> Registration ID: <?php echo $frid ;?></p>
                          
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
                        <h2 class="kid_title mb-4"> <span class="title_overlay_effect">Update your child's details</span>
                        </h2>
                        <form action="staffregmodifyprocess.php" method="POST">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="text" name="childname" value = "<?php echo $row['Child_name']?>" placeholder="Their name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="hidden" name="childID" value = "<?php echo $row['childID']?>" placeholder="Their MY KIDS number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="number" name="childage" value = "<?php echo $row['Child_age']?>" placeholder="Their age">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="text" name="favfood" value = "<?php echo $row['Child_favfood']?>" placeholder="Their favourite food">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="text" name="favcolour" value = "<?php echo $row['Child_favcolor']?>" placeholder="Their favourite colour">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="text" name="favtoy" value = "<?php echo $row['Child_favtoy']?>" placeholder="Their favourite toy">
                                    </div>
                                </div>
                               
                                <legend class="mt-4">Their date of birth</legend>
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="date" name="DOB" value = "<?php echo $row['Child_DOB']?>" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <legend class="mt-4">Date of registration</legend>
                                <div class="col-lg-6">
                                    <div class="form_single_item">
                                        <input type="datetime-local" name="DOR" value = "<?php echo $row['Child_dateregs']?>" placeholder="Date of registration">
                                    </div>
                                </div>
                            </div>
                            <fieldset id="group 2" class="form-group2">
                                <legend class="mt-4">Does your child has any allergies?</legend>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="Child_Allergies" id="optionsRadios1" value="1" checked="">
                                  <label class="form-check-label" for="optionsRadios1">
                                    Yes
                                  </label>
                                  <br>
                                  <input class="form-check-input" type="radio" name="Child_Allergies" id="optionsRadios2" value="2" checked="">

                                  <label class="form-check-label" for="optionsRadios1">
                                    No
                                  </label>
                                </div>
                            </fieldset>
                            <fieldset id="group 3" class="form-group2">
                                    <legend class="mt-4">Does your child depends on diapers?</legend>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="optionsRadios3" id="optionsRadios3" value="1" checked="">
                                      <label class="form-check-label" for="optionsRadios1">
                                        Yes
                                      </label>
                                      <br>
                                      <input class="form-check-input" type="radio" name="optionsRadios3" id="optionsRadios4" value="2" checked="">
    
                                      <label class="form-check-label" for="optionsRadios3">
                                        No
                                      </label>
                                    </div>

                            </fieldset>
                            <input type="hidden" name="frid" value = "<?php echo $row['RegistrationID']?>">


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