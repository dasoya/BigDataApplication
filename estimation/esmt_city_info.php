<?php

require("../dbconfig.php");

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
    
    
    if ( !isset($_SESSION['cityId']) || !isset($_SESSION['duration'])) {
        // 하나 이상의 세션 변수가 없는 경우
        echo "session error";
        return; // 또는 다른 처리를 수행하거나 에러 처리를 할 수 있습니다.
    }
    
    $cityId = $_SESSION['cityId']; 
    $duration = $_SESSION['duration']; 
 
    //숙박시설, 교통시설로 그룹핑해서 총 가격을 보여줌
    $query =    "SELECT trip.accommodation_type as accType, trip.transportation_type as transType,
                AVG((trip.accommodation_cost/trip.duration)*" .$duration." +trip.transportation_cost) as totalCost
                FROM trip
                WHERE trip.city_id = '".$cityId."'
                GROUP by trip.accommodation_type, trip.transportation_type
                ";
   
    $result = mysqli_query($conn,$query);
    
    if ($result && mysqli_num_rows($result) > 0){

            echo '
                                <table class="styled-table text-center content-end align-items-end">
                                    <thead>
                                        <tr>
                                            <th > Accommodation  </th>
                                            <th > Transportation  </th>
                                            <th> Total Cost </th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                         
                                              while($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                    echo "<td>" . $row['accType'] . "</td>";
                                                    echo "<td >" .$row['transType'] . "</td>";
                                                    echo "<td >$" .   round($row['totalCost'],0) . "</td>";
                                                echo "</tr>";
                                            }
                                        
                               echo  '</tbody>
                                </table>
                            ';
                        
        
    
            return;
        
    }

    $_SESSION['duration'] = null;
    $_SESSION['cityId'] = null;
    $_SESSION['accType'] = null;
    $_SESSION['transType'] = null;
    $_SESSION['accCost'] = null;
    $_SESSION['transCost'] = null;
    $_SESSION['total']  = null;
    
    mysqli_free_result($result);
    mysqli_close($conn);
    
    }
?>

