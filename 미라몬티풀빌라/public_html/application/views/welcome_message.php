
<?php
include('header.php');
?>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="/css/swiper.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/animate.css">

<?php
    $sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['popups'] = $this -> data_model -> getList($sql, 'DB');
    $sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['slides'] = $this -> data_model -> getList($sql, 'DB');
    //$data['is_mobile'] = $is_mobile;
    $this -> load -> view('include/popup', $data);
?>
<?php
$folderName="main";
$topArea="main";
?>

<div class="mainslide">
  <div class="textbox">
    <h2>EXPERIENCE<br>THE BEAUTIFUL MIRAMONTI</h2>
  </div>
<? include_once ('topArea.php'); ?>
</div>
<div class="main2">
  <div class="flex">
    <div class="img_box"><img src="/images/main/img01.jpg" alt=""></div>
    <div class="text_box"><h2>WELCOME TO<br>LUXURIOUS POOLVILLA MIRAMONTI</h2><p>산세의 품을 간직한 계곡과 어우러진 공간...<br>미라몬티는 건객실 스파와 전용 수영장을 자랑하며<br> 탁트인 전망으로 편안하고 조용한 휴식을 즐기실 수 있습니다.</p><a href="">PROLOGUE</a></div>
    <div class="img_box"><img src="/images/main/img02.jpg" alt=""></div>
  </div>
  <div class="text_box mobile"><h2>WELCOME TO<br>LUXURIOUS POOLVILLA<br>MIRAMONTI</h2><p>산세의 품을 간직한 계곡과 어우러진 공간...<br>미라몬티는 건객실 스파와 전용 수영장을 자랑하며<br> 탁트인 전망으로 편안하고 조용한 휴식을 즐기실 수 있습니다.</p><a href=""><img src="/images/common/prol.png" alt=""></a></div>
</div>

<div class="main3">
<div class="flex">
  <div class="left"><img src="/images/main/img03.jpg" alt=""><img src="/images/main/img04.jpg" alt=""></div>
  <div class="center"><img src="/images/common/vertical_logo.png" alt=""></div>
  <div class="right wow fadeInRightBig" data-wow-duration="1s"><img src="/images/main/img05.jpg" alt=""></div>
</div>
<div class="deco"><img src="/images/main/deco1.png" alt=""></div>
<div class="logo_black mobile"><img src="/images/common/logo_black.png" alt=""></div>
</div>

