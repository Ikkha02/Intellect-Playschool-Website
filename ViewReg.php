<?php 

include 'cbssession.php';
if(!session_id())
{
	session_start();

	
}




include 'headerpublic.php'; 
include ('dbconnect.php');

$uid =  $_SESSION['uid'];
//  Retrieve individua bookings
$sql = "SELECT * FROM db_booking
		LEFT JOIN tb_vehicle ON db_booking.b_vehicle = tb_vehicle.v_reg 
		LEFT JOIN tb_status On db_booking.b_status = tb_status.s_id
		WHERE b_customer = '$uid'";
$result = mysqli_query($con, $sql);



?>

<div class="container">
	<br><h3>Your Booking List</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Booking ID</th>
      <th scope="col">Vehicle</th>
      <th scope="col">Pickup Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Total Price</th>
      <th scope="col">Booking Status</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>

  </tbody>

  	<?php 
  		while($row=mysqli_fetch_array($result))
  		{
			echo '<try>';
			echo "<td>" .$row['b_id']. "</td>";
			echo "<td>" .$row['v_model']. "</td>";
			echo "<td>" .$row['b_pickupdate']. "</td>";
			echo "<td>" .$row['b_returndate']. "</td>";
			echo "<td>" .$row['b_totalprice']. "</td>";
			echo "<td>" .$row['s_desc']. "</td>";
			echo "<td>"  ;
			echo "<a href='customermodify.php?id=".$row['b_id']."' class= 'btn btn-warning'>Modify</a> &nbsp";
			echo "<a href='customercancel.php?id=".$row['b_id']."' class= 'btn btn-warning'>Cancel</a> ";

			echo "</td>" ;
			echo '</tr>';

  		}

  	?>

  
  </tbody>
</table>

</div>	