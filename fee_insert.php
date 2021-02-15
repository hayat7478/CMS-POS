<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"cms_db");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO fee (student_id,challan_no,amount,charges,total_amount,bank,br_cod,agent_name,location,status,submit_no,date) VALUES 
('$_POST[student_id]','$_POST[challan_no]','$_POST[amount]','$_POST[charges]','$_POST[total_amount]','$_POST[bank]','$_POST[br_cod]','$_POST[agent_name]','$_POST[location]','$_POST[status]','$_POST[submit_no]','$_POST[date]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
 header("Location: fee.php"); 
?>
</body>
</html>