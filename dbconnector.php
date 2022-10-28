<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'discussion_forum';
$conn = mysqli_connect($server, $username, $password, $database);
if($conn){
    
}
else{
    echo "Connection Failed";
}
?>