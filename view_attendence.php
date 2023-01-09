<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    
</head>
<style>
  .container{
    font-size: 30px;
    color: white;
    background-color: rgb(49, 139, 49);
    text-align: center;
    height: auto;
    width: 80%;
    margin: auto;
    color: bisque;
    font-family: monospace;

  }
</style>
<body>
  <div class ="container">
  <?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$con = mysqli_connect($server, $username, $password,$database);

if(!$con){
  die('sorry we failed to connect:' . mysqli_connect_error());
}

$sql = "SELECT * FROM `attend`";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
if($num>0){
        
         while ($row = mysqli_fetch_assoc($result)) {
        
          echo $row['name'];
          echo "/";
          echo $row['day'];
          echo "/";
          echo $row['attendence'];
          echo "<hr>";
          
         
      }
  $con->close();

}
?>
</div>
</body>
</html>