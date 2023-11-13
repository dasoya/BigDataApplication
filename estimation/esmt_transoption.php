<?php
// DB 연결 설정
require("../dbconfig.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {

    printf("Connection failed: %s\n" , mysqli_connect_error());
    echo "connect error";
    exit();
}
else{

    // 도시 목록 가져오기
    $query = "SELECT DISTINCT transportation_type FROM trip ORDER BY transportation_type ASC";
    $result = mysqli_query($conn,$query);

    if($result){
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['transportation_type'] . '">' . $row['transportation_type'] . '</option>';
        }
    } 
    else {
        echo '<option value="">Fail to load list</option>';
        printf("Error %s \n",mysqli_error($conn));
    }
    #echo '<option value="">Null</option>';
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
