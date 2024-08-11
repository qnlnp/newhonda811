<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8"/>
<title>PHP Session Login</title>
<link rel="stylesheet" href="php2.css">
</head>

<body>





<?php


include_once("connect2.php");

// booklist에 있는 모든 데이터를 가져옴
$sql = "SELECT * FROM booklist";

// 쿼리 실행결과로 레코드 셋 반환
$result = $conn->query($sql);

if(isset($result) && $result->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo $row['id']."번 / ";
        echo "".$row['title']."<br>";
    }
} else echo "검색된 데이터가 없습니다.";

?>


</body>











</html>