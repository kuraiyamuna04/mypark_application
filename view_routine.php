<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$database = "routine";

$con = mysqli_connect($server, $username, $password,$database);

if(!$con){
  die('sorry we failed to connect:' . mysqli_connect_error());
 }
$name = $_POST['name'];
$sql = "SELECT * FROM `routine` where name = '$name'";

if($con->query($sql) == true){
  // echo "Successfully inserted";

  // Flag for successful insertion
  $insert = true;
}
else{
  echo "ERROR: $sql <br> $con->error";
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .container{
    font-size: 40px;
    color: white;
    background-color: rgb(49, 139, 49);
    text-align: center;
    height: auto;
    width: 80%;
    margin: auto;

  }
  input{
    height: 30px;
    width: 100px;
    border: 1px solid green;
    border-radius: 10px;
}
button{
  height: 30px;
  width: fit-content;
  border-radius: 10px;
  background-color: blue;
}
</style>
<body>
  <div class ="container">
    <form action="view_routine.php" method="post">
      <label><b>Your name</b></label>
      <input type="text" name="name" placeholder= "name" required /> 
      <button type="submit" class="registerbtn">View day plan</button>
      </form>
   <?php
   if($insert == true)
   {
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
     if ($num > 0) {
       $row = mysqli_fetch_assoc($result);
       echo $row['name'];
       echo "<br>";
       echo $row['time1'];
       echo "~";
       echo $row['work1'];
       echo "<br>";
       echo $row['time2'];
       echo "~";
       echo $row['work2'];
       echo "<br>";
       echo $row['time3'];
       echo "~";
       echo $row['work3'];
       echo "<br>";
       echo $row['day'];

     }
     $con->close();
  }?>   
  
</div>
</body>
</html>

        
    

  

        
