<?php
include "../dbconfig.php";
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
    $data = array();

    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }

    // 사용자 정의 정렬 함수
    function customSort($a, $b) {
        if ($a['country_name'] === null && $b['country_name'] === null) {
            return strcasecmp($a['city_name'], $b['city_name']);
        }
        
        if ($a['country_name'] === null) {
            return 1; // 국가 총합은 나중에
        } elseif ($b['country_name'] === null) {
            return -1; // 국가 총합은 나중에
        }

        $countryCompare = strcasecmp($a['country_name'], $b['country_name']);
        if ($countryCompare !== 0) {
            return $countryCompare;
        } else {
            return $b['num_of_visitor'] - $a['num_of_visitor'];
        }
    }

    usort($data, 'customSort');

    echo "<table>";
    echo "<tr><th>Country</th><th>City</th><th>Number of Visitors</th></tr>";

    foreach ($data as $row) {
        echo "<tr>";
        if ($row['country_name'] === null) {
            echo "<td><strong>Total</strong></td>";
        } else {
            echo "<td>" . $row['country_name'] . "</td>";
        }

        if (!empty($row['city_name'])) {
            echo "<td>" . $row['city_name'] . "</td>";
        } else {
            echo "<td></td>";
        }

        if ($row['city_name'] === null) {
            echo "<td><strong>Total: " . $row['num_of_visitor'] . "</strong></td>";
        } else {
            echo "<td>" . $row['num_of_visitor'] . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    mysqli_free_result($result);
}

mysqli_close($dblink);
?>
