<?php
include 'cbsession.php';
if (!session_id())
{
    session_start();
}

include 'headerstaff.php';
include ('dbconnect.php');

$uid=$_SESSION['uid'];

$sql = "SELECT * FROM children
		LEFT JOIN parent ON children.accountID = parent.accID 
		LEFT JOIN registration_status ON children.Reg_status = registration_status.Reg_status 
        LEFT JOIN program ON children.Program_ID = program.Program_ID 
		LEFT JOIN allergies_desc ON children.Child_Allergies = allergies_desc.Child_Allergies 
		LEFT JOIN diapers_desc ON children.Child_diapers = diapers_desc.Child_diapers 
        WHERE children.Reg_status='0'";
$result = mysqli_query($con, $sql);




?>
<!-- breadcrumb part -->
<section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2> Registration</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
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
	<br><h3>Pending Registrations</h3>
<table  style="width:120%" class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Registration ID</th>
      <th scope="col">Child Name</th>
      <th scope="col">Child ID</th>
        <th scope="col">Child ID</th>
      <th scope="col">Child Favourite Food</th>
      <th scope="col">Child Favourite Colour</th>
      <th scope="col">Child Favourite Toy</th>
      <th scope="col">Child Date of Birth</th>
      <th scope="col">Child Date of Registration</th>
      <th scope="col">Child Allergies</th>
      <th scope="col">Child Dependency on diapers</th>
      <th scope="col">Child Registration Status</th>



    </tr>
  </thead>
  <tbody>

  </tbody>

  	<?php 
  		while($row=mysqli_fetch_array($result))
  		{
			echo '<try>';
			echo "<td>" .$row['RegistrationID']. "</td>";
			echo "<td>" .$row['Child_name']. "</td>";
			echo "<td>" .$row['childID']. "</td>";
            echo "<td>" .$row['Child_age']. "</td>";
			echo "<td>" .$row['Child_favfood']. "</td>";
            echo "<td>" .$row['Child_favcolor']. "</td>";
			echo "<td>" .$row['Child_favtoy']. "</td>";
			echo "<td>" .$row['Child_DOB']. "</td>";
			echo "<td>" .$row['Child_dateregs']. "</td>";
			echo "<td>" .$row['Allergies_desc']. "</td>";
			echo "<td>" .$row['diapers_desc']. "</td>";
			echo "<td>" .$row['Reg_desc']. "</td>";


			echo "<td>"  ;

            echo "<a href='staffregistrationapproval.php?id=".$row['RegistrationID']."' class= 'btn btn-warning'>Approval</a> &nbsp";
			echo "</td>" ;
			echo '</tr>';

  		}

  	?>

  
  </tbody>
</table>

</div>	

