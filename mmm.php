<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
    <meta http-equiv="content-type" content="text/html; charset=euc-kr">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<!-- // 20141210, 페이스북 open gragh 메타태그, 카이유키 -->
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="피에이치피스쿨닷컴">
	<meta property="fb:app_id" content="682927998492218">
	<meta property="og:image" content="https://www.phpschool.com/images/common/fb_logo.jpg">
	<meta property="og:title" content="WWW.PHPSCHOOL.COM">
	<meta property="og:url" content="">
	<meta property="og:description" content="개발자 커뮤니티 1위 PHPSCHOOL.COM 입니다.">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-ico" />
	<link rel="stylesheet" type="text/css" href="/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="/css/basic.css?x=2" />
	<!--link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" /-->
	<link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/skin/blue/css/button.css?x=1723378730" />
	<link rel="stylesheet" type="text/css" href="/skin/blue/css/common.css?x=1723378730" />
	<link rel="stylesheet" type="text/css" href="/skin/blue/css/sub_menu.css?x=1723378730" />
    <title>PHPSCHOOL-국내 1위 개발자 커뮤니티!</title>

	<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery-scrollnews.js"></script>
	<script type="text/javascript" src="/js/common_basic.js"></script>
	<script type="text/javascript" src="/js/keymaster.min.js"></script>
    <script type="text/javascript" src="../gnuboard4/js/common.js"></script>
	<script type="text/javascript" src="/js/jquery-blink.js"></script>
	<script type="text/javascript">

        // 자바스크립트에서 사용하는 전역변수 선언
        var home_url     = "https://www.phpschool.com";
        var g4_path      = "../gnuboard4";
        var g4_bbs       = "bbs";
        var g4_bbs_img   = "img";
        var g4_url       = "http://www.phpschool.com";
        var g4_is_member = "";
        var g4_is_admin  = "";
        var g4_bo_table  = "";
        var g4_sca       = "";
        var g4_charset   = "euc-kr";
        var g4_is_gecko  = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
        var g4_is_ie     = navigator.userAgent.toLowerCase().indexOf("msie") != -1;
        
        function image_empty() {
            document.search_frm.keyword.style.backgroundImage = "";
        }

        // 게시판 이동 통일
        function go_board(table) {
            parent.location='/gnuboard4/bbs/board.php?bo_table='+table;
        }

        // 페이지 이동 통일
        function go_menu(file) {
            location.href='/'+file;
        }

        function Go_search(f) {

            if(f.pattern.value=="검색어를 입력하세요" || !f.pattern.value) {
                alert("검색어를 넣어주세요.");
                f.pattern.value="";
                f.pattern.focus();
                return;
            }

            window.open("http://www.php.net/search.php?show=quickref&pattern="+f.pattern.value,"_blank");
        }

        $(document).ready(function(){

				// 공지사항 롤링
			$("#roll").Scroll({
				line:1,
				speed:500,
				timer:3000
			});
				// TOP MENU
            $(".top_menu .menu_list li").bind("mouseenter", function() {
                if($(".all_service").css("display")=="block") {
                    $(this).find("ul").show().height(207);
                } else {
                    $(this).find("ul").show().height("");
                }
            }).bind("mouseleave", function(){
                $(this).find("ul").hide();
            });

            $("[name=btn_find_auth]").bind("click", function(e){
                var v_url = $(e.target).attr("url");
                win_password_forget(v_url);
            });

            $("[name=btn_more]").bind("click", function(e){
                var v_url = $(e.target).attr("url");
                window.location.href=v_url;
            });

            $("[name=btn_more]").attr("title", "more");

            $("[name=btn_login_cpn]").bind("click", function(e){
                var v_url = $(e.target).attr("url");
                window.location.href=v_url;
            });
        });

        // 이미지 교체
        function convertImg (img_origin, img_convert) {
            $("[name=" + img_origin + "]").hide();
            $("[name=" + img_convert + "]").show();
            return;
        }

		$(function() {
			// 로그인 박스 탭 컨트롤
			$(".login > .login_tab li").click(function() {
				$(this).parent().find('.tab_on').attr('class','tab_off');
				$(this).attr('class','tab_on');

				$(this).parent().parent().find('.login_form').css('display','none');
				$(".login ."+$(this).attr('tab')).css('display','');
			});

			// 메인 로그인 탭 컨트롤
			$(".login_main > .login_tab > .tab_off").live("click", function() {
				$(this).parent().find('.tab_on').attr('class','tab_off');
				$(this).attr('class','tab_on');

				$(this).parent().parent().find('.login_form').css('display','none');
				$(".login_main ."+$(this).attr('tab')).css('display','');
			});

            // 본문영역 더블클릭 이벤트 죽이기
            $("#wrapper").dblclick(function(){
                return false;
            });

            // 더블클릭으로 상하단 이동
            $("body").dblclick(function(){
                if($(window).scrollTop() < ($("body").height() / 2)) {
                    $(document).scrollTop($(document).height());
                } else {
                    $(document).scrollTop(0);
                }
            });
		});

            </script>
</head>
<style>
.bannerad{width:50%;float:left;}
#left_ad_3{clear:both;}
.bannerad > a > img {width:100%}
</style>
<body >

<div id="lightbox-container"></div>

<div id="floatdiv" style="display:none;">
	우측 상단 구석에 붙는 배너
</div>

