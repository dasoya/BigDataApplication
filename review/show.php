<?php
	//해당 리뷰 보여주기
	//위에 디비 연결하는 부분을 싹 빼와서 한번에 삽입할 수 있게 해볼까...? 
	//유지보수 생각하면 그게 나을 것 같긴한데.... 되려나.........
	//심심할때 시도해보기.
	//근데 또 생각해보면 그냥 변수명만 넣는게 나을지도? 


$dblink = mysqli_connect("localhost", 'root', '', 'bibibig');
    
    if (mysqli_connect_errno()) {
        printf('%s', mysqli_connect_error());
        exit();
    }
		
		$sql = "SELECT * 
						FROM review
						WHERE id = ? ;";

	if($stmt = mysqli_prepare($dblink, $sql)){
		
			mysqli_stmt_bind_param($stmt,"i", $id);

			$id = $_GET['reviewId'];

		  if(mysqli_stmt_execute($stmt)){
					//성공하면
					//변수에 열저장
					$result = mysqli_stmt_get_result($stmt);
					$review =  mysqli_fetch_array($result);
					
					echo ''. $review[0]['id'] .''. $review[0]['title'];
					//이제 $review['title'] 이런식으로 접근 가능할 것.
					//방법1. 만약에 접근 안되었는데 html에서 출력하려고 하면 -> 에러 출력하거나
					//방법2. 여기서 출력시켜버리기 <- 만약에 이렇게 한다고 하면 ranking쪽 코드도 좀 다듬어야할 듯


					mysqli_free_result($result);
			}
			else{

				// 실패하면, 어떻게 보여줄거야? 리뷰 메인페이지로 리다이렉트? 
			}

			mysqli_stmt_close($stmt);
	}
	else{ // prepare 실패
	}


mysqli_close($dblink);


?>
