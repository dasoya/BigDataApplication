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
        <link href="table.css" rel="stylesheet">
        <!-- <link href="ranking.css" ref="stylesheet"> -->
        
    </head>
  <body id="top">
    <?php
        include "../dbconfig.php";
        include "countryRanking.php";
        include "cityRanking.php";
        include "searchRanking.php";
        include "amongContinent.php";
       
    ?>
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
                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="../index.php">ESTIMATE</a>
                        </li>

                        <li class="nav-item.inactive">
                            <a class="nav-link click-scroll" href="../recommend_base.html">RECOMEND</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="">RANKING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../review/reviews.php">REVIEWS</a>
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
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 mb-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page" >see more</li>
                            </ol>
                        </nav>

                        <h1 class="text-white"> Ranking </h1>
                        <h6 class="text-gray"> Scroll down to see ranking list </h6>
                        <h6 class="mt-1 text-white "> ↓ </h6>
                        
                        

                        
                    </div>
                    <div class="col-lg-5 col-12 d-flex topics-detail-block bg-white shadow-lg justify-content-center align-items-center">
                        
                        <div>
                            <h6 class="mt-4 mb-4 text-center"> 🔍 you can search 🔍 </h6>
                            <div class=" container mb-3 mx-auto">
                                <form class="custom-form" action="rankingShow10.php" method="get" role="search">
                                    <div class="d-flex align-items-center">
                                        <div class ="col-lg-3 col-5">
                                            <select name="select" class="form-select me-2">
                                                <option value="null">select</option>
                                                <option value="city">City</option>
                                                <option value="country">Country</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5 col-5">
                                            <div class="input-button-container d-flex">
                                                <input type="text" name="keyword" placeholder="input keywords" required="">
                                                <button type="submit" class="my-button">Search</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div >
                                        <?php
                                            include "showSearchResult.php"
                                            //그럼 이거 하나의 파일에 다 넣을 수 있지 않을까?
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
           

        </header>
        

        <section class="explore-section section-padding" >
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-12 text-center">
                        <h2 class="mb-4"> Ranking </h2>
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Country&City</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">best city of continent</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">ALL</button>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                <div class=" row">
                                    <h6 class = "text-center"> TOP 10 cityes</h6>
                                    <table class="styled-table">
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>name</th>
                                                <th>Number of visits</th>
                                                <th>info</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($cityRanking as $city) {
                                                    echo "<tr>";
                                                        echo "<td>" . $city['rank'] . "</td>";
                                                        echo "<td><strong>" . $city['name'] . "</strong></td>";
                                                        echo "<td>" . $city['cou'] . "</td>";
                                                        echo "<td>" . $city['info'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- 여기부터 country -->
                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <table class="styled-table">
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Name</th>
                                                <th>Number of visits</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($countryRanking as $country) {
                                                    echo "<tr>";
                                                        echo "<td>" . $country['rank'] . "</td>";
                                                        echo "<td><img src=". $country['flag']." width='15' height='10'> <strong>" . $country['name'] . "</ strong> </td>";
                                                        echo "<td>" . $country['total'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- 여기서부터 rollup cc -->
                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   
                                <div class="row">
                                    <table class="styled-table">
                                        <thead>
                                            <tr>
                                                <th>country</th>
                                                <th>city</th>
                                                <th>Number of visits</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "rollupCC.php";
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                            <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                <div class="row">
                                    <table class="styled-table">
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Continent</th>
                                                <th>Country</th>
                                                <th>Hot City</th>
                                                <th>Number of visits</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($bestCityOfContinent as $city_cont) {
                                                    echo "<tr>";
                                                        echo "<td>" . $city_cont['rank'] . "</td>";
                                                        echo "<td>" . $city_cont['cont_name'] . "</td>";
                                                        echo "<td>" . $city_cont['country_name'] . "</td>";
                                                        echo "<td><strong>" . $city_cont['city_name'] . "</strong></td>";
                                                        echo "<td>" . $city_cont['total'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                             <!-- 전체 rollup.-->
                             <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <table class="styled-table">
                                        <thead>
                                            <tr>
                                                <th>Continent </th>
                                                <th>country</th>
                                                <th>city</th>
                                                <th>Number of visits</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "rollupCCC.php";
                                            ?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

        </section>



       
        
         <!-- JAVASCRIPT FILES -->
         <script src="../js/jquery.min.js"></script>
         <script src="../js/bootstrap.bundle.min.js"></script>
         <script src="../js/jquery.sticky.js"></script>
         <script src="../js/click-scroll.js"></script>
         <script src="../js/custom.js"></script>
         



    </main>
  </body>
</html>