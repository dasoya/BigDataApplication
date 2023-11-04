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
    $transType = $_POST['transType'];
    $cityId = $_POST['cityId']; 
    $duration = $_POST['duration']; 

    echo $transType;
    echo $cityId."   ";
    echo $duration;
    // 1.나라와 교통 종류가 동일한 조건의 가격 고려
    // 2. 종류가 없다면 교통 종류가 동일한 조건의 가격 고려
    // 3. duration으로 나눠서 AVG 
    // 4. AVG한값을 duration만큼 곱함
    $query = "SELECT duration, AVG(transportation_cost / duration) AS avgDayCost FROM `trip` WHERE city_id = " . $cityId . " AND transportation_cost = '" . $transType . "'";
    #'SELECT city_id, accommodation_type, duration, AVG(accommodation_cost / duration) AS avgDayCost FROM `trip` WHERE city_id = '.$cityId.' AND accommodation_type ='.$accType."'";
    $result = mysqli_query($conn,$query);
  
    if($result){
        $avgDayCost = $row['avgDayCost'];
    
        if(mysqli_num_rows($row)>0){
        
        
            $estimatedCost = round($avgDayCost * $duration,0);
            echo "<h4 class = 'text-white';>Estimated Transportation Cost : ".$estimatedCost."$</h4>";
            
            mysqli_free_result($result);
            mysqli_close($conn);

            return;
        }
    }

    $query = "SELECT duration, AVG(transportation_cost / duration) AS avgDayCost FROM `trip` WHERE transportation_cost = ".$transType;
    $result = mysqli_query($conn,$query);
    if($result){
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($row)>0){

        
            $avgDayCost = $row['avgDayCost'];
            $estimatedCost = round($avgDayCost * $duration,0);
            echo "<h4 class = 'text-white';>Estimated Transportation Cost : ".$estimatedCost."$</h4>";
            
        } else{
            echo 'No data found for the given criteria';
        }
    }
   

    mysqli_free_result($result);
    mysqli_close($conn);
    
}
?>