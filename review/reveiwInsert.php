<?php

    $dblink = mysqli_connect("localhost", 'root', '', 'dbName');
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
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
    
    $sql = "INSERT INTO review (id, title, body, created_at, img, user_id, city_id ) VALUES (?, ?, ?, ?, ?, ?, ?);";    
      
    if($stmt = mysqli_prepare($dblink, $sql)) {
        
        mysqli_stmt_bind_param($stmt,"issssss", $id, $title, $body, $created_at, $img, $user_id, $city_id); //데이터 구조 보고 수정
        
        //post? request?

        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $body = $_REQUEST['body'];
        $created_at = $_REQUEST['created_at'];
        $img= $_REQUEST['img'];
        $user_id= $_REQUEST['user_id'];
        $city_id= $_REQUEST['city'];

        // TODO
        // 성공, 실패 한 후에 페이지에 결과를 어떻게 띄울지 고민해보기

        if(mysqli_stmt_execute($stmt)){

            //성공한 경우
            echo 'upload success'; 
        }
        else {
            //실패한 경우
            printf("", mysqli_error($dblink));
        }
    }
    else{ //prepare 실패
        printf("", mysqli_error($dblink));
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($dblink);
?>
