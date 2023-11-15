<?php
    if (!session_id()){
        session_start();
    }
    header("recommend_base.html");
    // session_start();
    header("Cache-Control: no-cache"); // POST로 검색 후에 ERR_CACHE_MISS 에러가 뜰 때 no-cache만 추가해 주면 제대로 동작한다. //
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trip Plan</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
            
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-icons.css" rel="stylesheet">
        <link href="../css/templatemo-topic-listing.css" rel="stylesheet">  
        <link href="../css/recommend_album.css" rel="stylesheet">
    </head>
  <body id="top">
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <i class="bi-back"></i>
                    <span>Trip Planner</span>
                </a>
                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../index.php">ESTIMATE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../recommend/recommend_base.html">RECOMEND</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../ranking/rankingShow10.php">RANKING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../review/reviews.php">REVIEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../userPage/feedback.php">FEEDBACK</a>
                        </li>

                        
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="../userPage/mypage.php" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>

        <section class="hero-section d-flex justify-content-center align-items-center pb-2" id="recommend">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center" style="font-size : 35px" >Get recommendations of your destination based on the available price range</h1>
                        <form method="post" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" action="../recommend/recommend_base.php">
                        <div class="input-group input-group-lg">
                        <span class="input-group-text price-insert" id="basic-addon1"></span>
                        <input name="min-val" type="text" class="form-control" id="min-val" placeholder="min val (eg. 100)" value="100" style="font-size : 15px">
                                <input name="max-val" type="text" class="form-control" id="max-val" placeholder="max val (eg. 1000)" value="1000" style="font-size : 15px">
                            <select name="dropdown" class="form-control">
                                <option value="option1">Sort By: 숙박</option>
                                <option value="option2">Sort By: 교통</option>
                                <option value="option3">Sort By: 숙박+교통</option>
                            </select>
                        <button type="submit" class="form-control" style="font-size : 10px">SORT</button>
                        </div>
                        </form>
                    </div>
                    
                  
                </div>
            </div>
        </section>

        <section class=" justify-content-center align-items-center pt-2 mt-3" id="recommend"  >
        <div class="container mt-0">

                    
            
                <?php include "../recommend/get_price_range.php"; // 이걸 포함해서 get_price_range.php에서 sql 문을 실행시켜 정보를 가져오게 된다. 

                                   echo "<p class='text-gray'> Price Range: ".$min_val. "~ ".$max_val." |    Sort: ".$sort."</p>";

                                   $html = "";

                                   if (mysqli_num_rows($result) == 0){
                                       $html .= "<h3> NO RECOMMENDATIONS VALID IN THE PRICE RANGE </h3>";
                                       echo($html);
                                       
                                   }
                                   else{
                                       $idx = 1;
                                       while ($row = mysqli_fetch_assoc($result)){
                                           
                                           $html.= '<div class="custom-block bg-white shadow-lg mb-3">';
                                           $html.= '<a href="../like/city_detail.php?city=' . $row['name2'] . '">';
                                        
                                           
                                           $html.= '<div class ="row">';
                                           $html .= '<div class = "col-2"> <img class="landmark-img" width="200" height="200"  src="' . $row['img1'] . '" alt="' . $row['name1'] . '"></div>';

                                           // $html .= '<h3>' . $idx . ' CITY NAME : ' .  $row['name2'] . '</h3>';
                                           $html .= '<div class ="col-8" style="margin-left: 10px;"><h3>' . $row['name2'] . '</h3>'; 
                                           $html .= '<p> : ' . $row['info2'] . '</p>';
                                           
                                           $html .= '  <h6>LANDMARK NAME : ' . $row['name1'] . '</h6>';
                                           $html .= ' <p>LANDMARK INFO : ' . $row['info1'] . '</p></div>';

                                           $html .= '<div class="col-1 ms-auto">'. $row['country_name']."<br>";
                                           // $html .= '<img class="flag-img" src="' . $row['flag'] . 'alt="No Flag Img" width="50" height="30"';
                                           $html .= '<img class="flag-img" src="' . $row['flag'] . '" alt="No Flag Img" width="50" height="30"></div>';
                                           $html .= '</div>';
                                           $html .= '</a></div>';
                                           $idx++;
                                       }
                                       
                                       echo($html);
                                       
                                   };
                           ?>
            </div>
            </div>
        </div>
        
        </section>

        <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.php">
                        <i class="bi-back"></i>
                        <span>Trip Planner</span>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">DEVELOPED BY BIBIBIG</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">정다소</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">박유진</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">정유리</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">이지혜</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

         <!-- JAVASCRIPT FILES -->
         <script src="../js/jquery.min.js"></script>
         <script src="../js/bootstrap.bundle.min.js"></script>
         <script src="../js/jquery.sticky.js"></script>
         <script src="../js/click-scroll.js"></script>
         <script src="../js/custom.js"></script>



    </main>
  </body>
</html>

