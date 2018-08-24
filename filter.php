<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
if($result = mysqli_query($link, $sql)){
    
while(isset($_POST['check']))
{
        echo "<data>";
            echo "<tr>";
                echo "<th>plan name</th>";
                echo "<th>data charges</th>";
                echo "<th>roaming charges</th>";
        }
        echo "</data>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>