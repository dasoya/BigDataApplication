<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "erica0529J!";
$db_name = "team02";

// 연결
$conn = new mysqli($server_name, $db_username, $db_password, $db_name);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id FROM user WHERE email = '$email' AND pw = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 로그인 성공
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        header("location: base.html");
    } else {
        // 로그인 실패
        $error = "Invalid email or password.";
        if (isset($error) && !empty($error)) {
            echo "<div class='alert alert-danger mt-3'>$error</div>";
        }
    }
}
?>
