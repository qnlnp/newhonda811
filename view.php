<?php
    if (isset($_GET["num"]))				// $_GET["num"] : 레코드 번호
		$num = $_GET["num"];
	else 
		$num = "";

	$con = mysqli_connect("localhost", "root", "NTSMYSQL", "nts");	// DB 접속
	$sql = "select * from freeboard where num=$num";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
	$name      = $row["name"];					// 이름
	$subject    = $row["subject"];				// 제목
	$regist_day   = $row["regist_day"];			// 작성일
	$content    = $row["content"];				// 내용
	$content = str_replace(" ", "&nbsp;", $content);		// 공백 변환
	$content = str_replace("\n", "<br>", $content);			// 줄바꿈 변환
?>	
<!DOCTYPE html>
<html>
    <head>
        <title>CPU 상세정보</title>
        <meta charset="utf-8">
        <link href="header.css" rel="stylesheet">
        <link href="page02.css" rel="stylesheet">
        <link href="tab.css" rel="stylesheet">
        <link href="view.css" rel="stylesheet">
        <script>
        function check_password(mode, num) {
            // mode : modify(수정) delete(삭제), num : 레코드 번호
            window.open("password_form.php?mode="+mode+"&num="+num,
            "pass_check",
            "left=700,top=300,width=550,height=150,scrollbars=no,resizable=yes");
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



            <div class="headertab">
                <div class="tab">
                    <div class="tabname">
                        <li><a class="a_tab" href="html02.html" target="_self">CPU 상세정보</a></li>
                    </div>
    
                    <div class="back">
                        <li><a class="a_tab" href="start2.html" target="_self">뒤로 가기<a></li>
                    </div>
                </div>
            </div>




<div class="container">

        <div class="container_list">


                                        <div class="info2">
                            
                                            <div class="cpu_name">
                                                <li><a class = "a_cpuname"><?=$name?></a></li>
                                            </div>

                                            <div class="spec">
                                        <ul>
                                            <li><a href=" html02.html" target="_self" class = "a_infotext" style="color:black;"></a></li>
                                            <li><a href=" html02.html" target="_self" class = "a_infotext" style="color:black;">저장하기</a></li>
                                            <li><a href=" html02.html" target="_self" class = "a_infotext" style="color:black;">비교하기</a></li>
                                            <li><a href=" html02.html" target="_self" class = "a_infotext" style="color:black;">즐겨찾기</a></li>
                                        </ul>
                                            </div>
                            
                            
                            
                                            <div class="manf">
                                                    <img src="btn.png" class = "imgclass" alt="My Image">
                                            </div>
                                            
                                        </div>

                <div class="infos">
                    <a>상세정보<a>
                </div>



<div class = "tables">


<div class = "innerbox">





        <div class="container_tables2">
     
        <table>

			<tr>
                <td>제목 : <?=$subject?></td>
            </tr>	<!-- 제목 출력 -->

			<tr>
                <td>이름 : <?=$name?></td>
            </tr>

            <tr>
                <td>작성일 : <?=$regist_day?></td>	<!-- 이름, 작성일 출력 -->
            </tr>

            <tr>
                <td>내용 : <?=$content?><!-- 내용 출력 --></td>		
            </tr>
    </table>





	<ul class="buttons">
		<li><button onclick="location.href='list.php'">목록보기</button></li>
		<li><button onclick="check_password('modify', '<?=$num?>')">수정하기</button></li>   
		<li><button onclick="check_password('delete', '<?=$num?>')">삭제하기</button></li>
		<li><button onclick="location.href='form.php'">글쓰기</button></li>
	</ul>


















         </div>


    <div class = "chart">
         <img src="btn.png" class = "imgclass" alt="My Image">
    </div>


</div>


</div>

  




      
    </body>

</html>