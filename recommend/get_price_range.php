
<?php // 이거 추가하면 결과 파일을 recommend_result.html 페이지로 렌더링 해 준다. 
    if(!session_id()) {
        // id가 없을 경우 세션 시작
        session_start();
    };

    require("../dbconfig.php");

    $connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);
    if ($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if (isset($_POST['min-val']) && isset($_POST['max-val'])){
        $min_val = $_POST["min-val"]; // 정수형으로 입력을 받게 됨 //
        $max_val = $_POST["max-val"];
        $_SESSION["min-val"] = $min_val;
        $_SESSION["max-val"] = $max_val;
        $sort = $_POST['dropdown'];
        echo("Price Range : $min_val ~ $max_val");
        echo("SORT : $sort");
    }else{
        if (isset($_SESSION["min-val"]) && isset($_SESSION["max-val"])){
            $min_val = $_SESSION["min-val"];
            $max_val = $_SESSION["max-val"];
        }else{
            $min_val = 1000;
            $max_val = 10000;
        };
    };

    if ($sort == 'option1'){
        // 추천1 : accommodation이 싼 곳
        $sql_1 = "SELECT DISTINCT (city.name) as name2, landmark.name as name1, landmark.info as info1, landmark.img as img1, city.info as info2, country.name as country_name, country.flag as flag\n"
        . "        FROM landmark \n"
        . "        INNER JOIN city ON city.id = landmark.city_id \n"
        . "        INNER JOIN trip ON trip.city_id = city.id \n"
        . "        INNER JOIN country ON country.iso_code2 = city.country_id \n"
        . "        INNER JOIN continent ON continent.id = country.continent_id \n"
        . "        WHERE trip.accommodation_cost >= $min_val AND trip.accommodation_cost <= $max_val\n"
        . "        ORDER BY trip.accommodation_cost ASC;"; // 예약 가격이 증가하는 순서대로 city name, city info, city id 불러옴 
        $result = mysqli_query($connection, $sql_1);
    }elseif ($sort == 'option2'){
        // 추천2 : transportation이 싼 곳 순으로 정렬 //
        $sql_2 = "SELECT DISTINCT (city.name) as name2, landmark.name as name1, landmark.info as info1, landmark.img as img1, city.info as info2,country.name as country_name, country.flag as flag\n"
        . "        FROM landmark \n"
        . "        INNER JOIN city ON city.id = landmark.city_id \n"
        . "        INNER JOIN trip ON trip.city_id = city.id \n"
        . "        INNER JOIN country ON country.iso_code2 = city.country_id \n"
        . "        INNER JOIN continent ON continent.id = country.continent_id \n"
        . "        WHERE trip.accommodation_cost >= $min_val AND trip.accommodation_cost <= $max_val\n"
        . "        ORDER BY trip.transportation_cost ASC;"; // 예약 가격이 증가하는 순서대로 city name, city info, city id 불러옴 
        $result = mysqli_query($connection, $sql_2);
    }elseif ($sort == "option3"){
        // 추천3 : accommodation + transportation 가격이 모두 싼 곳 순으로 정렬 //
        $sql_3 =  "SELECT DISTINCT (city.name) as name2, landmark.name as name1, landmark.info as info1, landmark.img as img1, city.info as info2, trip.accommodation_cost as ac, trip.transportation_cost as tc, country.name as country_name, country.flag as flag \n"
        . "FROM landmark  \n"
        . "INNER JOIN city ON city.id = landmark.city_id  \n"
        . "INNER JOIN trip ON trip.city_id = city.id  \n"
        . "        INNER JOIN country ON country.iso_code2 = city.country_id \n"
        . "        INNER JOIN continent ON continent.id = country.continent_id \n"
        . "WHERE (trip.accommodation_cost + trip.transportation_cost) >= $min_val AND (trip.accommodation_cost + trip.transportation_cost) <= $max_val\n"
        . "ORDER BY (ac+tc) ASC;"; // 예약 가격이 증가하는 순서대로 city name, city info, city id 불러옴 
        $result = mysqli_query($connection, $sql_3);
    };
    // 
    // Close connection //
    mysqli_close($connection);
    // include "recommend_result.html";
    // header("Location: recommend_base.html");

?>