<div id="wrapper">
	<script type="text/javascript" src="https://wcs.naver.net/wcslog.js"></script>
	<script type="text/javascript">
	if(!wcs_add) var wcs_add = {}; wcs_add["wa"] = "29f571590417e8"; wcs_do();
	</script>

	<!-- 상단영역 //-->
	<div id="header">

		<div class="alarm">
		</div>

        <div class="global">
			<div class="global_notice fl">
				<div class="notice_title fl"><a href="/gnuboard4/bbs/board.php?bo_table=notice&page=1">공지사항</a></div>
				<div class="notice_top3" id="roll">
					<ul>
										<li class="notice_subject">
                            <a href="/gnuboard4/bbs/board.php?bo_table=notice&wr_id=9534">
						광고/홍보게시판 서비스 종료 안내                            </a>
						</li>
										<li class="notice_subject">
                            <a href="/gnuboard4/bbs/board.php?bo_table=notice&wr_id=9527">
						회사 합병에 따른 개인정보 이전 안내[1]                            </a>
						</li>
										<li class="notice_subject">
                            <a href="/gnuboard4/bbs/board.php?bo_table=notice&wr_id=9496">
						사명 변경 공지[9]                            </a>
						</li>
									</ul>
				</div>
			</div>
            
            <ul class="global_menu fr">
                <li><a href="/link/notice/6698"><i class="fa fa-trophy"></i><span class="split">레벨포인트</span></a></li>
                <li><a href="/guild_new/guild_attend.php"><i class="fa fa-check-square-o"></i><span class="split">출석체크</span></a></li>
                                <li><a href="/community/rock_paper_scissors.php"><i class="fa fa-hand-peace-o"></i>가위바위보</a></li>
                            </ul>
        </div>

            <div class="top_logo">
			<a href="/"><img src="/skin/blue/images/common/top_logo.png" alt="PHPSCHOOL" /></a>
		</div>
    
        
		<!-- 통합검색 //-->
		<div class="top_search">
<form id="f_sch_tot">
<input type="hidden" name="sch_tot_c" value="" />
<input type="hidden" name="sch_sort_k" value="" />
<!--	<ul class="hit_search">
		<li class="icon"><img src="/skin/blue/images/common/icon_search.png" alt="인기검색어" /></li>
		<li class="dash">MyAdmin</li>
		<li class="dash">str_replace</li>
		<li class="dash">left join</li>
		<li class="dash">설사댄스</li>
		<li>html5</li>
	</ul>//-->
	<p class="search_area">
		<input class="input_top_search" type="text" name="sch_tot_k" value="" />
		<button class="btn_search" onclick="submit_sch();"><span class="dh">검색</span></button>
	</p>
</form>
</div>		<!-- 통합검색 //-->

		<div class="top_menu">
			<h4 class="dn">[메인메뉴]</h4>
			<ul class="menu_list">
        <li><a href='/sub_main/qna_main.php'>질문/답변</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_install&page=1'>리눅스/서버/설정</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_db&page=1'>Mysql/Query/DB</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_function&page=1'>PHP관련/함수</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_html&page=1'>HTML/Script/CSS</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_ttrend&page=1'>모바일/하이브리드</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_other&page=1'>기타 개발관련</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=any&page=1'>개발외 일반질문</a></li>
</ul></li>
<li><a href='/sub_main/class_main.php'>교육/자료</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=teach&page=1'>강좌게시판</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=tipntech&page=1'>Tip&Tech</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=download&page=1'>다운로드</a></li>
</ul></li>
<li><a href='/sub_main/community_main.php'>커뮤니티</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=talkbox_new&page=1'>새내기Talk</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=talkbox2&page=1'>토크박스</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=forum&page=1'>포럼</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=photo&page=1'>사진게시판</a></li>
<li class='sub_menu'><a href='/sub_main/guild_main.php'>길드메인</a></li>
<li class='sub_menu'><a href='/guild_new/guild_attend.php'>출석체크</a></li>
</ul></li>
<li><a href='/sub_main/group_main.php'>소모임</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_coin'>가상화폐</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_gamer'>게이머</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_stock'>함께하는주식투자</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_pension'>산들바람식도락</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_gunpla'>프라당</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_camera'>사진방</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_hope'>희망스쿨</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_dumchit'>둠칫둠칫</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_oldman'>독거노인</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_startup'>스타트업</a></li>
</ul></li>
<li><a href='/sub_main/market_main.php'>의뢰/장터</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=old_job&page=1'>의뢰마당</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=buynsell&page=1'>소프트장터</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=user_market&page=1'>중고장터</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=img_market&page=1'>이미지마켓</a></li>
</ul></li>
<li><div class='eventopen absolute' style='top:-14px; left:37px;'><img src='/skin/blue/images/common/ico_free.png' alt='OPEN' /></div>
<a href='/sub_main/kuin_main.php'>구인/구직</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/biznbaza/kuin_list.php'>구인</a></li>
<li class='sub_menu'><a href='/biznbaza/kujik_list.php'>구직</a></li>
<li class='sub_menu'><a href='/biznbaza/free_list.php'>프리랜서</a></li>
</ul></li>
<li><a href='/community/rock_paper_scissors.php'>포인트</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/community/rock_paper_scissors.php'>가위바위보</a></li>
<li class='sub_menu'><a href='/event/lotto_event_list.php'>포인트이벤트</a></li>
<li class='sub_menu'><a href='/event/auction_point_list.php'>포인트경매</a></li>
</ul></li>
<li><a href='/sub_main/schoolzone_main.php'>PHP스쿨</a>
<ul style='display:none;'>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=notice&page=1'>공지사항</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=newsdesk&page=1'>새로운소식</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=bug'>버그/의견</a></li>
<li class='sub_menu'><a href='/survey/survey_list.php'>설문조사</a></li>
</ul></li>
                				<li class="btn_link all" js="$('#contentWrap .all_service').toggle();"><i class="fa fa-bars"></i></li>
                			</ul>
					</div>
	</div>
	<!-- 상단영역 //-->

    <div id="maskLayer"></div>

	<!-- 본문영역 //-->
	<div id="contentWrap">
        <!-- 서비스전체보기 //-->
        		<div class="all_service" style="display: none;">
            <ul class="all_menu">
        <li><ul>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_install&page=1'>리눅스/서버/설정</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_db&page=1'>Mysql/Query/DB</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_function&page=1'>PHP관련/함수</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_html&page=1'>HTML/Script/CSS</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_ttrend&page=1'>모바일/하이브리드</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_other&page=1'>기타 개발관련</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=any&page=1'>개발외 일반질문</a></li>
