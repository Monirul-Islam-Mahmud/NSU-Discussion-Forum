



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Add User</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
  </head>

  <body>
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
      .nav-link {
        color: white;
      }

      .nav-link:hover {
        color: yellow;
      }
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
      .container{
        padding: 2% 10%;
      }
    </style>

    <div class="nav">
      <img src="img/logo.png" width="50px" alt="logo" />
      <div><a class="nav-link" href="admin-home.php">Home</a></div>
      <div><a class="nav-link" href="admin-add-user.php">Add user</a></div>
      <div><a class="nav-link" href="admin-search-user.php">Search user</a></div>
      <div><a class="nav-link" href="admin-add-category.php">Add Category</a></div>
      <div><a class="nav-link" href="logout.php">Logout</a></div>
    </div>

    <div class="container">
      
        
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
          <div class="reset-pass-div">
            <h4 class="res-pass">Add User</h4> <hr>
            <?php
            if(isset($_SESSION['status'])){
            ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <?php
              unset($_SESSION['status']);
            }
              
            ?>
            
          <form action="admin-add-user-validation.php" method="POST">
          
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

                <button type="submit" name='submit' class="btn btn-success btn-block">Register</button>
            </form>
 
            <hr>
          </div>
        </div>
      </div>
      <br />
      
    </div>
    
  </body>
</html>

