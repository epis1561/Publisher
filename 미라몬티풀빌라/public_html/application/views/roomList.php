  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="/css/swiper.css">

  <link rel="stylesheet" href="/css/room.css">
  <div class="Listwrap">
    <div class="ListTitle">
        <h2 class="cormorant3">ROOMS</h2>
        <p>I EXPERIENCE HAPPINESS ONCE AGAIN<br>ON THIS ROAD THAT HELPS ME RELAX</p>
        <span>우아함과 시크함이 공존하는<br>모던 세미 클래식 인테리어 객실에서<br>편안한 휴식을 경험해 보세요.</span>
    </div>
    <div class="swiper-wrap">
        <div class="swiper3">
            <div class="swiper-wrapper">
             <div class="swiper-slide"><a href="/room01"><img src="./images/room/01_01.jpg" alt=""></a><div class="room_info">#풀빌라1(60평 / 침대4 / 화장실3 / 개별수영장 / 복층)<br><span>1호 (복층풀빌라)<a href=""></span><div class="more_box"><img src="/images/common/more.png" alt="" class="more1 pc"><img src="/images/common/more_hover.png" alt="" class="more_hover1"></a></div></div></div>
             <div class="swiper-slide"><a href="/room02"><img src="./images/room/01_02.jpg" alt=""></a><div class="room_info">#풀빌라2(60평 / 침대4 / 화장실3 / 개별수영장 / 복층)<br><span>2호 (복층풀빌라)<a href=""></span><div class="more_box"><img src="/images/common/more.png" alt="" class="more1 pc"><img src="/images/common/more_hover.png" alt="" class="more_hover1"></a></div></div></div>
             <div class="swiper-slide"><a href="/room03"><img src="./images/room/01_03.jpg" alt=""></a><div class="room_info">#풀빌라3(60평 / 침대4 / 화장실3 / 개별수영장 / 복층)<br><span>3호 (복층풀빌라)<a href=""></span><div class="more_box"><img src="/images/common/more.png" alt="" class="more1 pc"><img src="/images/common/more_hover.png" alt="" class="more_hover1"></a></div></div></div>
             <div class="swiper-slide"><a href="/room04"><img src="./images/room/01_04.jpg" alt=""></a><div class="room_info">#풀빌라4(60평 / 침대4 / 화장실3 / 개별수영장 / 복층)<br><span>4호 (복층풀빌라)<a href=""></span><div class="more_box"><img src="/images/common/more.png" alt="" class="more1 pc"><img src="/images/common/more_hover.png" alt="" class="more_hover1"></a></div></div></div>
            </div>
            <div class="slide_page4">
             <div class="swiper-button-prev prebtn1"></div>
             <div class="swiper-pagination"></div>
            <div class="swiper-button-next prebtn2"></div>
         </div>
        </div>

        
    </div>
</div>

<script>
$(document).on('mouseenter', '.swiper3 .swiper-slide', function(){
    if($(window).width() > 768){ 
    var index = $(this).index();
    var moreElement1 = $('.swiper3 .swiper-slide .more_box .more_hover1').eq(index);
    var moreElement2 = $('.swiper3 .swiper-slide .more_box .more1').eq(index);
    moreElement2.hide();
    moreElement1.show();
    }
});

$(document).on('mouseleave', '.swiper3 .swiper-slide', function(){
    if($(window).width() > 768){ 
    var index = $(this).index();
    var moreElement1 = $('.swiper3 .swiper-slide .more_box .more_hover1').eq(index);
    var moreElement2 = $('.swiper3 .swiper-slide .more_box .more1').eq(index);
    moreElement2.show();
    moreElement1.hide();
    }
});

    
   

   
</script>