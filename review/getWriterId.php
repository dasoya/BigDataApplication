<?php

$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);

    if (mysqli_connect_errno()) {
        printf('%s', mysqli_connect_error());
        exit();
    }

  $sql = "SELECT user_id
			FROM review
			WHERE id = ? ";

  
  if ($stmtRe = mysqli_prepare($dblink, $sql)) {

    mysqli_stmt_bind_param($stmtRe, "i", $review_id);

    $review_id = $reviewId;

    if (mysqli_stmt_execute($stmtRe)) {
      $result = mysqli_stmt_get_result($stmtRe);
      $row = mysqli_fetch_array($result);
      $writer_id = $row['user_id'];

      mysqli_free_result($result);
    } else {
      //실패한 경우
      printf("%s", mysqli_error($dblink));
    }

    mysqli_stmt_close($stmtRe);
  } else { //prepare 실패
    printf("%s", mysqli_error($dblink));
  }

  mysqli_close($dblink);


?>