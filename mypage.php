<?php
// 세션 시작
session_start();

// 사용자가 로그인되어 있지 않으면 로그인 페이지로 리디렉션
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.html");
    exit;
}

// 로그인된 사용자의 ID 가져오기
$id = $_SESSION["id"];

// 데이터베이스 연결 설정
require("dbconfig.php");

$conn = new mysqli($server_name, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL 쿼리 작성
$sql = "SELECT c.city_name AS destination, 
               p.duration, 
               p.transportation_type, 
               p.transportation_cost, 
               p.accommodation_type, 
               p.accommodation_cost 
        FROM prediction p 
        INNER JOIN city c ON p.city_id = c.id 
        WHERE p.user_id = $id";

// PreparedStatement 준비 및 바인드
$stmt = $conn->prepare($sql);

// 쿼리 실행
$stmt->execute();

// 결과 바인딩 및 출력
$result = $stmt->get_result();

// 사용자가 좋아하는 도시와 랜드마크 가져오기
$liked_sql = "SELECT city.city_name, landmark.img
            FROM userliked
            INNER JOIN city ON userliked.city_id = city.id
            INNER JOIN landmark ON city.id = landmark.city_id
            WHERE userliked.user_id = $id";

// statement 준비
$liked_stmt = $conn->prepare($liked_sql);

// 쿼리 실행
$liked_stmt->execute();

// 결과 얻기
$liked_result = $liked_stmt->get_result();
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
    </head>
  <body id="top">
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="mypage.html">
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
                            <a class="nav-link click-scroll" href="#section_2">RECOMEND</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">RANKING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="feedback.html">FEEDBACK</a>
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

        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Cost Prediction History</h1>
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Transportation Type</th>
                                    <th scope="col">Transportation Cost</th>
                                    <th scope="col">Accommodation Type</th>
                                    <th scope="col">Accommodation Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["destination"] . "</td>";
                                    echo "<td>" . $row["duration"] . " days</td>";
                                    echo "<td>" . $row["transportation_type"] . "</td>";
                                    echo "<td>$" . $row["transportation_cost"] . "</td>";
                                    echo "<td>" . $row["accommodation_type"] . "</td>";
                                    echo "<td>$" . $row["accommodation_cost"] . "</td>";
                                    echo "</tr>";
                                }
                            
                            ?>
                            </tbody>
                        </table>
                        <h1 class="text-white text-center mt-5" style="margin-top: 100px !important;">Liked Place</h1>


                        <div class="row mt-4">
                            <?php while($liked_row = $liked_result->fetch_assoc()): ?>
                            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                <img src="<?php echo htmlspecialchars($liked_row['img']); ?>" class="img-fluid">
                                <p class="mt-2" style="color: white;"><?php echo htmlspecialchars($liked_row['city_name']); ?></p>
                            </div>
                            <?php endwhile; // while 루프 종료 ?>
                        </div>
                        <?php 
                        // 이제 모든 루프가 끝났으니 리소스를 해제하고 연결을 종료할 수 있습니다.
                        $stmt->close();
                        $liked_stmt->close();
                        if ($conn) {
                            $conn->close();
                        }
                        ?>
                        <!-- Bootstrap을 사용하여 버튼을 가운데 정렬하기 -->
                        <div class="d-flex justify-content-center" style="margin-top: 100px !important;">
                            <form action="accountdeletion.php" method="post">
                                <button type="submit" class="btn btn-primary me-2">Account Deletion</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        

       
        
        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="mypage.html">
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
            </div
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
