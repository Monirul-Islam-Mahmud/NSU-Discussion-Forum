<?php
  include 'dbconnector.php';
  session_start();

  $msg = "";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Registration Form</title>
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
        <a class="navbar-brand" href="index.php">
          <img
            src="img/logo.png"
            width="70"
            height="70"
            alt="logo"
          />
          <small class="brand-name">North South University &nbsp ||</small>
          <small class="brand-name"
            >Center of Excellence in Higher Education</small>
        </a>
      </div>
    </nav>

    <div class="container">
      <h2 class="heading">NSU Discussion Forum</h2>
      <div class="row Ŝrst-div">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 d-flex align-items-center">
          <img src="img/pic2.jpg" width="90%" height ='70%'alt="main image" />
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
          <div class="reset-pass-div">
            <h4 class="res-pass">Sign up</h4> <hr>
            <?php  echo $msg; ?>
            <!-- <?php
              if($showAlert){
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> Your registration is successfull
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div> ';
              }
              ?> -->
          <form action="validation.php" method="POST">
          
               <input placeholder="NSU ID" class="form-control" 
                type="number" name="nsu_id"  required/>
                <br>

                <input
                class="form-control"
                type="email"
                name="email"
                placeholder="NSU Email"
                required
                 />
                 <br>
                <div class="form-group">
                    <select name="type" id="inputState" class="form-control">
                      <option selected>Choose Type...</option>
                      <option value="Student">Student</option>
                      <option value="Faculty">Faculty</option>
                    </select>
                  </div>
                  <input
                  class="form-control"
                  type="text"
                  name="username"
                  placeholder="User Name"
                  required
                  />
                  <br>

                <input
                class="form-control"
                type="password"
                name="pass"
                placeholder="Password"
                required
                 />
                <br>

                <button type="submit" name='submit' class="btn btn-danger btn-block">Register</button>
            </form>
                     
            

            <label for="checkbox" class="checkbox btn-block">
              <a style="color: #000; text-decoration: none;" href="{% provider_login_url 'google' %}">
                <img src="img/google.png" width="10%" /> Google Signup
              </a>
            </label>
            
            <hr>
            <span
              >Already have account?
              <a class="denger" href= "loginpage.php" >Sign in</a></span
            >
          </div>
        </div>
      </div>
      <br /><br />
      <hr />
      <h6 class="denger" style="text-align: center; margin: 0 auto; padding-bottom: 20px;">
        Developed and maintained By Office of IT, NSU
      </h6>
    </div>
    <br>
  </body>
</html>
