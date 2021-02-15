<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/form-basic-layouts.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2019 08:44:21 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>BangoDash Bootstrap  Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->
   <?php
include 'include/navigation.php';
?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-ibiza">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	    <i class="icon-envelope-open"></i></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 4 new messages
          <span class="badge badge-danger">4</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-1.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-2.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-3.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-4.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	  <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 10 Notifications
          <span class="badge badge-primary">10</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-people fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-cup fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-bell fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/avatars/avatar-17.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-17.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Katrina Mccoy</h6>
            <p class="user-subtitle">katrina92@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Basic Layouts</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Layouts</li>
         </ol>
	   </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      <h6 class="text-uppercase">Fee Details</h6>
     <hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <form method="post" action="fee_insert.php" >
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Fee Paid Details
                </h4>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-6">Student Name</label>
                    <!---<input type="text" class="form-control" name="student_id" id="input-1">--->
                 <select class="form-control form-control-rounded" name="student_id" id="input-6">
                         <?php include('include/config.php'); ?>
                        <?php 
                      $sqli = "SELECT * FROM etoken";
                      $result = mysqli_query($con, $sqli);
                       while ($row = mysqli_fetch_array($result)) {
                          # code...
                        echo '<option >'.$row['name'].'-'.$row['id'].'</option>';
                       }  
                      ?>
                    </select>
                  </div>
                
                  <div class="form-group col-md-6">
                    <label for="input-1">Challan NUMBER</label>
                    <input type="text" class="form-control" name="challan_no" id="input-1">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="input-1">Challan Fee</label>
                    <input type="text" class="form-control" name="amount" id="input-1">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="input-2">Comission</label>
                    <input type="text" class="form-control" name="charges" id="input-2">
                  </div>
                   <div class="form-group col-md-2">
                    <label for="input-2">Total Fee </label>
                    <input type="text" class="form-control" name="total_amount" id="input-2">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="input-6">BANK NAME</label>
                    <select class="form-control" name="bank" id="input-6">
                      <option>HBL</option>
                      <option>KONNECT HBL</option>
                      <option>UBL</option>
                  </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="input-6">BRANCH CODE</label>
                    <select class="form-control" name="br_cod" id="input-6">
                      <option>2487</option>
                      <option>96990</option>
                      <option>1246</option>
                      <option>0197</option>
                       <option>2453</option>
                        <option>2431</option>
                  </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="input-4">Location</label>
                    <input type="text" class="form-control" name="location" id="input-4">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-6">Paid Name</label>
                    <select class="form-control" name="agent_name" id="input-6">
                      <option>Qaisar Hayat</option>
                      <option>Khizar Hayat</option>
                      <option>Sikandar Hayat</option>
                  </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-7">Status</label>
                    <select class="form-control" name="status" id="input-7">
                      <option>Pending</option>
                      <option>Submitted</option>
                  </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-4">If Sumitted No. inter here</label>
                    <input type="number" class="form-control" name="submit_no" id="input-4">
                  </div>
                   <div class="form-group col-md-6">
                    <label for="input-4">Submitted Date</label>
                    <input type="Date" class="form-control"  name="date" id="input-4">
                  </div>
                </div>
                
                <div class="form-footer">
                  <button type="submit" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                  <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>


    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 AL HAYAT COMPUTERS
        </div>
      </div>
    </footer>
	<!--End footer-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/form-basic-layouts.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2019 08:44:21 GMT -->
</html>
