<?php
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    session_start();
    include 'dbconnector.php';
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'discussion_forum');
    //for google signup user
    $username2 = $_SESSION['username'];
    $email2 = $_SESSION['email'];

    //Normal Register Form Data
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nsu_id = $_POST['nsu_id'];
    $email = $_POST['email'];
    $type = $_POST['type'];

    //check duplicate username
    $s = "SELECT username from users where username='$username'";
    $res = mysqli_query($con, $s);

    //check duplicate email
    $e = "SELECT email from users where email='$email'";
    $res2 = mysqli_query($con, $e);

    //check duplicate nsu_id
    $n = "SELECT nsu_id from users where nsu_id='$nsu_id'";
    $res3 = mysqli_query($con, $n);
   
    if(mysqli_num_rows($res) > 0)
    {
        $_SESSION['status'] = "Username Already Taken!";
        header('location:index.php');
    }
    else if(mysqli_num_rows($res2) > 0)
    {
        $_SESSION['status'] = "Email Already Taken!";
        header('location:index.php');
    }
    else if(mysqli_num_rows($res3) > 0)
    {
        $_SESSION['status'] = "NSU ID Already Taken!";
        header('location:index.php');
    }
    else{
        $reg = "INSERT INTO users(username,pass,nsu_id,email,type) VALUES('$username','$pass','$nsu_id','$email','$type')";
        $_SESSION['status']= "Registration is Successful <3";
        header('location:index.php');
    }
    
        //For Google Signup User
        // $reg2 = "INSERT INTO users(username,pass,nsu_id,email,type) VALUES('$username2','NULL', 'NULL','$email2','NULL')";
        // header('location:home.php');
    

    
    //Check whether the query was successful or not
    mysqli_query($con, $reg);
    //mysqli_query($con, $reg2);

    
?>

