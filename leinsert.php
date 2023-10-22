<?php 

if (!session_id()) {
    session_start();
}
include ("headerstaff.php");
include ("dbconnect.php");

//get booking id from URL
if(isset($_GET['id'])) {
    $bid = $_GET['id'];
}

//retrieve new bookings
$sql = "SELECT * FROM children where childID ='$bid'";
 
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


?>  
<head>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.dropbtn {
  background-color: #d7f0e9;
  color: black;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: grey;
}
</style>
</head>

 <!-- banner part here -->
    <section class="hero_banner_area" data-bg-color="#D7F0EB">
        <img class="bg_shape" src="img/home6/bg_illustrration.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero_banner_content">
                        <h2>Little Explorer Assessment <span class="title_overlay_effect"></span></h2>
                        <p><?php echo $row['Child_name']?></p><br>
                        <form action="leinsertassessment.php" method="post">
                      <div class="form-group">
                          <label for="type">Assessment Type:</label>
                          <?php 
                              $sqlstatus = "SELECT * FROM s_type";
                              $resultstatus = mysqli_query($con,$sqlstatus); 
                              echo '<select class="form-control form-select" name="type" id="exampleSelect1">';
                              while($rowstatus=mysqli_fetch_array($resultstatus))
                              {
                                echo"<option value ='".$rowstatus['s_id']."'>".$rowstatus['s_desc']."</option>";
                              } 
                              echo '</select>';
                          ?>
                      </div>
                      <div class="form-group">
                          <label for="comments">Assessment Comments:</label>
                          <input type="text" class="form-control" id="comments" name="comments">
                      </div><div class="form-group">
                      <label for="date">Assessment Date:</label>
                      <input type="date" class="form-control" id="date" name="date">
                  </div>
                  <input type="hidden" name="Program_ID" value="<?php echo $row['Program_ID']?>">
                  <input type="hidden" name="childID" value="<?php echo $row['childID']?>">
                  <button type="submit" class="cu_btn btn_2">Add new assessment</button>
                  <button type="reset" class="cu_btn btn-warning">Clear</button>
                  
                  </form>
                                     
                </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/home6/man.png" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- banner part end -->


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</table>
        </div>
    </section>
    <!-- features part end -->