<?php
$server_name = "localhost";
$db_username = "team02";
$db_password = "team02";
$db_name = "team02";

// 연결
$conn = new mysqli($server_name, $db_username, $db_password, $db_name);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자 입력값 받아오기
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    
    // 마지막 튜플의 id 조회
    $sql = "SELECT MAX(id) as last_id FROM user";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $new_id = $row['last_id'] + 1;

    // 새로운 사용자 정보 삽입
    $stmt = $conn->prepare("INSERT INTO user (id, email, pw, username, age, sex) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssis", $new_id, $email, $password, $username, $age, $sex);

    if ($stmt->execute()) {
        header("location: login.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
