<?php
  include 'dbconnector.php';
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
    />
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
    ></script>
    
    <title>Contact</title>

    <style>
 
        .nav {
        display: flex;
        width: 100%;
        height: 62px;
        background: linear-gradient(to left, blue, purple, red);
        align-items: center;
        justify-content:space-evenly;
        font-size: 18px;
        } 

        .heading2 {
        text-align: center;
        color: rgb(199, 22, 51);
        font-size: 30px;
        font-weight: bold;
        margin-top: 55px;
        } 

        .nav-link{
            color: white;
        }
        .nav-link:hover{
            color: yellow;
          
        }

        .container {
            border: 1px solid rgb(187, 187, 187);
            border-radius: 10px;
            width: 60%;
            margin-top: 40px;
            background-color: #f2f2f2;
            padding-top: 45px;
            padding-bottom: 35px;
          }

        .col-25 {
        float: left;
        width: 25%;
        margin-top: 15px;
        padding-left: 75px;
        }

        .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
        padding-right: 35px;
        }

        input,textarea{
            border: 1px solid rgb(206, 206, 206);
            width: 100%;
            border-radius: 8px;
            margin-top: 10px;
            padding: 5px;
        }

        #submit{
            width: 200px;
            text-align:center;
            margin:auto;
            color: rgb(255, 255, 255);
            background-color: rgb(34, 185, 34);
            margin-top: 15px;
        }

    </style>
</head>



<div>
    <div class="nav">
        <img
        src="img/logo.png" width="50px"
        alt="logo"
        />
        <div> <a class="nav-link" href="home.php">Home</a> </div>
        <div><a class="nav-link" href="profile.php">Profile</a></div>
        <div><a class="nav-link" href="discussion.php">Discussion</a></div>
        <div><a class="nav-link" href="contact.php">Contact</a></div>
        <div><a class="nav-link" href="logout.php">Logout</a></div>
    </div> 

    <div class=" mt-5" style="padding: 0 5%;">   
        <div class="heading2">
             Contact us
        </div>


<div class="container">
  <form action="contact.php" method="post">

  <div class="row">
    <div class="col-25">
      <label for="name">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="firstname" placeholder="Enter Fullname..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="nsu_id">NSU ID</label>
    </div>
    <div class="col-75">
      <input type="number" name="nsu_id" placeholder="Enter NSU ID..">
    </div>
  </div>

  <div class="row">
  <div class="col-25">
      <label for="email">Email ID </label>
    </div>
    <div class="col-75">
      <input type="email" name="email" placeholder="Enter NSU Email..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea name="subject" placeholder="Write your Feedback.." style="height:150px"></textarea>
    </div>
  </div>
  <br>

  <div class="row">
    <input id="submit" type="submit" value="Submit">
  </div>
  </form>
</div>

<br><br>
    <hr>
    <div class="mt-5 mb-3"
    style="color: rgb(199, 22, 51); text-align: center;font-weight: bold;"> 
    Developed & Maintained By Office of IT, NSU
    </div>

  </div>
</div>

</body>
</html>

