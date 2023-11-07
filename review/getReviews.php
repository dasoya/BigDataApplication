<?php

$server_name = "localhost";
$db_username = "team02";
$db_password = "team02";
$db_name = "team02";


if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

if (!isset($_GET["searchKeyword"])){ //키워드 셋팅이 안되어있으면
    $searchKeyword = '';
   // echo "검색 키워드 입력하세요";
}
elseif ($_GET["searchKeyword"]== '+') { // 설정 되어있는데, 공백문자인경우
    $searchKeyword = '';
    //echo "검색 키워드 입력하세요";

} 
else {// 둘다 아닌 경우( 값이 있는 경우)
    $searchKeyword = $_GET["searchKeyword"];
       // echo " <div class='col-lg-3 col-3'> your search Keyword: ".$_GET['searchKeyword']."</div>";
}

$page_num = 5;
$limit_page = ($page - 1) * $page_num;
$total = 1;

$url = strtok($_SERVER['REQUEST_URI'], "?")."?searchKeyword=".$searchKeyword. "&page=";


 // 만약 $searchKeyword에  문자열이 없으면 전체 게시글.
$sql_review = "SELECT r.id as review_id, title, body, created_at, u.id as user_id, u.name as user_name
                FROM  review  as r JOIN user as u on r.user_id = u.id
                where ( title like ? ) or ( body like ? ) 
                ORDER BY created_at DESC LIMIT " . $limit_page . "," . $page_num . ";";
$sql_total = "SELECT count(*) as total 
                FROM review 
                where ( title like ? ) or ( body like ? ); ";


$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);

if (mysqli_connect_errno()) {
    printf('', mysqli_connect_error());
    exit();
}
    //total도 영향을 받으니까... 
    $stmt_review=mysqli_prepare($dblink, $sql_review);
    $stmt_total =mysqli_prepare($dblink, $sql_total);

    if($stmt_review && $stmt_total) { 

        $dbSearchKeyword = "%".$searchKeyword."%";
        mysqli_stmt_bind_param($stmt_review,'ss', $dbSearchKeyword, $dbSearchKeyword);
        mysqli_stmt_bind_param($stmt_total, 'ss', $dbSearchKeyword, $dbSearchKeyword);
        

        if(mysqli_stmt_execute($stmt_total)){
            $result_total = mysqli_stmt_get_result($stmt_total);
            while ($row = mysqli_fetch_assoc($result_total)){
                $total = $row['total'];
                
            }
            $total_cnt  = ceil($total / $page_num);
            mysqli_free_result($result_total);
            
        }else{
            //쿼리문 실행 실패
            echo mysqli_stmt_errno($stmt_total);
        }
        mysqli_stmt_close($stmt_total);


        //이미 위에서 $searchKeyword 선언 했고
        if(mysqli_stmt_execute($stmt_review)) {
            $result_review = mysqli_stmt_get_result($stmt_review);
            while ($review = mysqli_fetch_assoc($result_review)){
                echo "<tr>
                        <td>" . $review["review_id"] . "</td>
                        <td><a href= 'detail.html?reviewId=". $review["review_id"] ."'>" . $review["title"] . "</a></td>
                        <td>" . date("Y-m-d", strtotime($review["created_at"]) ). "</td>
                        <td>" . $review["user_name"] . "</td>
                    </tr>";
            }
            mysqli_free_result($result_review);
        }
        mysqli_stmt_close($stmt_review);
    }
    else{
        echo mysqli_stmt_errno($stmt_review);
        exit();
    }


    // $result_total = mysqli_query($dblink, $sql_total);
    // $result_review = mysqli_query($dblink, $sql_review);
    // if (mysqli_num_rows($result_review) > 0) {

    //     while ($row = mysqli_fetch_assoc($result_total)) {
    //         $total = $row['total'];
            
    //     }
         
    //     $total_cnt  = ceil($total / $page_num);

    //     while ($review = mysqli_fetch_assoc($result_review)) {
    //         //어떤 format으로 보여줄지 고민해보기
    //         //게시판 형으로 갈거라면 이대로
    //         //div 형으로 묶어서 보여줄거면 아래 echo 바꾸기 (일단 테스트)// <td>" . $review["body"] . "</td><td>" . $review["user_id"] . "</td>
    //         echo "<tr>
    //                     <td>" . $review["id"] . "</td>
    //                     <td>" . $review["title"] . "</td>
    //                     <td>" . $review["created_at"] . "</td>
    //                 </tr>";
    //     }
    //     mysqli_free_result($result_total);
    //     mysqli_free_result($result_review);
    // } else {
    //     printf("", mysqli_error($dblink));
    //     exit();
    // }

mysqli_close($dblink);

?>