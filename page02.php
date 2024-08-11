<!DOCTYPE html>
<html>
    <head>
        <title>CPU 상세정보</title>
        <meta charset="utf-8">
        <link href="header.css" rel="stylesheet">
        <link href="page02.css" rel="stylesheet">
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
                            
                            <?php include "../phplist/index.php"; ?>
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
                                                <li><a href=" html02.html" target="_self" style="color:black" class = "a_cpuname">i5-6300U</a></li>
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





        <div class="container_tables1">
             <div>
                 <table>
                        <tr>
                            <th class="table1">코어 (스레드)</th>
                        </tr>
                        <tr>
                            <th class="table1">기본 속도</th>
                        </tr>
                        <tr>
                            <th class="table1">최대 속도</th>
                        </tr>
                        <tr>
                            <th class="table1">그래픽</th>
                        </tr>
                        <tr>
                            <th class="table1">L1 메모리</th>
                        </tr>
                        <tr>
                            <th class="table1">L2 메모리</th>
                        </tr>
                        <tr>
                            <th class="table1">L3 메모리</th>
                        </tr>
                        <tr>
                            <th class="table1">TDP</th>
                        </tr>
                        <tr>
                            <th class="table1">출시</th>
                        </tr>
                        <tr>
                            <th class="table1">제조사</th>
                        </tr>
                        
                 </table>
            </div>
        </div>



        <div class="container_tables2">
     
            <div>
                 <table>

                <tr>
                    <th class=table2>
                            <?php
                            include_once("connect2.php");                          
                            // booklist에 있는 모든 데이터를 가져옴
                            $sql = "SELECT title FROM booklist";
                            // 쿼리 실행결과로 레코드 셋 반환
                            $result = $conn->query($sql);
                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php
             
                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php

                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php
                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>
                <tr>
                    <th class=table2>
                    <?php

                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php
                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php

                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php
                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php

                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>

                <tr>
                    <th class=table2>
                    <?php
                            if(isset($result) && $result->num_rows >0){
                                $row = $result->fetch_assoc();{
                                    echo $row['title'];
                                }
                            } else echo "NoData";
                            ?>
                    </th>
                </tr>
                        </table>
        </div>
    </div>


    <div class = "chart">
         <img src="btn.png" class = "imgclass" alt="My Image">
    </div>


</div>


</div>

  




      
    </body>

</html>