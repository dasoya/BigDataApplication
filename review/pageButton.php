<?php

function createPagingButton($numOfReviews, $current, $total, $url) {
    
    $str = "";
    if ($current > 1) {
        $str .= "<li class='page-item'>
            <a class='page-link' href='".$url .($current-1)."#section_review' aria-label='Previous'>
                <span aria-hidden='true'>Prev</span>
            </a>
        </li>";
    } else {
        $str .= "";
    }
    $start_page = @( ( (int)( ($current - 1 ) / $numOfReviews ) ) * $numOfReviews ) + 1;
    $end_page = $start_page + $numOfReviews - 1;

    if ($end_page >= $total) $end_page = $total;

    if ($total > 1) {
        for ($i=$start_page;$i<=$end_page;$i++) {
            if(($current-2) <= $i  && $i < ($current+3)) {
                
                if ($current == $i) { 
                    $str .="<li class='page-item'>
                                <a class='page-link' href='".$url.$i."#section_review' style='color: #000000;'><strong>".$i."</strong></a>
                            </li>";
                } else {
                    $str .= "<li class='page-item'>
                            <a class='page-link' href='".$url.$i."#section_review'>".$i."</a>
                        </li>";
                }
            }
        }
    }

    if ($current < $total) {
        //$str .= "<a href='$url" . ($cur_page+1) . "' class='next'>다음</a>";
        //$str .= "<a href='$url$total_page' class='next_all'>맨끝</a>";
        $str .= "<li class='page-item'>
                    <a class='page-link' href='" . $url . ($current+1) . "#section_review'  aria-label='Next'>
                        <span aria-hidden='true'>Next</span>
                    </a>
                </li> ";
    } else {
        $str .= "";
    }

    $str .= "";

    return $str;
}




?>
