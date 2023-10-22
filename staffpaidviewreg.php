<?php 

if (!session_id())

    {
        session_start();
    }

include ('headeradmin.php');
include ("dbconnect.php");

    

//retrieve new bookings
$sql = "SELECT * FROM registrationpayment 
      LEFT JOIN re ON registrationpayment.r_status = re.r_stats
      LEFT JOIN program ON registrationpayment.p_id = program.Program_ID
      LEFT JOIN children ON registrationpayment.ChildID = children.ChildID
      where r_status ='1'";
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
    <!-- breadcrumb part -->
    <section class="breadcrumb_part parallax_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s">Registration Paid Dashboard</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <span>.</span>
                            <p> Team</p>
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
    <Br></Br>
    <div class="section_tittle_style_02 new_style mb-1">

                <h2 class="title wow fadeInDown" data-wow-delay=".3s" >Student <span
                        class="title_overlay_effect">List</span></h2>               
            </div>
    <head>  
           <title>Search HTML Table Data by using JQuery</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    </head>

    <div style="width: 50%; margin: auto; text-align: center;">
    <input type="text" name="search" id="search" placeholder="Search..." class="form-control">
    </div>

    <form class="form-horizontal" method ="POST" action="staffapproval.php">
    <Br>
    <table class="content-table" id="tbuser_booking">  
  <thead>
    <tr class="title wow fadeInDown" data-wow-delay=".3s">
      <th></th>
      <th></th>
      <th scope="col">Child Name</th>
      <th scope="col">Program Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Date</th>
      <th scope="col">Receipt Status</th>
      <th scope="col">Operation</th>
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
         echo"<td>".$row['Program_name']."</td>";
         echo"<td>".$row['r_amount']."</td>";
         echo"<td>".$row['PaymentDate']."</td>";
         echo"<td>".$row['r_desc']."</td>";
          echo"<td>";
                    echo"<a href='paymentapprovalregpaid.php?id=".$row['ReceiptID']."'class='btn btn-warning'>View</a>&nbsp";  

         echo"</td>";
         echo'</tr>';
        }
    ?>
    </tbody>

</table>
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
</body>

</html>