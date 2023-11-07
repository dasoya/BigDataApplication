<?php
require("dbconfig.php");

// 연결
$conn = new mysqli($server_name, $db_username, $db_password, $db_name);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // 준비된 명령문을 사용하여 SQL 인젝션을 방지
    $sql = "SELECT id, pw FROM user WHERE email = ? AND pw = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password); // 'ss'는 두 개의 문자열 변수 타입을 의미
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // 사용자가 존재하고, 비밀번호가 일치한다면 로그인 성공
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $row['id'];
        header("location: base.html");
        exit;
    } else {
        // 이메일 또는 비밀번호가 불일치
        $error = "Invalid email or password.";
    }

    if (isset($error) && !empty($error)) {
        echo "<div class='alert alert-danger mt-3'>$error</div>";
    }

    $stmt->close();
}
$conn->close();
?>
