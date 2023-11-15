<?php



$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    else{
        $sql = "SELECT c.id, c.name, c.info, c.latitude, c.longitude, t.cou, land.img as landmarkImgUrl ,RANK() OVER (ORDER BY t.cou DESC) AS rank
                FROM (SELECT city_id, COUNT(*) cou
                        FROM trip
                        GROUP BY city_id
                        ORDER BY cou DESC
                        LIMIT 10) AS t
                        JOIN city AS c ON c.id = t.city_id 
                        JOIN landmark as land on land.city_id = c.id
                GROUP by c.id
                ORDER by rank";
        
        $result = mysqli_query($dblink, $sql);
        $cityRanking = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $cityRanking[] = $row;
        }
        mysqli_free_result($result);
    }

    mysqli_close($dblink);
    /*
    1. 서브쿼리 
    SELECT city_id, count(*) cou
    FROM trip
    GROUP BY city_id
    ORDER BY cou DESC 
    LIMIT 10 -- 쿼리 실행 시간 단축을 위해서 추가

    2. 메인 쿼리 -> city 테이블에 join해서 name 가져오기
    SELECT c.id, c.name, t.cou
    FROM (SELECT city_id, COUNT(*) cou
        FROM trip
        GROUP BY city_id
        ORDER BY cou DESC
        LIMIT 10) AS t
    JOIN city AS c ON c.id = t.city_id
    ORDER BY t.cou desc;
    */
?>
