<?php

//todo
//rollupCC와 마찬가지로 스타일 어떻게 할지 고민해보기

$dblink = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    printf('', mysqli_connect_error());
    exit();
} 
else {


    // SQL 쿼리 실행
    $sql = "SELECT continent_name, country.name AS country_name, city.name AS city_name, COUNT(trip.id) AS num_of_visitor
            FROM trip
            LEFT JOIN city ON trip.city_id = city.id
            LEFT JOIN country ON city.country_id = country.iso_code2
            LEFT JOIN continent ON continent.id = country.continent_id
            GROUP BY continent_name, country_name, city_name WITH ROLLUP";
    
    $result = mysqli_query($dblink, $sql);

    // 초기화 변수 
    $prev_continent = "";
    $prev_country = "";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        // 대륙 이름 출력 (한 번만)
        if ($prev_continent != $row['continent_name']) {
            echo "<td><strong>" . $row['continent_name'] . "</strong></td>";
            $prev_continent = $row['continent_name'];
        } else {
            echo "<td></td>";
        }

        // 국가 이름 출력 (한 번만)
        if ($prev_country != $row['country_name']) {
            echo "<td>" . $row['country_name'] . "</td>";
            $prev_country = $row['country_name'];
        } else {
            echo "<td></td>";
        }

        // 도시 이름 출력
        if (!empty($row['city_name'])) {
            echo "<td><a href='../like/city_detail.php?city=". $row['city_name'] . "'>" . $row['city_name'] . "</a></td>";
        } else {
            echo "<td></td>";
        }

        // 방문자 수 출력
        echo "<td>" . $row['num_of_visitor'] . "</td>";

        echo "</tr>";
    }

    mysqli_free_result($result);
  


}  

mysqli_close($dblink);

// 데이터베이스 연결 닫기

?>