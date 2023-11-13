<?php

// 데이터베이스 연결
require("../dbconfig.php");

// Create connection //
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!session_id()){
    exit();
}


if ($_SESSION['transType'] == 'Train') {
    $sql = "SELECT station_name FROM station WHERE city_id = '".$_SESSION['cityId']."'";
} else if ($_SESSION['transType'] == 'Airplane') {
    $sql = "SELECT airport_name, icao_code FROM airport WHERE city_id = '".$_SESSION['cityId']."'";
} else {
   
    return;
}

// 쿼리 실행
$result = $conn->query($sql);

// 결과 출력
if (mysqli_num_rows($result) > 0) {

    if ($_SESSION['transType'] == 'Train') {
        echo "+ Stations in the city<br>";
        while($row = $result->fetch_assoc()) {
            echo "&bull; " . $row["station_name"] . "<br>";
        }
    } else if ($_SESSION['transType'] == 'Airplane') {
        echo "+ Airports in the city <br>";
        while($row = $result->fetch_assoc()) {
            echo"&bull; ".$row["airport_name"]. " (".$row['icao_code'].")<br>";
        }
    } 

} else {
  // echo "There is no station in the city";
}

$result->free_result();
// 연결 종료
$conn->close();

?>