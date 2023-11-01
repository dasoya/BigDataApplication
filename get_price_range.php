<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "bibig_test_2";
    // (1) connect to database //
    $connection = mysqli_connect($hostname, $username, $password, $database);
    if ($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $min_val = $_POST["min-val"]; // 정수형으로 입력을 받게 됨 //
    $max_val = $_POST["max-val"];
    echo("Price Range : $min_val ~ $max_val");
    // 추천1 : accommodation이 싼 곳
    $sql_1 = "SELECT c.name, c.info, c.id 
     FROM city AS c 
     INNER JOIN trip AS t ON c.id = t.city_id
     ORDER BY t.accommodation_cost ASC";
    $result_1 = mysqli_query($connection, $sql_1);
    $row_1 = mysqli_fetch_array($result_1);
    $cnt = 0;
    while ($row = mysqli_fetch_array($result_1)){
        var_dump($row) ; //  + "\n";
        $cnt ++;
        if ($cnt == 5){ break;}
    }
    // // 추천2 : transportation이 싼 곳
    // $sql_2 = "SELECT city_id FROM trip ORDER BY transportation_cost ASC";
    // $result_2 = mysqli_query($connection, $sql_2);
    // $row_2 = mysqli_fetch_array($result_2);
    // // 추천3 : accommodation + transportation이 싼 곳
    // $sql_3 = "SELECT city_id FROM (SELECT city_id, (transportation_cost + accommodation_cost) sumCost FROM trip) ORDER BY sumCost";
    // $result_3 = mysqli_query($connection, $sql_3);
    // $row_3 = mysqli_fetch_array($result_3);
    // // 추천은 그러면 trip table안에서 찾아서 보여주어야 하는 것인지..? 


    // 
    // Close connection //
    mysqli_close($connection);
?>
