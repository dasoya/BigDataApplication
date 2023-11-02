<?php
// DB 연결 설정
$servername = "localhost";
$username = "team02";
$password = "team02";
$dbname = "city";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 도시 목록 가져오기
$query = "SELECT 'name' FROM city";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
    }
} else {
    echo '<option value="">Null</option>';
}

$conn->close();
?>
