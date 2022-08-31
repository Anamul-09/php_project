
<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("location:index_form.php");
     }
     ?>

     <?php
    
         echo "Welcome to dashboard <br>";
         echo "Loggedin by user " . $_SESSION['email']."<br>";


    

?>

<a href="log_out.php">Logged out</a>