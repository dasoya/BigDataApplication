<?php
    $dblink = mysqli_connect("localhost", 'root', '', 'dbName');
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    else{
        
        $sql = "SELECT * FROM review;";

        $result = mysqli_query($dblink, $sql);
        if (mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {
                //어떤 format으로 보여줄지 고민해보기

            }
        }
        else{
            printf("", mysqli_error($dblink));
            exit();
        }
        mysqli_free_result($result);
    }
    mysqli_close($dblink);

?>