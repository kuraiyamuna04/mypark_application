
<?php
if (isset($_POST['attendence'])) {
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);
  if (!$con) {
    die('error: ' . mysqli_connect_error());
  }
    $name = $_POST['name'];
    $attendence = $_POST['attendence'];
    $day = $_POST['day'];
    $sql = "INSERT INTO `users`.`attend` ( `name`,`attendence`,`day`) VALUES  ('$name','$attendence', '$day')";

  if ($con->query($sql) == true) {
    header("location: user.php");

  } else {
    echo "error : $sql<br>$con -> error";
  }
  $con->close();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<style>
    .container {  
        padding: 50px;  
        background-color: rgb(183, 215, 135);  
        margin: 0 20% ;
      }  
      input[type=text], input[type=password], textarea {  
        width: 100%;  
        padding: 15px;  
        margin: 5px 0 22px 0;  
        display: inline-block;  
        border: none;  
        background: #f1f1f1;  
      }  
      input[type=text]:focus, input[type=password]:focus {  
        background-color: orange;  
        outline: none;  
      }  
</style>
<body>
 
  <form method="Post" action="user_attendence.php"> 
  <div class="container">  
  <center>  <h1> mark your attendence</h1> </center>  
  <hr>
  <label> <b>name</b></label>   
<input type="text" name="name" placeholder= "name" size="25" required />  
  <label> <b>Attendence </b></label>   
<input type="text" name="attendence" placeholder= "present or absent" size="15" required />
<label> <b>Day </b></label>   
<input type="text" name="day" placeholder= "day" size="15" required />   
    <button type="submit" class="registerbtn">submit</button> 
</div>   
</form>  
</body>
</html>