</ul></li>
<li><ul>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=teach&page=1'>강좌게시판</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=tipntech&page=1'>Tip&Tech</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=download&page=1'>다운로드</a></li>
</ul></li>
<li><ul>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=talkbox_new&page=1'>새내기Talk</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=talkbox2&page=1'>토크박스</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=forum&page=1'>포럼</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=photo&page=1'>사진게시판</a></li>
<li class='sub_menu'><a href='/sub_main/guild_main.php'>길드메인</a></li>
<li class='sub_menu'><a href='/guild_new/guild_attend.php'>출석체크</a></li>
</ul></li>
<li><ul>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_coin'>가상화폐</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_gamer'>게이머</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_stock'>함께하는주식투자</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_pension'>산들바람식도락</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_gunpla'>프라당</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_camera'>사진방</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_hope'>희망스쿨</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_dumchit'>둠칫둠칫</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_oldman'>독거노인</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_startup'>스타트업</a></li>
</ul></li>
<li><ul>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=old_job&page=1'>의뢰마당</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=buynsell&page=1'>소프트장터</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=user_market&page=1'>중고장터</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=img_market&page=1'>이미지마켓</a></li>
</ul></li>
<li><ul>
<li class='sub_menu'><a href='/biznbaza/kuin_list.php'>구인</a></li>
<li class='sub_menu'><a href='/biznbaza/kujik_list.php'>구직</a></li>
<li class='sub_menu'><a href='/biznbaza/free_list.php'>프리랜서</a></li>
</ul></li>
<li><ul>
<li class='sub_menu'><a href='/community/rock_paper_scissors.php'>가위바위보</a></li>
<li class='sub_menu'><a href='/event/lotto_event_list.php'>포인트이벤트</a></li>
<li class='sub_menu'><a href='/event/auction_point_list.php'>포인트경매</a></li>
</ul></li>
<li><ul>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=notice&page=1'>공지사항</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=newsdesk&page=1'>새로운소식</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=bug'>버그/의견</a></li>
<li class='sub_menu'><a href='/survey/survey_list.php'>설문조사</a></li>
</ul></li>
			</ul>
			<div class="service_bottom">
				<a href="http://www.phps.kr" target="_blank"><img src="/skin/blue/images/common/icon_phps.gif" class="m mr15" alt="스쿨호스팅 바로가기" /></a>
				<a href="http://www.dnszi.com" target="_blank"><img src="/skin/blue/images/common/icon_dnszi.gif" class="m mr15" alt="DNSZi 바로가기" /></a>
				<!--<a href="http://www.insdot.com/" target="_blank"><img src="/skin/blue/images/common/icon_insdot.gif" class="m" alt="인스닷 바로가기" /></a>-->
  				<p class="btn_link close" js="$('#contentWrap .all_service').toggle();"><i class="fa fa-times"></i></p>
			</div>
		</div>
        		<!-- 서비스전체보기 //-->
		<!-- 메인배너 //-->
		<div class="main_banner" id="main_banner">
			<div class="main_banner_area"  id="main_banner_area">
              
            </div>
		</div>
		<script>
			bannerLoading("phpschool", "phpschool_pc_main", "top", "bundle", "1", "main_banner_area","");
		</script>
		<!-- 메인배너 //-->
		
		<!-- 로그인 //-->
		<div class="login">
            			<ul class="login_tab">
				<li class="tab_on" tab="member">일반<br/>회원</li>
				<li class="tab_line"></li>
				<li class="tab_off" tab="company">기업<br/>회원</li>
			</ul>
            		
<script type="text/javascript" language=JavaScript>

function mb_login_submit(f) {

	if (!f.mb_id.value) {
        alert("일반회원 아이디를 입력하십시오..");
        f.mb_id.focus();
        return false;
    }

    if (!f.mb_password.value) {
        alert("일반회원 패스워드를 입력하십시오..");
        f.mb_password.focus();
        return false;
    }

	// 보안접속에 따른 도메인 SSL 설정
	if(f.sec.value == "1") {
		var domain_start = "https://";
	} else {
		var domain_start = "http://";
	}

    f.action = domain_start+"www.phpschool.com/gnuboard4/bbs/login_check.php";
	return true;
}

function email_resend() {
	win_open("../../member/email_resend.php", "email_resend","left=200,top=100,width=400,height=195,scrollbars=0");
}


</script>


<div class="login_form member" >
    <form name="fmblogin" method="post" onsubmit="return mb_login_submit(document.fmblogin);" autocomplete="off">
    <input type="hidden" name="url" value="/sub_main/qna_main.php">
    <input type="hidden" name="sec" id="sec" value="1">
    <input type="hidden" name="auto_login" id="auto_login" value="">
	<fieldset>
		<legend>로그인 폼</legend>
		<ul class="login_left">
			<li>
				<span class="bo">보안</span>
				<span class="sec_btn">
					<img src="/skin/blue/images/common/btn_secret_on_1.gif" class="m" alt="보안On" /><img src="/skin/blue/images/common/btn_secret_off_2.gif" alt="보안Off" class="btn_link m" js="$('.sec_btn').toggle(); $('#sec').val('0');" />
				</span>
				<span class="sec_btn" style="display: none;">
					<img src="/skin/blue/images/common/btn_secret_on_2.gif" alt="보안On" class="btn_link m" js="$('.sec_btn').toggle(); $('#sec').val('1');" /><img src="/skin/blue/images/common/btn_secret_off_1.gif" alt="보안Off" class="m" />
				</span>
				<span class="pl10 bo">Auto</span>
				<span class="auto_btn">
					<img src="/skin/blue/images/common/btn_secret_on_2.gif" alt="자동On" class="btn_link m" js="if (confirm('자동로그인을 사용하시면 다음부터 회원아이디와 패스워드를 입력하실 필요가 없습니다.\n\n\공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?')) { $('.auto_btn').toggle(); $('#auto_login').val('1'); } else { $('#auto_login').val(''); }" /><img src="/skin/blue/images/common/btn_secret_off_1.gif" alt="자동Off" class="m" />
				</span>
				<span class="auto_btn" style="display: none;">
					<img src="/skin/blue/images/common/btn_secret_on_1.gif" alt="자동On" class="m" /><img src="/skin/blue/images/common/btn_secret_off_2.gif" alt="자동Off" class="btn_link m" js="$('.auto_btn').toggle(); $('#auto_login').val('');" />
				</span>
			</li>
			<li>
				<span class="dn">일반회원아이디</span><input type="text" id="mb_id" name="mb_id" title="회원아이디" itemname="회원아이디" maxlength="20" value="" class="input_login" onblur="if (this.value.length==0) { this.className='input_login' } else { this.className='input_login focus' }" onfocus="this.className='input_login focus'">
			</li>
			<li >
				<span class="dn">일반회원비밀번호</span><input type="password" id="mb_password" name="mb_password" title="회원비밀번호" itemname="회원비밀번호" maxlength="20" value="" class="input_login" onblur="if (this.value.length==0) { this.className='input_login' } else { this.className='input_login focus' }" onfocus="this.className='input_login focus'">
			</li>
			<li class="btn_text">
				<a href="/gnuboard4/bbs/register.php"><span class="btn_join">일반회원가입</span></a>
				<span class="split">|</span>
				<a href="/member/id_pass_search.php"><span class="btn_id_search">ID/PW 찾기</span></a>
			</li>
		</ul><!-- .list-input -->
		<ul class="login_right">
			<li>
				<label>
					<input type="checkbox" name="id_save" value="1"  /> ID저장
				</label>
			</li>
			<li>
				<button class="btn_login" type="submit"><span class="dh">[로그인]</span></button>
			</li>
	</fieldset>
	</form>
