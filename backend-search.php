<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "futsaldb");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($conn, $_REQUEST['term']);
 
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM futsal WHERE F_name LIKE '" . $term . "%'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result))
            {
                echo "<p>" . $row['F_name'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
 
// close connection
mysqli_close($conn);
?>