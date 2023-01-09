<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    
    $con = mysqli_connect($server, $username, $password,$database);
    
    if(!$con){
      die('sorry we failed to connect:' . mysqli_connect_error());
    }
    $password = $_POST['password'];
    $sql = "DELETE FROM `users` WHERE `password` = '$password'";
    
    if ($con->query($sql) == true) {
    header("location: view_staff.php");

  } else {
    echo "error : $sql<br>$con -> error";
  }
  $con->close();
    ?>