</div>

<script type="text/javascript" language=JavaScript>

function cp_login_submit(f) {

	if (!f.cp_id.value) {
        alert("기업회원 아이디를 입력하십시오..");
        f.cp_id.focus();
        return false;
    }

    if (!f.cp_password.value) {
        alert("기업회원 패스워드를 입력하십시오..");
        f.cp_password.focus();
        return false;
    }

	// 보안접속에 따른 도메인 SSL 설정
	if(f.cp_sec.value == "1") {
		var domain_start = "https://";
	} else {
		var domain_start = "http://";
	}

	f.action = domain_start+"www.phpschool.com/company/company_login_check.php";
	return true;
}


</script>

<div class="login_form company" style="display:none;">
    <form name="fcplogin" method="post" onsubmit="return cp_login_submit(document.fcplogin);" autocomplete="off">
    <input type="hidden" name="url" value="/sub_main/qna_main.php">
    <input type="hidden" name="cp_sec" value="1">
    <input type="hidden" name="cp_auto_login" id="cp_auto_login" value="">
	<fieldset>
		<legend>로그인 폼</legend>
		<ul class="login_left">
			<li>
				<span class="bo">보안</span>
				<span class="sec_btn">
					<img src="/skin/blue/images/common/btn_secret_on_1.gif" class="m" alt="보안On" /><img src="/skin/blue/images/common/btn_secret_off_2.gif" alt="보안Off" class="btn_link m" js="$('.sec_btn').toggle(); $('#cp_sec').val('0');" />
				</span>
				<span class="sec_btn" style="display: none;">
					<img src="/skin/blue/images/common/btn_secret_on_2.gif" alt="보안On" class="btn_link m" js="$('.sec_btn').toggle(); $('#cp_sec').val('1');" /><img src="/skin/blue/images/common/btn_secret_off_1.gif" alt="보안Off" class="m" />
				</span>
				<span class="pl10 bo">Auto</span>
				<span class="auto_btn">
					<img src="/skin/blue/images/common/btn_secret_on_2.gif" alt="자동On" class="btn_link m" js="if (confirm('자동로그인을 사용하시면 다음부터 회원아이디와 패스워드를 입력하실 필요가 없습니다.\n\n\공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?')) { $('.auto_btn').toggle(); $('#auto_login').val('1'); } else { $('#cp_auto_login').val(''); }" /><img src="/skin/blue/images/common/btn_secret_off_1.gif" alt="자동Off" class="m" />
				</span>
				<span class="auto_btn" style="display: none;">
					<img src="/skin/blue/images/common/btn_secret_on_1.gif" alt="자동On" class="m" /><img src="/skin/blue/images/common/btn_secret_off_2.gif" alt="자동Off" class="btn_link m" js="$('.auto_btn').toggle(); $('#cp_auto_login').val('');" />
				</span>
			</li>
			<li>
				<span class="dn">기업회원아이디</span><input type="text" id="cp_id" name="cp_id" title="회원아이디" itemname="회원아이디" maxlength="20" value="" class="input_login" onblur="if (this.value.length==0) { this.className='input_login' } else { this.className='input_login focus' }" onfocus="this.className='input_login focus'">
			</li>
			<li >
				<span class="dn">기업회원비밀번호</span><input type="password" id="cp_password" name="cp_password" title="회원비밀번호" itemname="회원비밀번호" maxlength="20" value="" class="input_login" onblur="if (this.value.length==0) { this.className='input_login' } else { this.className='input_login focus' }" onfocus="this.className='input_login focus'">
			</li>
			<li class="btn_text">
				<a href="/company/company_register.php"><span class="btn_join">기업회원가입</span></a>
				<span class="split">|</span>
				<a href="/member/company_id_pass_search.php"><span class="btn_id_search">ID/PW 찾기</span></a>
			</li>
		</ul><!-- .list-input -->
		<ul class="login_right">
			<li>
				<label>
					<input type="checkbox" name="cp_id_save" value="1"  /> ID저장
				</label>
			</li>
			<li>
				<button class="btn_login" type="submit"><span class="dh">[로그인]</span></button>
			</li>
	</fieldset>
	</form>
</div>
		</div>
		<!-- 로그인 //-->
		<!-- 본문영역 //-->
		<div class="content">
			<!-- 서브메뉴 //-->
			
			<!-- 서브메뉴영역 //-->
			<div class="content_left">
			<input type='hidden' value='qna' />
				<div class="sub_title">Q&A</div>
				<ul class="sub_menu">
