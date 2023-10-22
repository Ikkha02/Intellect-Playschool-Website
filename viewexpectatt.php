<?php

// include 'cbsession.php';

if (!session_id())
{
	session_start();
}

include 'headerparent.php';
include ('dbconnect.php'); 

$fic=$_SESSION['uid'];


$sqlk = "SELECT * FROM expect_attendance
        LEFT JOIN children ON expect_attendance.childID = children.childID
        LEFT JOIN status_attendance ON expect_attendance.expectattstatus = status_attendance.statusID
        LEFT JOIN attendance_type ON expect_attendance.attend_type = attendance_type.attendID
        where accountID = $fic";

$result = mysqli_query($con, $sqlk);

?>

<style>

.content-table {
    border-collapse: collapse;
    margin: 50px 55px;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 15px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 15px 60px;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.search-form {
    text-align: center;
    margin: 20px auto;
    width: 50%;
    padding: 10px;
  }
  .search-form input[type="text"] {
    width: 70%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }

    </style>

   <!-- breadcrumb part -->
   <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>View Attendance</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p>Child Attendance</p>
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
    <form action="" method="POST" class="search-form">
      <input type="text" name="search" placeholder="Search...">
      <button type="submit" class="btn btn-secondary">Go</button>
      <button type="button" class="btn btn-secondary" id="reset-button">Reset</button>
    </form>

    <table class="content-table">
  <tbody>
    <tr class="table-success">
    <th scope="col">Name</th>
      <th scope="col">First Date</th>
      <th scope="col">Last Date</th>
      <th scope="col">Attend/Not</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
      <th scope="col">Update</th>
      

    </tr>

    <?php
      while($row = mysqli_fetch_array($result)){

            echo '<tr>';
            echo "<td>".$row['Child_name']."</td>";
            echo "<td>".$row['dateFirst']."</td>";
            echo "<td>".$row['dateLast']."</td>";
            echo "<td>".$row['statusDesc']."</td>";
            echo "<td>".$row['attend_reason']."</td>";
            echo "<td>".$row['attend_desc']."</td>";
            echo "<td>";
              echo "<a href ='expectattmodify.php?exid=".$row['expectID']."'class = 'btn btn-primary'> Modify  </a> &nbsp ";
            echo "</td>";
            echo '</tr>';

        }

    ?>

  </tbody>
</table>
<br>