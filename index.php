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
                            <a class="nav-link click-scroll" href="index.php">ESTIMATE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="recommend/recommend_base.html">RECOMMEND</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="ranking/rankingShow10.php">RANKING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="review/reviews.php">REVIEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="userPage/feedback.php">FEEDBACK</a>
                        </li>

                        
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="userPage/mypage.php" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>

        <section id="section_1">
            <iframe width =100% height= "800px" src="estimation/esmt_base.php"></iframe>
        </section>

        <!-- 여기서 부터  -->
    <section>
        <iframe width = 100% height = 900px src ="ranking/rankingShow3home.php"></iframe>
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