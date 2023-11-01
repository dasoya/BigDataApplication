<?php

    $dblink = mysqli_connect("localhost", 'root', '', 'bibibig');
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    // 랭킹 순으로 정리한 테이블에 where문 추가
    $sql = "WITH RankedCities AS (
                SELECT c.id, c.name, t.cou, RANK() OVER (ORDER BY t.cou DESC) AS rank
                FROM (
                    SELECT city_id, COUNT(*) cou
                    FROM trip
                    GROUP BY city_id
                ) AS t
                JOIN city AS c ON c.id = t.city_id
            )
            SELECT id, name, cou, rank
            FROM RankedCities
            WHERE name = ?;";
    
    if($stmt = mysqli_prepare($dblink, $sql)) {

        mysqli_stmt_bind_param($stmt,"s", $keyword);

        $keyword = $_REQUEST['keyword'];

        if(mysqli_stmt_execute($stmt)) { 
            
            $result = mysqli_stmt_get_result($stmt);
            $searchResult = [];
            while($row = mysqli_fetch_assoc($result)) {
                $searchResult[] = $row;
                echo''. $row['id'] .''. $row['name'].''. $row['cou'] .''. $row['rank'];
            }
            mysqli_free_result($result);
        }
        else{
            printf('', mysqli_error($dblink));
        }
    } 
    else {
        printf("", mysqli_error($dblink));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($dblink);

    /*
    1. 서브쿼리 
    SELECT city_id, count(*) cou
    FROM trip
    GROUP BY city_id
    ORDER BY cou DESC

    2. 메인 쿼리 -> city 테이블에 join하고, 정렬해서 rank붙이기
    SELECT c.id, c.name, t.cou, RANK() OVER (ORDER BY t.cou DESC) AS rank
    FROM (SELECT city_id, COUNT(*) cou
            FROM trip
            GROUP BY city_id
            ORDER BY cou DESC) AS t
    JOIN city AS c ON c.id = t.city_id;    
    */
?>
