<?php

    $dblink = mysqli_connect("localhost", 'root', '', 'bibibig');
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    else{
        $sql = "SELECT country.name, flag, total, RANK() OVER (ORDER BY total DESC) AS rank
                    FROM (SELECT country_id, sum(cou) as total
                        FROM (SELECT city_id, count(*) cou
                                FROM trip
                                GROUP BY city_id) as t
                        JOIN city on city.id = t.city_id
                        GROUP By country_id) as city
                    JOIN country on country.iso_code2 = city.country_id;";
        
        $result = mysqli_query($dblink, $sql);
        $countryRanking = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $countryRanking[] = $row;
        }
        mysqli_free_result($result);
    }

    mysqli_close($dblink);

     
    /* 나라별 순위 쿼리
    
    SELECT name, flag, total
    FROM (SELECT country_id, sum(cou) as total
        FROM (SELECT city_id, count(*) cou
                FROM trip
                GROUP BY city_id) as t
        JOIN city on city.id = t.city_id
        GROUP By country_id) as city
    JOIN country on country.iso_code2 = city.country_id
    ORDER by total DESC

    (문제점) 
    - 현재 데이터셋으로는 city랭킹이랑 비슷한 결과가 나옴 
    - 아마 trip에 city가 다양해지면 작동할 것으로 보임.
    - 공동 2등인 나라가 3개라 세번째 이후부터는 잘리는 문제가 있음
        - 배치를 바꾸던가, ex 왼쪽에 1등만 크게 나머지는 오른쪽에 list형식으로 순위, 이름, 국기 작게
        - 반복문과 조건문 추가로 공동 순위인 경우 전부 보이기or 전부 안보이기
        - */

?>
