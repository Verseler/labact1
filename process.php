<?php
  include("config.php");


  if(isset($_POST["signup"])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];

    $query = "INSERT INTO `user` (`user_name`, `password`, `first_name`, `middle_name`, `last_name`, `role`)
      VALUES
        (". $username .",". $password .",". $firstname .",". $middlename .",". $lastname .",". $role .")";

    if($conn->query($query) === TRUE) {
      echo "Inserted successfully";
  } else {
    echo "Insertion Failed";
  }
}

?>