<?php 

if (!session_id())

    {
        session_start();
    }

include ('headerstaff.php');
include ("dbconnect.php");

//retrieve new bookings
$sql = "SELECT * FROM children  
      where Program_ID ='1'";
$result = mysqli_query($con,$sql);


?>


<style>

.content-table {
    border-collapse: collapse;
    margin: auto;
    font-size: 0.9em;
    min-width:800px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
    background-color: #351C77;
    color: white;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
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
    color: #351C77;
}

</style>
<!-- banner part here -->
    <section class="banner_part animated_hero">
        <div class="single_banner_part parallax_bg">
            <div class="container custom_container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-md-10">
                        <div class="banner_iner">
                           
                            <h2> <span>Fun</span> Kindyland <br>
                                Weekly Assessment 
                                </h2>
                            <a href="#C4" class="cu_btn btn_2">List Of Student</a>
                            <h2 id="C4"></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_animation_1">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ": 360}'>
                    <img src="img/icon/banner_icon/animated_banner_1.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_2">
                <div data-parallax='{"x": 15, "y": 100, "rotateZ": 720}'>
                    <img src="img/icon/banner_icon/animated_banner_2.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_3">
                <div data-parallax='{"x": 0, "y": 200, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_3.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_4">
                <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_4.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_5">
                <div data-parallax='{"x": 20, "y": 150, "rotateZ": 180}'>
                    <img src="img/icon/banner_icon/animated_banner_5.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_6">
                <div data-parallax='{"x": 15, "y": 100, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_6.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_7">
                <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_7.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_8">
                <div data-parallax='{"x": 10, "y": 150, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_8.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_9">
                <div data-parallax='{"x": 20, "y": 200, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_9.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_10">
                <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_10.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_11">
                <div data-parallax='{"x": 0, "y": 100, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_11.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_12">
                <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>
                    <img src="img/icon/banner_icon/animated_banner_12.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_13">
                <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>
                    <img src="img/icon/banner_icon/animated_banner_13.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_14">
                <div data-parallax='{"x": 40, "y": 150, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_14.png" alt="#">
                </div>
            </div>
            <div class="banner_animation_15">
                <div data-parallax='{"x": 10, "y": 200, "rotateZ":0}'>
                    <img src="img/icon/banner_icon/animated_banner_15.png" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end -->

<!-- fetaures part here -->
    <section class="features_new_area section_padding">
        <img class="f_shap_bg" src="img/home6/features_bg_shap.png" alt="">
        <div class="container">
            <div class="section_tittle_style_02 new_style mb-1">

                <h2 class="title wow fadeInDown" data-wow-delay=".3s" >Student <span
                        class="title_overlay_effect">List</span></h2>               
            </div>
        </div>
        <head>  
           <title>Search HTML Table Data by using JQuery</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    </head>

    <div style="width: 50%; margin: auto; text-align: center;">
    <input type="text" name="search" id="search" placeholder="Search..." class="form-control">
    </div>
    <br>
        <table class="content-table" id="tbuser_booking">   
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col" class="title wow fadeInDown" data-wow-delay=".3s" >Child Name </th>
      <th scope="col" class="title wow fadeInDown" data-wow-delay=".3s">Operation</th>

     </tr>
  </thead>

  <tbody>
    <?php
        while($row=mysqli_fetch_array($result))
        {
         echo'<tr>';
         echo"<td></td>";
         echo"<td></td>";         
         echo"<td>".$row['Child_name']."</td>";
           echo"<td>";
                    echo"<a href='fklviewweeklychoose.php?id=".$row['childID']."'class='btn btn-warning'>View</a>&nbsp";  


         echo"</td>";

         echo'</tr>';
        }
    ?>
    </tbody>
    <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#tbuser_booking tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  
    </section>
