<?php
include 'cbsession.php';
if (!session_id())
{
	session_start();
}

include 'headerparent.php';
include ('dbconnect.php'); 

$fid=$_SESSION['uid'];
$cids = $_GET['exid'];

$sqlac="SELECT * FROM expect_attendance
    LEFT JOIN children ON expect_attendance.childID = children.childID
    WHERE children.accountID = '$fid' AND expectID = '$cids'";

$result=mysqli_query($con,$sqlac);
$row=mysqli_fetch_array($result);


 
?>

<div class = "container">

    <div class="col-sm-6">
        <br><br>
        <form method= "POST" action="expectattmodifyprocess.php">
        <fieldset>
            <legend>Modify Form</legend>
            <br><br>
            <div class="form-group">
            <label for="exampleSelect1">Parent ID: <?php echo $fid; ?></label>
            <br><br>
    </div>

    <label for="examplech" class="form-label mt-4">Child:  <?php echo "$row[Child_name]";?></label>
                  
                </div>

                <div class="form-group">
                <label for="exampleaa" class="form-label mt-4"> First Date</label>
                <input type="date" name="fdatemod" class="form-control" id="exampleInputEmail33" value ="<?php echo $row['dateFirst']?>" required>
                </div>
                <div class="form-group">
                <label for="exampleab" class="form-label mt-4"> Last Date</label>
                <input type="date" name="ldatemod" class="form-control" id="exampleInputEmail33" value ="<?php echo $row['dateLast']?>" required>
                </div>
                <div class="form-group">
                <label for="examplebb" class="form-label mt-4">Attend</label>
                <?php
                                    $sqlar = "SELECT * FROM status_attendance";
                                    $result = mysqli_query($con, $sqlar);
                                    echo '<select class="form-select" id="exampleSelect1267" name="exp_attstatusmod">';

                                    while($row=mysqli_fetch_array($result)){
                                        echo '<option value="' . $row["statusID"] . '">' . $row["statusDesc"] . '</option>';
                                    }
                                    echo '</select>';
                                    ?>  
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Approval</label>
                <?php
                                    $sqlba = "SELECT * FROM attendance_type";
                                    $result = mysqli_query($con, $sqlba);
                                    echo '<select class="form-select" id="exampleSelect1267" name="exp_attapprovalmod">';

                                    while($row=mysqli_fetch_array($result)){
                                        echo '<option value="' . $row["attendID"] . '">' . $row["attend_desc"] . '</option>';
                                    }
                                    echo '</select>';
                                    ?>                  
                                    </div>
                                    <input type="hidden" name="chid" value = "<?php echo $cids?>">

                <br>
                <button type="submit" class="cu_btn btn_2">Submit</button>
                <button type="reset" class="cu_btn btn_3">Clear</button>
            </fieldset>
            </form>
        </div>
    </div>
</div>