<?php
// 세션 시작
session_start();

// 사용자가 로그인되어 있지 않으면 로그인 페이지로 리디렉션
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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

// 평균 별점을 가져오는 쿼리
$avgRatingQuery = "SELECT AVG(rating) as averageRating FROM feedback";
$result = $conn->query($avgRatingQuery);
$averageRating = 0; // 평균 별점을 저장할 변수 초기화

$row = $result->fetch_assoc();
if ($row['averageRating'] !== null) {
    $averageRating = round($row['averageRating'], 1); // 평균 별점 반올림
    $_SESSION['averageRating'] = $averageRating;
} else {
    $_SESSION['averageRating'] = "No ratings yet";
}


// POST 데이터 가져오기
$rating = isset($_POST['rating']) ? $_POST['rating'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;

// 별점이 설정되어 있을 경우에만 DB에 저장
if (isset($rating)) {
    // SQL 쿼리 작성
    $insertFeedbackSql = "INSERT INTO feedback (user_id, rating, message) VALUES (?, ?, ?)";

    // PreparedStatement 준비 및 바인드
    $stmt = $conn->prepare($insertFeedbackSql);
    $stmt->bind_param("iis", $id, $rating, $message);

    // 쿼리 실행
    if ($stmt->execute()) {
        echo "피드백이 성공적으로 저장되었습니다!";
    } else {
        echo "이메일 당 하나의 피드백만 받습니다 :)";
    }
    $stmt->close();
}

$conn->close();
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="css/feedback.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        


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
                        <li class="nav-ite.inactive">
                            <a class="nav-link click-scroll" href="index.php">ESTIMATE</a>
                        </li>

                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="recommend_base.html">RECOMEND</a>
                        </li>

                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="ranking/rankingShow10.php">RANKING</a>
                        </li>

                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="review/reviews.php">REVIEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="">FEEDBACK</a>
                        </li>

                      
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="mypage.php" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>

        <section class="hero-section d-flex justify-content-center align-items-center" id="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Feedback</h1>
        
                        <div class="text-center my-3">
                            <div style="height:10px;"></div>
                            <!-- 세션에서 평균 별점 값을 가져와서 표시합니다. -->
                            <label for="rating" class="text-white">Average of Satisfaction Rating: <?php echo isset($_SESSION['averageRating']) ? $_SESSION['averageRating'] : "No ratings yet"; ?></label>

                        </div>

                        <form action="feedback.php" method="post">

                        <!-- Rating Section-->
                        <div class="text-center my-3">
                            <div style="height:20px;"></div>
                            <label for="rating" class="text-white">Rating:</label>
                            <div class="star-rating">
                                <span class="fa fa-star" data-rating="1"></span>
                                <span class="fa fa-star" data-rating="2"></span>
                                <span class="fa fa-star" data-rating="3"></span>
                                <span class="fa fa-star" data-rating="4"></span>
                                <span class="fa fa-star" data-rating="5"></span>
                                <label for="rating" class="text-white" aria-hidden="true"></label>
                                <input type="hidden" name="rating" id="rating" class="rating-value" value="0">

                            </div>
                        </div>
                        
                
                        <!-- Message Input Section -->
                        <div class="text-center my-3">
                            <div style="height:20px;"></div>
                            <label for="message" class="text-white">Message:</label>
                            <div style="height:20px;"></div>
                            <textarea name="message" id="message" rows="7" class="form-control"></textarea>
                        </div>
        
                        <!-- Submit Button -->
                        <div class="text-center my-3">
                            <div style="height:20px;"></div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </section>
        

       
      

         <!-- JAVASCRIPT FILES -->
         <!-- FontAwesome JavaScript (optional, for some advanced features) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/feedback.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
         


    </main>
  </body>
</html>
