
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{  

   $id = mysqli_real_escape_string($mysqli, $_POST['id']);
   
  $name = mysqli_real_escape_string($mysqli, $_POST['name']);
  $formno = mysqli_real_escape_string($mysqli, $_POST['formno']);
  $finance = mysqli_real_escape_string($mysqli, $_POST['finance']);
  $mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
  $service = mysqli_real_escape_string($mysqli, $_POST['service']);
  $in_out = mysqli_real_escape_string($mysqli, $_POST['in_out']);
  $textarea = mysqli_real_escape_string($mysqli, $_POST['textarea']);
   
   
   // checking empty fields
   if(empty($name)) {   
            
   } else { 
      //updating the table
      $result = mysqli_query($mysqli, "UPDATE etoken SET name='$name', formno='$formno', finance='$finance', mobile='$mobile', service='$service', in_out='$in_out', textarea='$textarea'    
      	 WHERE id=$id");
      
     mysqli_close($conn);
 header("Location: etoken.php"); 
   }
}
?>

