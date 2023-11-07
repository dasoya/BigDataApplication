<?php
//TODO
//사용하시는 건지 여쭤보기

require("dbconfig.php");

// Create connection //
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
}
echo"Connection successfull";

// $sqlScript = file_get_contents("dbDrop_final.sql");
// $sqlScript = file_get_contents("dbCreate_final.sql");
$sqlScript = file_get_contents("dbInsert_really_final.sql");
// $sqlScript = file_get_contents("rename.sql");
if ($conn->multi_query($sqlScript)){
    echo "Successfull\n";
}else{
    echo "Error: ". $conn->error;
}