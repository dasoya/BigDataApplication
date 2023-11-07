<?php
$server_name = "localhost";
$db_username = "team02";
$db_password = "team02";
$db_name = "team02";

$dblink = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    printf('Database connection error: %s', mysqli_connect_error());
    exit();
} else {
    // SQL 쿼리 실행
    $sql = "SELECT country.name AS country_name, city.name AS city_name, COUNT(trip.id) AS num_of_visitor
            FROM trip
            LEFT JOIN city ON trip.city_id = city.id
            LEFT JOIN country ON city.country_id = country.iso_code2
            GROUP BY country_name, city_name WITH ROLLUP";

    $result = mysqli_query($dblink, $sql);

    // 초기화 변수
    $prev_country = "";

    //todo
    //로직은 구현했으니 스타일 어떻게 할지 고민해보기
 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        
        
        // 국가 이름 출력 (한 번만)

        if($row['country_name']== null) {
            echo "<td><strong>Total</strong></td>";
        }
        elseif ($prev_country != $row['country_name']) {
            echo "<td><strong>" . $row['country_name'] . "</strong></td>";
            $prev_country = $row['country_name'];
        } else {
            echo "<td></td>";
        }

        

        // 도시 이름 출력
        if (!empty($row['city_name'])) {
            echo "<td>" . $row['city_name'] . "</td>";
        } else {
            echo "<td></td>";
        }

        if($row["city_name"]== null) {
            echo "<td>".$row['country_name']." total: ". $row['num_of_visitor']. "</td>";
        } else {
        // 방문자 수 출력
        echo "<td>" . $row['num_of_visitor'] . "</td>";
        }
        echo "</tr>";
        
    }

    mysqli_free_result($result);
}

mysqli_close($dblink);
?>
