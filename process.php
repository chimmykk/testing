<?php
$servername = "sql6.freemysqlhosting.net";
$database = "sql6587280";
$username = "sql6587280";
$password = "lL9IzSLKt6";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO users (name, address, phone) VALUES ('Test', 'Testing', '43433')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
