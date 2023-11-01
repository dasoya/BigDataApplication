<?php

    $dblink = mysqli_connect("localhost", 'root', '', 'bibibig');
        
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    else{
        $sql = "SELECT  country.name,  city.name,count(trip.id)
                FROM trip
                    LEFT JOIN city ON trip.city_id = city.id
                    LEFT JOIN country ON city.country_id = country.iso_code2
                GROUP BY country.name,city.name WITH ROLLUP;";
                
        $result = mysqli_query($dblink, $sql);
        $rollupCC = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rollupCC[] = $row;
        }
        mysqli_free_result($result);
    }

    mysqli_close($dblink);

/* query

    SELECT  country.name,  city.name,count(trip.id)
    FROM trip
        LEFT JOIN city ON trip.city_id = city.id
        LEFT JOIN country ON city.country_id = country.iso_code2
    GROUP BY country.name,city.name WITH ROLLUP;

*/

?>