<?php

    $dblink = mysqli_connect("localhost", 'root', '', 'dbName');
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    else{
        //Query 내용은 아래 서술
        $sql = "SELECT c.id, c.name, t.cou
                FROM (SELECT city_id, COUNT(*) cou
                        FROM trip
                        GROUP BY city_id
                        ORDER BY cou DESC
                        LIMIT 3) AS t
                JOIN city AS c ON c.id = t.city_id
                ORDER BY t.cou desc;";
        
        //데이터를 가져오기만 하면 되는거라 bind_param 사용 안하였음.
        $result = mysqli_query($dblink, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            
            // 출력 구조 어떻게 할지 고민해보기 
        }
        mysqli_free_result($result);
    }

    mysqli_close($dblink);
    /*
    1. 서브쿼리 -> 상위 3개만 가져오기
    SELECT city_id, count(*) cou
    FROM trip
    GROUP BY city_id
    ORDER BY cou DESC
    LIMIT 3

    2. 메인 쿼리 -> city 테이블에 join해서 name 가져오기
    SELECT c.id, c.name, t.cou
    FROM (SELECT city_id, COUNT(*) cou
        FROM trip
        GROUP BY city_id
        ORDER BY cou DESC
        LIMIT 3) AS t
    JOIN city AS c ON c.id = t.city_id
    ORDER BY t.cou desc;
    */
?>
