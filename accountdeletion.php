<?php

// 세션 시작
session_start();

// 로그인된 사용자의 ID 가져오기
$user_id = $_SESSION["id"];

// 데이터베이스 연결 설정
require("dbconfig.php");

// 연결
$conn = new mysqli($server_name, $db_username, $db_password, $db_name);
// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    $conn->begin_transaction();

    $tables = array('prediction', 'Userliked', 'review', 'feedback');


    foreach ($tables as $table) {
        $sql = "DELETE FROM $table WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->close();
    }

    $sql = "DELETE FROM user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->close();

    $conn->commit();
    $_SESSION = array();
    session_destroy();

    header("Location: login.html");
    exit;

} catch (mysqli_sql_exception $exception) {
    $conn->rollback();
    echo "An error occurred during account deletion: " . $exception->getMessage();
}

$conn->close();
?>
