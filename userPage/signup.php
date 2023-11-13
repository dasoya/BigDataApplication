<?php
require("../dbconfig.php");

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

    // 이메일 중복 확인
    $check_email_sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($check_email_sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // 중복된 이메일 존재
        $error = "중복된 이메일입니다.";
        
        if (!empty($error)):
            echo "<div class='alert alert-danger'>$error</div>";

        endif;
    } else {

        // 새로운 사용자 정보 삽입
        $stmt = $conn->prepare("INSERT INTO user (email, pw, name, age, sex) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $email, $password, $username, $age, $sex);


        if ($stmt->execute()) {
            header("location: ../userPage/login.html");
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>
