<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Discussion Page</title>
    <style>
      .nav {
        display: flex;
        width: 100%;
        height: 62px;
        background: linear-gradient(to left, blue, purple, red);
        align-items: center;
        justify-content: space-evenly;
        color: white;
        font-size: 18px;
      }

      .heading2 {
        text-align: center;
        color: rgb(199, 22, 51);
        font-size: larger;
        font-weight: bold;
        margin-top: 55px;
      }

      .nav-link {
        color: white;
      }
      .nav-link:hover {
        color: yellow;
      }
      .image1 {
        display: block;
        width: 50%;
        margin: auto;
        margin-top: 10%;
      }
    </style>
  </head>



  <body>
    <div class="nav">
      <img src="img/logo.png" width="50px" alt="logo" />
      <div><a class="nav-link" href="home.php">Home</a></div>
      <div><a class="nav-link" href="profile.php">Profile</a></div>
      <div><a class="nav-link" href="discussion.php">Discussion</a></div>
      <div><a class="nav-link" href="contact.php">Contact</a></div>
      <div><a class="nav-link" href="logout.php">Logout</a></div>
    </div>
    <img
      src="img/under-construction.jpg"
      alt="Under Development"
      class="image1"
    />
  </body>
</html>
