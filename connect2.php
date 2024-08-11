<?php
$server = "localhost:3306";
$user = "root";
$password = "NTSMYSQL";
$dbname = "blog";

$conn = new mysqli($server, $user, $password, $dbname); 

if($conn->connect_error) echo "<h4>접속 실패</h4>";
else echo "";
?>