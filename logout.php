<?php   
    session_start(); //to ensure we are using same session
    session_destroy(); //destroying the session
    header("location:index.php"); //to redirect back to "index.php" after logging out
    exit();
?>

