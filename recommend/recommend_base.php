
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
        <link href="css/recommend_album.css" rel="stylesheet">
    </head>
  <body id="top">
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="base.html">
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
                            <a class="nav-link click-scroll" href="#section_1">ESTIMATE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="recommend_base.html">RECOMEND</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">RANKING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">FEEDBACK</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>

                                <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>

        <section class="hero-section d-flex justify-content-center align-items-center" id="recommend">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center" style="font-size : 35px" >Get recommendations of your destination based on the available price range</h1>
                        <form method="post" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" action="recommend_base.php">
                        <div class="input-group input-group-lg">
                        <span class="input-group-text price-insert" id="basic-addon1"></span>
                            <input name="min-val" type="text" class="form-control" id="min-val" placeholder="min val (eg. 90000)" style="font-size : 15px">
                            <input name="max-val" type="text" class="form-control" id="max-val" placeholder="max val (eg. 100000)" style="font-size : 15px">
                            <select name="dropdown" class="form-control">
                                <option value="option1">Sort By: 숙박</option>
                                <option value="option2">Sort By: 교통</option>
                                <option value="option3">Sort By: 숙박+교통</option>
                            </select>
                        <button type="submit" class="form-control" style="font-size : 10px">SORT</button>
                        </div>
                        </form>
                        <body>
                            <?php include "./get_price_range.php"; // 이걸 포함해서 get_price_range.php에서 sql 문을 실행시켜 정보를 가져오게 된다. 
                            
                                    $html = '<div class="recommend_album">';
                                    if (mysqli_num_rows($result) == 0){
                                        $html .= "<h3> NO RECOMMENDATIONS VALID IN THE PRICE RANGE </h3>";
                                        echo($html);
                                        
                                    }
                                    else{
                                        $idx = 1;
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $html .= '<div class="destination">';
                                            $html .= '<h3>' . $idx . ' CITY NAME : ' .  $row['name2'] . '</h3>';
                                            $html .= '<p>CITY INFO : ' . $row['info2'] . '</p>';
                                            $html .= '<h6>LANDMARK NAME : ' . $row['name2'] . '</h3>';
                                            $html .= '<img class="landmark-img" width="100" height="100" src="' . $row['img1'] . '" alt="' . $row['name1'] . '">';
                                            $html .= '<p>LANDMARK INFO : ' . $row['info1'] . '</p>';
                                            $html .= '<div class="country-name">'. $row['country_name'] . '</div>';
                                            $html .= '<img class="flag-img" src="' . $row['flag'] . 'alt="No Flag Img" width="50" height="30"';
                                            $html .= '</div>';
                                            $idx++;
                                        }
                                        $html .= '</div>';
                                        echo($html);
                                    };
                            ?>
                        </body>
                    </div>
                    
                  
                </div>
            </div>
        </section>

       
        
        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <i class="bi-back"></i>
                            <span>Topic</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Thai</button></li>

                                <li><button class="dropdown-item" type="button">Myanmar</button></li>

                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                        
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

