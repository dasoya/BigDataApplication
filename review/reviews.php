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
        <link href="review.css" rel="stylesheet">  
    </head>
  <body id="top">
    <main>
        <?php
        include "../dbconfig.php";
        include "pageButton.php";
        
        ?>
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
                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="../index.php">ESTIMATE</a>
                        </li>

                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="../recommend_base.html">RECOMEND</a>
                        </li>

                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="../ranking/rankingShow10.php">RANKING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="">REVIEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../feedback.php">FEEDBACK</a>
                        </li>


                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="../login.html" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">reviews</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Reviews</h2>
                            <h5 class="text-h5">Share your travel experience! </h5>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding-t50" id ="section_review">
                <div class="container" >

                        <div class="row d-flex">
                            <div class="col-lg-4 col-4">
                            <form action="reviews.php"  method="get">
                                <div class="input-button-container d-flex">
                                <input type="text" name="searchKeyword" class= "form-control" placeholder="input keywords" >

                                <button type="submit" class="btn" style="margin-left: 20px;">Search</button>
                                </div>
                            </form>
                            

                            </div>
                            <?php
                            if (isset($_GET["searchKeyword"])){
                                echo " <div class='col-lg-5 col-5 text-left>'><i class='text-gray'> Searh result of ' ".$_GET['searchKeyword']." '</i> </div>";
                            }
                            ?>
                            <div class="col-lg-3 col-3 ms-auto d-flex">
                                <form action="writeReview.php" method="get" >
                                    <button type="submit" class="btn" > New post 🖉 </button>
                                    <!-- 버튼 누르면 글쓰기 하는 곳(reviewInsert.html)로 이동하도록  -->
                                </form>
                                <form>
                                    <button type="submit" class="btn" style="margin-left: 20px;"> Delete 🗑︎ </button>
                                    <!-- 삭제도 구현...? session에 있는 id랑 게시글의 id가 같으면 지우기?  -->
                                        
                                </form> 
                              
                            </div>
                            <div class = "row">
                                <table class="styled-table">
                                    <thead>
                                        <tr>
                                        <th>Num</th>
                                        <th>Title</th>
                                        <!-- <th>내용</th> -->
                                        <th>Posted Date</th>
                                        <th>Writer</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php
                                         include "getReviews.php";
                                        ?>
                                    </tbody>
                                </table>
    
                            </div>
    
                        </div>
                        
                     
                        
  
                    
                        <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                   <?php
                                        $paging = createPagingButton($page_num, $page, $total_cnt, $url);
                                        echo $paging;
                                    ?>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>


           
        </main>


        <!-- JAVASCRIPT FILES -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="../js/custom.js"></script>

    </body>
</html>