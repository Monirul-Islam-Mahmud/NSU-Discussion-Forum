<?php

    include 'dbconnector.php';
    session_start();
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <title>Admin Home</title>

    <style>
      
      .nav {
        display: flex;
        width: 100%;
        height: 62px;
        background: linear-gradient(to left, blue, purple, red);
        align-items: center;
        justify-content: space-evenly;
        font-size: 18px;
      }

      .heading1 {
        text-align: center;
        color: rgb(199, 22, 51);
        font-size: 29px;
        font-weight: bold;
      }
      
      .heading2 {
        color: rgb(0, 82, 123);
        font-size: 25px;
        margin-top: 60px;
        margin-left: 40px;
        font-family: "Georgia", "Times New Roman", "Times, serif";
      }
      
      .nav-link {
        color: white;
      }

      .nav-link:hover {
        color: yellow;
      }
    </style>
  </head>

  <body>
    <!-- Navbar Starts -->
    <div class="nav">
      <img src="img/logo.png" width="50px" alt="logo" />
      <div><a class="nav-link" href="admin-home.php">Home</a></div>
      <div><a class="nav-link" href="admin-add-user.php">Add user</a></div>
      <div><a class="nav-link" href="admin-search-user.php">Search user</a></div>
      <div><a class="nav-link" href="admin-add-category.php">Add Category</a></div>      <div><a class="nav-link" href="logout.php">Logout</a></div>
    </div>

    <div class="container mt-5">
      
      <br />
      <div class="container my-4">
        <div class="jumbotron">
            <h1>Welcome to <span style="color:brown">Admin</span>  Panel!</h1>
            <p class="lead"> Please be honest Admin.</p>
            <hr class="my-4">
              <ul>
                <li>No Spam / Advertising / Self-promote.</li>
                <li>Do not post Offensive posts.</li>
                <li>Remain respectful of other members at all time.</li>
                <li>Web administrators design, develop, maintain and troubleshoot websites.</li>
              </ul>  
            
        </div>
    </div>
      
    </div>


    <br/><br/>
    <hr/>

    <div class="mt-3 mb-5"
      style="color: rgb(199, 22, 51); text-align: center; font-weight: bold"
    >
      Developed & Maintained By Office of IT, NSU
    </div>
  </body>
</html>
