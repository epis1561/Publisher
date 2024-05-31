	<!-- 메인시작 --> <head>
        <title>프렌즈애견&키즈풀빌라</title>
</head>
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
								FRIENDS PUPPY KIDS POOLVILLA FRIENDS PUPPY KIDS POOLVILLA FRIENDS PUPPY KIDS POOLVILLA FRIENDS PUPPY KIDS POOLVILLA FRIENDS PUPPY KIDS POOLVILLA FRIENDS PUPPY KIDS POOLVILLA
							</textPath>
						</text>
					</svg>
				</div>
				<img src="/images/main/img01.png" alt="" class="pc">
				<img src="/images/main/m/img01.png" alt="" class="mo">
				<div class="txt">
					<p>
						자연과 사람이 그리고 반려견이 만나는 이 곳,<br>
						자연이 내는 모든 소리를 들을 수 있는 곳.<br>
						맑은 공기의 건강함을 느끼는 휴식이 필요한 당신.<br>
						소중한 자연이 주는 휴식을 마음껏 만끽 하세요!<br>
						프렌즈애견키즈풀빌라로 지금 초대합니다!    
					</p>
					<a class="btn" href="/about"><span>more ></span></a>
				</div>
			</div>

			<div class="con02">
				<div class="txt">
					반려견과 찾아와 함께 놀고 싶은 곳, 더 나아가 아이들을 위한 장소가 되고 싶은 마음에서 
					' 프렌즈애견키즈풀빌라 ' 라고 이름 짓고 오롯이 반려견과 아이들만을 위한 곳을 만드려고 노력했어요. 
					 매번 휴식과 즐거움이 필요한 시기에 떠오를 수 있는 곳이 되도록 프렌즈애견키즈풀빌라는 항상 노력하겠습니다. 
					 아이들의 친구이자 놀이터인 이 곳은 바로 '프렌즈애견키즈풀빌라' 입니다.
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
					사계절 모두 탈 수 있는<br>
					<em class="pcp">잔디 썰매장</em>이 있다고?
				</h3>
				<p>
					아이들에게 썰매는 언제나 인기만점!<br>
					프렌즈에서 안전하고 신나게 잔디썰매 타보자!
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
				<img src="/images/main/obj04.png" alt="">
			</div>
			<div class="obj02">
				<img src="/images/main/obj05.png" alt="">
			</div>
			<div class="txt">
				<h3 class="pcp">
					이곳은 프렌즈키즈풀빌라의 
					<em class="pcp">모래놀이터</em>!
				</h3>
				<p>
					아이들은 흙 속을 이리저리 파해치는 모험을,<br>
					어른들은 사랑스러운 아이들을 바라보며 휴식을!
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
					칙칙폭폭 나는 
					<em class="pcp">전기기차</em>의 기관사!
				</h3>
				<p>
					칙칙폭폭 비켜나세요 전기기관차가 나갑니다<br>
					추억의 사진도 남길 수 있는 재미 만점 놀이기구!
				</p>
			</div>
			<a href="/special/1" class="btn"><span>놀이시설 모두보기&ensp;></span></a>
		</div>

		<?php $this->load->view('include/roomList'); ?>		