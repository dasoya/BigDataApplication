<?php
$mysql_host = "localhost";
$mysql_database = "bibibig_test";
$mysql_user = "root";
$mysql_password = "";

$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
$query = '';
$sqlScript = file('dbCreate.sql');

foreach ($sqlScript as $line){
    $startWith = substr(trim($line), 0, 2);
    $endWith = substr(trim($line), -1, 1);

    if (empty($line) || $startWith == '/'){
        continue;
    }
    $query = $query . $line . "/*<br>*/";
    if ($endWith == ';'){
        mysqli_query($conn, $query) or die('<div>Problem on the SQL query : $query');
        $query = '';
    }
}
echo '<div>SQL File Executed Sucessfully';
?>