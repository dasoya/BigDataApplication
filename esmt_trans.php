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
    

    if(!session_id()) {
        // id가 없을 경우 세션 시작
        // $transType = 'Bus';
        // $cityId ='1001';
        // $duration ='1';
        return;
    }
    
    
    if (!isset($_SESSION['transType']) || !isset($_SESSION['cityId']) || !isset($_SESSION['duration'])) {
        // 하나 이상의 세션 변수가 없는 경우
        
        return; // 또는 다른 처리를 수행하거나 에러 처리를 할 수 있습니다.
    }
    
    $transType = $_SESSION['transType'];
    $cityId = $_SESSION['cityId']; 
    $duration = $_SESSION['duration']; 

    // echo $transType;
    // echo $cityId."   ";
    // echo $duration;
    // 1.나라와 교통 종류가 동일한 조건의 가격 고려
    // 2. 종류가 없다면 교통 종류가 동일한 조건의 가격 고려
    // 3. duration으로 나눠서 AVG 
    // 4.transportation cost는 duration을 고려하지 않음 
    $query = "SELECT duration, AVG(transportation_cost / duration) AS avgDayCost FROM `trip` WHERE city_id = ".$cityId." AND transportation_type = '".$transType."'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        
            $row = mysqli_fetch_array($result);
            $avgDayCost = $row['avgDayCost'];
            $estimatedCost = round($avgDayCost * $duration, 0);
            
            if(!is_null($avgDayCost)) {
                echo "<h4 class='text-white text-end'>Estimated ".$transType." Cost : $" . $estimatedCost . "</h4>";
                $_SESSION['transCost'] = $estimatedCost;
                mysqli_free_result($result);
                mysqli_close($conn);
                return;
            }
    }
    
    $query = "SELECT duration, AVG(transportation_cost / duration) AS avgDayCost FROM `trip` WHERE transportation_type =  '".$transType."'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $avgDayCost = $row['avgDayCost'];
            $estimatedCost = round($avgDayCost, 0);
            echo "<h4 class='text-white text-end'>Estimated ".$transType." Cost : $" . $estimatedCost . "</h4>";
            $_SESSION['transCost'] = $estimatedCost;
        } else {
            
            echo 'No data found for the given criteria';
            $_SESSION['transCost'] = 0;
        }
        
        mysqli_free_result($result);
        mysqli_close($conn);
    }

    
    
    
}
?>