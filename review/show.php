<?php
//해당 리뷰 보여주기
//위에 디비 연결하는 부분을 싹 빼와서 한번에 삽입할 수 있게 해볼까...? 
//유지보수 생각하면 그게 나을 것 같긴한데.... 되려나.........
//심심할때 시도해보기.
//근데 또 생각해보면 그냥 변수명만 넣는게 나을지도? 

if (!isset($_GET["reviewId"])) { 
	$title = "No result";
	$body =	"No result";
}



$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);

if (mysqli_connect_errno()) {
	printf('%s', mysqli_connect_error());
	exit();
}

$sql = "SELECT * 
		FROM review
		WHERE id = ? ;";


if ($stmt = mysqli_prepare($dblink, $sql)) {

	mysqli_stmt_bind_param($stmt, "i", $id);

	$id = $_GET['reviewId'];

	if (mysqli_stmt_execute($stmt)) {
		//성공하면
		//변수에 열저장
		$result = mysqli_stmt_get_result($stmt);
		$review = mysqli_fetch_array($result);


		mysqli_free_result($result);
	} else {

		// 실패하면, 어떻게 보여줄거야? 리뷰 메인페이지로 리다이렉트? 
	}

	mysqli_stmt_close($stmt);
} else { // prepare 실패
}


mysqli_close($dblink);


?>