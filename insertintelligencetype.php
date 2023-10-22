<?php 

include ('headerstaff.php');
include ("dbconnect.php");

?>

   



<!-- banner part here -->
<section class="hero_banner_area" data-bg-color="#D7F0EB">
        <img class="bg_shape" src="img/home6/bg_illustrration.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero_banner_content">
                        <h2>Intelligence <span class="title_overlay_effect">Assessment</span></h2>
                        <p>Add Or Delete Intelligence Assessment</p>
                        <form method="post" action="intelligencetypeprocess.php" class="subscribe_mail input-group">
						    <input  class="form-control" type="text" name="type"  placeholder="Enter Type Of Intelligence">
						    <button type="submit" class="cu_btn btn_2">Add</button>
						</form>

                        <br>

                        <div>                        
                        <form method="post" action="intelligencetypedeleteprocess.php" class="subscribe_mail input-group">
                        	 <a type="email"><?php $sqlstatus = "SELECT * FROM i_type WHERE view_status = 0";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-control form-select" name="delete" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Intel_ID']."'>".$rowstatus['i_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
                            <button type="submit" class="cu_btn btn_2">Delete</button>
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