<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    switch ($cate) {
        case "1":
            $name = "말티즈<br>(개별펜스/독립바베큐)";
            $id_room = "305066";
            $typeId = "203152";
            $text = "
                반려견과 웃음 가득한 여행을, <br>
                도그랜드 글램핑에서 준비했습니다.
            ";
            $keyward = "#애견용품  #테라스";
        break;

        case "2":
            $name = "비숑<br>(개별운동장/독립바베큐)";
            $id_room = "305076";
            $typeId = "203162";
            $text = "
                반려견과 웃음 가득한 여행을, <br>
                도그랜드 글램핑에서 준비했습니다.
            ";
            $keyward = "#애견용품  #개별펜스 #테라스 ";
        break;
    }
?>

<div class="room_wrap" id="fullpage">
    <section class="room_visual section01 section">
        <div class="content">
            <div class="name"><?php echo $name ?></div>
            <div class="swiper room_swiper01">
                <ul class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= $imgCount1; $i++) {
                        $imgNum = sprintf('%02d', $i);
                    ?>
                    <li class="swiper-slide"><img src="/images/room<?= $subNum ?>/<?php if ($is_mobile) echo 'm/'; ?>01_<?= $imgNum ?>.jpg" alt=""></li>
                    <?php } ?>
                </ul>
                
                <div class="btn">
                    <div class="room_swiper01-next">
                        <img src="/images/common/next_white.png" alt="">
                    </div>
                    <div class="room_swiper01-prev">
                        <img src="/images/common/prev_white.png" alt="">
                    </div>
                    <div class="room_swiper01-pagination"></div>
                </div>
            </div>
            <div class="bg">
                <div class="bg01">
                    <img src="/images/room/bg01.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="room_info section02 section">
        <div class="content">
            <div class="main_img">
                <img src="/images/room<?= $subNum ?>/img01.jpg" alt="">

                <div class="room_detail_info">
                    <div class="info_title">/ TYPE /</div>
                    <div class="info_text"></div>
                    <div class="info_title">/ GUESTS /</div>
                    <div class="info_text">[애견] <br> 애견 1마리 입실무료<br>(단, 12kg 이상 시 추가비용 발생) <br>2마리부터 추가요금 발생 <br>최대입실 가능 마리 수 : 3마리 <br>12kg이하 애견만 입실 가능<br><br>[인원] <br>
</div>
                    <div class="info_title">/ AMENITIES /</div>
                    <div class="info_text"></div>
                </div>
                <div>
                    <div id="room_des" style="display:none;"></div>
                    <script id="ddnayoapi" src="//www.ddnayo.com/api/script.aspx?apiuser=gogopeople" charset="utf-8"></script>
                    <script>
                        ddnayo.room.info($("#room_des").get(0), {
                            "id_hotel": "100545" /* 업소 코드 */ ,
                            "id_room_type": "<?php echo $typeId ?>" /* 객실타입 코드 */
                        });
                        $(window).on('load', function () {
                            setTimeout(function () {
                                var infoList = $('.room_data').find('li');
                                var infoArr = [];
                                infoList.each(function (i) {
                                    var $this = $(this);
                                    var value = $this.find('.data').html();
                                    infoArr.push(value);
                                });
                                $('.info_text').eq(0).append(infoArr[0].replaceAll('</p><p>', '/').replaceAll('<p>','').replaceAll('</p>',''));
                                $('.info_text').eq(1).append(infoArr[1].replaceAll('<table>', '<table style="display:none;">'));
                                $('.info_text').eq(2).append(infoArr[2]);
                            }, 100);
                        });
                    </script>
                </div>

                <div class="detail_btn">
                    <div>
                        객실정보보기 +
                    </div>
                    <div>
                        객실정보보기 -
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="info_text">
                    <h3 class="room_name">
                        <?php echo $name ?>
                    </h3>
                    
                    <div class="room_text">
                        <?php echo $text ?>
                    </div>
    
                    <p class="room_keyward">
                        <?php echo $keyward ?>
                    </p>
    
                    <div class="swiper room_sub_swiper">
                        <ul class="swiper-wrapper">
                            <?php
                            for ($i = 1; $i <= $imgCount2; $i++) {
                                $imgNum = sprintf('%02d', $i);
                            ?>
                            <li class="swiper-slide"><img src="/images/room<?= $subNum ?>/img01_<?= $imgNum ?>.jpg" alt=""></li>
                            <?php } ?>
                        </ul>
                        
                        <div class="btn">
                            <div class="room_sub_swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="bg">
                    <div class="bg01"><img src="/images/room/bg_item01.png" alt=""></div>
                    <div class="bg02"><img src="/images/room/bg_item02.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    
    <?php $this->load->view('include/roomList'); ?>	