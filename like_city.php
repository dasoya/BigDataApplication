<?php
    
    require("dbconfig.php");
    // (1) connect to database //
   
    $connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);
    if ($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $cityID = $_GET['city'];
    $uid = $_GET['uid'];

    $sql = "SELECT * FROM userliked \n"
    ."WHERE (userliked.city_id='$cityID') AND (userliked.user_id='$uid');";

    $result= mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 0){
        $sql_2 = "INSERT INTO userliked VALUES('$uid', '$cityID');";
        $result_2 = mysqli_query($connection, $sql_2);
    }

    $sql_1 = "SELECT city.name FROM city WHERE (city.id='$cityID');";
    $result_1 = mysqli_query($connection, $sql_1);
    $row = mysqli_fetch_array($result_1);
    $city_name = $row['name'];
    echo("Location: ". './city_detail.php?city=' . $city_name);
    header("Location: ". 'city_detail.php?city=' . $city_name);

    // exit;
    // 도시 상세 정보를 데이터베이스에서 갖고 와야 함
    // include "./city_detail.php?city=" . $city_name;

    // mysqli_free_result($result_city);
    // mysqli_free_result($result_landmark);

    // mysqli_close($connection);

    
?>

