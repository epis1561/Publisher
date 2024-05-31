<?php
include_once('./_common.php');
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
$version ="1.00";
$folderName="main";
$topArea="main";
//$nav_open ="open_nav";
$mainTypo="
<p>“touch the ocean<br>
dream-like<br>
day unfolds.”</p>
	";

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko"" class="ie8"><![endif]-->
<!--[if IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<!--<![endif]-->
<head>
<? include_once ("./inc/metaTag.php"); ?>
<link rel="stylesheet" type="text/css" href="./html/css/set/lightslider.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/common.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/main.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/ddnayo.css?ver=<?=$version?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- custom scrollbar stylesheet -->
<script src="./html/js/set/jquery-1.10.2.min.js"></script>
<script src="./html/js/set/modernizr.js"></script>
<script src="./html/js/set/jquery-ui-1.10.4.min.js?ver=1.10.4.js"></script>
<script src="./html/js/set/TweenMax.min.js"></script>
<script src="./html/js/common.js"></script>
<script src="./html/js/set/jquery.easing.1.3.js"></script>
<script src="./html/js/set/jquery.transform3d.js"></script>
<script src="./html/js/set/jquery.transform2d.js"></script>
<script src="./html/js/set/jquery.mousewheel.js"></script>
<script src="./html/js/set/lightslider.js"></script>
<script src="./html/js/set/jquery.sticky.js"></script>
<!--[if IE 6]>
    <script type="text/livescript" src="./html/js/set/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('img, div, a, .png24');
    </script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="./html/js/set/html5.js"></script>
	<script src="./html/js/set/respond.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body onload="init()">
<?
	if($mobile){
		include G5_BBS_PATH.'/newwin.mobile.inc.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
?>
<div id="wrap" class="main control_header">
	<div class="topPlace">
		<div class="tag right">
			<a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="tag_inner">
				실시간예약
			</a>
		</div>
		<? include_once ("./html/include/header.php"); ?>
		<? include_once ("./html/include/topArea.php"); ?>
	</div>
	<div class="mainArea">
		<div id="contents">
			<? include_once ("./html/include/roomList.php"); ?>
			<div class="mainCon">
				<div class="mainGrid">
					<div class="grid_item">
						<a href="./html/special.php?cate=03">
							<img src="./html/images/main/img01.jpg" alt="">
							<span class="grid_item_inner">
								<div class="grid_item_tb">
									<div class="grid_item_tbc">
										<p class="tag top">
											<span class="tag_inner">
												Swimming <br class="block1024">Pool
											</span>
										</p>
										<p class="grid_item_text">
											<span class="none560">
												무더운 여름을 날려 줄 야외수영장
											</span>
										</p>
									</div>
								</div>
							</span>
						</a>
					</div>

					<div class="grid_item">
						<a href="./html/special.php?cate=02">
							<img src="./html/images/main/img02.jpg">
							<span class="grid_item_inner">
								<div class="grid_item_tb">
									<div class="grid_item_tbc">
										<p class="tag top">
											<span class="tag_inner">
												Barbeque
											</span>
										</p>
										<p class="grid_item_text">
											<span class="none560">
												사랑하는 이들과 프라이빗하게
											</span>
										</p>
									</div>
								</div>
							</span>
						</a>
					</div>

					<div class="grid_item">
						<a href="./html/special.php?cate=05">
							<img src="./html/images/main/img03.jpg">
							<span class="grid_item_inner">
								<div class="grid_item_tb">
									<div class="grid_item_tbc">
										<p class="tag top">
											<span class="tag_inner">
												Valley
											</span>
										</p>
										<p class="grid_item_text">
											<span class="none560">
												캠핑장 앞으로 흐르는 청정계곡
											</span>
										</p>
									</div>
								</div>
							</span>
						</a>
					</div>

				</div>
			</div>

		</div>
	</div>
<? include_once ("./html/include/footer.php"); ?>
