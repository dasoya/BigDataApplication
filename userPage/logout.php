<?php
session_start(); // 세션 시작

// 모든 세션 변수 제거
$_SESSION = array();

// 세션을 파괴하여 로그아웃
session_destroy();

// 로그인 페이지로 리디렉션
header("Location: ../userPage/login.html");
exit;
?>
