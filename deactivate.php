
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
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

<form method="Post" action="final.php"> 
<div class="container">  
<center>  <h1 style="color: red;"> Are You Sure?</h1> </center>  
<hr> 
<input type="text" name="password" placeholder= "enter the password"required />
   
  <button type="submit" class="registerbtn">Deactivate the account</button> 
</div>   
</form> 
</html>