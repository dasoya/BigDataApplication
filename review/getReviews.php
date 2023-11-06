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

$page_num = 5;
$limit_page = ($page - 1) * $page_num;
$total = 1;

$url = strtok($_SERVER['REQUEST_URI'], "?")."?page=";

$sql_review = "SELECT * FROM review ORDER BY created_at DESC LIMIT " . $limit_page . "," . $page_num . ";";
$sql_total = "SELECT count(*) as total FROM review; ";



$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);

if (mysqli_connect_errno()) {
    printf('', mysqli_connect_error());
    exit();
} else {

    $result_total = mysqli_query($dblink, $sql_total);
    $result_review = mysqli_query($dblink, $sql_review);
    if (mysqli_num_rows($result_review) > 0) {

        while ($row = mysqli_fetch_assoc($result_total)) {
            $total = $row['total'];
            
        }
         
        $total_cnt  = ceil($total / $page_num);

        while ($review = mysqli_fetch_assoc($result_review)) {
            //어떤 format으로 보여줄지 고민해보기
            //게시판 형으로 갈거라면 이대로
            //div 형으로 묶어서 보여줄거면 아래 echo 바꾸기 (일단 테스트)
            echo "<tr>
                        <td>" . $review["id"] . "</td>
                        <td>" . $review["title"] . "</td>
                        <td>" . $review["body"] . "</td>
                        <td>" . $review["created_at"] . "</td>
                        <td>" . $review["user_id"] . "</td>
                    </tr>";
        }
        mysqli_free_result($result_total);
        mysqli_free_result($result_review);
    } else {
        printf("", mysqli_error($dblink));
        exit();
    }

}
mysqli_close($dblink);

?>