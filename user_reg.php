<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>VKHS - Virtual Kill house System</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">VKHS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">9 Sig Bn </span>has sheduled Kill House Fire
                                                        <div class="notification-date">4 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Unit Authority </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="login.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                                <div id="submenu-1" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_db.html">User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Notice Board</a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_nb.html">Published Notice <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_comp.html">My Schedule <span class="badge badge-secondary">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Formation</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_unit.php">Unit Formation</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Firing Result</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_reg.php">Result Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_stat.html">Result Satictis</a>
                                        </li>
                                        </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Firing Form</a>
                                <div id="submenu-5" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_form.php">Form Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Virtual Kill House System</h2>
                                <div>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Result</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Kill House Firing Result Register</li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="main-content container-fluid p-0" class="col-lg-6">
                                        <div class="email-search">
                                            <div class="input-group input-search">
                                                <input class="form-control" type="text" placeholder="Search in Result Register..."><span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->


                                
                    <div>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "vkhs_ver3";

                                // create a connection
                            $conn = mysqli_connect($servername, $username, $password, $database);
                            $sql = 'SELECT * FROM `killing_house` ';
                            $result = mysqli_query($conn, $sql);
                            $num = mysqli_num_rows($result);
                            if($num > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    // echo var_dump($row);
                                    echo '<div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Date and Time</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">' . $row["datetime"]. '</li>
                                            </ol>
                                        </nav>
                                    </div>';
                                    $sql = "SELECT * FROM `soldiers` WHERE `soldier_id` LIKE '$row[firing_officer]'";
                                    $res = mysqli_query($conn, $sql);
                                    $firing_officier = mysqli_fetch_assoc($res);
                                    echo '<div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Firing Officer</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">' . $firing_officier["name"].' , ' . $firing_officier["S_u_id"] . '</li>
                                            </ol>
                                        </nav>
                                    </div>';
                                    $sql = "SELECT * FROM `soldiers` WHERE `soldier_id` LIKE '$row[first_s_id]'";
                                    $res = mysqli_query($conn, $sql);
                                    $first_s = mysqli_fetch_assoc($res);
                                    $sql = "SELECT * FROM `soldiers` WHERE `soldier_id` LIKE '$row[second_s_id]'";
                                    $res = mysqli_query($conn, $sql);
                                    $second_s = mysqli_fetch_assoc($res);
                                    $sql = "SELECT * FROM `soldiers` WHERE `soldier_id` LIKE '$row[third_s_id]'";
                                    $res = mysqli_query($conn, $sql);
                                    $third_s = mysqli_fetch_assoc($res);
                                    $sql = "SELECT * FROM `soldiers` WHERE `soldier_id` LIKE '$row[fourth_s_id]'";
                                    $res = mysqli_query($conn, $sql);
                                    $fourth_s = mysqli_fetch_assoc($res);
                                    $sql = "SELECT * FROM `soldiers` WHERE `soldier_id` LIKE '$row[fifth_s_id]'";
                                    $res = mysqli_query($conn, $sql);
                                    $fifth_s = mysqli_fetch_assoc($res);
                                    $sql = "SELECT * FROM `soldiers` WHERE `soldier_id` LIKE '$row[sixth_s_id]'";
                                    $res = mysqli_query($conn, $sql);
                                    $sixth_s = mysqli_fetch_assoc($res);
                                    echo '<table class="table">
                                        <thead>
                                            <tr>
                                            <th>Pers No</th>
                                            <th>Rank</th>
                                            <th>Name</th>
                                            <th>Prac</th>
                                            <th>Hit</th>
                                            <th>Missed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                    <td data-label="Pers No">'.$row["first_s_id"].'</td>
                                                    <td data-label="Rank">'.$first_s["rank"].'</td>
                                                    <td data-label="Name">'.$first_s["name"].'</td>
                                                    <td data-label="Prac">'.$row["first_s_prac"].'</td>
                                                    <td data-label="Hit">'.$row["first_s_hit"].'</td>
                                                <td data-label="Missed">'.($row["first_s_prac"]-$row["first_s_hit"]).'</td>
                                            </tr>
                                
                                            <tr>
                                                <td data-label="Pers No">'.$row["second_s_id"].'</td>
                                                <td data-label="Rank">'.$second_s["rank"].'</td>
                                                <td data-label="Name">'.$second_s["name"].'</td>
                                                <td data-label="Prac">'.$row["second_s_prac"].'</td>
                                                <td data-label="Hit">'.$row["second_s_hit"].'</td>
                                                <td data-label="Missed">'.($row["second_s_prac"]-$row["second_s_hit"]).'</td>
                                            </tr>
                                
                                            <tr>
                                                <td data-label="Pers No">'.$row["third_s_id"].'</td>
                                                <td data-label="Rank">'.$third_s["rank"].'</td>
                                                <td data-label="Name">'.$third_s["name"].'</td>
                                                <td data-label="Prac">'.$row["third_s_prac"].'</td>
                                                <td data-label="Hit">'.$row["third_s_hit"].'</td>
                                                <td data-label="Missed">'.($row["third_s_prac"]-$row["third_s_hit"]).'</td>
                                            </tr>
                                            <tr>
                                                <td data-label="Pers No">'.$row["fourth_s_id"].'</td>
                                                <td data-label="Rank">'.$fourth_s["rank"].'</td>
                                                <td data-label="Name">'.$fourth_s["name"].'</td>
                                                <td data-label="Prac">'.$row["fourth_s_prac"].'</td>
                                                <td data-label="Hit">'.$row["fourth_s_hit"].'</td>
                                            <td data-label="Missed">'.($row["fourth_s_prac"]-$row["fourth_s_hit"]).'</td>
                                        </tr>
                            
                                        <tr>
                                            <td data-label="Pers No">'.$row["fifth_s_id"].'</td>
                                            <td data-label="Rank">'.$fifth_s["rank"].'</td>
                                            <td data-label="Name">'.$fifth_s["name"].'</td>
                                            <td data-label="Prac">'.$row["fifth_s_prac"].'</td>
                                            <td data-label="Hit">'.$row["fifth_s_hit"].'</td>
                                            <td data-label="Missed">'.($row["fifth_s_prac"]-$row["fifth_s_hit"]).'</td>
                                        </tr>
                            
                                        <tr>
                                            <td data-label="Pers No">'.$row["sixth_s_id"].'</td>
                                            <td data-label="Rank">'.$sixth_s["rank"].'</td>
                                            <td data-label="Name">'.$sixth_s["name"].'</td>
                                            <td data-label="Prac">'.$row["sixth_s_prac"].'</td>
                                            <td data-label="Hit">'.$row["sixth_s_hit"].'</td>
                                            <td data-label="Missed">'.($row["sixth_s_prac"]-$row["sixth_s_hit"]).'</td>
                                        </tr>
                                        
                                        </tbody>
                                        
                                    </table>';
                                    echo '<div class="page-breadcrumb"><nav aria-label="breadcrumb"><ol class="breadcrumb"></ol></nav></div>';

                                }
                            }
                        ?>
                    </div>                                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <a>Copyright © IDP_gp6</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->


        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->


    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->



    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>