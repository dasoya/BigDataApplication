
<?php

// DB 연결 설정
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team02";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {

    printf("Connection failed: %s\n" , mysqli_connect_error());
    echo "connect error";
    exit();
}
else{
  
   
   
   // 발급된 세션 id가 있다면 세션의 id를, 없다면 false 반환
   if(!session_id()) {
       // id가 없을 경우 세션 시작
       exit();
   }

   if (!isset($_SESSION['accCost']) || !isset($_SESSION['transCost'])) {
    // 하나 이상의 세션 변수가 없는 경우
    
    return; // 또는 다른 처리를 수행하거나 에러 처리를 할 수 있습니다.
}

   
   $accCost = $_SESSION['accCost'];
   $transCost = $_SESSION['transCost'];
 
   $totalCost = $accCost + $transCost;
   echo "<h2 style='color: var(--bs-yellow);' class='text-end'>Total Cost : $".$totalCost."</h2>";

   session_destroy();
   
}

?>

