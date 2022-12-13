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
        #ques{
            min-height: 433px;
        }
    </style>
    <title>Welcome to Forums</title>
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
        $username = $_SESSION['username'];
        include 'dbconnector.php';
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()){
            $title = $row['thread_title'];
            $desc = $row['thread_description'];
            $thread_user_id = $row['thread_user_id'];
            
        }
        $sql2 = "SELECT * FROM `users` WHERE id='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        while($row2 = $result2->fetch_assoc()){
            $posted_by = $row2['email'];
         }
        
    ?>


    <!-- Upper jumbotron container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead">  <?php echo $desc;?></p>
            <hr class="my-4">
            <p>Posted by: <b><?php echo $posted_by; ?></b></p>
        </div>
    </div>



    <!-- Comment Started here -->

    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method=='POST'){
            //Insert into comment db
            $comment = $_POST['comment']; 
            $sno = $_POST['sno']; 
            $sql = "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$sno', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $showAlert = true;
            if($showAlert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your comment has been added!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>';
            }
        }
    ?>

    
    
    
    <?php 
        echo '<div class="container">
            <h1 class="py-2">Post a Comment</h1> 
            <form action= "'. $_SERVER['REQUEST_URI'] . '" method="post"> 
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Type your comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                    <input type="hidden" name="sno" value="'. $_SESSION["id"]. '">
                </div>
                <button type="submit" class="btn btn-success">Post Comment</button>
            </form> 
        </div>';
    ?>


    <div class="container mb-5" id="ques">
        <h1 class="py-2">Discussions</h1>
       <?php
            $sno = $_POST['sno'];
            $id = $_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE thread_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $id = $row['comment_id'];
                $content = $row['comment_content']; 
                $comment_time = $row['comment_time']; 
                $thread_user_id = $row['comment_by']; 

                $sql2 = "SELECT username FROM `users` WHERE id='$thread_user_id'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);

                echo '<div class="media my-3">
                    <img src="img/default.jpg" width="54px" class="mr-3" alt="...">
                    <div class="media-body">
                    <p class="font-weight-bold my-0"><span style="color:rgb(0, 132, 240)">'. $row2['username'] .'</span> at '. $comment_time. '</p> '. $content . '
                    </div>
                </div>';

                }
                
                if($noResult){
                    echo '<div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <p class="display-4">No Comments Found</p>
                                <p class="lead"> Be the first person to comment</p>
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