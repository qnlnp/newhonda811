<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
?>	

<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP+MySQL 입문</title>
<link rel="stylesheet" href="style.css">
</head>


<body>

    <div class="header">



    

        <div class="top">
<?php
    if(!$userid) {
?>                
                <span><a href="start2+form.php">회원가입</a> </span>
                <span> | </span>
                <span><a href="start2+login_form.php">로그인</a></span>
<?php
    } else {
                $logged = $username."(".$userid.")";
?>
                <span><?=$logged?> </span>
                <span> | </span>
                <span><a href="logout.php">로그아웃</a> </span>
                <span> | </span>
                <span><a href="start2+modify_form.php">정보수정</a></span>
<?php
    }
?>
        </div> <!-- top -->
    </div> <!-- header -->
</body>
</html>