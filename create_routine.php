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
  $time1 = $_POST['time1'];
  $time2 = $_POST['time2'];
  $time3 = $_POST['time3'];
  $work1 = $_POST['work1'];
  $work2 = $_POST['work2'];
  $work3 = $_POST['work3'];
  $day = $_POST['day'];

  $sql = "INSERT INTO `routine`.`routine` ( `name`, `time1`, `time2`, `time3`,`work1`, `work2`, `work3`, `day`) VALUES  ('$name', '$time1', '$time2', '$time3','$work1', '$work2', '$work3', '$day')";

  if ($con->query($sql) == true) {
    header("location: admin.php");

  } else {
    echo "error : $sql<br>$con -> error";
  }
  // $con->close();
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Calibri, Helvetica, sans-serif;
      background-color: rgb(79, 173, 251);
      background-image: url("https://th.bing.com/th/id/R.29c2476546253aa0745cd540962f7fca?rik=kfPoBGFCcT3wGw&riu=http%3a%2f%2fwww.wallpapers13.com%2fwp-content%2fuploads%2f2015%2f12%2fGreen_park_trees_nature_beautiful_day_hd-wallpaper-1871-1920x1440.jpg&ehk=SLVC%2b4MJ4EFOJnsI0QUT%2fJdp0rRechLIIRUNbMOhRaU%3d&risl=&pid=ImgRaw&r=0");
      z-index: -1;
    }

    .container {
      padding: 50px;
      background-color: rgb(183, 215, 135);
      margin: 0 20%;
    }

    input[type=text],
    textarea {
      width: 30%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus {
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

    #deactivate {
      height: 30px;
      width: fit-content;
      margin: auto;
      background-color: aqua;
      border: 1px solid white;
      border-radius: 20px;
    }

    a {
      text-decoration: none;
      color: black;
    }
  </style>
</head>

<body>
  <form action="create_routine.php" method="Post">
    <div class="container">
      <center>
        <h1> Create Routine for the Staff</h1>
      </center>
      <hr>
      <input type="text" name="name" placeholder="name" required>
      <input type="text" name="time1" placeholder="time1">
      <input type="text" name="time2" placeholder="time2">
      <input type="text" name="time3" placeholder="time3">
      <input type="text" name="work1" placeholder="work1">
      <input type="text" name="work2" placeholder="work2">
      <input type="text" name="work3" placeholder="work3">
      <input type="text" name="day" placeholder="day">


      <button type="submit" class="registerbtn">add routine</button>
  </form>
  <hr>
  <button><a href='view_attendence.php'>View Attendence</a></button>
  </div>
</body>

</html>