<li class=' '><a href='/gnuboard4/bbs/board.php?bo_table=qna_install&page=1'>리눅스/서버/설치/설정</a></li><li class=' '><a href='/gnuboard4/bbs/board.php?bo_table=qna_db&page=1'>Mysql/Oracle/Query/DB</a></li><li class=' '><a href='/gnuboard4/bbs/board.php?bo_table=qna_function&page=1'>PHP관련/함수/프레임웍</a></li><li class=' '><a href='/gnuboard4/bbs/board.php?bo_table=qna_html&page=1'>HTML/JS/CSS/jQuery/Ajax</a></li><li class=' '><a href='/gnuboard4/bbs/board.php?bo_table=qna_ttrend&page=1'>모바일앱/하이브리드앱</a></li><li class=' '><a href='/gnuboard4/bbs/board.php?bo_table=qna_other&page=1'>기타개발관련/ASP/JSP</a></li><li class=' '><a href='/gnuboard4/bbs/board.php?bo_table=any&page=1'>개발을 제외한 일반질문</a></li>				</ul>

                <p class="banner_title">AD</p>
                <ul class="category_banner">
									<!-- <li>
						<a href='https://openx.phpschool.com/delivery/ck.php?oaparams=2__bannerid=338__zoneid=28__cb=17b6521590__maxdest=https://www.phps.kr/cloud_info.html' target='_blank' onmouseover="self.status='클라우드서비스'; return true;" onmouseout="self.status=''; return true;"><img src='https://openx.phpschool.com/delivery/ai.php?filename=school_domain4_2.jpg&contenttype=jpeg' width='180' height='90' alt='클라우드서비스' title='클라우드서비스' border='0' /></a><div id='beacon_338' style='position: absolute; left: 0px; top: 0px; visibility: hidden;'><img src='https://openx.phpschool.com/delivery/lg.php?bannerid=338&amp;campaignid=80&amp;zoneid=28&amp;loc=https%3A%2F%2Fwww.phpschool.com%2Fsub_main%2Fqna_main.php&amp;referer=https%3A%2F%2Fwww.phpschool.com%2Fgroup%2Fgroup_list.php&amp;cb=17b6521590' width='0' height='0' alt='' style='width: 0px; height: 0px;' /></div>					</li> -->
									<!-- <li>
						<a href='https://openx.phpschool.com/delivery/ck.php?oaparams=2__bannerid=303__zoneid=29__cb=99311e88a3__maxdest=http://domain.phps.kr' target='_blank' onmouseover="self.status='com9600'; return true;" onmouseout="self.status=''; return true;"><img src='https://openx.phpschool.com/delivery/ai.php?filename=school_domain4_201807.jpg&contenttype=jpeg' width='180' height='90' alt='com9600' title='com9600' border='0' /></a><div id='beacon_303' style='position: absolute; left: 0px; top: 0px; visibility: hidden;'><img src='https://openx.phpschool.com/delivery/lg.php?bannerid=303&amp;campaignid=81&amp;zoneid=29&amp;loc=https%3A%2F%2Fwww.phpschool.com%2Fsub_main%2Fqna_main.php&amp;referer=https%3A%2F%2Fwww.phpschool.com%2Fgroup%2Fgroup_list.php&amp;cb=99311e88a3' width='0' height='0' alt='' style='width: 0px; height: 0px;' /></div>					</li> -->
									<!-- <li>
						<a href='https://openx.phpschool.com/delivery/ck.php?oaparams=2__bannerid=306__zoneid=30__cb=c454ccf8ed__maxdest=http://www.phps.kr/smshosting_price.html' target='_blank' onmouseover="self.status='간편하고저렴한단체문자발송'; return true;" onmouseout="self.status=''; return true;"><img src='https://openx.phpschool.com/delivery/ai.php?filename=school_sms_2.jpg&contenttype=jpeg' width='180' height='90' alt='간편하고저렴한단체문자발송' title='간편하고저렴한단체문자발송' border='0' /></a><div id='beacon_306' style='position: absolute; left: 0px; top: 0px; visibility: hidden;'><img src='https://openx.phpschool.com/delivery/lg.php?bannerid=306&amp;campaignid=82&amp;zoneid=30&amp;channel_ids=,&amp;loc=https%3A%2F%2Fwww.phpschool.com%2Fsub_main%2Fqna_main.php&amp;referer=https%3A%2F%2Fwww.phpschool.com%2Fgroup%2Fgroup_list.php&amp;cb=c454ccf8ed' width='0' height='0' alt='' style='width: 0px; height: 0px;' /></div>					</li> -->
									<li id="left_ad_1"></li>
					<li id="left_ad_2"></li>
					<li id="left_ad_3"></li>
                </ul>
				<script>
					bannerLoading("phpschool", "phpschool_pc_sub", "L1", "bundle", "1", "left_ad_1", "");
					bannerLoading("phpschool", "phpschool_pc_sub", "L2", "bundle", "1", "left_ad_2", "");
					bannerLoading("phpschool", "phpschool_pc_sub", "L3", "bundle", "1", "left_ad_3", "");
				</script>
			</div><div id="content_board_right">

		<!-- 최근게시물 //-->
		<div class="qna_title_box">
			<span class="big_title">Q&A 최근 미답변 게시글</span>
			[회원님들의 답변을 기다리는 최근 게시물 입니다.]
		</div>

		<div class="qna_list_box">
			<div class="fl" style="width: 390px;">
				<ul class="article">
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_install&wr_id=131166' title="rocky linux 8 apache 설치 질문 드립니다2.">
						<img src="/skin/blue/images/main/icon_qna_install.gif" class="m" />
						rocky linux 8 apache 설치 질문 드립니다2.						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_db&wr_id=239760' title="events_statements_summary_by_digest 관련 문의 드립니다.">
						<img src="/skin/blue/images/main/icon_qna_dbase.gif" class="m" />
						events_statements_summary_by_digest 관련 문의 드립...						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=484203' title="컴퓨터에 아파치/php 설치했는데 curl 인식이 안됩니다 ㅠ ㅠ">
						<img src="/skin/blue/images/main/icon_qna_function.gif" class="m" />
						컴퓨터에 아파치/php 설치했는데 curl 인식이 안됩니...						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_html&wr_id=306510' title="html 배경색이 표를 벗어납니다. 왕초보라 도움주시면 큰 도움 될 것 같습니다.">
						<img src="/skin/blue/images/main/icon_qna_html.gif" class="m" />
						html 배경색이 표를 벗어납니다. 왕초보라 도움주시면...						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_ttrend&wr_id=9426' title="웹뷰 안에도 애드몹 광고를 어떻게 달 수 있어요?">
						<img src="/skin/blue/images/main/icon_qna_trend.gif" class="m" />
						웹뷰 안에도 애드몹 광고를 어떻게 달 수 있어요?						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_other&wr_id=145501' title="안드로이드 게임 개발업체 추천 부탁 드려요">
						<img src="/skin/blue/images/main/icon_qna_etc.gif" class="m" />
						안드로이드 게임 개발업체 추천 부탁 드려요						</a></nobr>
					</li>
						</ul>
			</div>
			<div class="fr" style="width: 390px;">
				<ul class="article">
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_install&wr_id=131146' title="ISPCONFIG사용법 좀 알려주세요.">
						<img src="/skin/blue/images/main/icon_qna_install.gif" class="m" />
						ISPCONFIG사용법 좀 알려주세요.						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_db&wr_id=239701' title="oracle 19c 멈춤">
						<img src="/skin/blue/images/main/icon_qna_dbase.gif" class="m" />
						oracle 19c 멈춤						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=484115' title="robots.txt 특정봇만 sitemap 읽기설정 올바르게 되었나요?">
						<img src="/skin/blue/images/main/icon_qna_function.gif" class="m" />
						robots.txt 특정봇만 sitemap 읽기설정 올바르게 되었...						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_html&wr_id=306487' title="select에서 옵션값을 ajax로 값을 받고 싶은데 Warning뜨네요 ㅠ">
						<img src="/skin/blue/images/main/icon_qna_html.gif" class="m" />
						select에서 옵션값을 ajax로 값을 받고 싶은데 Warnin...						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_ttrend&wr_id=9391' title="build.gradle 질문이 있습니다">
						<img src="/skin/blue/images/main/icon_qna_trend.gif" class="m" />
						build.gradle 질문이 있습니다						</a></nobr>
					</li>
							<li>
						<nobr><a href='/gnuboard4/bbs/board.php?bo_table=qna_other&wr_id=145498' title="오픈뱅킹 api 이용하신 분 있나요">
						<img src="/skin/blue/images/main/icon_qna_etc.gif" class="m" />
						오픈뱅킹 api 이용하신 분 있나요						</a></nobr>
					</li>
						</ul>
			</div>
		</div>

		<div class="content_2depth">
			<div class="sub_title" onclick="location.href='/gnuboard4/bbs/board.php?bo_table=qna_install';">
				<span class="big_title">리눅스/서버/설치/설정</span>
				<p class="more btn_link" url="/gnuboard4/bbs/board.php?bo_table=qna_install&page=1">
					더보기<span class="arrow">▶</span>
				</p>
			</div>
			<ul class="article">
						<li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_install&wr_id=131213'>
						iptables -A INPUT -s 차단할 아이피 -j DROP [2]					</a></nobr>
                    <p class="fr date">1일전</p>
				</li>
						<li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_install&wr_id=131210'>
						피싱 사이트로 도메인이 악용되었습니다 [2]					</a></nobr>
                    <p class="fr date">3일전</p>
				</li>
						<li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_install&wr_id=131206'>
						apache  세팅 질문 [3]					</a></nobr>
                    <p class="fr date">8일전</p>
				</li>
						<li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_install&wr_id=131203'>
						게시물이 삭.제. 되었습니다. [1]					</a></nobr>
                    <p class="fr date">11일전</p>
				</li>
						<li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_install&wr_id=131197'>
						408 timeout 오류 [5]					</a></nobr>
                    <p class="fr date">12일전</p>
				</li>
					</ul>
		</div>
		<div class="content_2depth">
			<div class="sub_title" onclick="location.href='/gnuboard4/bbs/board.php?bo_table=qna_db';">
				<span class="big_title">Mysql/Oracle/Query/DB</span>
				<p class="more btn_link" url="/gnuboard4/bbs/board.php?bo_table=qna_db&page=1">
					더보기<span class="arrow">▶</span>
				</p>
			</div>
			<ul class="article">
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_db&wr_id=240450'>
						mysql and 괄호 or조건 검색 차이가 무엇인지 궁금... [5]					</a></nobr>
                    <p class="fr date">5일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_db&wr_id=240449'>
						게시물이 삭.제. 되었습니다. [1]					</a></nobr>
                    <p class="fr date">5일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_db&wr_id=240446'>
						디비가 사라졌습니다. [1]					</a></nobr>
                    <p class="fr date">18일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_db&wr_id=240442'>
						mysql 5.1버전입니다. 중복된 날짜의 연속적인 날을... [3]					</a></nobr>
                    <p class="fr date">20일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_db&wr_id=240438'>
						UPDATE map_normal_sub SET [4]					</a></nobr>
                    <p class="fr date">24일전</p>
				</li>
					</ul>
		</div>
		<div class="content_2depth">
			<div class="sub_title" onclick="location.href='/gnuboard4/bbs/board.php?bo_table=qna_function';">
				<span class="big_title">PHP/함수/API/프레임웍</span>
				<p class="more btn_link" url="/gnuboard4/bbs/board.php?bo_table=qna_function&page=1">
					더보기<span class="arrow">▶</span>
				</p>
			</div>
			<ul class="article">
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=484203'>
						컴퓨터에 아파치/php 설치했는데 curl 인식이 안됩...					</a></nobr>
                    <p class="fr date">2시간전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=484201'>
						php 시간함수를 이용? 시간배정 프로그램이 잘 안됩... [1]					</a></nobr>
                    <p class="fr date">1일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=484197'>
						같은 페이지를 서브도메인을 통해 불러오면 DB 에러... [3]					</a></nobr>
                    <p class="fr date">2일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=484192'>
						2차 카테고리 추출에 관한 문의드립니다. [4]					</a></nobr>
                    <p class="fr date">7일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=484186'>
						csrf token miss match 이슈입니다 [3]					</a></nobr>
                    <p class="fr date">13일전</p>
				</li>
					</ul>
		</div>
		<div class="content_2depth">
			<div class="sub_title" onclick="location.href='/gnuboard4/bbs/board.php?bo_table=qna_html';">
				<span class="big_title">HTML/JS/CSS/jQuery/Ajax</span>
				<p class="more btn_link" url="/gnuboard4/bbs/board.php?bo_table=qna_html&page=1">
					더보기<span class="arrow">▶</span>
				</p>
			</div>
			<ul class="article">
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_html&wr_id=306523'>
						브라우저 개발자도구 에러 출력 원인 Custom state ... [1]					</a></nobr>
                    <p class="fr date">2일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_html&wr_id=306518'>
						콘솔창에 뜨지 않는 스크립트 오류? [4]					</a></nobr>
                    <p class="fr date">6일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_html&wr_id=306512'>
						javascript 로 특정태그로 둘러쌓은것들만 빼오고 ... [2]					</a></nobr>
                    <p class="fr date">6일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_html&wr_id=306511'>
						셀렉트박스 링크연결 옵션값유지 [3]					</a></nobr>
                    <p class="fr date">6일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_html&wr_id=306510'>
						html 배경색이 표를 벗어납니다. 왕초보라 도움주시...					</a></nobr>
                    <p class="fr date">9일전</p>
				</li>
					</ul>
		</div>
		<div class="content_2depth">
			<div class="sub_title" onclick="location.href='/gnuboard4/bbs/board.php?bo_table=qna_ttrend';">
				<span class="big_title">모바일앱/하이브리드앱</span>
				<p class="more btn_link" url="/gnuboard4/bbs/board.php?bo_table=qna_ttrend&page=1">
					더보기<span class="arrow">▶</span>
				</p>
			</div>
			<ul class="article">
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_ttrend&wr_id=9523'>
						앱등록 질문좀 드립니다. [2]					</a></nobr>
                    <p class="fr date">5달전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_ttrend&wr_id=9521'>
						애플 심사 관련 질문입니다. ㅠ [1]					</a></nobr>
                    <p class="fr date">6달전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_ttrend&wr_id=9516'>
						ionic에서 iframe으로 웹뷰를 띄웠을때 submit이 먹... [2]					</a></nobr>
                    <p class="fr date">7달전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_ttrend&wr_id=9509'>
						flutter ios 빌드 [6]					</a></nobr>
                    <p class="fr date">7달전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_ttrend&wr_id=9507'>
						리액트 네이티브앱에서 웹뷰로 메세지 통신이 안 됩... [1]					</a></nobr>
                    <p class="fr date">7달전</p>
				</li>
					</ul>
		</div>
		<div class="content_2depth">
			<div class="sub_title" onclick="location.href='/gnuboard4/bbs/board.php?bo_table=qna_other';">
				<span class="big_title">ASP/JSP/기타개발관련</span>
				<p class="more btn_link" url="/gnuboard4/bbs/board.php?bo_table=qna_other&page=1">
					더보기<span class="arrow">▶</span>
				</p>
			</div>
			<ul class="article">
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_other&wr_id=145501'>
						안드로이드 게임 개발업체 추천 부탁 드려요					</a></nobr>
                    <p class="fr date">1일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_other&wr_id=145499'>
						AWS Fargate + NodeJS 실시간 배포(CI/CD) [1]					</a></nobr>
                    <p class="fr date">2일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_other&wr_id=145498'>
						오픈뱅킹 api 이용하신 분 있나요					</a></nobr>
                    <p class="fr date">3일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_other&wr_id=145493'>
						웹 페이지에서 서식 편집 기능 대안 방법이 있을까... [4]					</a></nobr>
                    <p class="fr date">16일전</p>
				</li>
						<li>
					<nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_other&wr_id=145490'>
						혹시 공동/금융,간편인증서에 관해 아시는분 계시나... [1]					</a></nobr>
                    <p class="fr date">17일전</p>
				</li>
					</ul>
		</div>

		<div class="content_2depth">
            <div class="sub_title" onclick="location.href='/gnuboard4/bbs/board.php?bo_table=any';">
                <span class="big_title">개발을 제외한 일반질문</span>
                <p class="more btn_link" url="/gnuboard4/bbs/board.php?bo_table=any&page=1">
                    더보기<span class="arrow">▶</span>
                </p>
            </div>
            <ul class="article">
                        <li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=any&wr_id=48159'>
                        해외에서 현금 인출 또는 해외 계좌로 자금 이체시 ... [6]                    </a></nobr>
                    <p class="fr date">24일전</p>
                </li>
                        <li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=any&wr_id=48155'>
                        정보관리는 어떻게 하시나요? [3]                    </a></nobr>
                    <p class="fr date">1달전</p>
                </li>
                        <li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=any&wr_id=48146'>
                        갤럭시북4 i3-1315U cpu 16g 유튜브 4k 영상 재생이... [8]                    </a></nobr>
                    <p class="fr date">2달전</p>
                </li>
                        <li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=any&wr_id=48145'>
                        인수인계 자료 넘겨주지 않는 업체..방법                    </a></nobr>
                    <p class="fr date">2달전</p>
                </li>
                        <li>
                    <nobr><a href='https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=any&wr_id=48137'>
                        좀 특이한 질문일수 있는데 궁금합니다. [6]                    </a></nobr>
                    <p class="fr date">2달전</p>
                </li>
                    </ul>
		</div>
		<!-- 최근게시물 //-->
