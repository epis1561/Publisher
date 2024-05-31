<link rel="stylesheet" href="/css/room.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" href="/css/swiper.css">
<link rel="stylesheet" href="/css/animate.css">
<?php
$nav="room";
?>
<?php
include('header.php');
?>
<?php
$folderName="room";
$topArea="room";
$roomnum = $_GET['roomnum'];
$pageNum="2$roomnum";
$subNum="$roomnum";
$src="/images/$folderName$roomnum/";
switch ($roomnum) {
	case "01":
		$typeId="202653";
		$roomName="독채(복층야외풀빌라)<br><span>독채(150평/방5(침대12)/화장실/복층/스파보유)</span>";

    $roomInfo1 = "약495.0㎡ (150평형) / 독채, 거실 + 객실분리형<br>
    개별테라스 + 바비큐, 전용야외수영장,스파<br>
    바비큐(숯+그릴)만 이용 가능 / 10인기준 50,000원 / 20인기준 100,000원 / 30인기준 150,000원<br>
    야외 온수수영장 사전예약 (1박 100,000원) 현장결제 
    ";
    $roomInfo2 = "입실시간 : 15시 ~ 22시<br>
    퇴실시간 : 11시<br>
    *22시 이후의 입실은 사전에 반드시 연락을 주시기 바랍니다.
    ";
    $roomInfo3 = "기준인원 : 10명 / 최대인원 : 30명<br>
    24개월이상 ~ 미취학아동 : 20,000원 / 취학아동 ~ 성인 : 20,000원
    ";
    $roomInfo4 = "TV, 침대, 화장대, 소파, 에어컨, 냉장고, 아일랜드식탁, 안마의자, 인덕션, 전자렌지, 제습기,
    주방기구일체, 식기류일체, Wi-Fi, 화장실, 욕조
    ";
	break;



    case "02":
		$typeId="204429";
		$roomName="오티움_카라반";
        $roomInfo1 = "약495.0㎡ (150평형) / 독채, 거실 + 객실분리형<br>
        개별테라스 + 바비큐, 전용야외수영장,스파<br>
        바비큐(숯+그릴)만 이용 가능 / 10인기준 50,000원 / 20인기준 100,000원 / 30인기준 150,000원<br>
        야외 온수수영장 사전예약 (1박 100,000원) 현장결제 
        ";
        $roomInfo2 = "입실시간 : 15시 ~ 22시<br>
        퇴실시간 : 11시<br>
        *22시 이후의 입실은 사전에 반드시 연락을 주시기 바랍니다.
        ";
        $roomInfo3 = "기준인원 : 10명 / 최대인원 : 30명<br>
        24개월이상 ~ 미취학아동 : 20,000원 / 취학아동 ~ 성인 : 20,000원
        ";
        $roomInfo4 = "TV, 침대, 화장대, 소파, 에어컨, 냉장고, 아일랜드식탁, 안마의자, 인덕션, 전자렌지, 제습기,
        주방기구일체, 식기류일체, Wi-Fi, 화장실, 욕조
        ";
	break;

  case "03":
		$typeId="204429";
		$roomName="오티움_카라반";
        $roomInfo1 = "카라반";
        $roomInfo2 = "독채";
        
        $people = "기준2명 / 최대4명";

        $Area1 = "7평";
        $Area2 = "약23㎡";

        $special = "개별바비큐<br>불멍";

        $outline = "단독형 + 퀸,싱글2(이층침대) + 화장실1";
        $amenity = "TV,에어컨,취사도구,객실샤워실,인터넷,일산화탄소 경보기,화재 경보기,난방,침대,냉장고,드라이기,욕실용품,소화기,인덕션,인덕션 전용용기";
        
        $extracharge = "2인초과 시 1인당(1박당) 인원추가요금 발생 / 24개월 미만 무료 / 25개월 ~ 성인 20,000원 / 현장결제";
	break;

  case "04":
		$typeId="204429";
		$roomName="오티움_카라반";
        $roomInfo1 = "카라반";
        $roomInfo2 = "독채";
        
        $people = "기준2명 / 최대4명";

        $Area1 = "7평";
        $Area2 = "약23㎡";

        $special = "개별바비큐<br>불멍";

        $outline = "단독형 + 퀸,싱글2(이층침대) + 화장실1";
        $amenity = "TV,에어컨,취사도구,객실샤워실,인터넷,일산화탄소 경보기,화재 경보기,난방,침대,냉장고,드라이기,욕실용품,소화기,인덕션,인덕션 전용용기";
        
        $extracharge = "2인초과 시 1인당(1박당) 인원추가요금 발생 / 24개월 미만 무료 / 25개월 ~ 성인 20,000원 / 현장결제";
	break;
    }

