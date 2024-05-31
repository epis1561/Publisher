<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    switch ($cate) {
        case "1":
            $name = "매점";
            $text = "
                도그랜드의 매점에서는 여러물품을 판매하고 있습니다.<br>
                머무시는동안 부족함없이 즐거운 추억을 채워가세요!<br>
                판매물품 : 숯, 장작, 스낵류, 주류, 음료, 라면, 참기름, 매직파이어, 참치, 햇반, 마시멜로, 아이스크림 등<br>
                운영 시간 : 10:30 ~ 20:30
            ";
        break;

        case "2":
            $name = "야외수영장";
            $text = "
                반려견과 함께 즐길 수 있는 대형 야외 수영장이 준비되어 있습니다.<br>
                반려견과 시원한 물놀이를 즐기며 더위를 날려보세요!<br><br>
                2024년 6월 오픈 예정(날씨에 따라 변동이 있을 수 있습니다)
            ";
        break;

        case "3":
            $name = "애견목욕탕";
            $text = "
                직접 목욕을 시키고 드라이 할 수 있는 애견 목욕탕이 준비되어 있습니다.<br>
                스탠드 드라이기 및 드라이 룸이 구비되어 있습니다.
            ";
        break;

        case "4":
            $name = "애견동반 카페";
            $text = "
            애견 동반카페를 운영중이며, 숙박을 하지 않는 고객분들도 이용 가능합니다.<br>
            머무시는 동안 아이들과 함께 여유로운 시간을 보내보세요~<br>
            각종 애견용품 판매중~
            ";
        break;

        case "5":
            $name = "애견놀이터";
            $text = "
            카라반 바로 앞, 반려견들이 뛰어놀 수 있는 대형 애견 놀이터가 준비되어 있습니다.(애견 배변시 수거 필수)<br>
            ";
        break;

        case "6":
            $name = "놀이시설";
            $text = "
                아이들과 친구들, 가족과 함께 즐길 수 있는 다양한 오락 시설과 코인 노래방이 구비되어 있습니다.(이용료 유료)<br>
            ";
        break;

        case "7":
            $name = "불멍";
            $text = "
                낭만있고 가슴 따뜻한 추억으로 하루를 마무리해보세요.
            ";
        break;

        case "8":
            $name = "바베큐";
            $text = "
                여행의 필수 코스인 맛있는 바베큐 파티!<br>
                프라이빗하고 쾌적하게 즐겨보세요<br>
                숯 + 그릴 : 1SET 20,000원 / 숯 추가 시 5,000원<br>
                이용시간 : 입실 ~ 22:00<br>
                이용장소 : 각 객실 바로 앞<br>
                현장결제
            ";
        break;

        case "9":
            $name = "캠프파이어";
            $text = "
                숙소 한가운데 넓은 부지에 설치되는 캠프파이어에서<br>
                잊지못할 추억을 가져가세요!
            ";
        break;

    }
?>

<div class="special_wrap" id="fullpage">
    <section class="special_visual section01 section">
        <div class="content">
            <div class="name">/<?= $name ?>/</div>
            <div class="swiper special_swiper">
                <ul class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= $imgCount; $i++) {
                        $imgNum = sprintf('%02d', $i);
                    ?>
                    <li class="swiper-slide"><img src="/images/special/<?php if ($is_mobile) echo 'm/'; ?>/<?= $subNum ?>_<?= $imgNum ?>.jpg" alt=""></li>
                    <?php } ?>
                </ul>
                
                <!-- <div class="btn">
                    <div class="special_swiper-next">
                        <img src="/images/common/next_white.png" alt="">
                    </div>
                    <div class="special_swiper-prev">
                        <img src="/images/common/prev_white.png" alt="">
                    </div>
                    <div class="special_swiper-pagination"></div>
                </div> -->
            </div>
        </div>
    </section>
    <section class="special_info section02 section">
        <div class="content">
            <h3>
                <img src="/images/special/sp_name.png" alt="">
            </h3>

            <div class="info">
                <strong class="sp_name">／ <?= $name ?> ／</strong>

                <p class="sp_text">
                    <?= $text ?>
                </p>

                <div class="sp_info" id="special_data">
                </div>
            </div>

            <div class="bg">
                <div class="bg01">
                    <img src="/images/special/sp_bg<?= $subNum ?>.jpg" alt="" class="none700">
                    <img src="/images/special/m/sp_m_bg<?= $subNum ?>.jpg" alt="" class="block700">
                </div>
                <div class="bg02">
                    <img src="/images/common/bg_item02.png" alt="">
                </div>
            </div>
        </div>
        <div class="sp_nav">
            <ul>
                <li <?php if ($cate == "1") echo 'class="on"'; ?>><a href="/special/1">#매점</a></li>
                <li <?php if ($cate == "2") echo 'class="on"'; ?>><a href="/special/2">#야외수영장</a></li>
                <li <?php if ($cate == "3") echo 'class="on"'; ?>><a href="/special/3">#애견목욕탕</a></li>
                <li <?php if ($cate == "4") echo 'class="on"'; ?>><a href="/special/4">#애견동반 카페</a></li>
                <li <?php if ($cate == "5") echo 'class="on"'; ?>><a href="/special/5">#애견놀이터</a></li>
                <li <?php if ($cate == "6") echo 'class="on"'; ?>><a href="/special/6">#놀이시설</a></li>
                <li <?php if ($cate == "7") echo 'class="on"'; ?>><a href="/special/7">#불멍(개별)</a></li>
                <li <?php if ($cate == "8") echo 'class="on"'; ?>><a href="/special/8">#바베큐</a></li>
                <li <?php if ($cate == "8") echo 'class="on"'; ?>><a href="/special/9">#캠프파이어</a></li>
            </ul>
        </div>
    </section>

    <script>
        $("#special_data").load("/index.php/welcome/reserve #sp_data<?= $subNum ?>");
    </script>