<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect("localhost", "root" , "", "chat");
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
