
<?php

include 'dbconnector.php';
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$search_value = $_POST["search"];

$sql = "SELECT * FROM users WHERE username LIKE '%{$search_value}%' OR email LIKE '%{$search_value}%' OR nsu_id LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";


if(mysqli_num_rows($result) > 0 ){
  $output = '<table class="table table-striped"   cellspacing="1" cellpadding="10px" style="width: 100%;">
  <thead> <tr class="table-primary">
                <th>Username</th>
                <th>Email</th>
                <th>NSU ID</th>
                <th>Type</th>
                
              </tr>  </thead>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr>
                <td>{$row["username"]}</td> 
                <td> {$row["email"]}</td>
                <td> {$row["nsu_id"]}</td>
                <td> {$row["type"]}</td>
                </tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h3>No Record Found.</h3>";
}

?>
