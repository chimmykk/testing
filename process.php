<?php
  $server = "localhost";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($server, $username, $password);
  mysqli_select_db($conn, "user_info");

  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO users (name, address, phone) VALUES ('$name', '$address', '$phone')";
  mysqli_query($conn, $sql);

  mysqli_close($conn);
?>
