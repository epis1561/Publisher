<?php
  include('header.php')
  ?>
<?php
  $folderName ="map";
  $topArea = "map" 
  ?>
  <div class="mapslide">
	<div class="textbox">
		<h2>TRAFFIC</h2>
		<p>아름다운 휴양지 미라몬티 풀빌라에 오시는 길을 안내해드립니다.</p>
	</div>
  <? include_once ('topArea.php'); ?>
  </div>
  
<link rel="stylesheet" href="/css/map.css">
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=vwllrndigb"></script>
<script>
	var mapOptions = {
		center: new naver.maps.LatLng(37.3807573, 128.006897),
		zoom: 15
	};

	var map = new naver.maps.Map('map', mapOptions);

</script>
<div class="map1">
<h2>MAP</h2>
<span>MIRAMONTI POOLVILLA</span>
<p>경기도 가평군 북면 가화로 1364-59</p>
<div id="map"></div>
<div class="direction">
	대중교통 이용 시<br>
	가평시외버스터미널 하차 -> 백둔리행 시내버스 탑승
</div>
			<script type="text/javascript">
				var map = null;

				function initMap() {
					map = new naver.maps.Map('map', {
						center: new naver.maps.LatLng(37.3807573, 128.006897),
						zoom: 5
					});
				}
				var map = new naver.maps.Map('map', mapOptions);
				var marker = new naver.maps.Marker({
					position: new naver.maps.LatLng(37.3807573, 128.006897),
					map: map
				});

			</script>
</div>
<?php
  include('footer.php');
  ?>
