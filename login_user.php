<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "users";

$con = mysqli_connect($server, $username, $password, $database);
if(!$con){
    die('error: ' . mysqli_connect_error());
}
  $username = $_POST['username'];
  $passwd = $_POST['password'];

  $sql = " SELECT * from `users` where username ='$username' AND password = '$passwd'";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    
    session_start();
    
    header("location: user.php");
  }
  

 }
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<link rel="stylesheet" href="login_style.css">  
</head>    
<body>    
    <center> <h1> Login Form For Users </h1> </center>   
    <form action="login_user.php" method="post">
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>  
            <div class='last'>
              
            </div> 
        </div>   
    </form>     
</body>     
</html>  