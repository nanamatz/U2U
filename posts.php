<?php 
	header('Content-Type: text/html; charset=UTF-8');
	$message = "";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>
    <a href="category.php">
        <img src="/image/u2u.png" alt="Image" width="250" height="150">
    </a>
    <?php
    // 드롭다운에서 선택된 값 확인
    if (isset($_POST['firstDropdown'])) {
        $selectedOption = $_POST['firstDropdown'];
        // 선택된 값에 대한 작업 수행
        // ...
    
        // MySQL 드라이버 연결 
        
        // 예를 들어, 데이터베이스에 선택된 값 저장 등
        echo "Selected option: " . $selectedOption;
    }


    include("./SQLconstants.php");
        $conn = mysqli_connect($mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database) or die("Can't access DB");

        // 전달 받은 메시지 확인
        $message = $_POST['message'];
        $message = ((($message == null) || ($message == "")) ? "_%" : $message);

        // MySQL 검색 실행 및 결과 출력
        $query = "select post.*, item.* FROM post LEFT OUTER JOIN item ON
		post.item_id = item.item_id where title like '%" . $message . "%';";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            /*SELECT post.*, item.* FROM post LEFT OUTER JOIN item ON post.item_id =item.item_id*/

            echo "<BR>ID : " . $row['post_id'];
            echo "<BR>게시글 제목 : " . $row['title'];
            echo "<BR>작성 회원 : " . $row['user_id'];
            echo "<BR>아이템 ID : " . $row['item_id'];
            echo "<BR>아이템 이름 : " . $row['name'];
            echo "<BR><img src = '" . $row['image'] . "' height='280' width='180'>";
            echo "<BR>카테고리 : " . $row['category_id'];

            echo "<BR>판매금액 : " . $row['sell_cost'];
            echo "<BR>상세 설명 : " . $row['item_option'];
            echo "<BR>";
        }

        // MySQL 드라이버 연결 해제
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>

</body>

</html>