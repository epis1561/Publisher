
</head>
	<!-- 메인시작 -->
	<div id="fullpage" class="f_section">
		<div class="main01 section">
			<div class="main_slide swiper-container swiper">
				<ul class="swiper-wrapper">
					<?php
					for ($i = 1; $i <= $imgCount; $i++) {
                        $imgNum = sprintf('%02d', $i);
					?>
					<li class="swiper-slide">
						<img src="/images/main/<?php if ($is_mobile) echo "m/"; ?>01_<?= $imgNum ?>.jpg" alt="">
					</li>
					<?php } ?>
				</ul>
			</div>

			<div class="obj">
				<div class="obj01"><img src="/images/common/obj01.png" alt=""></div>
				<div class="obj04"><img src="/images/common/obj01_02.png" alt="" class="mo"></div>
				<div class="obj02"><img src="/images/common/obj02.png" alt=""></div>
				<div class="obj03"><img src="/images/common/obj03.png" alt=""></div>
			</div>
		</div>

		<div class="main02 section">
			<div class="con01">
				<div class="typo">
					<svg width="80%"viewBox="0 0 1098.72 89.55">
						<path id="curve" fill="transparent" d="M0.17,0.23c0,0,105.85,77.7,276.46,73.2s243.8-61.37,408.77-54.05c172.09,7.64,213.4,92.34,413.28,64.19"></path>
						<text width="100%" style="transform:translate3d(0,0,0);">
							<textPath style="transform:translate3d(0,0,0);" alignment-baseline="top" xlink:href="#curve" startOffset="20px" id="text-path">
								DOGLAND GLAMPING DOGLAND GLAMPING DOGLAND GLAMPING DOGLAND GLAMPING DOGLAND GLAMPING DOGLAND GLAMPING
							</textPath>
						</text>
					</svg>
				</div>
				<img src="/images/main/img01.png" alt="" class="pc">
				<img src="/images/main/m/img01.png" alt="" class="mo">
				
			</div>

			<div class="con02">
				<div class="txt">
					반려견과 찾아와 함께 놀고 싶은 곳, 더 나아가 아이들을 위한 장소가 되고 싶은 마음에서 
					'도그랜드 글램핑' 이라고 이름 짓고 오롯이 반려견과 가족들을 위한 곳을 만드려고 노력했어요. 
					매번 휴식과 즐거움이 필요한 시기에 떠오를 수 있는 곳이 되도록 도그랜드 글램핑는 항상 노력하겠습니다. 
					아이들의 친구이자 놀이터인 이 곳은 바로 '도그랜드 글램핑' 입니다.
				</div>
			</div>

		</div>

		<div class="main03 section">
			<div class="img01">
				<img src="/images/main/img02_01.jpg" alt="">
			</div>
			<div class="img02">
				<img src="/images/main/img02_02.jpg" alt="">
			</div>
			<div class="obj01">
				<img src="/images/main/img02_03.png" alt="">
			</div>
			<div class="obj02">
				<img src="/images/main/obj04.png" alt="">
			</div>
			<div class="txt">
				<h3 class="pcp">
					아이들이 맘껏 뛰놀수 있는<br>
					<em class="pcp">애견운동장</em>이 있다고?
				</h3>
				<p>
					해맑게 뛰어노는 반려견들에게 인기만점<br>
					도그랜드에서 반려견과의 추억을 쌓아가세요~
				</p>
			</div>
		</div>

		<div class="main04 section">
			<div class="img01">
				<img src="/images/main/img03_01.png" alt="">
			</div>
			<div class="img02">
				<img src="/images/main/img03_02.png" alt="">
			</div>
			<div class="obj01">
				<img src="/images/main/obj09.png" alt="">
			</div>
			<div class="obj02">
				<img src="/images/main/obj05.png" alt="">
			</div>
			<div class="txt">
				<h3 class="pcp">
					이곳은 도그랜드글램핑의 
					<em class="pcp">야외수영장</em>!
				</h3>
				<p>
					반려견과 함께 물놀이를 하며,<br>
					무더위를 씻어내고 행복한 하루를 보내세요~
				</p>
			</div>
		</div>

		<div class="main05 section">
			<div class="img01">
				<img src="/images/main/img04_01.jpg" alt="">
			</div>
			<div class="img02">
				<img src="/images/main/img04_02.jpg" alt="">
			</div>
			<div class="obj01">
				<img src="/images/main/obj06.png" alt="">
			</div>
			<div class="obj02">
				<img src="/images/main/obj07.png" alt="">
			</div>
			<div class="obj03">
				<img src="/images/main/obj08.png" alt="">
			</div>
			<div class="txt">
				<h3 class="pcp">
					반려견의 쾌적한 휴식과 청결을 위한
					<em class="pcp">애견목욕탕</em>까지!
				</h3>
				<p>
					<br>
				우리 아이들을 말끔하게 관리하세요~	
				</p>
			</div>
			<a href="/special/1" class="btn"><span>부대시설 모두보기&ensp;></span></a>
		</div>

		<?php $this->load->view('include/roomList'); ?>		
