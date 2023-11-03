<?php
/* <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a> 
                                        <!-- todo
                                        버튼 누르면 리뷰 다음거 보여줘야하니까
                                        db에서 가져오는 방식
                                         - 다 가져와서 몇개씩 쪼개서 보여줄건지 <- 리뷰가 적으면 상관 없을 것 같은데....오래걸리려나..?
                                         - 페이지 마다 10개씩 가져올건지. <- 매번 페이지가 갱신 되어서 불편할수도? 
                                        (게시판띄우기 어떻게 하는지 찾아보기) -->
                                         
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li> 
*/
function createPagingButton($numOfReviews, $current, $total, $url) {
    $str = "";
    if ($current > 1) {
        $str .= "<li class='page-item'>
            <a class='page-link' href='".$url .($current-1)."#section_review' aria-label='Previous'>
                <span aria-hidden='true'>Prev</span>
            </a>
        </li>";
        //$str .= "<a href='" . $url . ($cur_page-1) . "' class='pre'>이전</a>";
    } else {
        $str .= "";
    }
    $start_page = @( ( (int)( ($current - 1 ) / $numOfReviews ) ) * $numOfReviews ) + 1;
    $end_page = $start_page + $numOfReviews - 1;

    if ($end_page >= $total) $end_page = $total;

    if ($total > 1) {
        for ($i=$start_page;$i<=$end_page;$i++) {
            if(($current-2) <= $i  && $i < ($current+3)) {
                $str .= "<li class='page-item'>
                            <a class='page-link' href='".$url.$i."#section_review'>".$i."</a>
                        </li>";
                // if ($current != $i) { 
                //     $str .="<li class='page-item'>
                //                 <a class='page-link' href='".$url.$i."#section_review'>".$i."</a>
                //             </li>";
                // } else {
                //     $str .= "<strong>$i</strong>"; 
                // }
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
