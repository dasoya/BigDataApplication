
<?php

// DB 연결 설정
require("../dbconfig.php");

// Create connection //
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
if (mysqli_connect_errno()) {

    printf("Connection failed: %s\n" , mysqli_connect_error());
    echo "connect error";
    exit();
}
else{
   // 발급된 세션 id가 있다면 세션의 id를, 없다면 false 반환
   if(!session_id()) {
       // id가 없을 경우 세션 시작
       session_start();
   }

   if (!isset($_SESSION['accCost']) || !isset($_SESSION['transCost'])|| !isset($_SESSION['total'])) {
    // 하나 이상의 세션 변수가 없는 경우
    exit(); // 또는 다른 처리를 수행하거나 에러 처리를 할 수 있습니다.
    }

   
   $accCost = $_SESSION['accCost'];
   $transCost = $_SESSION['transCost'];
  
   $totalCost = $accCost + $transCost;

   if(!is_null($totalCost)){
   echo "<h2 style='color: var(--bs-yellow);' class='text-end'>Total Cost : $".$totalCost."</h2>";
   }
   //prediction 테이블에 저장

    $currentTime = date('Y-m-d H:i:s');

    if(!isset($_SESSION['id'])) {
        echo("NO USER ID");
       return;
    }
    $query = "INSERT INTO prediction (city_id,duration,created_at,user_id,transportation_type, accommodation_type, transportation_cost, accommodation_cost) 
    VALUES (".$_SESSION['cityId'].",".$_SESSION['duration'].",'".$currentTime."',".$_SESSION['id'].",'".$_SESSION['transType']."','".$_SESSION['accType']."',".$transCost.",".$accCost.")";
    $result = mysqli_query($conn, $query);
    if ($result) {
       echo "History saved";
    // printf("New Record has id %d.\n", mysqli_insert_id($conn));
    } else {
         printf("Error %s \n",mysqli_error($conn));
    }
    //session_destroy();
    $_SESSION['duration'] = null;
    $_SESSION['cityId'] = null;
    $_SESSION['accType'] = null;
    $_SESSION['transType'] = null;
    $_SESSION['accCost'] = null;
    $_SESSION['transCost'] = null;
    $_SESSION['total']  = null;
    $totalCost = null;
}

?>

