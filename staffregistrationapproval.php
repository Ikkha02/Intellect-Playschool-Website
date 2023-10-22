<?php
include 'cbsession.php';
if (!session_id())
{
    session_start();
}

include 'headerstaff.php';
include ('dbconnect.php');

//GET BOOKING ID FROM URL 
if(isset($_GET['id']))  
{
    $bid = $_GET['id'];
}





$sql = "SELECT * FROM children
		LEFT JOIN parent ON children.accountID = parent.accID 
		LEFT JOIN registration_status ON children.Reg_status = registration_status.Reg_status 
		LEFT JOIN program ON children.Program_ID = program.Program_ID 
		LEFT JOIN allergies_desc ON children.Child_Allergies = allergies_desc.Child_Allergies 
		LEFT JOIN diapers_desc ON children.Child_diapers = diapers_desc.Child_diapers 

        WHERE children.RegistrationID= $bid ";
$result = mysqli_query($con, $sql);


$row=mysqli_fetch_array($result);

?>

<!-- breadcrumb part -->
<section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Approving</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p> Registration</p>
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
<br><h3> Registration Details</h3>

    <form class="form-horizontal" method="POST" action ="staffregistrationapprovalprocess.php">
        <table class="table table-hover">
           <tr>
               <td>Registration ID</td>
                <td> <?php  echo $row['RegistrationID'];?> </td>

           </tr> 
           <tr>
               <td>Name</td>
                <td> <?php echo $row['Child_name'];?> </td>

           </tr> 
           <tr>
               <td>My Kids Number</td>
                <td> <?php echo $row['childID'];?> </td>

           </tr> 
            <tr>
               <td>Child Age</td>
                <td> <?php  echo $row['Child_age'];?> </td>

           </tr> 
           <tr>
               <td>Registered Program</td>
                <td> <?php  echo $row['Program_name'];?> </td>

           </tr>
           <tr>
               <td>Child Allergies</td>
                <td> <?php  echo $row['Allergies_desc'];?> </td>

           </tr>
           <tr>
               <td>Child Dependency on diapers</td>
                <td> <?php  echo $row['diapers_desc'];?> </td>

           </tr>
           <tr>
               <td>Registration Status</td>
                <td> <?php  echo $row['Reg_desc'];?> </td>

           </tr>
          
            <tr>
               <td>Approval</td>
                <td> 
                      <?php

                            $sqlstatus = "SELECT * FROM registration_status";
                            $resultstatus = mysqli_query($con, $sqlstatus);

                                echo ' <select class="form-select" name="fstatus" id="exampleSelect1">';
                                    while($rowstatus=mysqli_fetch_array($resultstatus))
                                    {
                                        echo "<option value = '".$rowstatus['Reg_status']."'>".$rowstatus['Reg_desc']."</option>";
                                    }

                                echo '</select>';
                        ?> 





        
            </td>

           </tr>
           <td></td>

           
               <tr>
                <td></td>

                <td>
               <button type="submit" class="cu_btn btn_2">Process</button>
               </td>
           </tr>
           
           


        </table>
        <?php echo $row['RegistrationID']; ?>
        <input type="hidden" name="fbid" value="<?php echo $row['RegistrationID']; ?>">
    </form>

</div>

