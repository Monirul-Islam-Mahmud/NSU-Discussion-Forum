<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$con = mysqli_connect('localhost', 'root');
mysqli_select_db ($con,'discussion_forum');

if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $s = "SELECT * from admin where username='$username' && pass='$pass'";
  $query = mysqli_query($con, $s);
  $num = mysqli_num_rows($query);

  //Fetching the data from the database using SESSION
  $row = mysqli_fetch_assoc($query);
  $_SESSION['username'] = $row['username'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['id'] = $row['id'];
  $_SESSION['nsu_id'] = $row['nsu_id'];
  $_SESSION['type'] = $row['type'];


  if($num){
    $_SESSION['username'] = $username;
    $_SESSION['pass'] = $pass;
    if (isset($_POST['remember'])) {
      setcookie('username', $username, time() + (60 * 60 * 7));
      setcookie('pass', $pass, time() + (60 * 60 * 7));
     }
    
    ?>
    <script>
      alert("Login Successful :)");
      window.location.href = "admin-home.php";
    </script>

<?php
    
  }else{
    $_SESSION['status'] = "Wrong Password!";
    header('location:admin.php');
    
  }
}

?>





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
        body{
            background-color: rgb(0, 58, 5);
        }
      .bg-custom-2 {
        background-image: linear-gradient(15deg, #a97403 0%, #002254 100%);
      }
      
      .heading {
        color: #fffb00;
        padding: 5% 0;
        margin-top: 20px;
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
      
    </style>


    <div class="container">
      <h2 class="heading">Welcome to Admin panel 😎</h2>
      

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 d-flex justify-content-center">
          <div class="reset-pass-div">
            <h4 class="res-pass">Sign in</h4><hr>

          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "POST">
              <input
                class="form-control"
                type="text"
                name="username"
                placeholder="Username" required
                id="in1"
              />       
              <input
                class="form-control"
                type="password"
                name="pass"
                placeholder="Password"  
                id="in2" required
              />
              <br/>
              
            <button type="submit" name="submit" class="btn btn-danger btn-block"> Sign in </button>
          </form>

          <hr>
            
            <br />
          </div>
        </div>
      </div>
      <br/><br>
      
      
    </div>
  </body>
</html>

        <?php
            if(isset($_COOKIE['username']) and isset($_COOKIE['pass']) ){
              $username = $_COOKIE['username'];
              $pass = $_COOKIE['pass'];
              echo "  <script>
                          document.getElementById('in1').value = '$username';
                          document.getElementById('in2').value = '$pass';
                      </script>";
            }
          ?>