<div class="main4">
<div class="swiper-wrap">
  <div class="swiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="/images/main/m/sp_pre01.jpg" alt="" class="mobile"><img src="/images/main/sp_pre01.jpg" alt="" class="pc"><div class="text-box"><h2>SWIMMING POOL</h2><p>독채 객실은 개별 야외수영장이 준비되어 있습니다.<br>※독채/풀빌라 야외수영장 이용시간<br>오전9시~11시 / 오후 3시~8시<br><br>야외수영장 2022년 운영종료</p></div></div>
      <div class="swiper-slide"><img src="/images/main/m/sp_pre02.jpg" alt="" class="mobile"><img src="/images/main/sp_pre02.jpg" alt="" class="pc"><div class="text-box"><h2>SPA</h2><p>모든 객실에 스파가 설치되어 있습니다.<br><br>스파사용시 입욕제는 사용불가입니다.(다음분 사용시 거품이나거나 이물질이 발생해요)<br>스파 커버위에 뛰거나 올라가지마세요.(스티로폼재질이라 파손되기쉬워요)<br>유아,아동은 보호자 동반입수 해주세요.(미끄럼주의, 다이빙 금지)</p></div></div>
      <div class="swiper-slide"><img src="/images/main/m/sp_pre03.jpg" alt="" class="mobile"><img src="/images/main/sp_pre03.jpg" alt="" class="pc"><div class="text-box"><h2>BARBECUE</h2><p>독채:바베큐(숯+그릴)만 이용 가능<br><br>/10인 이하 50,000원<br>/20인 이하 100,000원<br>/30인 이하 150,000원</p></div></div>
      <div class="swiper-slide"><img src="/images/main/m/sp_pre04.jpg" alt="" class="mobile"><img src="/images/main/sp_pre04.jpg" alt="" class="pc"><div class="text-box"><h2>GARDEN</h2><p>미라몬티 주변은 잔디정원으로 되어있습니다.<br>달빛이 찾아오면 오색별빛정원으로 아름답습니다.</p></div></div>
      <div class="swiper-slide"><img src="/images/main/m/sp_pre05.jpg" alt="" class="mobile"><img src="/images/main/sp_pre05.jpg" alt="" class="pc"><div class="text-box"><h2>INDIVIDUAL BARBECUE</h2><p>전 객실 준비되어 있는 개별바비큐장 시설이 갖추어져 있습니다.<br>독채 : 바비큐(숯+그릴)만 이용 가능 / 10인 이하 50,000원 / 20인 이하 100,000원 / 30인 이하 150,000원<br>1호, 2호, 3호 : 바베큐(전기그릴)만 이용 가능 / 4인 이하 20,000원 / 5인 이상 40,000원</p></div></div>
      <div class="swiper-slide"><img src="/images/main/m/sp_pre06.jpg" alt="" class="mobile"><img src="/images/main/sp_pre06.jpg" alt="" class="pc"><div class="text-box"><h2>CHARCOAL&GRILL</h2><p>바비큐를 즐기실 수 있도록 숯과 그릴을 준비해 드립니다.</p></div></div>
      <div class="swiper-slide"><img src="/images/main/m/sp_pre07.jpg" alt="" class="mobile"><img src="/images/main/sp_pre07.jpg" alt="" class="pc"><div class="text-box"><h2>HOTEL BEDDING</h2><p>매일 관리하는 호텔식 침구류로 고객님들의 편안한 휴식을 책임지겠습니다.<br>정결하고 깨끗한 침구에서 즐거운 여행 시작하세요.<br><br>(침구는 1일 1사용을 원칙으로 하고 있습니다.)</p></div></div>
      <div class="swiper-slide"><img src="/images/main/m/sp_pre08.jpg" alt="" class="mobile"><img src="/images/main/sp_pre08.jpg" alt="" class="pc"><div class="text-box"><h2>VALLEY VIEW</h2><p>공용 야외수영장 앞으로 산을 둘러싼 계곡이 보입니다.<br>아름다운 자연을 보며 그동안 받았던 스트레스도 날려버리고 여유와 쉼을 즐겨보시기 바랍니다.</p></div></div>
    </div>
  </div>
</div>
<div class="swiper-pagination swiper-pagination-2"></div>
</div>

<div class="main5">
  <div class="text">
    <h2>ENJOY GAPYEONG</h2>
    <a href="">VIEW MORE</a>
  </div>
  <div class="deco"><img src="/images/main/deco2.png" alt=""></div>
</div>

<?php
  include('roomList.php');
?>
<div class="main6">
  <div class="img_bg"><img src="/images/main/img_bg.jpg" alt=""></div>
  <img src="/images/main/left_bg.png" alt="" class="left_deco pc">
  <div class="img_flex">
    <div class="img_flex_box wow fadeInLeftBig"><img src="/images/main/img06.jpg" alt=""></div>
    <div class="img_flex_box wow fadeInLeftBig">
    <img src="/images/main/img07.jpg" alt="">
    <p>WELCOME TO CALM MORNING</p>
  </div>
  </div>
  <div class="textbox1">
    <h3>ROMANTIC DAY</h3>
    <p>THE VIEW OF THE SUNSET<br>
       FROM HERE IS OUT OF SIGHT
    </p>
    <a href="">
    <img src="/images/common/more.png" alt="" class="more">
    <img src="/images/common/more_hover.png" alt="" class="more_hover">
    </a>
  </div>
  <div class="text"><img src="/images/main/deco3.png" alt="" class="pc"></div>
</div>
<?php
  include('footer.php');
?>


<script src="/js/swiper.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="/js/wow.min.js"></script>

<script>
  new WOW().init();



  $(window).scroll(function () { 
  var height1= $('.mainslide').height();
  var height2= $('.main2').height();
  var height3= height1+height2-400;
	var scrollValue = $(document).scrollTop();
  if (scrollValue >= height3) {
    $(".deco").addClass("show");
  } else {
    $(".deco").removeClass("show");
  } 
});

$('.main6 .textbox1 a').hover(function(){
  $('.more').hide();
  $('.more_hover').show();
},function(){
  $('.more').show();
  $('.more_hover').hide();
});

</script>


</body>


</html>

