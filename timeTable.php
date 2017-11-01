<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="js/fontawesome.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page charts-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big hidden-lg-down"><span>Bootstrap </span><strong>Dashboard</strong></div>
                  <div class="brand-text brand-small"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/user-icon-image-placeholder.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">
                  <?=$_SESSION['sess_fname'];?> <?=$_SESSION['sess_lname'];?>
                </h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="./"><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Dropdown </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li> <a href="timeTable.html"> <i class="icon-grid"></i>Time-Table </a></li>
            <li> <a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
            <li> <a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
            <li> <a href="login.html"> <i class="icon-interface-windows"></i>Login Page</a></li>
          </ul>
            <span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tables</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <ul class="breadcrumb">
            <div class="container-fluid">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Time-Table</li>
            </div>
          </ul>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Basic Table</h3>
                    </div>
                    <div class="card-body">
                      <form action="" method="POST">
                          <div class="row">
                            <div class="col-lg-2">
                                <div class="sel sel-left sel--top sel-timetable">
                                    <select name="PDE">
                                      <option value="PDE" disabled>TIME/DAY</option>
                                    </select>
                                  </div>

                                  <hr class="rule">

                                  <div class="sel sel-left sel--8 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>9:00 - 10:00</option>
                                    </select>
                                  </div>
                                  <div class="sel sel-left sel--7 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>10:00 - 11:00</option>
                                    </select>
                                  </div>
                                  <div class="sel sel-left sel--6 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>11:00 - 12:00</option>
                                    </select>
                                  </div>
                                  <div class="sel sel-left sel--5 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>12:00 - 1:00</option>
                                    </select>
                                  </div>
                                  <div class="sel sel-left sel--4 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>1:00 - 2:00</option>
                                    </select>
                                  </div>
                                  <div class="sel sel-left sel--3 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>2:00 - 3:00</option>
                                    </select>
                                  </div>
                                  <div class="sel sel-left sel--2 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>3:00 - 4:00</option>
                                    </select>
                                  </div>
                                  <div class="sel sel-left sel--1 sel-timetable">
                                    <select name="Data Modeling">
                                      <option value="Data Modeling" disabled>4:00 - 5:00</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                  <div class="col-lg-2">
                                    <div class="sel sel-left sel--top sel-timetable">
                                      <select name="PDE">
                                        <option value="PDE" disabled>MONDAY</option>
                                      </select>
                                    </div>

                                    <hr class="rule">

                                    <div class="sel sel-table sel--8 sel-timetable">
                                      <select name="MON_9">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--7 sel-timetable">
                                      <select name="MON_10">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--6 sel-timetable">
                                      <select name="MON_11">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--5 sel-timetable">
                                      <select name="MON_12">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--4 sel-timetable">
                                      <select name="MON_1">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--3 sel-timetable">
                                      <select name="MON_2">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--2 sel-timetable">
                                      <select name="MON_3">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--1 sel-timetable">
                                      <select name="MON_4">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="sel sel-left sel--top sel-timetable">
                                      <select name="PDE">
                                        <option value="PDE" disabled>TUESDAY</option>
                                      </select>
                                    </div>

                                    <hr class="rule">

                                    <div class="sel sel-table sel--8 sel-timetable">
                                      <select name="TUES_9">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--7 sel-timetable">
                                      <select name="TUES_10">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--6 sel-timetable">
                                      <select name="TUES_11">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--5 sel-timetable">
                                      <select name="TUES_12">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--4 sel-timetable">
                                      <select name="TUES_1">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--3 sel-timetable">
                                      <select name="TUES_2">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--2 sel-timetable">
                                      <select name="TUES_3">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--1 sel-timetable">
                                      <select name="TUES_4">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="sel sel-left sel--top sel-timetable">
                                      <select name="PDE">
                                        <option value="PDE" disabled>WEDNESDAY</option>
                                      </select>
                                    </div>

                                    <hr class="rule">

                                    <div class="sel sel-table sel--8 sel-timetable">
                                      <select name="WED_9">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--7 sel-timetable">
                                      <select name="WED_10">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--6 sel-timetable">
                                      <select name="WED_11">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--5 sel-timetable">
                                      <select name="WED_12">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--4 sel-timetable">
                                      <select name="WED_1">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--3 sel-timetable">
                                      <select name="WED_2">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--2 sel-timetable">
                                      <select name="WED_3">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--1 sel-timetable">
                                      <select name="WED_4">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="sel sel-left sel--top sel-timetable">
                                      <select name="PDE">
                                        <option value="PDE" disabled>THRUSDAY</option>
                                      </select>
                                    </div>

                                    <hr class="rule">

                                    <div class="sel sel-table sel--8 sel-timetable">
                                      <select name="THUR_9">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--7 sel-timetable">
                                      <select name="THUR_10">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--6 sel-timetable">
                                      <select name="THUR_11">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--5 sel-timetable">
                                      <select name="THUR_12">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--4 sel-timetable">
                                      <select name="THUR_1">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--3 sel-timetable">
                                      <select name="THUR_2">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--2 sel-timetable">
                                      <select name="THUR_3">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--1 sel-timetable">
                                      <select name="THUR_4">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="sel sel-left sel--top sel-timetable">
                                      <select name="PDE">
                                        <option value="PDE" disabled>FRIDAY</option>
                                      </select>
                                    </div>

                                    <hr class="rule">

                                    <div class="sel sel-table sel--8 sel-timetable">
                                      <select name="FRI_9">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--7 sel-timetable">
                                      <select name="FRI_10">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--6 sel-timetable">
                                      <select name="FRI_11">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--5 sel-timetable">
                                      <select name="FRI_12">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--4 sel-timetable">
                                      <select name="FRI_1">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--3 sel-timetable">
                                      <select name="FRI_2">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--2 sel-timetable">
                                      <select name="FRI_3">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--1 sel-timetable">
                                      <select name="FRI_4">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="sel sel-left sel--top sel-timetable">
                                      <select name="PDE">
                                        <option value="PDE" disabled>SATURDAY</option>
                                      </select>
                                    </div>

                                    <hr class="rule">

                                    <div class="sel sel-table sel--8 sel-timetable">
                                      <select name="SAT_9">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--7 sel-timetable">
                                      <select name="SAT_10">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--6 sel-timetable">
                                      <select name="SAT_11">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--5 sel-timetable">
                                      <select name="SAT_12">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--4 sel-timetable">
                                      <select name="SAT_1">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--3 sel-timetable">
                                      <select name="SAT_2">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--2 sel-timetable">
                                      <select name="SAT_3">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                    <div class="sel sel-table sel--1 sel-timetable">
                                      <select name="SAT_4">
                                        <option value="NIL">EMPTY SLOT</option>
                                        <option value="PDE">PDE</option>
                                        <option value="Data Modeling">Data Modeling</option>
                                        <option value="OS">OS</option>
                                        <option value="NLP">NLP</option>
                                        <option value="<?php echo $_SESSION['sess_sp1'];?>"><?php echo $_SESSION['sess_sp1'];?></option>
                                        <option value="<?php echo $_SESSION['sess_sp2'];?>"><?php echo $_SESSION['sess_sp2'];?></option>
                                        <option value="lunch">LUNCH</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-5" style="padding-left: 47%">
                              <input id="submit" type="submit" value="CONFIRM" name="submit" class="btn btn-primary btn-primary-center"/>
                            </div>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="js/jqueryv3.2.1.min.js"></script>
    <script type="text/javascript" src="js/sub-js.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='js/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
<?php  
}  
?>  