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
            
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-topic-listing.css" rel="stylesheet">  
        <link href="css/recommend_album.css" rel="stylesheet">
    </head>
  <body id="top">
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="bi-back"></i>
                    <span>Trip Planner</span>
                </a>
                <div class="d-lg-none ms-auto me-4">
                    <a href="login.html" class="navbar-icon bi-person smoothscroll"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php#section_1">ESTIMATE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="recommend_base.html">RECOMMEND</a>
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

        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Explore Cities Around the World</h1>

             

                        <body>
                           <?php include "./get_city_detail.php";
                                
                                // 도시 정보 보여주기 //
                                $html = '<div class="city-like">';
                                $html .= '<h1>[' . $cityName . ']</h1>';
                                // 좋아요 버튼 추가 //
                                $uid = $_SESSION['id'];
                                // $uid ='dlwlgP';
                                // $new_url = "'" . "like_city.php?city=" . $city_id . "&uid=" . $uid . "'";
                                $new_url = "like_city.php?city=" . $city_id . "&uid=" . $uid;
                                // $html .= '<button type="submit" id="likeButton" onclick="location.href=' . $new_url . '">👍🏻press like👍🏻</button></div>';
                                $html .= '<form method="post" action="' . $new_url . '"> <button type="submit" id="likeButton" onclick="<?php echo pressLike($city_id, $uid); ?>">👍🏻press like👍🏻</button></div>
                                            </form>';
                                $html .= '<div class="city-info"> <p><h6>city info</h6>' . $city_info . '</p>';
                                $html .= '<img src="' . $country_flag . '"></div>';
                                echo($html);

                                // landmark 정보들 보여주기 //
                                $html = '<div class="landmark-detail">';
                                $idx = 1;
                                while ($row = mysqli_fetch_array($result_landmark)) {
                                    $landmark_name = $row['name'];
                                    $landmark_info = $row['info'];
                                    $landmark_img = $row['img'];

                                    $html .= '<h5>LANDMARK NAME ' . $idx .' : ' . $landmark_name. '</h1>';
                                    $html .= '<p><h6>landmark info</h6>' . $landmark_info . '</p>';
                                    $html .= '<img width="500px" height="500px" src="' . $landmark_img . '">';
                                };
                                echo($html);
                            ?>
                            <style>
                                .city-like{
                                    text-align: center;
                                }
                                .landmark-detail{
                                    text-align: center;
                                }
                                .city-info{
                                    text-align: center;
                                }
                            </style>
                            
                        </body>

                    </div>

                </div>
            </div>
        </section>

       
        

         <!-- JAVASCRIPT FILES -->
         <script src="js/jquery.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script src="js/jquery.sticky.js"></script>
         <script src="js/click-scroll.js"></script>
         <script src="js/custom.js"></script>



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
        cursor: pointer;
        border: 2px solid #000; /* 테두리 스타일 및 색상 설정 */
        padding: 5px 10px; /* 내부 여백 설정 */
        border-radius: 0px; /* 테두리의 모서리를 둥글게 만듭니다. */
        display: inline-block;
        max-width: 1000px;
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
