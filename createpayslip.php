<?php
include 'cbsession.php';
if (!session_id())
{
  session_start();
}

 include 'headeradmin.php';
 include ('dbconnect.php'); 
 
?>

<div class="container">

		<br><br>

<form method="POST" action="createpayslipprocess.php" enctype="multipart/form-data">
  <fieldset>
    <legend><h1>PAYSLIP UPLOAD</h1></legend>

     <div class="form-group">
      <label for="exampleInputPassword2" class="form-label mt-4">Staff ID</label>
     <?php
        $sql = "SELECT * FROM staff WHERE Acc_Type = '2'";
        $result = mysqli_query($con,$sql);

        echo '<select class="form-select" name="fic" id="exampleSelect1">';
        while($row=mysqli_fetch_array($result))
        {
          echo"<option>".$row['accID']."</option>";
        }

        echo' </select>';

       ?>
    </div>

        <div class="form-group">
  <label for="state" class="form-label mt-4">Month</label>
  <select name="fmonth" class="form-control" id="state" placeholder="Enter Payslip Month" required>
    <option value="">Select Month</option>
    <option value="January">January</option>
    <option value="Febuary">Febuary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select>
</div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Payslip Date</label>
      <input type="date" name="fdate" class="form-control" id="exampleInputPassword1" placeholder="Please Enter Payslip Date" required>
    </div>

     <div class="form-group">
      <label for="AnnouncementImage" class="form-label mt-4">Insert Image</label>
      <input class="form-control" type="file" name="fpic" id="fpic" required>
      <label for="AnnouncementImage" class="form-label mt-4">*jpeg, jpg, png only</label>
    </div>




    <br><br>

    <button type="submit" class="cu_btn btn_2">Upload</button>
    <button type="reset" class="cu_btn btn_3">Clear</button>

</fieldset>

</form>


</div>

<br>