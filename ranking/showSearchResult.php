<?php

$isParameter = (isset($_GET['select']) && isset($_GET['keyword']));

if($isParameter && ($searchResult != null)) {
    
    $select = $_GET['select'];
    $keyword = $_GET['keyword'];
    
    if ($select == 'none') {
        echo "none. please input something";
    } elseif ($select == 'city') {
        echo '<div class="row" id="section-search">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Number of Visits</th>
                    </tr>
                </thead>
                <tbody>';

        foreach ($searchResult as $result) {
            echo '<tr>';
            echo '<td>' . $result['rank'] . '</td>';
            echo '<td>' . $result['name'] . '</td>';
            echo '<td>' . $result['cou'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>
              </table>
              </div>';
    } elseif ($select == 'country') {
        echo '<div class="row" id="section-search">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Name</th>
                            <th>Number of Visits</th>
                        </tr>
                    </thead>
                    <tbody>';

        foreach ($searchResult as $result) {
            echo '<tr>';
            echo '<td>' . $result['rank'] . '</td>';
            echo '<td>' . $result['name'] . '</td>';
            echo '<td>' . $result['total'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>
              </table>
              </div>';

    }
}
elseif ($searchResult == null && $isParameter) {
    echo "<p class =\"text-center mt-3 \"  > No result <br> Please check your input data</p>";
} 
else {
    echo "<p class =\"text-center mt-3 \"  > result will pop up here</p>";
}

?> 