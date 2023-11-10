<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trip Plan</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
            
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-topic-listing.css" rel="stylesheet">  
    </head>
  <body id="top">
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="bi-back"></i>
                    <span>Trip Planner</span>
                </a>
              
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php#section_1">ESTIMATE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="recommend_base.html">RECOMMEND</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="ranking/rankingShow10.php">RANKING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="review/reviews.php">REVIEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="feedback.php">FEEDBACK</a>
                        </li>

                        
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="mypage.php" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>

        <section id="section_1">
            <iframe width =100% height= "800px" src="esmt_base.php"></iframe>
        </section>

        <!-- 여기서 부터  -->
    <?php
    include "dbconfig.php";
    include "ranking/cityRanking.php";
    include "ranking/countryRanking.php";
    ?>

    <section class="explore-section section-padding" id="">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-4">TOP 3</h1>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">city</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">country</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2"><?php echo $cityRanking[0]['name']; ?></h5>
                                                    
                                                    <p class="mb-0"><?php echo $cityRanking[0]['info'];?></p>
                                                </div>
                                                <span class="badge bg-design rounded-pill ms-auto"><?php echo $cityRanking[0]['rank'];?></span>
                                            </div>
                                            <img src="<?php echo $cityRanking[0]['landmarkImgUrl'];?>" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2"><?php echo $cityRanking[1]['name']; ?></h5>

                                                        <p class="mb-0"><?php echo $cityRanking[1]['info'];?></p>
                                                </div>

                                                <span class="badge bg-design rounded-pill ms-auto"><?php echo $cityRanking[1]['rank'];?></span>
                                            </div>

                                            <img src="<?php echo $cityRanking[1]['landmarkImgUrl'];?>" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2"><?php echo $cityRanking[2]['name']; ?></h5>

                                                        <p class="mb-0"><?php echo $cityRanking[2]['info'];?></p>
                                                </div>

                                                <span class="badge bg-design rounded-pill ms-auto"><?php echo $cityRanking[2]['rank'];?></span>
                                            </div>

                                            <img src="<?php echo $cityRanking[2]['landmarkImgUrl'];?>" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 여기부터 country -->
                        <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2"><?php echo $countryRanking[0]['name']; ?></h5>

                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto"><?php echo $countryRanking[0]['rank'];?></span>
                                                </div>

                                                <img src="<?php echo $countryRanking[0]['flag'];?>" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2"><?php echo $countryRanking[1]['name']; ?></h5>

                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto"><?php echo $countryRanking[1]['rank'];?></span>
                                                </div>

                                                <img src="<?php echo $countryRanking[1]['flag'];?>" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12  mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2"><?php echo $countryRanking[2]['name']; ?></h5>
                                                        
                                                    </div>
                                                    <span class="badge bg-advertising rounded-pill ms-auto"><?php echo $countryRanking[2]['rank'];?></span>
                                                </div>
                                                <img src="<?php echo $countryRanking[2]['flag'];?>" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center mt-5">
            <p class="text-gray">
                Want to see more?
                <a href="ranking/rankingShow10.php" class="btn custom-btn custom-border-btn ms-3">Check out ranking</a>
            </p>
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
         <script src="js/jquery.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script src="js/jquery.sticky.js"></script>
         <script src="js/click-scroll.js"></script>
         <script src="js/custom.js"></script>



    </main>
  </body>
</html>