<?php

$server_name = "localhost";
$db_username = "team02";
$db_password = "team02";
$db_name = "team02";

$dblink = mysqli_connect($server_name, $db_username , $db_password, $db_name);
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    else{
        $sql = "WITH ContinentMaxTripCount AS (
                    SELECT continent_name, country.name AS country_name, city.name AS city_name, COUNT(trip.id) AS num_of_visiter
                    FROM trip
                        LEFT JOIN city ON trip.city_id = city.id
                        LEFT JOIN country ON city.country_id = country.iso_code2
                        LEFT JOIN continent ON continent.id = country.continent_id
                    GROUP BY continent_name, country_name, city_name
                ), ContinentMax AS (
                    SELECT continent_name, MAX(num_of_visiter) AS max_count
                    FROM ContinentMaxTripCount
                    GROUP BY continent_name
                )
                SELECT cm.continent_name as cont_name, cmtc.country_name as country_name, cmtc.city_name as city_name ,cmtc.num_of_visiter as total
                FROM ContinentMax cm
                INNER JOIN ContinentMaxTripCount cmtc ON cm.continent_name = cmtc.continent_name 
                        AND cm.max_count = cmtc.num_of_visiter;
            ";
        
        $result = mysqli_query($dblink, $sql);
        $bestCityOfContinent = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $bestCityOfContinent[] = $row;
        }
        mysqli_free_result($result);
    }

    mysqli_close($dblink);

?>
