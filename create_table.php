<?php
// Connect to the database
$host = "sql6.freemysqlhosting.net";
$username = "sql6587280";
$password = "lL9IzSLKt6";
$dbname = "sql6587280";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the input from the user
$productid = $_POST['productid'];
$productname = $_POST['productname'];
$productprice = $_POST['productprice'];
$productexpiry = $_POST['productexpiry'];

// Create the table
$sql = "CREATE TABLE products (
   productid INTEGER PRIMARY KEY,
   productname VARCHAR(255),
   productprice DECIMAL(10,2),
   productexpiry DATE
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
