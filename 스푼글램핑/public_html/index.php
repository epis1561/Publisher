<?php
include_once('./_common.php');
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
$version ="1.00";
$folderName="main";
$topArea="main";
//$nav_open ="open_nav";
$mainTypo="
<p>“touch the ocean<br>
dream-like<br>
day unfolds.”</p>
	";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <? include_once ("./inc/metaTag.php"); ?>	
	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- 공용 js -->
	<script src="/html/js/main.js"></script>
	<script src="/html/js/header.js"></script>
	
	<!-- 공용 css -->
	<link rel="stylesheet" href="/html/css/reset.css">
	<link rel="stylesheet" href="/html/css/font.css">
	<!-- <link rel="stylesheet" href="/html/css/common2.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="/html/css/common.css?ver=<?=$version?>"> -->
    <link rel="stylesheet" type="text/css" href="./html/css/common.css?ver=<?=$version?>">
    <link rel="stylesheet" type="text/css" href="./html/css/common2.css?ver=<?=$version?>">
    <link rel="stylesheet" type="text/css" href="./html/css/set/lightslider.css?ver=<?=$version?>">
    <link rel="stylesheet" type="text/css" href="./html/css/main.css?ver=<?=$version?>">
    <link rel="stylesheet" type="text/css" href="./html/css/ddnayo.css?ver=<?=$version?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- custom scrollbar stylesheet -->
    <script src="./html/js/set/jquery-1.10.2.min.js"></script>
    <script src="./html/js/set/modernizr.js"></script>
    <script src="./html/js/set/jquery-ui-1.10.4.min.js?ver=1.10.4.js"></script>
    <script src="./html/js/set/TweenMax.min.js"></script>
    <script src="./html/js/common.js"></script>
    <script src="./html/js/set/jquery.easing.1.3.js"></script>
    <script src="./html/js/set/jquery.transform3d.js"></script>
    <script src="./html/js/set/jquery.transform2d.js"></script>
    <script src="./html/js/set/jquery.mousewheel.js"></script>
    <script src="./html/js/set/lightslider.js"></script>
    <script src="./html/js/set/jquery.sticky.js"></script>

    <link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
	<script src="./html/js/swiper.js"></script>
