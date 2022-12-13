<?php
  include 'dbconnector.php';
  error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
  session_start();
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $nsu_id = $_SESSION['nsu_id'];
  $id = $_SESSION['id'];
  $feedback = $_POST['feedback'];

  $selectQuery = "SELECT * FROM users where id = $_SESSION[id]";
  $result = mysqli_query($conn, $selectQuery);
  $row = mysqli_fetch_assoc($result);

  $query = "INSERT INTO contact (username,email,nsu_id,feedback)
  VALUES('$username','$email','$nsu_id','$feedback')";

  mysqli_query ($conn, $query);
  header('location:contact.php');
?>