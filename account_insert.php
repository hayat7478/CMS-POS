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
$sql="INSERT INTO accounts (account_id, account_name) VALUES ('$_POST[account_id]','$_POST[account_name]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
 header("Location: account.php"); 
?>
</body>
</html>