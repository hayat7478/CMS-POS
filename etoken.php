<?php
include('session.php');
include_once("include/database.php");
if(!isset($_SESSION['login_user'])){
header("location: logins.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2019 08:28:06 GMT -->
<!----------- PHP Header Start----------------->
<?php
include 'include/header.php';
?>

>
<!----------- PHP Header End----------------->
<body onload="info_noti()">

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <?php
include 'include/navigation.php';
?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
 <?php
include 'include/top_bar.php';
?>
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
      <h6 class="text-uppercase">E Ticket Form</h6>
     <hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
             <form method="post" action="insert_etoken.php">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Customer Token
                </h4>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-1">Name Customer</label>
                    <input type="text" class="form-control" id="input-1" name="name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-2">CNIC No/Form Number</label>
                    <input type="Number" class="form-control" id="input-2" name="formno" placeholder="Number inter here">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-3">Paid Amount</label>
                    <input type="Number" class="form-control" id="input-3" name="finance"  required=""     placeholder="Amount inter here">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-4">Contact Number</label>
                    <input type="Number" class="form-control" id="input-4" name="mobile"          placeholder="Mobile No inter">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="input-6">Services</label>
                  <select class="form-control" id="input-6" name="service">
				  <option>Matric Supply Admission Form 2020</option>
				  <option>Intermediate Special Exame Form 2020</option>
                       <option>walking/Printing/Scanning</option>
                       <option>Utaility Bill</option>
                        <option>Intermediate</option>
                       <option>Color Printer Epson L805</option>
                       <option>Punjab University/Admission/Registration </option>
          					   <option>BISE LAHORE/Admission/</option>
                        <option>SARGODHA UNIVERSITY/Admission/</option>
          						 <option>Shop Expenses</option>
    					         <option>AIOU/Admission/NOC </option>
                       <option>Information</option>
                       <option>Form Filling</option>
                       <option>Internet Bill</option>
                       <option>Kamyab Jawan Loan Scheem</option>
                       <option>Bank Payment</option>
                       <option>HBL Konnect Payment</option>
                       <option>Nadra e Sahulat</option>
                       <option>Naya Pakistan Housing Scheem</option>
                  </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input-7">Cash In/Out</label>
                    <select class="form-control" id="input-7" name="in_out"     >
                      <option>IN</option>
                      <option>OUT</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-9">More Details</label>
                  <textarea class="form-control" rows="4" id="input-9" name="textarea" ></textarea>
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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Customer Details</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                       <th scope="col">Name Customer</th>
                      <th scope="col">Services</th>
					             <th scope="col">Payment</th>
                      <th scope="col">IN/OUT</th>
                      <th scope="col">Time & Date</th>
          					  <th scope="col">Printing</th>
                     </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
				$result = mysqli_query($conn,"SELECT * FROM etoken ORDER BY id DESC LIMIT 20;");    
        $i=1;
				while($row = mysqli_fetch_array($result)) {
				?>
				<tr>
				<td><?php echo $row["id"]; ?></td>
          <td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["service"]; ?></td>
					<td><?php echo $row["finance"]; ?></td>
					<td><?php echo $row["in_out"]; ?></td>
					<td><?php echo $row["timedate"]; ?></td>
					<td><?php echo "<td><a href=\"etoken_update.php?id=$row[0]\">Edit</a> | <a href=\"etoken_invoice.php?id=$row[id]\" onClick=\"return confirm('Are you sure you Print invoice?')\">Print</a></td>";   ?></td>
				</tr>
       <?php
				$i++;
				}
				?>
        </tr>
        </tbody>
					
					
					
   <!----------       <tr>
                      <th scope="row">2</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                     
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      
                    </tr>--------->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
	  

    <div class="row">
        <div class="col-lg-6">
      
        </div>

        <div class="col-lg-6">
      
          
        </div>
      </div><!--End Row-->

    </div>
    
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer--
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 BangoDash Admin
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
