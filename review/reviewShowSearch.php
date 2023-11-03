<?php
    $dblink = mysqli_connect("localhost", 'root', '', 'dbName');
    
    if (mysqli_connect_errno()) {
        printf('', mysqli_connect_error());
        exit();
    }
    $sql = "SELECT * FROM review WHERE title = ? OR body = ? ";

    if ($stmt = mysqli_prepare($dblink, $sql)) {

        //이렇게 해도 되는건가? 다른 방법은 없나?
        mysqli_stmt_bind_param($stmt,"ss", $keyword, $keyword);
        
        //post? request?
        $keyword = $_POST['keyword'];
    
        if (mysqli_stmt_execute($stmt)) {
            // 결과 받기
            $result = mysqli_stmt_get_result($stmt);
    
            // 결과 띄우기
            while ($row = mysqli_fetch_assoc($result)) {

                // TODO
                // 페이지에 어떤 format으로 띄울지 고민해보기
                $id = $row['id'];
                $title = $row['title'];
                $body = $row['body'];
                $created_at = $row['created_at'];
                $img= $row['img'];
                $user_id= $row['user_id'];
                $city_id= $row['city'];
                //user_id의 경우 그냥 id 보여줄 수는 없으니,
                //user테이블에서 id로 검색해서 닉네임 보여주기?
                //city_id의 경우도 마찬가지. city_id 검색해서 name으로 보여주기
                //그럼 쿼리를 두번 더해야하나?
                //아니면 가져올때부터 서브쿼리로 join해서 가져오나? -> 메리트가 없을 것 같은데...
                //join안하고 가져오면? -> while문에서 query 두번 돌려야함.
                //join하고 가져오면? -> join을 두번 해야함, sql문이 복잡해짐?

            }
            mysqli_free_result($result);
        }
        else { //sql 실행 실패
            printf('', mysqli_error($dblink));
        }
    }//prepare 실패
    else{
        printf('', mysqli_error($dblink));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($dblink);

?>