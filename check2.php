<?php
# db 접속
// connect.php 파일의 내용을 그대로 가져옴.
include_once("connect2.php");

# form 데이터 읽어오기
$title = $_POST["title"];

echo "<h3>추가할 책의 제목은 {$title}";

# insert sql 작성
$sql = "INSERT INTO booklist (title) VALUES('$title')";

if($conn->query($sql))echo "<h3>도서등록 성공</h3>";
else echo "<h3>도서등록 실패</h3>";

?>