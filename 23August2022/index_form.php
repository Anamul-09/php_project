<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

   if(isset($_GET['m'])){
    $msg = $_GET['m'];
    echo $msg;
   }
    
?>
<form action="chequeUser.php" method="post">
    <input type="email" name="email" id="" placeholder="Enter your email"><br>
    <input type="password" name="pass" id="" placeholder="Enter your password"><br>
    <input type="submit" value="Login" name="submit">

</form>


    
</body>
</html>