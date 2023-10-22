<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

       <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Intellect Playschool</title>
    <link rel="icon" href="img/Intellect_playschool__logo_header.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
    <!-- elegent icon CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- nice select CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- magnify popup CSS -->
    <link rel="stylesheet" href="vendors/magnify_popup/magnific-popup.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>

    <header class="header_part">
        <div class="sub_header section_bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-md-8">
                        <div class="header_contact_info">
                            <a href="mailto:shahadat.dev@gmail.com" target="_blank"><i
                                    class="fas fa-envelope"></i>intelek.ria.villa@gmail.com</a>
                            <a href="tel:+4641468425"><i class="fas fa-phone"></i>+012-586 0816</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-4">
                        <div class="header_social_icon">
                            <p>Follow Us:</p>
                            <a href="https://www.facebook.com/intellect.islamic.playschool/" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/intellect_playschooljb/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#">Profile</a>
                            <a href="logout.php" onclick="return confirm('Are you sure you want to log out?') ? logout() : false;">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                                    <a class="navbar-brand" href="admin.php"><img src="img/Intellect_playschool_logo.png"
                                    srcset="img/Intellect_playschool_logo.png 1.2x" alt="Intellect_playschool_logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin.php">Home</a>
                                    </li>  
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Program Details
                                        </a>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="staffmodifyprograms.php">Modify Programs</a>


                                        </div>
                                    </li>                         
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            News
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="createannouncementadmin.php">Create announcement</a>
                                            <a class="dropdown-item" href="createactivitiesupdateadmin.php">Create activities update</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Assessment
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="staffinsertassessment.php">Insert Assessment</a>
                                            <a class="dropdown-item" href="staffviewassessment.php">View Assessment</a>
                                            <a class="dropdown-item" href="staffeditassessment.php">Edit Assessment</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Payment Approval
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="staffpaidview.php">Monthly Paid</a>
                                            <a class="dropdown-item" href="adminpayment.php">Monthly Not Paid</a>
                                            <a class="dropdown-item" href="adminpaymentreg.php">Registration Not Paid</a>
                                            <a class="dropdown-item" href="staffpaidviewreg.php">Registration  Paid</a>
                                            <a class="dropdown-item" href="adminpaymentfood.php">Food Not Paid</a>
                                            <a class="dropdown-item" href="staffpaidviewfood.php">Food  Paid</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Staff
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="createaccstaff.php">Create Staff Account</a>
                                            <a class="dropdown-item" href="createpayslip.php">Upload Payslip</a>
                                            <a class="dropdown-item" href="payslipviewadmin.php">View Payslip</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Attendance
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="viewstaffatt.php">View Staff Attendance</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>
</html>