<?php
// 발급된 세션 id가 있다면 세션의 id를, 없다면 false 반환
   if(!session_id()) {
       // id가 없을 경우 세션 시작
       session_start();
   };
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
                    <a href="../userPage/login.html" class="navbar-icon bi-person smoothscroll"></a>
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
                            <a class="nav-link click-scroll" href="../recommend/recommend_base.html">RECOMMEND</a>
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

        <section class="hero-section justify-content-center align-items-center pb-5">
            <div class="container">
                        <h6 class = "explore">Explore Cities Around the World !</h6><br>
            
            
                    
                           <?php include "../like/get_city_detail.php";
                                
                                // 도시 정보 보여주기 //
                                $html = '<div class="city-like d-flex">';
                                $html .= '<img src="' . $country_flag . '" class ="flag">';
                                $html .= '<div><div class ="d-flex city-name"> <h1 class = "text-white"> ' . $cityName . ' </h1>';
                                // 좋아요 버튼 추가 //
                                if (!isset($_SESSION['id'])){ // 사용자 로그인이 되어 있는 경우에만 가능 //
                                    header("Location: ../userPage/login.html");
                                };
                                $uid = $_SESSION['id'];
                                // $uid ='dlwlgP';
                                // $new_url = "'" . "like_city.php?city=" . $city_id . "&uid=" . $uid . "'";
                                $new_url = "../like/like_city.php?city=" . $city_id . "&uid=" . $uid;
                                // $html .= '<button type="submit" id="likeButton" onclick="location.href=' . $new_url . '">👍🏻press like👍🏻</button></div>';
                                $html .= '<form method="post" action="' . $new_url . '"> <button type="submit" id="likeButton" onclick="<?php echo pressLike($city_id, $uid); ?>">👍🏻Press Like👍🏻</button>
                                            </form></div>';
                                $html .= ' <div class="city-info col-10"> <h5 class="text-blue">[ city info ]</h5><p class = "text-white"> : ' . $city_info . '</p></div> </div>';
                                
                                $html .= '</div></section><section>';
                                $html .= '<div class ="container"><div class="row"> <div class="mt-5 col-12 col-lg-12 mb-2 "><h3 class= "text-blue">Landmarks</h3></div>';
                                
                                echo($html);

                                
                                // landmark 정보들 보여주기 //
                                
                                // $idx = 1;
                                // while ($row = mysqli_fetch_array($result_landmark)) {
                                //     $html = '<div class=" col-3 col-1g-3 m-2 shadow-lg landmark-detail p-2">';
                                //     $landmark_name = $row['name'];
                                //     $landmark_info = $row['info'];
                                //     $landmark_img = $row['img'];

                                //     $html .= '<h5>' . $idx .'. ' . $landmark_name. '</h1>';
                                //     $html .= '<img width="200px" height="200px" src="' . $landmark_img . '">';
                                //     $html .= '<br><br>' . $landmark_info . '';
                                //     $html .= '</div>';
                                //     echo($html);
                                //     $idx++;

                                // };
                                // $html = '</div></div>';
                                // echo($html);

                                $idx = 1;
                                while ($row = mysqli_fetch_array($result_landmark)) {
                                    $html = '<div class=" col-12 col-1g-12 m-2 shadow-lg landmark-detail p-3">';
                                    $html .= '<div class="d-flex">';
                                    $landmark_name = $row['name'];
                                    $landmark_info = $row['info'];
                                    $landmark_img = $row['img'];

                                    
                                    $html .= '<img class="landmark-img" src="' . $landmark_img . '">';
                                    $html .= '<div class="m-3"><h5 class="mt-2 mb-2">' . $idx .'. ' . $landmark_name. '</h5>';
                                    $html .= '<p class="m-1"> : ' . $landmark_info . '</p></div>';
                                    $html .= '</div></div>';
                                    echo($html);
                                    $idx++;

                                };
                                $html = '</div>';
                                echo($html);
                            ?>
                            <style>
                                .city-like{
                                    /* text-align: center; */
                                }
                                .city-name{
                                    margin-left: 25px;
                                    margin-bottom: 10px;
                                }
                                .landmark-detail{
                                    
                                    border-radius: 20px;
                                    background-color: #ffffff;
                                }
                                .landmark-img{
                                    width: 200px;
                                    height: 200px;
                                    border-radius: 3%;
                                }
                                .flag {
                                    width: 25%;
                                    height: 25%;
                                }
                                .city-info{
                                    margin-left: 25px;
                                } 
                                .text-blue{
                                    color:#1F375B;
                                }
                                .explore{
                                    color: rgba(255, 255, 255, 0.8  );
                                }
                            </style>
                            
                        

                

                
        
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

<!-- <script>
    var likeButton=document.getElementByID("likeButton");
    var isLiked=false;

    likeButton.addEventListener("click", function(){
        isLiked = !isLiked;
        if (isLiked) {
            likeButton.innerHTML = "👍🏻liked👍🏻";
            likeButton.classList.add("liked");
        }else{
            likeButton.innerHTML = "👍🏻press like👍🏻";
            likeButton.classList.remove("liked");
            }
        });
</script> -->
<style>
    #likeButton{
        background-color: transparent;
        font-size: 24px;
        color: #ffffff;
        cursor: pointer;
        border: 2px solid #ffffff; /* 테두리 스타일 및 색상 설정 */
        padding: 5px 10px; /* 내부 여백 설정 */
        border-radius: 50px; /* 테두리의 모서리를 둥글게 만듭니다. */
        display: inline-block;
        max-width: 1000px;
        margin-left: 20px;
        margin-top:15px
    }
    #likeButton:active {
        transform: scale(0.95); /* 버튼 크기를 95%로 축소 */
        border-color: #FF0000; /* 테두리 색상 변경 (예: 빨간색) */
        background-color: red; /* 사용자가 좋아요를 눌렀을 때 색을 변경 */
    }
    #likeButton.liked {
        transform: scale(0.95); /* 버튼 크기를 95%로 축소 */
        background-color: red; /* 사용자가 좋아요를 눌렀을 때 색을 변경 */
        color: white; /* 텍스트 색상 변경 */
    }
</html>
