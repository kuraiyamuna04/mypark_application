<?php
if (isset($_POST['name'])) {
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);
  if (!$con) {
    die('error: ' . mysqli_connect_error());
  }
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `users`.`users` ( `name`, `username`, `email`, `password`) VALUES  ('$name', '$username', '$email', '$password')";

  if ($con->query($sql) == true) {
    header("location: admin.php");

  } else {
    echo "error : $sql<br>$con -> error";
  }
  $con->close();
}

?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: rgb(79, 173, 251);  
  background-image: url("https://th.bing.com/th/id/R.29c2476546253aa0745cd540962f7fca?rik=kfPoBGFCcT3wGw&riu=http%3a%2f%2fwww.wallpapers13.com%2fwp-content%2fuploads%2f2015%2f12%2fGreen_park_trees_nature_beautiful_day_hd-wallpaper-1871-1920x1440.jpg&ehk=SLVC%2b4MJ4EFOJnsI0QUT%2fJdp0rRechLIIRUNbMOhRaU%3d&risl=&pid=ImgRaw&r=0");
  z-index: -1;
}  
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
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form  action="add_staff.php" method="POST"> 
  <div class="container">  
  <center>  <h1> ADD YOUR STAFF HERE</h1> </center>  
  <hr>  
  <label> <b>Name </b></label>   
<input type="text" name="name" placeholder= "name" size="15" required />   
<label><b> Username </b></label>    
<input type="text" name="username" placeholder="username" size="15"required />   
    
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
  
    <label for="password"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password" required>  
  
   
    <button type="submit" class="registerbtn">Add staff</button>    
</form>  
</body>  
</html>  