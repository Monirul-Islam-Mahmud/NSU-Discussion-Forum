

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
      .card-img-top {
          width: 75%;
          margin: 0 auto;
      }
    </style>
  </head>



  <body>
  <div class="nav">
      <img src="img/logo.png" width="50px" alt="logo" />
      <div><a class="nav-link" href="admin-home.php">Home</a></div>
      <div><a class="nav-link" href="admin-add-user.php">Add user</a></div>
      <div><a class="nav-link" href="admin-search-user.php">Search user</a></div>
      <div><a class="nav-link" href="admin-add-category.php">Add Category</a></div>
      <div><a class="nav-link" href="logout.php">Logout</a></div>
    </div>
    
    


    <!-- Category container starts here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-5" style="color:brown">Search user</h2><hr>
        

        <div id="search-bar" class="md-form active-pink-2 mb-3">
          <input class="form-control" id="search" type="text" placeholder="Search any user..." aria-label="Search" autocomplete="off">
        </div>


      <!-- Table started -->

      <table id="main" border="0" cellspacing="0">
        <tr>
          <td id="table-data">
          </td>
        </tr>
      </table>
      
      <!-- Table ended -->


<h2 class="text-center my-5" style="color:brown">All user list</h2><hr>
      <!-- All User data show -->
      <?php
        include 'dbconnector.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
      ?>
      <table class="table table-striped"   cellspacing="1" cellpadding="10px" style="width: 100%;">
        <thead> 
          <tr class="table-warning">
            <th>Username</th>
            <th>Email</th>
            <th>NSU ID</th>
            <th>Type</th>   
          </tr>  
        </thead>
      
          <?php 
          include 'dbconnector.php';
          $sql = "SELECT * FROM users";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
            ?>
             <tr>
                <td> <?php echo $row["username"]; ?></td> 
                <td> <?php echo $row["email"]; ?></td>
                <td> <?php echo $row["nsu_id"]; ?></td>
                <td> <?php echo $row["type"]; ?></td>
            </tr>
            <?php
             }
          ?>
              
    </div>

   
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      
        // Live Search
        $("#search").on("keyup",function(){
          var search_term = $(this).val();
          
          if(search_term != ''){
          $.ajax({
            url: "admin-live-search.php",
            type: "POST",
            data : {search:search_term },
            success: function(data) {
              $("#table-data").html(data);
            }
          });
        }
        });
      });
    </script>
</body>

</html>
    

