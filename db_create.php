<?php
$server_name="localhost";
$database="bibibig_test_final";
$username="root";
$password="";

// Create connection //
$conn = mysqli_connect($server_name, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
}
echo"Connection successfull";

// $sqlScript = file_get_contents("dbCreate_final.sql");
$sqlScript = file_get_contents("dbInsert_really_final.sql");
// $sqlScript = file_get_contents("rename.sql");
if ($conn->multi_query($sqlScript)){
    echo "Successfull\n";
}else{
    echo "Error: ". $conn->error;
}