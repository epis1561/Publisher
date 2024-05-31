<?
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
?>
<?php
  include('metatag.php');
?>
<link rel="stylesheet" href="/css/header.css">
<div class="header">

	<ul class="gnb_wrap">
		<li class="gnb">ABOUT
			<ul>
				<li><a href="/about#about2">펜션전경</a></li>
				<li><a href="/about#about1">펜션소개</a></li>
				<li><a href="/map">오시는길</a></li>
			</ul>
		</li>

		<li class="gnb">ROOMS
			<ul>
				<li><a href="/roompre">객실미리보기</a></li>
				<li><a href="/room?roomnum=01">대저택독채(300평)</a></li>
				<li><a href="/room?roomnum=02">독채풀빌라1(60평)</a></li>
				<li><a href="/room?roomnum=03">독채풀빌라2(60평)</a></li>
				<li><a href="/room?roomnum=04">독채풀빌라3(60평)</a></li>
			</ul>
		</li>

		<li class="gnb">SPECIAL
			<ul>
				<li><a href="/special_preview">스페셜미리보기</a></li>
				<li><a href="/special?cate=01">워크샵 세미나실<br>(대저택독채 별관)</a></li>
				<li><a href="/special?cate=01">액티비티<br>(수상레저&스포츠)</a></li>
				<li><a href="/special?cate=01">오색별빛정원</a></li>
				<li><a href="/special?cate=01">25미터 초대형 야외수영장</a></li>
				<li><a href="/special?cate=01">프라이빗 실내 온수수영장</a></li>
				<li><a href="/special?cate=01">전 객실 스파</a></li>
			</ul>
		</li>

		<li class="gnb"><a href="/"><img src="/images/common/logo.png" alt=""></a>
		<ul><li></li></ul></li>

		<li class="gnb">TOUR
			<ul>
				<li><a href="/tour#link1">남이섬</a></li>
				<li><a href="/tour#link2">쁘띠프랑스</a></li>
				<li><a href="/tour#link3">아침고요수목원</a></li>
				<li><a href="/tour#link4">청평호반, 북한강 드라이브</a></li>
				<li><a href="/tour#link5">제이드가든</a></li>
				<li><a href="/tour#link6">자라섬</a></li>
			</ul>
		</li>

		<li class="gnb">RESERVATION
			<ul>
				<li><a href="">실시간예약</a></li>
				<li><a href="">예약안내</a></li>
			</ul>
		</li>
	</ul>

</div>

<div class="header-m">
	<div class="header-m-wrap">
		<div class="before">
			<div class="logo-m">
				<img src="/images/common/logo.png" alt="">
			</div>
			<div class="nav">
				<img src="/images/common/menu.png" alt="">
			</div>
		</div>

		<div class="after">
			<div class="before-top">
				<div class="logo-m-before">
					<img src="/images/common/logo_black.png" alt="">
				</div>
				<div class="close">
					<img src="/images/common/close.png" alt="">
				</div>
			</div>
			<ul class="gnb_wrap_m">
				<li class="gnb_m">
					<span>ABOUT</span>
					<ul>
						<li><a href="/about#about2">펜션전경</a></li>
						<li><a href="/about#about1">펜션소개</a></li>
						<li><a href="/map">오시는길</a></li>
					</ul>
				</li>
				<li class="gnb_m">
					<span>ROOMS</span>
					<ul>
						<li><a href="/roompre">객실미리보기</a></li>
						<li><a href="/room?roomnum=01">대저택독채(300평)</a></li>
						<li><a href="/room?roomnum=02">독채풀빌라1(60평)</a></li>
						<li><a href="/room?roomnum=03">독채풀빌라2(60평)</a></li>
						<li><a href="/room?roomnum=04">독채풀빌라3(60평)</a></li>
					</ul>
				</li>
				<li class="gnb_m">
					<span>SPECIAL</span>
					<ul>
						<li><a href="/special_preview">스페셜미리보기</a></li>
						<li><a href="/special?cate=01">워크샵 세미나실<br>(대처택독채 별관)</a></li>
						<li><a href="/special?cate=01">액티비티<br>(수상레저&스포츠)</a></li>
						<li><a href="/special?cate=01">오색별빛정원</a></li>
						<li><a href="/special?cate=01">25미터 초대형 야외수영장</a></li>
						<li><a href="/special?cate=01">프라이빗 실내 온수수영장</a></li>
						<li><a href="/special?cate=01">전 객실 스파</a></li>
					</ul>
				</li>
				<li class="gnb_m">
					<span>TOUR</span>
					<ul>
						<li><a href="/tour#link1">남이섬</a></li>
						<li><a href="/tour#link2">쁘띠프랑스</a></li>
						<li><a href="/tour#link3">아침고요수목원</a></li>
						<li><a href="/tour#link4">청평호반, 북한강 드라이브</a></li>
						<li><a href="/tour#link5">제이드가든</a></li>
						<li><a href="/tour#link6">자라섬</a></li>
					</ul>
				</li>
				<li class="gnb_m">
					<span>RESERVATION</span>
					<ul>
						<li><a href="">실시간예약</a></li>
						<li><a href="">예약안내</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

</div>
<script src='http://code.jquery.com/jquery-3.7.0.min.js'></script>
<script>
$('.gnb').hover(function() {
  const index = $(this).index();
  $('.gnb > ul').eq(index).fadeIn();
},function(){
	const index = $(this).index();
	$('.gnb > ul').eq(index).fadeOut();
});




$('.gnb > ul').mouseleave(function() {
  $(this).fadeOut();
});



$(window).scroll(function () {

		

var height = $(document).scrollTop();

if(height>=200){
	$('.header').css({'position':'fixed','top':'0','left':'0','background-color':'rgba(0,0,0,0.5)'});
}		
if(height<=200){
	$('.header').css({'position':'absolute','background-color':'transparent'});
}
if(height>=150){
	$('.header-m').css({'position':'fixed','top':'0','left':'0','background-color':'rgba(0,0,0,0.5)'});
}		
if(height<=150){
	$('.header-m').css({'position':'absolute','background-color':'transparent'});
}

}); 


$('.gnb_m span').click(function(){
    var index = $(this).parent().index(); // 클릭한 span 요소의 부모 .gnb_m의 인덱스를 가져옵니다.
    $('.gnb_m span').removeClass('spancolor'); // 다른 span 요소에서 spancolor 클래스 제거
    $(this).addClass('spancolor'); // 클릭한 span 요소에 spancolor 클래스 추가
    $('.gnb_m ul').hide(); // 모든 .gnb_m ul 숨김
    $('.gnb_m ul').eq(index).show(); // 클릭한 span 요소의 인덱스에 해당하는 .gnb_m ul 보여줌
});

$('.nav').click(function(){
	$('.after').show();
	$('.before').hide();
});

$('.close').click(function(){
	$('.after').hide();
	$('.before').show();
});
</script>
