<?php

    $dblink = mysqli_connect("localhost", 'root', '', 'dbName');
    
    if (mysqli_connect_errno()) {
        printf('%s', mysqli_connect_error());
        exit();
    }

    /* 열 정보 참고용 주석
    CREATE TABLE `review` (
        `id` integer PRIMARY KEY,
        `title` VARCHAR(255) NOT NULL,
        `body` text COMMENT '리뷰 내용',
        `created_at` timestamp COMMENT '업로드한 날짜 ',
        `img` text COMMENT 'image를 추가할 수 있도록?',
        `user_id` integer NOT NULL,
        `city_id` integer NOT NULL
      );
    */
    
    $sql = "INSERT INTO review (id, title, body, created_at, img, user_id) VALUES (?, ?, ?, ?, ?, ?);";    
    
    if($stmt = mysqli_prepare($dblink, $sql)) {
        
        mysqli_stmt_bind_param($stmt,"isssss", $id, $title, $body, $created_at, $img, $user_id); //데이터 구조 보고 수정
        
        $id = $_POST['id'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        $created_at = $_POST['created_at'];
        $img= $_POST['img'];
        $user_id= $_POST['user_id'];
        //$city_id= $_POST['city'];

        // TODO
        // 성공, 실패 한 후에 페이지에 결과를 어떻게 띄울지 고민해보기
        // 바로 내가 쓴 리뷰 페이지 보여주기? 

        if(mysqli_stmt_execute($stmt)){

            //성공한 경우
            echo 'upload success'; 
        }
        else {
            //실패한 경우
            printf("%s", mysqli_error($dblink));
        }
    }
    else{ //prepare 실패
        printf("%s", mysqli_error($dblink));
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($dblink);
?>
