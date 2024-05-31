<?
$categoryName="special";
$categoryNum="03";
$folderName="special";
$topArea="topArea_sub";
$pageTitle03="Special Day";
$spTypo="All seasons of the year are beautiful here. Hello Pension.<br>I give you a gift for your life.";

$cate = $_GET[cate];
//$cate = $_POST[cate];

$pageNum="3$cate";
$subNum="$cate";
switch ($cate){
	case "01":
		$pageTitle01="Campfire";
		$pageTitle02="불멍";
		$subText02="
			- 글램핑에 따뜻하고 특별한 추억이 맺히도록 불멍을 준비했습니다.<br>
			- 소중한 사람들과 모여앉아 이야기꽃을 펼쳐보세요.<br><br>

			- 운영시간 : 일실시부터 ~ 21:00까지<br>
			- 비용 : 1회당 15,000원 / 현장결제 
		";
	break;

	case "02":
		$pageTitle01="Barbeque";
		$pageTitle02="개별바베큐";
		$subText02="
			분위기를 한껏살린 데크에서 개별 바비큐를 즐기실 수 있습니다.<br>
			캠핑의 꽃, 바베큐로 만찬을 즐겨보세요.<br><br>

			- 운영시간 : 입실시부터 ~ 21:00까지<br>
			- 비용 : 1회당 30,000원 / 현장결제 

		";
	break;	

	case "03":
		$pageTitle01="Swimming Pool";
		$pageTitle02="야외수영장";
		$subText02="
			맑은 공기 가득한 자연 속 수영장에서 더위를 날려 보내실 수 있습니다.<br><br>

			<b>[수영장 이용안내]</b><br>
			- 하절기에 한하여 이용가능(별도 공지예정)<br>
			- 입실고객 무료<br>
			- 수영복 or 래시가드 등 물빠짐 없는 옷 착장<br>
			- 이용시간 : 15시부터 ~ 21시까지<br><br>

		";
	break;

	case "04":
		$pageTitle01="Store";
		$pageTitle02="매점";
		$subText02="
			스푼글램핑에서의 완벽한 하루를위해<br>
			부족함 없이 채울수 있는 매점을 준비했습니다.<br><br>

			- 이용시간 : 입실시부터 ~ 21:00까지<br>
			- 판매물품 : 주류, 음료, 물, 햇반, 과자, 일회용품, 얼음, 아이스크림 등<br><br>

			※ 사진은 참고용 사진으로 현장과는 상이할 수 있습니다.
		";
	break;

	case "05":
		$pageTitle01="Daily Stay";
		$pageTitle02="당일이용";
		$subText02="
			실속있는 하루, 의미있는 데이트 코스가 될 수 있도록<br>
			스푼에서 당일이용숙박을 준비했습니다.<br>
			일반숙박보다 저렴하게 바쁜일상에서 벗어나 휴식을 취해보세요<br><br>

			- 이용시간 : 15:00 ~ 22:00까지<br>
			- 자세한 내용은 문의전화 혹은 실시간 예약에서 확인 부탁드립니다.<br><br>
		";
	break;
}
// $pageTitle01="special <span>$cate</span>";

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
			
			<div class="subCon subCon03">
				<div class="spCon spCon01">
					<div class="sp01_01"><img src="./images/special/img<?=$subNum?>_01.jpg" alt="" class="img_100"></div>
					<div class="sp01_02">
						<img src="./images/special/img<?=$subNum?>_02.jpg" alt="" class="img_100">
					</div>
				</div>
				<dl class="sp_text">
					<dt><?=$pageTitle01?></dt>
					<dd>
						 <p><?=$pageTitle02?></p> 
						<?=$subText02?>
					</dd>
				</dl>
				<?php if($subNum == "01" || $subNum == "02" || $subNum == "03" || $subNum == "04") { ?>
				<div class="spCon">
					<img src="./images/special/img<?=$subNum?>_03.jpg" alt="" class="img_100">
				</div>
				<div class="spCon spCon02">
					<img src="./images/special/img<?=$subNum?>_04.jpg" alt="" class="sp02_01">
					<p class="sp02_02">A special day for you</p>
				</div>
			</div>
			<? } ?>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
