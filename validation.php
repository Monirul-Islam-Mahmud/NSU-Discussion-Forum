<?php
   error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
   session_start();
  // include 'dbconnector.php';
  $showAlert = false;
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'discussion_forum');
  
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nsu_id = $_POST['nsu_id'];
    $email = $_POST['email'];
    $type = $_POST['type'];

    $s = "SELECT * from users where username='$username' && pass='$pass'";
    // $reg = "INSERT INTO users(username,pass,nsu_id,email,type) VALUES('$username','$pass','$nsu_id','$email','$type')";
    $res = mysqli_query($con, $s);
    $num = mysqli_num_rows($res);
    if($num == 1)
    {
        echo "Username Already Taken; Try another username!";
    }
    else{
        $reg = "INSERT INTO users(username,pass,nsu_id,email,type) VALUES('$username','$pass','$nsu_id','$email','$type')";
        header('location:index.php');
    }

    mysqli_query($con, $reg);

    //Check whether the query was successful or not
    


    // if($num) {
    //   session_start();
    //     echo ' 
    //     <div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> You are logged in
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>
    //   </div> ';
    //   header('location: index.php');
    //   echo"<script>alert('successfully inserted')</script>";
    //   echo"<script>document.location='index.php';</script>";
    // } 
    // else {
    //   echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Oops!</strong> Registartion Failed!
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>
    // </div> ';
        
    // }
?>

