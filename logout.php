<?php   
    session_start(); //to ensure we are using same session
    session_destroy(); //destroying the session
    include('config.php');

    //Reset OAuth access token
    $google_client->revokeToken();
    if(isset($_COOKIE['username']) and isset($_COOKIE['pass'])) {
        $username = $_COOKIE['username'];
        $password = $_COOKIE['pass'];
        setcookie('username', $username, time() -1);
        setcookie('pass', $password, time() -1);
    }
    header("location:index.php"); //to redirect back to "index.php" after logging out
    exit();
?>