</head>
<body onload="init()">
    <?
        if($mobile){
            include G5_BBS_PATH.'/newwin.mobile.inc.php'; // 팝업레이어
        }else{
            include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
        }
    ?>
    <div id="wrap" class="main control_header">
        <div class="topPlace">
            <? include_once ("./html/include/header.php"); ?>
            <? include_once ("./html/include/topArea.php"); ?>
        </div>

        <main class="main_container">
            <!-- about -->
            <section class="about">
                <h2 class="blind">about</h2>
                <div class="content">
                    <div class="mo_main_text">
                        <h3 class="logo">
                            <i><img src="/html/images/common/logo4.png" alt=""></i>
                        </h3>
                        <p class="mo_text01">
                            청량하고 상쾌한 
                            <span>자연 속 힐링 스팟</span>
                        </p>
                        <p class="mo_text02">
                            '스푼글램핑'은 포천 산자락을 굽어보며 맑은 공기,<br>
                            푸르른 나무와 함께 하는 숲,<br>
                            새들이 노래하는 곳에 위치해 있습니다.
                        </p>
                    </div>
                    <div class="swiper_box">
                        <div class="about_swiper swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <div class="img">
                                        <img src="/html/images/main/about01_01.jpg" alt="">
                                    </div>
                                    <p class="text">
                                        청량하고 상쾌한 
                                        <span>자연 속 힐링 글램핑</span>
                                    </p>
                                </li>
                                <li class="swiper-slide">
                                    <div class="img">
                                        <img src="/html/images/main/about01_02.jpg" alt="">
                                    </div>
                                    <p class="text">
                                        낭만과 자연의 만남,
                                        <span>감성충만 카라반</span>
                                    </p>
                                </li>
                                <li class="swiper-slide">
                                    <div class="img">
                                        <img src="/html/images/main/about01_03.jpg" alt="">
                                    </div>
                                    <p class="text">
                                        스푼글램핑이 준비한
                                        <span>무더운 여름을 피하는 방법</span>
                                    </p>
                                </li>
                                <li class="swiper-slide">
                                    <div class="img">
                                        <img src="/html/images/main/about01_04.jpg" alt="">
                                    </div>
                                    <p class="text">
                                        #스푼글램핑&카라반
                                        <span>#감성글램핑 #낭만카라반</span>
                                    </p>
                                </li>
                                <li class="swiper-slide">
                                    <div class="img">
                                        <img src="/html/images/main/about01_05.jpg" alt="">
                                    </div>
                                    <p class="text">
                                        밤하늘을 수놓은 별을 보며
                                        <span>걱정거리도 훨훨 떠나보내기</span>
                                    </p>
                                </li>
                            </ul>
    
                            <div class="about_prev">
                                <i><img src="/html/images/common/prev01.png" alt=""></i>
                            </div>
                            <div class="about_next">
                                <i><img src="/html/images/common/next01.png" alt=""></i>
                            </div>
                        </div>
                    </div>
                    <div class="main_text">
                        <p>
                        '스푼글램핑'은 포천 산자락을 굽어보며 맑은 공기,푸르른 나무와 함께 하는 숲,<br>
                        새들이 노래하는 곳에 위치해 있습니다.
                        </p>
                        <span>
                            #감성 #글램핑 #카라반 #신규오픈 <br class="mo">
                            #연인 #친구
                        </span>
                    </div>
                </div>
            </section>
            <!-- room preview -->
            <section class="roompre">
                <h2 class="blind">roompre</h2>    
                <div class="content">
                    <div class="sub_img">
                        <img src="/html/images/main/img01_01.jpg" alt="">
                    </div>
                    <div class="main_cont">
                        <div class="main_slide">
                            <h3 class="title">
                                ROOM PREVEIW
                            </h3>
                            <div class="roompre_swiper swiper">
                                <ul class="swiper-wrapper">
                                    <li class="swiper-slide">
                                        <a href="/html/room.php?roomnum=01">
                                            <img src="/html/images/room/roompre01.jpg" alt="">
        
                                            <div class="room_name">
                                                <i class="logo">
                                                    <img src="/html/images/common/logo3.png" alt="">
                                                </i>
                                                <p>
                                                    스푼글램핑A1 ~ A6
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                     <li class="swiper-slide">
                                        <a href="/html/room.php?roomnum=02">
                                            <img src="/html/images/room/roompre02.jpg" alt="">
        
                                            <div class="room_name">
                                                <i class="logo">
                                                    <img src="/html/images/common/logo3.png" alt="">
                                                </i>
                                                <p>
                                                    스푼카라반B1 ~ B2
                                                </p>
                                            </div>
                                        </a>
                                    </li> 

                                    <li class="swiper-slide">
                                        <a href="/html/room.php?roomnum=03">
                                            <img src="/html/images/room/roompre03.jpg" alt="">
        
                                            <div class="room_name">
                                                <i class="logo">
                                                    <img src="/html/images/common/logo3.png" alt="">
                                                </i>
                                                <p>
                                                    스푼카라반B3 ~ B7
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="roompre_btn">
                                <div class="btn">
                                    <div class="roompre_prev">
                                        <i><img src="/html/images/common/prev02.png" alt=""></i>
                                    </div>
                                    <div class="roompre_next">
                                        <i><img src="/html/images/common/next02.png" alt=""></i>
                                    </div>
                                </div>
                                <div class="roompre-pagination"></div>
                            </div>
                        </div>

                        <div class="bg">
                            <div class="bg01">
                                <img src="/html/images/common/bg02.png" alt="">
                            </div>
                            <div class="bg02">
                                <img src="/html/images/common/bg03.png" alt="">
                            </div>
                            <div class="bg03">
                                <img src="/html/images/common/bg04.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner -->
            <section class="banner">
                <h2 class="blind">banner</h2>
                <div class="content">
                    <div class="img">
                        <span class="blind">
                            pc 배경이미지
                        </span>
                    </div>
                </div>
            </section>
            <!-- special -->
            <section class="special">
                <h2 class="blind">special</h2>
                <div class="content">
                    <div class="main_cont">
                        <div class="main_slide">
                            <h3 class="title">
                                SPECIAL
                            </h3>
                            <div class="special_swiper swiper">
                                <ul class="swiper-wrapper">
                                    <li class="swiper-slide">
                                        <a href="/html/special.php?cate=03">
                                            <img src="/html/images/main/sp03.jpg" alt="">
        
                                            <div class="special_name">
                                                <p>야외수영장</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="/html/special.php?cate=02">
                                            <img src="/html/images/main/sp02.jpg" alt="">
        
                                            <div class="special_name">
                                                <p>개별바베큐</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="/html/special.php?cate=04">
                                            <img src="/html/images/main/sp04.jpg" alt="">
        
                                            <div class="special_name">
                                                <p>매점</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="/html/special.php?cate=01">
                                            <img src="/html/images/main/sp01.jpg" alt="">
        
                                            <div class="special_name">
                                                <p>불멍</p>
                                            </div>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
    
                            <div class="special_btn">
                                <div class="btn">
                                    <div class="special_prev">
                                        <i><img src="/html/images/common/prev02.png" alt=""></i>
                                    </div>
                                    <div class="special_next">
                                        <i><img src="/html/images/common/next02.png" alt=""></i>
                                    </div>
                                </div>
                                <div class="special-pagination"></div>
                            </div>
    
                        </div>
                        <div class="bg">
                            <div class="bg01">
                                <img src="/html/images/common/bg05.png" alt="">
                            </div>
                            <div class="bg02">
                                <img src="/html/images/common/bg06.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="sub_img">
                        <img src="/html/images/main/img01_02.jpg" alt="">
                    </div>
                </div>
            </section>
        </main>
    </div>
<? include_once ("./html/include/footer.php"); ?>
   