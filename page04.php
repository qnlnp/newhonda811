<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="header.css" rel="stylesheet">
        <link href="page03.css" rel="stylesheet">
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







            <div class="headertab">
                <div class="tab">
                    <div class="tabname">
                        <li><a class="a_tab" href="html02.html" target="_self">프로세서 목록</a></li>
                    </div>
    
                    <div class="back">
                        <li><a class="a_tab" href="start2.html" target="_self">뒤로 가기<a></li>
                    </div>
                </div>
            </div>
















<div class="container">

        <div class="container_list">


    <form  action =  "view.php" method = "get">
        <input class="input_cpu_list_search" type="text" name = "num">
    </form>









                <div class="infos">
                    <a>상세정보<a>
                </div>



<div class = "tables">


        <table class="container_tables1">
                


                               
                                    <?php
                                        $con = mysqli_connect("localhost", "root", "NTSMYSQL", "nts");		// DB 연결
                                        $sql = "select * from freeboard order by num desc";		// 일련번호 내림차순 전체 레코드 검색
                                        $result = mysqli_query($con, $sql);			// SQL 명령 실행
                                        $total_record = mysqli_num_rows($result); // 전체 글 수

                                        $number = $total_record;				// 글 번호 매김
                                        for ($i=0; $i<$total_record; $i++) {
                                            mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
                                            $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

                                            $num         = $row["num"];			// 일련번호
                                            $name        = $row["name"];		// 이름
                                            $subject     = $row["subject"];		// 제목
                                            $regist_day  = $row["regist_day"]; 	// 작성일
                                    ?>
                        
                       
                                <tr class="cpulistper">
                                    <td><?=$number?><td>		
                                    <td><a href="view.php?num=<?=$num?>"><?=$subject?></a><td>

                                    <td><?=$regist_day?><td>
                                </tr>
                        
                                                <?php
                                                    $number--;
                                                    }
                                                    mysqli_close($con);
                                                ?>
	    


        </table>


</div>








      
    </body>

</html>