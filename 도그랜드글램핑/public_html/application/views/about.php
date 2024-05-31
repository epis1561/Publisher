<head>
    <style>
        .room_list .swiper-wrapper{
    justify-content: center !important;
  }
  @media(max-width:500px){
    .room_list .swiper-wrapper{
      justify-content: flex-start !important;
    }
  }
    </style>
</head>
<div class="about_wrap" id="fullpage">
    <section class="about_visual section01 section">
        <div class="content">
            <div class="name">도그랜드 소개</div>
            <div class="swiper about_swiper01">
                <ul class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= $imgCount1; $i++) {
                        $imgNum = sprintf('%02d', $i);
                    ?>
                    <li class="swiper-slide"><img src="/images/about/<?php if ($is_mobile) echo "m/"; ?>01_<?= $imgNum ?>.jpg" alt=""></li>
                    <?php } ?>
                </ul>
                
                <div class="btn">
                    <div class="about_swiper01-next">
                        <img src="/images/common/next_white.png" alt="">
                    </div>
                    <div class="about_swiper01-prev">
                        <img src="/images/common/prev_white.png" alt="">
                    </div>
                    <div class="about_swiper01-pagination"></div>
                </div>
            </div>
            <div class="bg">
                <div class="bg01">
                    <img src="/images/about/bg01.png" alt="">
                </div>
                <div class="bg02">
                    <img src="/images/common/bg_item01.png" alt="">
                </div>
                <div class="bg03">
                    <img src="/images/common/bg_item02.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="about_visual02 section02 cont_section section">
        <div class="content">
        <div class="text"> 
                반려견이 맘껏 뛰놀수 있는<br>
                <span>드넓은 운동장</span>
            </div>
            <div class="swiper about_swiper02">
                <ul class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= $imgCount2; $i++) {
                        $imgNum = sprintf('%02d', $i);
                    ?>
                    <li class="swiper-slide"><img src="/images/about/<?php if ($is_mobile) echo "m/"; ?>02_<?= $imgNum ?>.jpg" alt=""></li>
                    <?php } ?>
                </ul>
                
                <div class="btn">
                    <div class="about_swiper02-pagination about_btn_common"></div>
                </div>
            </div>
            <div class="bg">
                <div class="bg01">
                    <img src="/images/about/bg02.png" alt="">
                </div>
                <div class="bg02">
                    <img src="/images/common/bg_item03.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="about_visual03 section03 cont_section section">
        <div class="content">
            <div class="text">
                우리 가족만의<br>
                여유롭고 온전한 휴식을 위해<br class="block700">
                부족함을 채워줄<br>
                <span>매점과 애견카페</span>
            </div>
            <div class="swiper about_swiper03">
                <ul class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= $imgCount3; $i++) {
                        $imgNum = sprintf('%02d', $i);
                    ?>
                    <li class="swiper-slide"><img src="/images/about/<?php if ($is_mobile) echo "m/"; ?>03_<?= $imgNum ?>.jpg" alt=""></li>
                    <?php } ?>
                </ul>
                
                <div class="btn">
                    <div class="about_swiper03-pagination about_btn_common"></div>
                </div>
            </div>
            <div class="bg">
                <div class="bg01">
                    <img src="/images/about/bg03.png" alt="">
                </div>
                <div class="bg02">
                    <img src="/images/common/bg_item04.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="about_visual04 section04 cont_section section">
        <div class="content">
            <div class="text"> 
               반려견과의 즐겁고 완벽한 하루<br>
                <span>도그랜드 글램핑</span>
            </div>
            <div class="swiper about_swiper04">
                <ul class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= $imgCount4; $i++) {
                        $imgNum = sprintf('%02d', $i);
                    ?>
                    <li class="swiper-slide"><img src="/images/about/<?php if ($is_mobile) echo "m/"; ?>04_<?= $imgNum ?>.jpg" alt=""></li>
                    <?php } ?>
                </ul>
                
                <div class="btn">
                    <div class="about_swiper04-pagination about_btn_common"></div>
                </div>
            </div>
            <div class="bg">
                <div class="bg01">
                    <img src="/images/about/bg04.png" alt="">
                </div>
                <div class="bg02">
                    <img src="/images/common/bg_item05.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="map_main section05 section">
        <div class="content">
            <div class="info">
                <div>
                    <h3><img src="/images/about/title.png" alt=""></h3>
    
                    <p class="address">
                        /주소/<br>
                        경기도 가평군 조종면 현리 7<br>
                        도그랜드글램핑 
                    </p>
                    <p class="phone">
                        ／전화／<br>
                        010-7525-1269
                    </p>
    
                    <div class="bg">
                        <img src="/images/about/bg05.png" alt="">
                    </div>
                </div>
            </div>
            <div class="map_cont">
                <div class="mapFrame">
                        <iframe src="http://gogo-people.com/map/naver03.php?pen_name= 도그랜드글램핑&amp;lat=37.8359295&amp;lng=127.355257"></iframe>
					</div>
            </div>
        </div>
    </section>