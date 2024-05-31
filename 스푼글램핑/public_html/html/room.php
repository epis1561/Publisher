<?
	include_once($_SERVER['DOCUMENT_ROOT'].'/html/include/data_room.php');
	$categoryName="rooms";
	$categoryNum="02";
	$folderName="room";
	$topArea="room";
	$roomnum = $_GET[roomnum];

	switch ($roomnum){
		case "1":
			$pageNum="201";
			$subNum="01";
			$roomno="215794";
			$pageTitle01="Spoon A1 ~ A6";
			$pageTitle02="스푼글램핑A1 ~ A6";
			$roomPrice = $roomsData['type0'];
		break;

		case "2":
			$pageNum="202";
			$subNum="02";
			$roomno="215795";
			$pageTitle01="Spoon B1 ~ B2";
			$pageTitle02="스푼카라반B1 ~ B2";
			$roomPrice = $roomsData['type1'];
		break;

		case "3":
			$pageNum="203";
			$subNum="03";
			$roomno="216017";
			$pageTitle01="스푼글램핑";
			$pageTitle02="스푼카라반B3 ~ B7";
			$roomPrice = $roomsData['type2'];
		break;
	}


?>
<? include_once ("./include/subTop.php"); ?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?> subTop">
	<? include_once ("./include/header.php"); ?>
	<div class="subArea">
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>
			</div>
			<div class="subCon subCon02">
				<div class="table-guide">
					표를 좌우(<i class="fa fa-arrows-h"></i>)로 움직여주세요.
				</div>
				<? //include_once ("./include/price.php"); ?>
				<div class="room_contents">
					<div class="price_guide">
						<p class="price_scroll_guide block1024">가격표를 좌우<i class="material-icons"></i>로 이동하세요.</p>
					</div>
					<div id="room_des" style="display:none;"></div>
					<div id="room_daily_price2"></div>
					<div class="room_contents_info">
						<div class="room_info_text">
							<div class="room_items">
								<span class="room_item_tit">객실 정보 <br>&nbsp;&nbsp;<span style="font-weight:normal;">기준 2명 ~ 최대 2명 / 초과인원불가</span><br></span>
								<span class="room_item_desc"></span>
							</div>
							<div class="room_items">
								<span class="room_item_tit">구비시설</span>
								<span class="room_item_desc"></span>
							</div>
						</div>
					</div>
				</div>
				<script id="ddnayoapi" src="//www.ddnayo.com/api/script.aspx?apiuser=bizon" charset="utf-8"></script>
				<link rel="StyleSheet" href='./css/ddnayo.css' type="text/css" />
				<link rel="StyleSheet" href='./css/ddnayo_room.css' type="text/css" />
				<script>
					ddnayo.room.info($("#room_des").get(0), {
						"id_hotel": "102661" /* 업소 코드 */ ,
						"id_room_type": "<?php echo $roomno ?>" /* 객실타입 코드 */
					});
					ddnayo.room.price.dailytable($("#room_daily_price2").get(0), {
						"id_hotel": "102661" /* 업소 코드 */ ,
						"id_room_type": "<?php echo $roomno ?>" /* 객실타입 코드 */ ,
						"su_day": 5 /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
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
							$('.room_items').eq(0).find('.room_item_desc').append(infoArr[0]);
							$('.room_items').eq(1).find('.room_item_desc').append(infoArr[2]);
							$('.room_limit_table').append(infoArr[1]);
							if ($('.room_limit_table').find('table').length < 1) {
								$('.room_limit_table').append('<table><tbody><tr><th>시즌</th><th>성인</th><th>아동</th><th>유아</th></tr><tr><td>비수기(공통)</td><td>불가</td><td>불가</td><td>불가</td></tr></tbody></table>');
							}
						}, 100);
					});
				</script>
				<div class="roomCon roomCon01">
					<a href="./reserve.php?cate=02" class="room_reser none1024"><img src="./images/common/btn_reser.png" alt="RESERVATION" class="vt"></a>
					<a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="room_reser in-block1024"><img src="./images/common/btn_reser.png" alt="RESERVATION" class="vt"></a>
					<img src="./images/room<?=$subNum?>/img01.jpg" alt="" class="room01_01">
				</div>
			</div>
			<div class="subCon subCon01">
				<div class="roomCon roomCon02">
					<div class="room02_01"><img src="./images/room/roomTypo.png" alt=""></div>
					<div class="room02_02"><img src="./images/room<?=$subNum?>/img02.jpg" alt="" class="img_100"></div>
					<div class="room02_03">
						We want to ensure a memorable trip with perfect service and care.<br>
						From sunny to nature to cozy rooms and to a wide range of services,<br>
						we strive to meet your needs.
					</div>
				</div>
				<div class="roomCon roomCon03">
					<div class="room03_01"></div>
					<div class="room03_02"><img src="./images/room<?=$subNum?>/img03.jpg" alt="" class="img_100"></div>
				</div>
			</div>
			<? include_once ("./include/roomList.php"); ?>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
