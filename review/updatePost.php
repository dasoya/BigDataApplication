<?php
session_start();

include "../dbconfig.php";

$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);

if (mysqli_connect_errno()) {
  printf('%s', mysqli_connect_error());
  exit();
}

$sql = "UPDATE review
        SET title = ?, body = ?
        WHERE id = ? ;";

if ($stmt = mysqli_prepare($dblink, $sql)) {

  mysqli_stmt_bind_param($stmt, "ssi", $title, $body, $reviewId); // 데이터 구조 보고 수정

  $title = $_POST['title'];
  $body = $_POST['body'];
  $reviewId = $_POST['reviewId'];

  if (mysqli_stmt_execute($stmt)) {   
    echo 'update success';
  } else {
    //실패한 경우
    printf("%s", mysqli_error($dblink));
  }
} else { //prepare 실패
  printf("%s", mysqli_error($dblink));
}

mysqli_stmt_close($stmt);
mysqli_close($dblink);


if ($reviewId != null) {
  // 리뷰 보여주는 페이지로 이동
  $redirect_url = "detail.php?reviewId=" . $reviewId;
}
else {
  $redirect_url = "reviews.php";
}

header("Location: " . $redirect_url);

?>