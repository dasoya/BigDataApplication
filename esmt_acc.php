
<?php

// DB 연결 설정
require("dbconfig.php");

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
    
    
    if (!isset($_SESSION['accType']) || !isset($_SESSION['cityId']) || !isset($_SESSION['duration'])) {
        // 하나 이상의 세션 변수가 없는 경우
        
        return; // 또는 다른 처리를 수행하거나 에러 처리를 할 수 있습니다.
    }
    
    
    $accType = $_SESSION['accType'];
    $cityId = $_SESSION['cityId']; 
    $duration = $_SESSION['duration']; 
 
    // 1.나라와 숙박 종류가 동일한 조건의 가격 고려
    // 2. 종류가 없다면 숙박 종류가 동일한 조건의 가격 고려
    // 3. duration으로 나눠서 AVG 
    // 4. AVG한값을 duration만큼 곱함
    $query = "SELECT city.name, accommodation_type, duration,accommodation_cost, AVG(accommodation_cost / duration) AS avgDayCost FROM `trip`,city WHERE city_id = ".$cityId." AND accommodation_type = '" .$accType . "'";
    #'SELECT city_id, accommodation_type, duration, AVG(accommodation_cost / duration) AS avgDayCost FROM `trip` WHERE city_id = '.$cityId.' AND accommodation_type ='.$accType."'";
    $result = mysqli_query($conn,$query);

    if ($result && mysqli_num_rows($result) > 0){
    
        $row = mysqli_fetch_array($result);
        $avgDayCost = $row['avgDayCost'];
        $cityName = $row['name'];
        
        if(!is_null($avgDayCost)) {
            $estimatedCost = round($avgDayCost * $duration, 0);
            
          
            echo "<h4 class = 'text-white text-end';>In ".$cityName."<br>Estimated ".$accType." Cost<br>  For ".$duration." Nights : $".$estimatedCost."</h4>";
            $_SESSION['accCost'] = $estimatedCost;
            mysqli_free_result($result);
            mysqli_close($conn);
    
            return;
        }
    }

    $query = "SELECT accommodation_type, duration, AVG(accommodation_cost / duration) AS avgDayCost 
    FROM `trip` WHERE accommodation_type = '" .$accType . "'";
    $result = mysqli_query($conn,$query);

    if($result){
        if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $avgDayCost = $row['avgDayCost'];
        $estimatedCost = round($avgDayCost * $duration,0);
        echo "<h4 class = 'text-white text-end';>Estimated ".$accType." Cost<br> For ".$duration." Nights  : $".$estimatedCost."</h4>";
        $_SESSION['accCost'] = $estimatedCost;
        }
        else {
            echo 'No data found for the given criteria';
            $_SESSION['accCost'] = 0;
        }
    }

   
    mysqli_free_result($result);
    mysqli_close($conn);
    
    }
?>

