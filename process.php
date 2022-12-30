<?php


$conn= new mysqli('sql6.freemysqlhosting.net','sql6587280','lL9IzSLKt6','sql6587280')or die("Could not connect to mysql".mysqli_error($con));

  $server = "sql6.freemysqlhosting.net";
  $username = "sql6587280";
  $password = "lL9IzSLKt6";

  $conn = mysqli_connect($server, $username, $password);
  mysqli_select_db($conn, "sql6587280");

  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO users (name, address, phone) VALUES ('$name', '$address', '$phone')";
  mysqli_query($conn, $sql);

  mysqli_close($conn);
?>
