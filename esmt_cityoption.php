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

    // 도시 목록 가져오기
    $query = "SELECT name, id FROM city";
    $result = mysqli_query($conn,$query);

    if($result){
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
    } 
    else {
        echo '<option value="">Fail to load city list</option>';
        printf("Error %s \n",mysqli_error($conn));
    }
    #echo '<option value="">Null</option>';
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
