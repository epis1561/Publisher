  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="/css/swiper.css">
  <link rel="stylesheet" href="/css/about.css">
  <link rel="stylesheet" href="/css/animate.css">
  <?php
  include('header.php')
  ?>
  <?php
  $folderName ="about";
  $topArea = "about";
  ?>

  <div class="aboutslide" id="about2">
  	<div class="textbox">
  		<h2>LANDSCAPE</h2>
  		<p>자연이 선물한 예술같은 휴식처, 미라몬티를 소개합니다.</p>
  	</div>
    <? include_once ('topArea.php'); ?>
  </div>


  <div class="main2" id="about1">
  	<div class="flex">
  		<div class="img_box"><img src="/images/main/img01.jpg" alt=""></div>
  		<div class="text_box">
  			<h2>WELCOME TO<br>LUXURIOUS POOLVILLA<br>MIRAMONTI</h2>
  			<p>산세의 품을 간직한 계곡과 어우러진 공간...<br>미라몬티는 건객실 스파와 전용 수영장을 자랑하며<br> 탁트인 전망으로 편안하고 조용한 휴식을 즐기실 수 있습니다.</p><a
  				href="">PROLOGUE</a>
  		</div>
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
  <div class="flex_all">
    <div class="flex leftphoto"><img src="/images/about/img01.jpg" alt="" class="wow fadeInLeftBig"><img src="/images/about/img02.jpg" alt=""></div>
    <div class="flex rightphoto"><img src="/images/about/img03.jpg" alt=""><img src="/images/about/img04.jpg" alt="" class="wow fadeInRightBig"></div>
  </div>
</div>

<div class="main5">
  <div class="leftbox">
    <img src="/images/about/img05.jpg" alt="" class="img05">
    <div class="textbox">
      <img src="/images/common/logo_black.png" alt="" class="logo_black">
      <h2 class="pc wow fadeIn">LUXURIOUS<br>INTERIOR</h2>
      <h2 class="mobile">LUXURIOUS INTERIOR</h2>
      <p class="wow fadeIn">REMEMBER THE BEAUTIFUL DAYS<br>WE'VE SHARED TOGETHER</p>

    </div>
   
  </div>
  <div class="rightbox">
    <img src="/images/about/img06.jpg" alt="" class="img06">
    <div class="textbox">
      <h2 class="wow fadeIn">ROMANTIC DAY...</h2>
      <p class="wow fadeIn">THE VIEW OF THE SUNSET<br>FROM HERE IS OUT OF SIGHT</p>

    </div>
   
  </div>
</div>

  <?php
  include('footer.php');
  ?>
  <script src="/js/swiper.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <script>
  	new WOW().init();

  	$(window).scroll(function () {
  		var height1 = $('.aboutslide').height();
  		var height2 = $('.main2').height();
  		var height3 = height1 + height2 - 400;
  		var scrollValue = $(document).scrollTop();
  		if (scrollValue >= height3) {
  			$(".deco").addClass("show");
  		} else {
  			$(".deco").removeClass("show");
  		}
  	});

  </script>
