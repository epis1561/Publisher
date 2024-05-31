<?
	$categoryName="about";
	$categoryNum="01";
	$folderName="about";
	$topArea="topArea";
	$pageNum="11";
	$subNum="01";
	$pageTitle01="Spoon Is....";
	$pageTitle02="스푼글램핑";
	$imgNum01="01";
?>
<? include_once ("./include/subTop.php"); ?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?>">
	<? include_once ("./include/header.php"); ?>
	<div class="subArea">
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>
			</div>
			<div class="subCon subCon01">
				<div class="aboutCon01">
					<div class="about01_01">
						<div class="about01_0101">
							<p>
								스푼글램핑은 신규오픈 글램핑장으로써,<br>
								눈부신 햇살과 상쾌한 공기를 머금은 자연에서<br>
								여러분만의 온전한 시간, 특별한 추억을 떠담아가시라고<br>
								' 스푼글램핑 ' 이라 이름 지었습니다.<br><br>
								깔끔한 시설에 감성까지 더해진 글램핑장으로,<br>
								빠르게 흘러가는 일상을 벗어나 소중한 사람과 지친 마음을<br>
								달랠 수 있는 시간이 될 수 있도록 노력하겠습니다.<br>
							</p>
						</div>
						<p class="about01_0102">Welcome to<br>Spoon Glamping</p>
					</div>
					<div class="about01_02">
						<img src="./images/about/img01_01.jpg" alt="" class="img_100">
					</div>
				</div>
				<div class="aboutCon02">
					<img src="./images/about/img01_02.jpg" alt="" class="about02_01">
					<dl class="about02_02">
						<dt>My heart is filled with green.</dt>
						<dd>
							' 스푼글램핑 '은 포천 산자락을 굽어보며 맑은 공기, 푸르른 나무와 함께 하는 숲, 새들이 노래하는 곳에 위치해 있습니다.<br>
							여러분의 진정한 휴식과 만족을 위해 캠장 외 모든 직원의 세심한 서비스로 만나겠습니다.<br>
							평범하고 지친 일상을 떠나 연인,친구와 함께 소중하고 즐거운 추억을 만들어 가시기 바랍니다.
						</dd>
					</dl>
					<img src="./images/about/img01_03.jpg" alt="" class="about02_03">
					<p class="about02_04"><span>Glamp&Caravan</span>Spoon</p>
				</div>
				<dl class="map_dl section">
					<dt>
						<img src="./images/about/mapTitle.png" alt="MAP 찾아오시는 길 안내" class="none1024 img_100">
						<img src="./images/about/mapTitle_m.png" alt="MAP 찾아오시는 길 안내" class="block1024 img_100">
					</dt>
					<dd>
						<div class="map_add">
							<?php echo $siteinfo['footer_address']; ?>
						</div>
					</dd>
				</dl>
				<div class="mapCon section">
					<div class="mapFrame">
						<iframe src="http://gogo-people.com/map/naver03.php?pen_name=<?php echo $siteinfo['map_title']; ?>&lat=<?php echo $siteinfo['map_y']; ?>&lng=<?php echo $siteinfo['map_x']; ?>"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
