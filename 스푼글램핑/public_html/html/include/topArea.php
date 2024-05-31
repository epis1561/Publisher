<?
	if ($folderName=='main') {
		$directory = './html/images/'.$folderName.'/';
		$files = glob($directory . '01_*.jpg');
	} elseif ($folderName=='room') {
		$directory = '../html/images/'.$folderName.''.$subNum.'/';
		$files = glob($directory . '01_*.jpg');
	} else {
		$directory = '../html/images/'.$folderName.'/';
		$files = glob($directory . $subNum .'_*.jpg');
	}
	if ($pageNum=='200') {
		$directory = '../html/images/'.$folderName.'/';
		$files = glob($directory . $subNum .'_*.jpg');
	}
	if ( $files !== false ) {
		$imgNum01 = count( $files );
	}
?>
<script>
	$(document).ready(function() {
	var slider = $('.topArea .lightslider').lightSlider({
		gallery:false,
		pager:false,
		mode: 'fade',
		easing:'easeInExpo',
		item:1,
		slideMargin:0,
		galleryMargin: 0,
		//verticalHeight:"900",
		pause:4000,
		speed:1000,
		auto:true,
		loop:true,
		prevHtml:'&lt;',
        nextHtml:'&gt;',
		onBeforeSlide: function (el) {
			$('.current').text(el.getCurrentSlideCount());
		}
	});
});
</script>
		<?php if( $topArea == topArea) {?>
			<div class="subCon topArea section">
				<div class="decoration">
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
				</div>
				<!-- <div class="mainTypo">
					<?=$mainTypo?>
				</div> -->
				<!-- <a href="#contents" class="btn_scroll">
					SCROLL DOWN
				</a> -->
				<ul class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li><img src='/html/images/".$folderName."/m/".$subNum."_".$num.".jpg' alt=''></li>";
							}else{
								echo "<li><img src='/html/images/".$folderName."/".$subNum."_".$num.".jpg' alt=''></li>";
							}
						}
					?>
				</ul>
			</div>
		<?php } ?>

		<?php if( $topArea == topArea_sub) {?>
			<div class="subCon topArea topArea01 section">
				<div class="decoration">
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
				</div>
				<!-- <div class="mainTypo">
					<?=$mainTypo?>
				</div> -->
				<!-- <a href="#contents" class="btn_scroll">
					SCROLL DOWN
				</a> -->
				<ul class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li style='background:url(./images/".$folderName."/m/".$subNum."_".$num.".jpg)'></li>";
							}else{
								echo "<li style='background:url(./images/".$folderName."/".$subNum."_".$num.".jpg)'></li>";
							}
						}
					?>
				</ul>
			</div>
		<?php } ?>

		<?php if( $topArea == room) {?>
			<div class="subCon topArea topArea01 section">
				<div class="decoration">
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
				</div>
				<!-- <div class="mainTypo">
					<?=$mainTypo?>
				</div> -->
				<!-- <a href="#contents" class="btn_scroll">
					SCROLL DOWN
				</a> -->
				<ul class="lightslider l_lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li style='background:url(./images/".$folderName."".$subNum."/m/01_".$num.".jpg)'></li>";
							}else{
								echo "<li style='background:url(./images/".$folderName."".$subNum."/01_".$num.".jpg)'></li>";
							}
						}
					?>
				</ul>
			</div>
		<?php } ?>

		<?php if( $topArea == main) {?>			
			<section class="visual subCon topArea topArea01 section">
                <h2 class="blind">visual</h2>
                <div class="content">
                    <div class="sub_cont">
                        <h3 class="logo">
                            <img src="/html/images/common/logo4.png" alt="">
                        </h3>
                        <div class="text">
                            <img src="/html/images/main/text01.png" alt="">
                        </div>
                    </div>

                    <div class="visual_swiper swiper">
                        <ul class="swiper-wrapper">
							<?php
							for($i = 1 ; $i <= $imgNum01 ; $i++) {
								$num = sprintf('%02d',$i);
								if($mobile){
									echo "<li class='swiper-slide'><img src='./html/images/main/m/01_".$num.".jpg'></li>";
								}else{
									echo "<li class='swiper-slide'><img src='./html/images/main/01_".$num.".jpg'></li>";
								}
							}
							?>
                        </ul>

                        <div class="visual_btn">
                            <div class="visual_prev">
                                <i><img src="/html/images/common/prev01.png" alt=""></i>
                            </div>
                            <div class="visual_next">
                                <i><img src="/html/images/common/next01.png" alt=""></i>
                            </div>
                            <div class="visual-pagination"></div>
                        </div>
                    </div>

                    <div class="ani">
                        <h3>Scroll</h3>

                        <div class="bar">
                            <div class="gauge gauge_01 on">
                                <span class="blind">게이지 애니메이션</span>
                            </div>
                            <div class="gauge gauge_02 off">
                                <span class="blind">게이지 애니메이션</span>
                            </div>
                        </div>
                    </div>
            </section>
		<?php } ?>
