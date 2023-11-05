
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
       session_start();
   }
   
   $cityId = $_SESSION['cityId'];
   $accType = $_SESSION['accType'];
   $duration = $_SESSION['duration'];
   $transType = $_SESSION['transType'];
   
   echo $cityId."  ".$accType."  ".$duration."  ".$transType;



   
}

?>

