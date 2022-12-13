<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    
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
    <title>NSU Discussion Forums</title>
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

    <?php
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    session_start();
    include 'dbconnector.php';
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    
    ?>

    <?php
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    session_start();
    include 'dbconnector.php';
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        // Insert into thread db
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];


        $sno = $_POST['id']; 
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your thread has been added! Please wait for community to respond
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>';
        } 
    }
    ?>


    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1>Welcome to <span style="color:brown"><?php echo $catname;?></span>  forum!</h1>
            <p class="lead"> <?php echo $catdesc;?></p>
            <hr class="my-4">
              <ul>
                <li>No Spam / Advertising / Self-promote.</li>
                <li>Do not post Offensive posts.</li>
                <li>Remain respectful of other members at all time.</li>
              </ul>  
            
        </div>
    </div>





    <?php 
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    session_start();
    include 'dbconnector.php';
    
    echo '<div class="container mt-5 mb-5">
            <h2 style="color: brown">Start a Discussion</h2> 
            <form action="'. $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group mt-5">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input required type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    
                </div>
                <input type="hidden" name="id" value="'. $_SESSION["id"]. '">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Describe your Post</label>
                    <textarea required class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
        </div>';
    

    ?>
    

    <!-- Question Browse -->
    <div class="container mb-5">
        <h2 class="py-2">Browse Questions</h2>
        <hr>

    <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id"; 
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_description']; 
            $thread_time = $row['timestamp']; 
            $thread_user_id = $row['thread_user_id']; 
            $sql3 = "SELECT * FROM `users` WHERE id = $thread_user_id"; 
            $result3 = mysqli_query($conn, $sql3);
            while($row3 = mysqli_fetch_assoc($result3)){
                $username3 = $row3['username'];
            }

            echo '<div class="media my-3 mt-5">
                <img src="img/default.jpg" width="54px" class="mr-3" alt="...">
                <div class="media-body">'.
                '<h5 class="mt-0" style="color:rgb(8, 140, 255)"> <a class="text-dark" href="threads.php?threadid=' . $id. '">' . $title . ' </a></h5>
                    '. $desc . ' <br>Posted by: <span style="color:rgb(0, 132, 240); ">'. $username3.'</span><br> <button type="submit" class="btn btn-primary btn-sm mt-3"><img src="img/like.png" width="23px" alt=""> Like</button>
                    <a href="threads.php?threadid=' . $id. '"><button type="submit" class="btn btn-secondary btn-sm mt-3">Comment</button></a>
                    </div>'.'<div class=" my-0">  Time:  '. $thread_time. '</div>'.
            '</div>';

            }
            
            if($noResult){
                echo '<div class="jumbotron">
                        <div class="container">
                            <h2 style="color:rgb(172, 129, 73); ">No Threads Found</h2>
                            <p class="lead"> Be the first person to ask a question</p>
                        </div>
                    </div> ';
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
</body>

</html>