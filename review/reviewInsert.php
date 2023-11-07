<?php
session_start();
function getNewReviewId($db, $id)
{

  $review_id = null; //초기값
  $sqlRe = "SELECT id
						 FROM review
						 WHERE user_id = ?
						 ORDER BY created_at DESC
						 LIMIT 1;";

  if ($stmtRe = mysqli_prepare($db, $sqlRe)) {

    mysqli_stmt_bind_param($stmtRe, "i", $user_id);

    $user_id = $id;

    if (mysqli_stmt_execute($stmtRe)) {
      $result = mysqli_stmt_get_result($stmtRe);
      $review = mysqli_fetch_array($result);
      $review_id = $review['id'];

      mysqli_free_result($result);
    } else {
      //실패한 경우
      printf("%s", mysqli_error($db));
    }

    mysqli_stmt_close($stmtRe);
  } else { //prepare 실패
    printf("%s", mysqli_error($db));
  }

  return $review_id;
}

$reviewId = null;

include "../dbconfig.php";

$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);

if (mysqli_connect_errno()) {
  printf('%s', mysqli_connect_error());
  exit();
}

/* 열 정보 참고용 주석
CREATE TABLE `review` (
    `id` integer PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `body` text COMMENT '리뷰 내용',
    `created_at` timestamp COMMENT '업로드한 날짜 ',
    `img` text COMMENT 'image를 추가할 수 있도록?',
    `user_id` integer NOT NULL,
     -- `city_id` integer NOT NULL
  );
*/
//id 가 어차피 auto increment인데 없얻어도 삽입되나? 된다. 
//created_at 도 마찬가지. 조건에 추가해둬서 알아서 입력됨

$sql = "INSERT INTO review (title, body, user_id) VALUES (?, ?, ?);";


if ($stmt = mysqli_prepare($dblink, $sql)) {

  mysqli_stmt_bind_param($stmt, "ssi", $title, $body, $user_id); // 데이터 구조 보고 수정

  $title = $_POST['title'];
  $body = $_POST['body'];
  $user_id = $_SESSION['id'];

  //이메일로 가져오는게 맞을까? primary key가 id인데... 이것도 논의해보자

  //$created_at = $_POST['created_at'];
  //$img= $_POST['img']; 
  // 이미지는 만약에 넣게되면, 조건문으로 이미지가 있을 때와 없을 때를 구분해서 sql을 돌려야할듯.
  //$user_id= $_POST['user_id'];
  //$city_id= $_POST['city'];

  // TODO
  // 성공, 실패 한 후에 페이지에 결과를 어떻게 띄울지 고민해보기
  // 바로 내가 쓴 리뷰 페이지 보여주기? 

  if (mysqli_stmt_execute($stmt)) {

    $reviewId = getNewReviewId($dblink, $user_id);
   
    echo 'upload success';
  } else {

    
    //실패한 경우
    printf("%s", mysqli_error($dblink));
  }
} else { //prepare 실패
  printf("%s", mysqli_error($dblink));
}

mysqli_stmt_close($stmt);
mysqli_close($dblink);



//$review_id가 null인지 검사한다음에 보내기!!!!
//null이면? -> 실패했다는 뜻.
// 만약에 로그인을 안한 유저가 글을 작성했다면?
// 세션에 담아뒀다가 로그인 페이지로 이동 시키고
// 로그인 하면 다시 돌아와서 입력. <-- 어떻게 다시 돌아오게 할거임?

if ($reviewId != null) {
  // 리뷰 보여주는 페이지로 이동
  $redirect_url = "detail.html?reviewId=" . $reviewId;
}
else {
  $redirect_url = "reviews.html";
}

// 현재 페이지와 동일한 경로에서 리다이렉트
header("Location: " . $redirect_url);
  // 리뷰 보여주는 페이지로 이동

// 문제. 포스트 하고나서 review_id를 바로 가져올 수 있을까?
// sql을 하나 더 넣어서, 방금 생성한 거를 가져오는거지.
// 1) 유저 아이디를 기준으로 검색해서 
// 2) 날짜순(내림차순? 최신순)으로 정렬하고
// 3) 거기서 가장 상단에 있는 글의 review_id만 가져오는거지
// 4) 그다음 저 url에 붙여서 리다이렉팅!!  

?>