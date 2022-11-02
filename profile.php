<?php
  include 'dbconnector.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <title>Profile</title>

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
        /* color: rgb(3, 121, 201); */
        color: rgb(0, 163, 228);
        font-size: 25px;
        margin-top: 60px;
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
      <div><a class="nav-link" href="home.php">Home</a></div>
      <div><a class="nav-link" href="profile.php">Profile</a></div>
      <div><a class="nav-link" href="discussion.php">Discussion</a></div>
      <div><a class="nav-link" href="contact.php">Contact</a></div>
      <div><a class="nav-link" href="logout.php">Logout</a></div>
    </div>

    <div class="container mt-5">
      <div class="heading1">Profile Section</div>
      <hr />
      <br />

      <img
        class="rounded mx-auto d-block"
        src="img/logo.png"
        alt="Scan NSU ID"
        width="200px"
      />

      <div class="heading2">
        <b>Name:</b> &nbsp; Monirul Islam Mahmud

        <br /><br />

        <b>Username:</b> &nbsp; Mahmud

        <br /><br />

        <b>Email:</b> &nbsp; monirul.mahmud@northsouth.edu

        <br /><br />

        <b>Type:</b> &nbsp; Student
      </div>
    </div>
    <br/><br/>
    <hr/>

    <div class="mt-3"
      style="color: rgb(199, 22, 51); text-align: center; font-weight: bold"
    >
      Developed & Maintained By Office of IT, NSU
    </div>
  </body>
</html>
