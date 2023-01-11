<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "admin";

$con = mysqli_connect($server, $username, $password, $database);
if(!$con){
    die('error: ' . mysqli_connect_error());
}
  $adminname = $_POST['name'];
  $passwd = $_POST['passwd'];

  $sql = "SELECT * from admin where name ='$adminname' AND passwd = '$passwd'";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  if($num>0){
    session_start();
    
    header("location: admin.php");
  }
  $con->close();
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
    <center> <h1> Login Form For Admin </h1> </center>   
    <form action="login_admin.php" method="post">
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="name" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="passwd" required>  
            <button type="submit">Login</button>  
               
            </div> 
        </div>   
    </form>     
</body>     
</html>  