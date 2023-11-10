<?php

require("dbconfig.php");


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
    
    
    if (!isset($_SESSION['accType']) || !isset($_SESSION['cityId']) || !isset($_SESSION['duration'])) {
        // 하나 이상의 세션 변수가 없는 경우
        
        return; // 또는 다른 처리를 수행하거나 에러 처리를 할 수 있습니다.
    }
    
    $accType = $_SESSION['accType'];
    $cityId = $_SESSION['cityId']; 
    $duration = $_SESSION['duration']; 
 
    // 선택한 도시의 가장 싼 숙박 시설을 찾는 쿼리
    $query="SELECT city.name,trip.accommodation_type as minacc,
            (trip.accommodation_cost/trip.duration) as mincost
            FROM trip, city
            WHERE trip.city_id = city.id AND city.id = '".$cityId."'
            AND (trip.accommodation_cost/trip.duration) = 
                                                    (SELECT MIN(t.daycost) 
                                                    FROM (SELECT *, AVG(accommodation_cost/duration) as daycost
                                                        FROM `trip` WHERE city_id = '".$cityId."' 
                                                        GROUP BY accommodation_type ) AS t);";
                                                
    $result = mysqli_query($conn,$query);
 
    if ($result && mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
        $avgDayCost = $row['mincost'];
        $minAcc = $row['minacc'];
        
        if(!is_null($avgDayCost)&& $_SESSION['accType'] != $minAcc) {
            $estimatedCost = round($avgDayCost * $duration, 0);
            
           //호텔 가격이 ~로 가장 싼 숙박 시설입니다. 
            echo "<h6 class = 'text-white text-end';>Tip! The ".$minAcc." price<br> is the most affordable at $".$estimatedCost."</h6>";
            //$_SESSION['accCost'] = $estimatedCost;
            mysqli_free_result($result);
            mysqli_close($conn);
    
            return;
        }
    } else{

      //  printf("no result %s \n",mysqli_error($conn) );
    }

    mysqli_free_result($result);
    mysqli_close($conn);
    
    }
?>