</div>
		</div>
	</div>
	<!-- 본문영역 //-->

	<!-- 하단영역 //-->
	<div id="footer">
		<!-- 서비스전체보기 //-->
		<div class="all_service" style="">
			<div class="service_title">
                				<span>School Biz ▶</span>
                				<a href="http://www.phps.kr" target="_blank"><img src="/skin/blue/images/common/icon_phps_bottom.gif" class="m ml15" alt="스쿨호스팅 바로가기" /></a>
				<a href="http://www.dizi.kr" target="_blank"><img src="/skin/blue/images/common/icon_dizi_bottom.gif" class="m ml15" alt="DiZi 바로가기" /></a>
				<a href="http://www.dnszi.com" target="_blank"><img src="/skin/blue/images/common/icon_dnszi_bottom.gif" class="m ml15" alt="DNSZi 바로가기" /></a>
				<!--<a href="http://www.insdot.com/" target="_blank"><img src="/skin/blue/images/common/icon_insdot_bottom.gif" class="m ml15" alt="인스닷 바로가기" /></a>-->

						<p class="btn_link close" js="$('#footer .all_menu').toggle();">서비스 열기 ▼</p>
					</div>

        			<ul class="all_menu" style='display: none;'>
        <li class='group'><ul>
<li class='sub_title'><a href='/sub_main/qna_main.php'>질문/답변</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_install&page=1'>리눅스/서버/설정</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_db&page=1'>Mysql/Query/DB</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_function&page=1'>PHP관련/함수</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_html&page=1'>HTML/Script/CSS</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_ttrend&page=1'>모바일/하이브리드</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=qna_other&page=1'>기타 개발관련</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=any&page=1'>개발외 일반질문</a></li>
</ul></li>
<li class='group'><ul>
<li class='sub_title'><a href='/sub_main/class_main.php'>교육/자료</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=teach&page=1'>강좌게시판</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=tipntech&page=1'>Tip&Tech</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=download&page=1'>다운로드</a></li>
</ul></li>
<li class='group'><ul>
<li class='sub_title'><a href='/sub_main/community_main.php'>커뮤니티</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=talkbox_new&page=1'>새내기Talk</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=talkbox2&page=1'>토크박스</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=forum&page=1'>포럼</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=photo&page=1'>사진게시판</a></li>
<li class='sub_menu'><a href='/sub_main/guild_main.php'>길드메인</a></li>
<li class='sub_menu'><a href='/guild_new/guild_attend.php'>출석체크</a></li>
</ul></li>
<li class='group'><ul>
<li class='sub_title'><a href='/sub_main/group_main.php'>소모임</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_coin'>가상화폐</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_gamer'>게이머</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_stock'>함께하는주식투자</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_pension'>산들바람식도락</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_gunpla'>프라당</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_camera'>사진방</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_hope'>희망스쿨</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_dumchit'>둠칫둠칫</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_oldman'>독거노인</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=group_startup'>스타트업</a></li>
</ul></li>
<li class='group'><ul>
<li class='sub_title'><a href='/sub_main/market_main.php'>의뢰/장터</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=old_job&page=1'>의뢰마당</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=buynsell&page=1'>소프트장터</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=user_market&page=1'>중고장터</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=img_market&page=1'>이미지마켓</a></li>
</ul></li>
<li class='group'><ul>
<li class='sub_title'><a href='/sub_main/kuin_main.php'>구인/구직</a></li>
<li class='sub_menu'><a href='/biznbaza/kuin_list.php'>구인</a></li>
<li class='sub_menu'><a href='/biznbaza/kujik_list.php'>구직</a></li>
<li class='sub_menu'><a href='/biznbaza/free_list.php'>프리랜서</a></li>
</ul></li>
<li class='group'><ul>
<li class='sub_title'><a href='/community/rock_paper_scissors.php'>포인트</a></li>
<li class='sub_menu'><a href='/community/rock_paper_scissors.php'>가위바위보</a></li>
<li class='sub_menu'><a href='/event/lotto_event_list.php'>포인트이벤트</a></li>
<li class='sub_menu'><a href='/event/auction_point_list.php'>포인트경매</a></li>
</ul></li>
<li class='group'><ul>
<li class='sub_title'><a href='/sub_main/schoolzone_main.php'>PHP스쿨</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=notice&page=1'>공지사항</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=newsdesk&page=1'>새로운소식</a></li>
<li class='sub_menu'><a href='/gnuboard4/bbs/board.php?bo_table=bug'>버그/의견</a></li>
<li class='sub_menu'><a href='/survey/survey_list.php'>설문조사</a></li>
</ul></li>
			</ul>
        		</div>
		<!-- 서비스전체보기 //-->

		<!-- 회사정보 //-->
		<ul class="company_menu">
			<li class="btn_link" url="/html_sub/company_01.html">회사소개</li>
			<li class="split">|</li>
            <!--<li class="btn_link" url="/html_sub/site_map.php">사이트맵</li>
			<li class="split">|</li>//-->
			<li class="btn_link" url="/html_sub/policy_service.php">이용약관</li>
			<li class="split">|</li>
			<li class="text_color1 btn_link" url="/html_sub/info_guard.php">개인정보처리방침</li>
			<li class="split">|</li>
			<li class="btn_link" url="/html_sub/no_email_robot.php">이메일 무단수집 거부</li>
			<!--<li class="split">|</li>
			<li class="btn_link" url="/html_sub/recruit.html">인재채용</li>
			<li class="split">|</li>
			<li class="btn_link" url="/html_sub/apply_partner.php">제휴문의</li>-->
            			<li class="split">|</li>
			<li class=""><a href="mailto:phpschool@cowave.kr" class="text_color2 fs11">광고문의</a></li>
            		</ul>

		<ul class="company_info">
			<li><span class="text_color1">(주)커넥트웨이브</span>　사업번호 117-81-40065　통판 제2004-서울양천-00918호　직업정보 서울관악 제2010-03호　서울특별시 양천구 목동동로 233-1, 5층 501호 (목동, 현대드림타워)</li>
			<li>대표 이건수 개인정보보호책임자 김태상 문의:<a href="mailto:phpschool@cowave.kr" class="fs11">phpschool@cowave.kr</a></li>
			<li class="text_color1 pt5">Copyright <span class="bo">PHPSCHOOL.com</span> All rights reserved.</li>
		</ul>

        		<div class="logo">
			<a href="/"><img src="/skin/blue/images/common/bottom_logo.png" alt="PHPSCHOOL" /></a>
		</div>
        		<!-- 회사정보 //-->
	</div>
	<!-- 하단영역 //-->
</div>

<input type="hidden" id="comment_push" value="0">

<script language="javascript" src="../gnuboard4/js/wrest.js"></script>

<!-- 새창 대신 사용하는 iframe -->
<iframe width=0 height=0 name='hiddenframe' style='display:none;'></iframe>

<!-- GOOGLE LOG -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-12894558-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
