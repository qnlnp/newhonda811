<!DOCTYPE html>
<html>
    <head>
        <title>MobileDeviceInfo</title>
        <meta charset="utf-8">
        <link href="header.css" rel="stylesheet">
        <link href="page02.css" rel="stylesheet">
        <link href="start2.css" rel="stylesheet">
        <link href="tab.css" rel="stylesheet">

        <script>
   function check_input() {
      if (!document.member.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member.pass.focus();
          return;
      }
      if (!document.member.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member.pass_confirm.focus();
          return;
      }
      if (!document.member.name.value) {
          alert("이름을 입력하세요!");    
          document.member.name.focus();
          return;
      }
      if (!document.member.email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member.email.focus();
          return;
      }
      if (document.member.pass.value != 
            document.member.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member.pass.focus();
          document.member.pass.select();
          return;
      }
      document.member.submit();
   }

   function reset_form() {
      document.member.id.value = "";  
      document.member.pass.value = "";
      document.member.pass_confirm.value = "";
      document.member.name.value = "";
      document.member.email.value = "";
      document.member.id.focus();
      return;
   }
</script>



        





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

        <?php    
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";

   	$con = mysqli_connect("localhost", "root", "NTSMYSQL", "nts");
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_assoc($result);

    $pass = $row["pass"];
    $name = $row["name"];
    $email = $row["email"];

    mysqli_close($con);
?>   















<div class="container">
<form name="member" action="modify.php?id=<?=$userid?>" method="post">
		<h2>회원 정보 수정</h2>
    	<ul class="join_form">
            <li>
                <span class="col1">아이디</span>
                <span class="col2"><?=$userid?></span>                
            </li>
            <li>
                <span class="col1">비밀번호</span>
                <span class="col2"><input type="password" name="pass" value="<?=$pass?>"></span>               
            </li>
            <li>
                <span class="col1">비밀번호 확인</span>
                <span class="col2"><input type="password" name="pass_confirm"></span>               
            </li>            
            <li>
                <span class="col1">이름</span>
                <span class="col2"><input type="text" name="name" value="<?=$name?>"></span>               
            </li>
            <li>
                <span class="col1">이메일</span>
                <span class="col2"><input type="text" name="email" value="<?=$email?>"></span>               
            </li>                        
        </ul>                       
		<ul class="buttons">
	        <li><button type="button" onclick="check_input()">저장하기</button></li>
            <li><button type="button" onclick="reset_form()">취소하기</button></li>
        </ul>
    </form>





</div>





</body>


</html>