<!DOCTYPE html>
<html>
    <head>
        <title>MobileDeviceInfo</title>
        <meta charset="utf-8">
        <link href="header.css" rel="stylesheet">
        <link href="page02.css" rel="stylesheet">
        <link href="start2.css" rel="stylesheet">


        <link href="tab.css" rel="stylesheet">
    </head>



    <body>
        <div class="header">
            <div class="section">
                        <div class="logo">
                        <img src="btn.png" class = "imgclass" alt="My Image">
                        </div>

                        <div class="navi">
                    <ul>
                        <li><a class="a_header" href=" html02.html" target="_self">전체 메뉴</a></li>
                        <li><a class="a_header" href=" html02.html" target="_self">공지사항</a></li>
                        <li><a class="a_header" href=" html02.html" target="_self">의견 보내기</a></li>
                        <li><a class="a_header" href=" html02.html" target="_self">자료</a></li>
                    </ul>
                        </div>

                    <div class="user">
                             <ul>
                            
                            <?php include "../phplist3/index.php"; ?>
                            </ul>
                    </div>
            </div>
        </div>




        <script>
	function check_input()
	{
    	if (!document.login.id.value) {
        	alert("아이디를 입력하세요");    
        	document.login_form.id.focus();
        	return;
    	}

    	if (!document.login.pass.value) {
        	alert("비밀번호를 입력하세요");    
        	document.login.pass.focus();
        	return;
    	}
    	document.login.submit();
	}
</script>	












<div class="container">


<h2 class="login_title">로그인</h2>
    <form name="login" method="post" action="login.php">		       	
        <ul class="login_form">
            <li>
				<span class="col1">아이디</span>
				<span class="col2"><input type="text" name="id" placeholder="아이디"></span>
			</li>	
			<li>			
				<span class="col1">비밀번호</span>
				<span class="col2"><input type="password" name="pass" placeholder="비밀번호"></span>
			</li>
			<li><button type="button" onclick="check_input()">로그인</button></li>
			<li><button type="button" onclick="location.href='start2+form.php'">회원가입</button></li>
        </ul>	    	
	</form>





















       
</div>
















</body>

</html>