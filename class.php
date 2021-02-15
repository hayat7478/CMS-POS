<?php
include_once("include/database.php");
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/form-basic-layouts.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2019 08:44:21 GMT -->
<head>
  
  
  <?php
include 'include/header.php';
?>
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
  <?php
include 'include/navigation.php';
?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
  <?php
include 'include/top_bar.php';
?>
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
      <h6 class="text-uppercase">Add New Class</h6>
     <hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
<!-----------------=========FORM STARTING===============------------->
              <form method="post" action="class_insert.php">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Add New Class
                </h4>
                
                 <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-23">Select Department</label>
                    <select name="dept_name" class="form-control form-control-square" id="input-23">
                      <option>SELECT</option>
                       <?php include('include/config.php'); ?>
                       <?php 
                      $sqli = "SELECT * FROM department";
                      $result = mysqli_query($con, $sqli);
                       while ($row = mysqli_fetch_array($result)) {
                          # code...
                        echo '<option >'.$row['namedepartment'].'-'.$row['id'].'</option>';

                       }  
                      ?>
                   </select>
                    </div>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-1">Class Name</label>
                    <input type="text" class="form-control" name="class_name" id="input-1" name="class_id" required="">
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
<!-----------------=========FORM END===============------------->
        <div class="col-lg-6">
		
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Department & Class List</h5>
			  <div class="table-responsive">
               <table class="table">
                  <thead>
				  <tbody>
				  <thead>
                    <tr>
                        <th>S# ID</th>
                        <th>Department Name</th>
                        <th>Class Name</th>
						<th>Status</th>
                    </tr>
                </thead>
                    <tr>
					<?php
                      $con = mysqli_connect('localhost', 'root', '');
                      mysqli_select_db($con, 'cms_db');
                      $sql =  "SELECT * FROM class ORDER BY id DESC";
                      $records = mysqli_query($con, $sql);
                      while($row = mysqli_fetch_array($records)) 
                      {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['dept_name']."</td>";
                        echo "<td>".$row['class_name']."</td>";
                         echo "<td><a href=\"class_update.php?id=$row[0]\">Edit</a> | <a href=\"class_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
                      }
                      ?>
                    </tr>
					</tbody>
                  </thead>
                </table>
				</div>
            </div>
          </div>
        </div>
          
      </div><!--End Row-->
<!----------
    <div class="row">
        <div class="col-lg-6">
      <h6 class="text-uppercase">Form with square input</h6>
        <hr>
          <div class="card">
            <div class="card-body">
              <form>
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Personal Info
                </h4>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-18">First Name</label>
                    <input type="text" class="form-control form-control-square" id="input-18">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-19">Last Name</label>
                    <input type="text" class="form-control form-control-square" id="input-19">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-20">Email ID</label>
                    <input type="email" class="form-control form-control-square" id="input-20">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-21">Contact Number</label>
                    <input type="password" class="form-control form-control-square" id="input-21">
                  </div>
                </div>
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-file-text-o"></i>
                    Requirements
                  </h4>
                <div class="form-group">
                  <label for="input-22">Organization Name</label>
                  <input type="text" class="form-control form-control-square" id="input-22">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-23">Services</label>
                    <select class="form-control form-control-square" id="input-23">
                      <option>Web Development</option>
                      <option>Mobile Development</option>
                      <option>Digital Marketing</option>
                      <option>Graphic Designing</option>
                      <option>Ecommerce Industr</option>
                  </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-24">Budget</label>
                    <select class="form-control form-control-square" id="input-24">
                      <option>BUDGET</option>
                      <option>Less then 2000$</option>
                      <option>2000$ - 10000$</option>
                      <option>10000$ - 20000$</option>
                      <option>Above 20000$</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-25">Select File</label>
                  <input type="file" class="form-control form-control-square" id="input-25">
                </div>
                <div class="form-group">
                  <label for="input-26">Project Information</label>
                  <textarea class="form-control form-control-square" rows="4" id="input-26"></textarea>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                  <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
      <h6 class="text-uppercase">Form with round input</h6>
        <hr>
          <div class="card">
            <div class="card-body">
              <form>
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   User Profile
                </h4>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-27">First Name</label>
                    <input type="text" class="form-control form-control-rounded" id="input-27">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-28">Last Name</label>
                    <input type="text" class="form-control form-control-rounded" id="input-28">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-29">Username</label>
                    <input type="text" class="form-control form-control-rounded" id="input-29">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-30">Petname</label>
                    <input type="text" class="form-control form-control-rounded" id="input-30">
                  </div>
                </div>
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-envelope-o"></i>
                    Contact Info &amp; Bio
                  </h4>
                <div class="form-group">
                  <label for="input-31">Email ID</label>
                  <input type="email" class="form-control form-control-rounded" id="input-31">
                </div>
                <div class="form-group">
                  <label for="input-32">Website Url</label>
                  <input type="text" class="form-control form-control-rounded" id="input-32">
                </div>
                <div class="form-group">
                  <label for="input-33">Contact Number</label>
                  <input type="text" class="form-control form-control-rounded" id="input-33">
                </div>
                <div class="form-group">
                  <label for="input-34">User Information</label>
                  <textarea class="form-control form-control-rounded" rows="4" id="input-34"></textarea>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                  <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	
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


<!-- Mirrored from kvthemes.com/bangodash/color-version/form-basic-layouts.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2019 08:44:21 GMT -->
</html>
