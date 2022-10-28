<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$con = mysqli_connect('localhost', 'root');
mysqli_select_db ($con,'discussion_forum');

if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $s = "SELECT * from users where username='$username' && pass='$pass'";
  $query = mysqli_query($con, $s);
  $num = mysqli_num_rows($query);

  if($num){
    $_SESSION['username'] = $username;
    ?>

    
    <script>
      alert("Login Successful :)");
      window.location.href = "home.php";
    </script>


<?php
    
  }
  else{
    echo "Invalid username or password";
    header('location:loginpage.php');
  }
}
else{
  //echo "Please enter username and password";
}
?>


<!-- $s = "SELECT* from users where username='$username' && pass='$pass'";

$result = mysqli_query($con, $s);
//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
$_SESSION["status"] = false;

if($count == 1){
    $_SESSION["status"] = true;
    header('location:home.php');
}
else{
    header('location:wrong-pass.html');
} -->




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Login Page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
  </head>

  <body>
    <style>
      .bg-custom-2 {
        background-image: linear-gradient(15deg, #a97403 0%, #002254 100%);
      }
      .brand-name {
        color: #fff;
        padding: 0 0 0 2%;
        display: inline;
      }
      .heading {
        color: #c92f2f;
        padding: 5% 0;
        text-align: center;
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;
      }
      .reset-pass-div {
        background: #eee;
        border-radius: 10px;
        padding: 10%;
        text-align: center;
      }
      .res-pass {
        padding: 10px;
      }
      .checkbox {
        background: #fff;
        border: 1px solid #000;
        margin-top: 10px;
      }
      .denger {
        color: #c92f2f;
        font-weight: bold;
      }
      .btn-danger {
        padding: 10 40px;
        margin: 10px 0;
      }
      #messages{
        font-weight: bold;
        color: rgb(48, 167, 247);
        font-size: 21px;
      }
    </style>


    <!-- Image and text -->
    <nav class="navbar bg-custom-2">
      <div class="container" style="margin: auto; width: 30%">
        <a class="navbar-brand" href="loginpage.php">
          <img
            src="img/logo.png"
            width="70"
            height="70"
            alt="logo"
          />
          <small class="brand-name">North South University ||</small>
          <small class="brand-name"
            >Center of Excellence in Higher Education</small
          >
        </a>
      </div>
    </nav>

    <div class="container">
      <h2 class="heading">NSU Discussion Forum</h2>
      <div class="row Ŝrst-div">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 d-flex align-items-center">
          <img src="img/pic2.jpg" width="80%" height='100%' alt="main image" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 d-flex align-items-center">
          <div class="reset-pass-div">
            <h4 class="res-pass">Sign in</h4><hr>

          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "POST">
              <input
                class="form-control"
                type="text"
                name="username"
                placeholder="Username"
                
              />       
              <input
                class="form-control"
                type="password"
                name="pass"
                placeholder="Password"  
              />
              <br/>
            <button type="submit" name="submit" class="btn btn-danger btn-block"> Sign in </button>
          </form>
          <hr>
            <span
              >Don't have an account?
              <a class="denger" href="index.php">Register Here</a></span
            ><br />
          </div>
        </div>
      </div>
      <br/><br><br>
      <hr/>
      <h6 class="denger" style="text-align: center; margin: 0 auto">
        Developed and maintained By Office of IT, NSU
      </h6>
    </div>
  </body>
</html>
