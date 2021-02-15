<?php
//=============mqsl
$con = mysqli_connect('localhost', 'root', '');
//==================
mysqli_select_db($con, 'cms_db');
//=======
$sql	=	"DELETE FROM class WHERE id='$_GET[id]'";
//=====================
if(mysqli_query($con,$sql))
		header("refresh:1; url=index.php");
	else
		echo "Not DELETE";
	// Close connection
mysqli_close($link);
 header("Location: class.php"); 
?>
