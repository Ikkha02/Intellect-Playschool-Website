<?php

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include "dbconnect.php";

    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";


    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    $Aid = $_POST['Aid'];
    $date = $_POST['date'];

    if ($error === 0) {
        if ($img_size > 125000) {
            echo "<script>
                  alert('Sorry, your file is too large.');
                  window.location.href = 'paymentabout.php?id=$Aid';
                </script>";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png", "pdf");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                //UPDATE into Database
                $sql = "UPDATE payment SET receiptImage='$new_img_name', r_sent = 'Receipt Sent', RSentDate = '$date' WHERE ReceiptID='$Aid'";
                mysqli_query($con, $sql);
                mysqli_close($con);
                echo "<script>
                  alert('Receipt successfully uploaded');
                  window.location.href = 'paymentabout.php?id=$Aid';
                </script>";

            } else {
                echo "<script>
                  alert('File type not supported');
                  window.location.href = 'paymentabout.php?id=$Aid';
                </script>";
            }
        }
    } else {
        echo "<script>
                  alert('unknown error occurred!');
                  window.location.href = 'paymentabout.php?id=$Aid';
                </script>";
    }
}
?>
