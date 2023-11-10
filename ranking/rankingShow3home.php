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
    </head>
  <body id="top">
<!-- 여기서 부터  -->
    <?php
        include "../dbconfig.php";
        include "cityRanking.php";
        include "countryRanking.php";
        //추후에 base..html에 넣을때 아래 주석 처리 된 코드로 변경해야함.
        //include "ranking/cityRanking.php";
        //include "ranking/countryRanking.php";
       
    ?>
   
        <section class="explore-section section-padding" id="section_2">
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

                                                            <p class="mb-0">국가 정보? - </p>
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

                                                            <p class="mb-0"> 검색링크?</p>
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
                                                            <p class="mb-0">
                                                               city 목록? 
                                                            </p>
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
                    <a href="rankingShow10.php" class="btn custom-btn custom-border-btn ms-3">Check out ranking</a>
                </p>
            </div>
        </section>

        <!-- 여기까지 삽입 -->


         <!-- JAVASCRIPT FILES -->
         <script src="../js/jquery.min.js"></script>
         <script src="../js/bootstrap.bundle.min.js"></script>
         <script src="../js/jquery.sticky.js"></script>
         <script src="../js/click-scroll.js"></script>
         <script src="../js/custom.js"></script>



    </main>
  </body>
</html>