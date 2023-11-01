<?php

    $dblink = mysqli_connect("localhost", 'root', '', 'bibibig');
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    // 랭킹 순으로 정리한 테이블에 where문 추가
    //만약에 city면 이거 수행하고 

    $sql_city = "WITH RankedCities AS (
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
    

    //country면 아래 수행하고? 
    $sql_country = "WITH RankedCountries AS (
                        SELECT  country.name, flag, total, RANK() OVER (ORDER BY total DESC) AS rank
                        FROM (
                            SELECT country_id, sum(cou) as total
                            FROM (
                                SELECT city_id, count(*) cou
                                FROM trip
                                GROUP BY city_id
                                ) as t
                                JOIN city on city.id = t.city_id
                            GROUP By country_id
                            ) as city
                        JOIN country on country.iso_code2 = city.country_id
                    )
                    SELECT name, flag, total, rank
                    FROM RankedCountries
                    WHERE name = ?;";


    if(/*select box 값이 city일 경우*/$_REQUEST ["select"] == "city") {
        if($stmt = mysqli_prepare($dblink, $sql_city)) {

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
    }
    
    elseif(/*select box가 country 일 경우*/$_REQUEST ["select"] == "country") {
        if($stmt = mysqli_prepare($dblink, $sql_country)) {

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
    }
    else{
        print("select box value error.");
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
