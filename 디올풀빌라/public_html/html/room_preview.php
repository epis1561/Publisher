<?
	$categoryName="rooms";
	$categoryNum="02";
	$folderName="room";
	$topArea="topArea";
	$pageNum="200";
	$subNum="00";
	$pageTitle01="Room Preview";
	$pageTitle02="미리보기";
	$imgNum01="1";
?>
<style>
	.roomWrapper h1 {
		width: 66.5% !important;
	}
	.subTitle {
		display: none;
	}	
	.subNav {
		margin-bottom: 0 !important;
	}
	.roomWrapper {
		background: url('/html/images/room/bg_room.jpg')no-repeat center center;
    	background-size: cover;
		background-position: 0px -354px;
		padding-bottom: 50px;
	}
	.cont01_02 {
		float: right !important;
    	margin: 30px 0;
		width: 90% !important;
	}
	.cont01_02 h1 {
		margin-bottom: 0 !important;
	}
	.cont01_02 h1::before {
		top: 26% !important;
    	margin-left: 0 !important;
	}
	.roomWrapper h2 {
		float: right;
		margin-right: 100px;
	}

	.room_map {
		width: 80%;
		margin: 0 auto;
	}

	@media (max-width:1580px) {
		.roomWrapper {
			background-position: 0px -115px;
		}
	}
	@media (max-width:1024px) {
		.rt_head {
			font-size: 40px !important;
			text-shadow: -1px 0 #fff, 0 1px #fff, 1px 0 #fff, 0 -1px #fff !important;
		}
		.roomWrapper {
			background-position: 0px -115px;
		}
		.room_map {
			width: 100%;
			margin: 0 auto;
		}
	}
	@media (max-width:500px) {
		.rt_head {
			font-size: 16px !important;
			text-shadow: -1px 0 #fff, 0 1px #fff, 1px 0 #fff, 0 -1px #fff !important;
		}

		.rt_inner {
			margin-left: 15px !important;
		}
		.roomWrapper {
		    background-position: -10px -26px;
		}
		.cont01_02 {
			margin: 15px 0 !important;
		}
		.roomWrapper h2 {
			font-size: 20px !important;
			margin-bottom: 10px !important;
			margin-right: 30px !important;
		}
	}
</style>
<? include_once ("./include/subTop.php"); ?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?>">
	<? include_once ("./include/header.php"); ?>
	<div class="subArea">
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>
			</div>

			<div class="cont01_02">
				<h1>room<br>map</h1>
			</div>

			<script src="/html/js/jquery.rwdImageMaps.min.js"></script>
			<script>
				$(document).ready(function(e) {
				$('img[usemap]').rwdImageMaps();
				});
			</script>	

			<div class="room_map">
				<!-- Image Map Generated by http://www.image-map.net/ -->
				<img src="./images/room/roommap.jpg" class="img_100" usemap="#Map" style="max-width:100%;">	
				<map name="Map">
					<area target="" alt="black" title="black" href="http://xn--2s2bp2e70j.kr/html/room.php?roomnum=01" coords="181,689,63" shape="circle">
					<area target="" alt="white" title="white" href="http://xn--2s2bp2e70j.kr/html/room.php?roomnum=02" coords="492,571,62" shape="circle">
					<area target="" alt="gray" title="gray" href="http://xn--2s2bp2e70j.kr/html/room.php?roomnum=03" coords="400,417,59" shape="circle">
					<area target="" alt="opera 1 2" title="opera 1 2" href="http://xn--2s2bp2e70j.kr/html/room.php?roomnum=04" coords="818,688,1021,824" shape="rect">
					<area target="" alt="opera 3 4" title="opera 3 4" href="http://xn--2s2bp2e70j.kr/html/room.php?roomnum=04" coords="823,215,1004,345" shape="rect">
					<area target="" alt="cabana 1 2" title="cabana 1 2" href="http://xn--2s2bp2e70j.kr/html/room.php?roomnum=05" coords="1032,693,1220,820" shape="rect">
					<area target="" alt="cabana 3 4" title="cabana 3 4" href="http://xn--2s2bp2e70j.kr/html/room.php?roomnum=05" coords="1007,219,1192,347" shape="rect">
					<area target="" alt="소광장" title="소광장" href="http://xn--2s2bp2e70j.kr/html/special.php?cate=05" coords="770,642,54" shape="circle">
					<area target="" alt="수영장" title="수영장" href="http://xn--2s2bp2e70j.kr/html/special.php?cate=02" coords="622,799,59" shape="circle">
					<!-- <area target="" alt="관리동(체크인)" title="관리동(체크인)" href="" coords="688,411,57" shape="circle"> -->
					<!-- <area target="" alt="노을언덕(야외라운지)" title="노을언덕(야외라운지)" href="" coords="573,262,55" shape="circle"> -->
				</map>
			</div>

			<div class="subCon subCon01">
				<!-- <div class="h_name"></div> -->
				<? include_once ("./include/roomList.php"); ?>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
