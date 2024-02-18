<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "act1";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn) {
    die("Unable to connect to the database ". mysqli_connect_error());
  }

?>