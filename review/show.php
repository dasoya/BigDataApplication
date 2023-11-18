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

$sql_review = "SELECT * 
		FROM review
		WHERE id = ? ;";

$sql_writer = "SELECT name
		From user
		Where id = (Select user_id
					From review 
					Where id = ? );";

$stmt_review = mysqli_prepare($dblink, $sql_review);
$stmt_writer = mysqli_prepare($dblink, $sql_writer);

if ($stmt_review && $stmt_writer ) {

	mysqli_stmt_bind_param($stmt_review, "i", $id);
	mysqli_stmt_bind_param($stmt_writer, "i", $id);

	$id = $_GET['reviewId'];

	if (mysqli_stmt_execute($stmt_review)) {
		//성공하면
		//변수에 열저장
		$result_review = mysqli_stmt_get_result($stmt_review);
		$review = mysqli_fetch_array($result_review);


		mysqli_free_result($result_review);
	} else {
		printf('%s', mysqli_error($dblink));
	}
	if(mysqli_stmt_execute($stmt_writer)){
		$result_writer= mysqli_stmt_get_result($stmt_writer);
		$writer = mysqli_fetch_array($result_writer);

		mysqli_free_result($result_writer);
	}
	else{
		printf('%s', mysqli_error($dblink));
	}

} else { // prepare 실패
}

mysqli_stmt_close($stmt_review);
mysqli_stmt_close($stmt_writer);

mysqli_close($dblink);


?>