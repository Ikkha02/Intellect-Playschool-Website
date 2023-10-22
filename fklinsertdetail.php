<?php 

if (!session_id()) {
    session_start();
}
include ("headerstaff.php");
include ("dbconnect.php");

if(isset($_GET['assessmentID'])) { 
    $assessmentID = $_GET['assessmentID'];
}

//retrieve new bookings
$sql = "SELECT * FROM assessment where assessmentID ='$assessmentID'";
 
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


<!-- fetaures part here -->
    <section class="features_new_area section_padding">
 
        <img class="f_shap_bg" src="img/home6/features_bg_shap.png" alt="">
        <div class="container">
            <div class="section_tittle_style_02 new_style mb-1">
                <h3 class="title wow fadeInDown" data-wow-delay=".3s">Enter The Assessment Details</h3>
                <br>
            </div>
</form>
</div>
<div class="container">
<table>
       <form class="form-horizontal" method ="POST" action="fklinsertsubjectprocess.php">
  <tr>
    <th>Subject Name</th>
    <th>Manner</th>
    <th>Writing</th>
    <th>Reading</th>
    <th>Counting</th>
  </tr>

<div>

  <tr>

    <td>Bahasa Malaysia</td>
    

  <td>
    <a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner1" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>

  </td>
 
    
  <td><a ><?php $sqlstatus1 = "SELECT * FROM achievementtype";
                                 $resultstatus1 = mysqli_query($con,$sqlstatus1); 
                                echo '<select class="form-select" name="writing1" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus1))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>

  </td>

  
 <td><a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="reading1" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>

  </td>
     
                                                
  </td>
    <td><a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="counting1" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

   
</tr>

<div> 

  </tr>
  <tr>
    <td>Bahasa Inggeris</td>
    </td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner2" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    </td>
        <div>
      


    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="writing2" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>

 

  </td>

   </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="reading2" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    </td>
    <td>
      <a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="counting2" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
    </td>
  </tr>

  <tr>
    <td>Bahasa Arab</td>
    </td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner3" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>



    </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="writing3" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>
    </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="reading3" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="counting3" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
    </td>

  </tr>
  <tr>
    <td>Bahasa Cina</td>
    <td><a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="manner4" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>
    <td><a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="writing4" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>
    <td><a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="reading4" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>
    <td><a ><?php $sqlstatus2 = "SELECT * FROM achievementtype";
                                 $resultstatus2 = mysqli_query($con,$sqlstatus2); 
                                echo '<select class="form-select" name="counting4" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus2))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>



  </tr>
  <tr>
    <td>Matematik</td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner5" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="writing5" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="reading5" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="counting5" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>


  </tr>

  <tr>
    <td>Sains</td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner6" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="writing6" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="reading6" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="counting6" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
    </td>

  </tr>

  <tr>
    <td>Arts & Craft</td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner7" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
                                 

  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="writing7" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
                               </td>


    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="reading7" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="counting7" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>
                                 
  </tr>

  <tr>
    <td>Pendidikan Islam & Jawi</td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner8" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="writing8" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="reading8" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="counting8" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>


  </tr>

  <tr>
    <td>Sports / Sensory / Brain Gym</td>
 <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="manner9" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="writing9" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>

<td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="reading9" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a>
  </td>
    <td><a ><?php $sqlstatus = "SELECT * FROM achievementtype";
                                 $resultstatus = mysqli_query($con,$sqlstatus); 
                                echo '<select class="form-select" name="counting9" id="exampleSelect1">';
                                while($rowstatus=mysqli_fetch_array($resultstatus))
                                {
                                  echo"<option value ='".$rowstatus['Sub_achievement']."'>".$rowstatus['achievement_desc']."</option>";
                                } 
                                echo '</select>';
                                 ?></a></td>
                                 

  </tr>

</table>

<br>
<br>
<br>
<br>
<br>

<div class="container">
            <div class="section_tittle_style_02 new_style mb-1">
                <h2 class="title wow fadeInDown" data-wow-delay=".3s">V.A.K Assessment</h2>
                <p class="description wow fadeInDown" data-wow-delay=".3s">Kidzo mission is to provide affordable,
                    high-quality early education and childcare<br> services for working families to ensure every child.
                </p>
            </div>

         <br>
            <br>

<table>

  <tr>
    <th>Cara Pembelajaran (V.A.K) </th>
    <th>Visual</th>
    <th>Audio</th>
    <th>Kinestetik</th>

  </tr>
  <tr>

    <td>V: gambar/Charts/Tulisan</td>
    <td><input type="text" id="fname" name="visual" placeholder="Enter"></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td>A: Mendengar/Audio/Bunyi</td>
    <td></td>
    <td><input type="text" id="fname" name="audio" placeholder="Enter"></td>
    <td></td>

  </tr>
  <tr>
    <td>K: Tubuh Badan/ Pergerakan/aktif</td>
    <td></td>
    <td></td>
    <td><input type="text" id="fname" name="kinestetik" placeholder="Enter"></td>

  </tr>
  <tr>
    <td>Catatan/Komen</td>
    <td colspan="3"><input type="text" id="fname" name="comments" placeholder="Enter"></td>
  </tr>

</table>

<br>
<br>
<br>
<br>
<br>

<div class="container">
            <div class="section_tittle_style_02 new_style mb-1">
                <h2 class="title wow fadeInDown" data-wow-delay=".3s">Intelligence Assessment</h2>
                <p class="description wow fadeInDown" data-wow-delay=".3s">Kidzo mission is to provide affordable,
                    high-quality early education and childcare<br> services for working families to ensure every child.
                </p>
            </div>

         <br>
            <br>

<table>
  <tr>
    <th>Kepelbagaian Kecerdasan </th>
    <th>Catatan / Komen</th>


  </tr>
  <tr>
    <td>Kecerdasan Bahasa</td>
    <td><input type="text" id="fname" name="Bahasa" placeholder="Enter"></td>


  </tr>
  <tr>
    <td>Kecerdasan Logik</td>
    <td><input type="text" id="fname" name="Logik" placeholder="Enter"></td>


  </tr>
  <tr>
    <td>Kecerdasan Muzikal</td>
    <td><input type="text" id="fname" name="Muzikal" placeholder="Enter"></td>


  </tr>
  <tr>
    <td>Kecerdasan Visual</td>
    <td><input type="text" id="fname" name="Visual" placeholder="Enter"></td>


  </tr>
  <tr>
    <td>Kecerdasan Kinestetik</td>
    <td><input type="text" id="fname" name="Kinestetik" placeholder="Enter"></td>


  </tr>
    <tr>
    <td>Kecerdasan Interpersonal</td>
    <td><input type="text" id="fname" name="Interpersonal" placeholder="Enter"></td>


  </tr>
    <tr>
    <td>Kecerdasan Intrapersonal</td>
    <td><input type="text" id="fname" name="Intrapersonal" placeholder="Enter"></td>


  </tr>
    <tr>
    <td>Kecerdasan Naturalis</td>
    <td><input type="text" id="fname" name="Naturalis" placeholder="Enter"></td>


  </tr>
    <tr>
    <td>Kecerdasan Existentialis</td>
    <td><input type="text" id="fname" name="Existentialis" placeholder="Enter"></td>
  </tr>

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
</table><br>
        </div><div>
<input type="submit" class="cu_btn btn_2" value="Submit">
<button type="reset" class="cu_btn btn_3">Clear</button></div>
  <input type="hidden" name="assessmentID" value="<?php echo $assessmentID?>">
</div>
</form>
    </section>
    <!-- features part end -->