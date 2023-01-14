<?php
session_start();
include 'database.php';
$id= $_SESSION["id"];
$sql=mysqli_query($conn,"SELECT * FROM users where id='$id' ");
$row  = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Covid Center - My Profile</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/feathericon.min.css">
<link rel="icon" href="assets/img/Covidcenter_logo.png">
</head>
<body>
<div class="main-wrapper">
<div class="header">
        <div class="header-left">
            <a href="index.php" class="logo">
                <img src="assets/img/Covidcenter2.png" style="max-height: 60px;width: 149px;" alt="Logo">
            </a>
            <a href="index.php" class="logo logo-small">
                <img src="assets/img/Covidcenter_logo.png" id="mini-logo" width="30" height="30">
            </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn">
            <span class="material-symbols-outlined" id="material-symbols-outlined-menu">menu</span></a>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
            </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fa-solid fa-user" id="fa-solid-fa-user"></i>
                <span class="user-img"><p id="account-name"><?php echo $_SESSION["first"] ?> <?php echo $_SESSION["last"] ?></p></span>
                </a>
                <div class="dropdown-menu">
                <div class="user-text">
                <h6 class="text-align"><?php echo $_SESSION["first"] ?> <?php echo $_SESSION["last"] ?>/h6>
                <a class="dropdown-item" href="profileSetting.php">My profile</a>
                <a class="dropdown-item" href="login.php">Logout</a>
                </div>
                </div>
                </li>
                </ul>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul class="sidebar-ul1">
                        <li class="menu-title">
                        </li>
                        <li>
                            <a href="index.php"><span class="material-symbols-outlined" id="sidebar-icon">home</span><span>Dashboard</span></a>
                        </li>   
                        <li>
                            <a href="chart.php"><span class="material-symbols-outlined" id="sidebar-icon">analytics</span><span>Chart</span></a>
                        </li>
                        <li>
                            <a href="rapid test.php"><span class="material-symbols-outlined" id="sidebar-icon">labs</span><span>Rapid Test</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="material-symbols-outlined" id="sidebar-icon">bloodtype</span><span>Plasma Donor</span><span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="signup-donor.php" id="submenu-a-flex"><span id="dropmenu-span-register">Register</span></a></li>
                                <li><a href="list-of-donor.php" id="submenu-a-flex"><span id="dropmenu-span-register">Donor list</span></a></li>
                            </ul>
                            </li>
                        <li>
                            <a href="hospital.php"><span class="material-symbols-outlined" id="sidebar-icon">home_health</span><span>Hospital</span></a>
                        </li>
                        <li>
                            <a href="news.php"><span class="material-symbols-outlined" id="sidebar-icon">newspaper</span><span>News</span></a>
                        </li>
                        <li class="active" >
                            <a href="profileSetting.php"><span class="material-symbols-outlined" id="sidebar-icon">settings</span><span>Settings</span></a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Settings</h3>
</div>
</div>
</div>
<div class="row settings-tab" id="row-settings-tab-flex">
<div class="col-md-8">
<div class="card">
<div class="card-header">
 <h4 class="card-title">User Information Settings</h4>
</div>
<div class="card-body">
<form action="#" action="get">
<div class="form-group">
<label>First Name:</label>
<input type="text" class="form-control" value="<?php echo $_SESSION["first"] ?>">
</div>
<div class="form-group">
<label>Last Name:</label>
<input type="text" class="form-control" value="<?php echo $_SESSION["last"] ?>">
</div>
<div class="form-group">
<label>Email Address:</label>
<input type="email" class="form-control" value="<?php echo $_SESSION["email"] ?>">
</div>
<div class="form-group">
<label>Password:</label>
<input type="password" class="form-control" value="<?php echo $_SESSION["email"] ?>">
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>