?>
<div class="roomslide">
	<div class="textbox">
		<h2><?php echo $roomName; ?></h2>
	</div>
	<? include_once ('topArea.php'); ?>
</div>
<?php
include('subnav.php');
?>
<div class="room_container">
	<div class="leftbox">
		<img src="/images/room01/img01.png" alt="">
		<h3>독채(복층야외풀빌라)<br>
			<span>독채(150평/방5(침대12)/화장실4/복층/스파보유)</span>
		</h3>
		<p>우아함과 시크함이 공존하는<br>
			모던 세미 클래식 인테리어 객실에서 편안한 휴식을 경험해 보세요.</p>
		<a href="" class="pc">RESERVATION</a>
		<a href="" class="mobile"><img src="/images/common/reser.png" alt=""></a>
	</div>

	<div class="rightbox">
		<link rel="StyleSheet" href='/css/ddnayo.css' type="text/css" />
		<script type="text/javascript" id="ddnayoapi" src="//www.ddnayo.com/api/script.aspx?apiuser=test" charset="utf-8">
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
		<div style="width: 80%; margin:0 auto;" id="room_daily_price1"></div>
		<script type="text/javascript">
			ddnayo.room.price.dailytable($("#room_daily_price1").get(0), {
				"id_hotel": "100390" /* 업소 코드 */ ,
				"id_room_type": "<?php echo $typeId; ?>" /* 객실타입 코드 */ ,
				"su_day": 5 /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
			});

		</script>

		<div class="roominfo">
			<div class="info">
				<div class="left"><img src="/images/room/info1.png" alt="" class="pc"><img src="/images/room/m/info1.png" alt="" class="mobil"></div>
				<div class="right"><?php echo $roomInfo1; ?></div>
			</div>
			<div class="info">
				<div class="left"><img src="/images/room/info2.png" alt="" class="pc"><img src="/images/room/m/info2.png" alt="" class="mobil"></div>
				<div class="right"><?php echo $roomInfo2; ?></div>
			</div>
			<div class="info">
				<div class="left"><img src="/images/room/info3.png" alt="" class="pc"><img src="/images/room/m/info3.png" alt="" class="mobil"></div>
				<div class="right"><?php echo $roomInfo3; ?></div>
			</div>
			<div class="info">
				<div class="left"><img src="/images/room/info4.png" alt="" class="pc"><img src="/images/room/m/info4.png" alt="" class="mobil"></div>
				<div class="right"><?php echo $roomInfo4; ?></div>
			</div>
		</div>
	</div>
	
</div>
<div class="main4">
		<div class="flex_all">
			<div class="flex"><img src="/images/about/img01.jpg" alt="" class="wow fadeInLeftBig"><img src="/images/about/img02.jpg" alt=""></div>
			<div class="flex"><img src="/images/about/img03.jpg" alt=""><div class="wow fadeInRightBig"><img src="/images/about/img04.jpg" alt=""><div class="text_deco">One<br>Special day</div></div></div>
		</div>
	</div>

	<?php
  include('roomList.php');
?>
<?php

  include('footer.php');
?>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="/js/swiper.js"></script>
<script src="/js/wow.min.js"></script>
<script>
  new WOW().init();

</script>