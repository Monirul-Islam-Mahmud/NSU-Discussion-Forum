<?php

include 'dbconnector.php';
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$search_value = $_POST["search"];

$sql = "SELECT * FROM threads WHERE thread_title LIKE '%{$search_value}%' OR thread_description LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th>Name</th>
                <th>Description</th>
                
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr>
                <td>{$row["thread_title"]}</td> 
                <td> {$row["thread_description"]}</td>
                
                </tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h3>No Record Found.</h3>";
}

?>
