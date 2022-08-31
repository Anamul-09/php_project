<?php
    include_once("dbconfig.php");
    // if(isset($_POST["submit"])){
    //     $email = $_POST['email'];
    //   $pass = $_POST['pass'];
     
    //     $pass = sha1($pass);
    //     // echo $pass;
    //     // echo "<br>";

    //     // echo "SELECT * FROM users WHERE email ='$email' AND password = '$pass'";  testing perpas
    //     $sql = "SELECT * FROM users WHERE email ='$email' AND password = '$pass'";
    //    $result = $db->query($sql);
    //     if($result->num_rows != 1){
    //         $msg = "Email or password maybe invalid";
           
    //         // include_once("index_form.php");
    //         header("location:index_form.php?m=$msg");
    //     }else{
    //         // echo "login successfully";
    //         session_start();
    //         $_SESSION['email'] = $email;
    //         header("location:dashboard.php");
    //     }
    // }

    if(isset($_POST['submit'])){
       $email = $_POST['email'];
       $pass = $_POST['pass'];
       $pass = sha1($pass);

      $sql = "SELECT * FROM users where email='$email' AND password=$'pass'";
      $result = $db->query($sql);

      

    }


?>