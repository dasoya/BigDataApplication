
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
  
    $query =
    #'SELECT city_id, accommodation_type, duration, AVG(accommodation_cost / duration) AS avgDayCost FROM `trip` WHERE city_id = '.$cityId.' AND accommodation_type ='.$accType."'";
    $result = mysqli_query($conn,$query);

    if($result){
    
        $row = mysqli_fetch_array($result);
        $avgDayCost = $row['avgDayCost'];
        $estimatedCost = round($avgDayCost * $duration,0);
        echo "<h4 class = 'text-white';>Estimated Accommodation Cost : ".$estimatedCost."$</h4>";
     
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    
}
?>

