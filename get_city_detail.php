<?php
require("dbconfig.php");


    // (1) connect to database //
    $connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);
    if ($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $cityName = $_GET['city'];
    // 도시 상세 정보를 데이터베이스에서 갖고 와야 함
    $sql_1 = "SELECT DISTINCT (city.name) as name2, city.id as cid, continent.continent_name as name3, landmark.name as name1, landmark.info as info1, landmark.img as img1, city.info as info2, country.name as country_name, country.flag as flag\n"
        . "        FROM landmark \n"
        . "        INNER JOIN city ON city.id = landmark.city_id \n"
        . "        INNER JOIN country ON country.iso_code2 = city.country_id \n"
        . "        INNER JOIN continent ON continent.id = country.continent_id \n"
        . "        WHERE city.name='$cityName';";
    $result_city = mysqli_query($connection, $sql_1);
    
    if (mysqli_num_rows($result_city) != 0){
        $row = mysqli_fetch_array($result_city);
        $city_info = $row['info2'];
        $country_name = $row['country_name'];
        $country_flag = $row['flag'];
        $continent_name = $row['name3'];
        $city_id = $row['cid'];
    }

    $sql_2 = "SELECT * \n"
        ."          FROM landmark \n"
        ."          WHERE landmark.city_id='$city_id';";

    $result_landmark = mysqli_query($connection, $sql_2);

    // mysqli_free_result($result_city);
    // mysqli_free_result($result_landmark);

    // mysqli_close($connection);

    
?>