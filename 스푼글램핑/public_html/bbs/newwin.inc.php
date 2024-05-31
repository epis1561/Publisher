<script type="text/javascript">
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
</script>
<script type="text/javascript">
// 쿠키 입력
function set_cookie(name, value, expirehours, domain)
{
    var today = new Date();
    today.setTime(today.getTime() + (60*60*1000*expirehours));
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";";
    if (domain) {
        document.cookie += "domain=" + domain + ";";
    }
}

// 쿠키 얻음
function get_cookie(name)
{
    var find_sw = false;
    var start, end;
    var i = 0;

    for (i=0; i<= document.cookie.length; i++)
    {
        start = i;
        end = start + name.length;

        if(document.cookie.substring(start, end) == name)
        {
            find_sw = true
            break
        }
    }

    if (find_sw == true)
    {
        start = end + 1;
        end = document.cookie.indexOf(";", start);

        if(end < start)
            end = document.cookie.length;

        return unescape(document.cookie.substring(start, end));
    }
    return "";
}

// 쿠키 지움
function delete_cookie(name)
{
    var today = new Date();

    today.setTime(today.getTime() - 1);
    var value = get_cookie(name);
    if(value != "")
        document.cookie = name + "=" + value + "; path=/; expires=" + today.toGMTString();
}
</script>
<script src="<?php echo G5_JS_URL ?>/wrest.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo G5_CSS_DIR ?>/popup.css">
<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
    $sql = "select * from {$g5['new_win_table']}
            where nw_2 = '1'
            and nw_sld <> '1'
            order by nw_1 asc
            "; 
    $result = sql_query($sql, false);
    
    $sql2 = "select * from {$g5['new_win_table']}
            where nw_2 = '1'
            and nw_sld = '1' 
            order by nw_1 asc
            "; 
    $result2 = sql_query($sql2, false);    
?>
<style type="text/css">
	/* 팝업레이어 */
	.containerPop { display:flex; flex-wrap: unset; position:absolute; right: 8%; top: 80px; max-width:1700px; z-index:10000; }
	.containerPop > div { margin: 15px; cursor: move; }
	.hd_pops_footer {padding:10px 0;background:#000;color:#fff;text-align:right}
	.hd_pops_footer button {margin-right:5px;padding:5px 10px;border:0;background:#393939;color:#fff;cursor:pointer;}
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8.4.5/swiper-bundle.min.css">


<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>


<div class="containerPop">
    <!-- 팝업레이어 시작 { -->
<?php
for ($i=0; $nw=sql_fetch_array($result); $i++)
{
	//var_dump($nw);
    // 이미 체크 되었다면 Continue
//    if ($_COOKIE["hd_pops_{$nw['nw_id']}"])
//        continue;
?>
  <div id="hd_pops_<?php echo $nw['nw_id'] ?>">
		<div style="background-color:#000000;"><?php echo conv_content($nw['nw_content'], 1); ?></div>
		<div class="hd_pops_footer">
			<button class="hd_pops_reject hd_pops_<?php echo $nw['nw_id']; ?> <?php echo $nw['nw_disable_hours']; ?>"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
			<button class="hd_pops_close hd_pops_<?php echo $nw['nw_id']; ?>">닫기</button>
		</div>
	</div>
	<script>
		$("#hd_pops_<?php echo $nw['nw_id'] ?>").draggable();
	</script>    
<?php 
}
if ($i == 0) echo '<span class="sound_only">팝업레이어 알림이 없습니다.</span>';
?>
</div>



	<style>
		.popupBox {position: absolute;top: 50%;left:3%;width: 350px;z-index: 10000;} 
		.popupBox .swiper{width: 100%;}
		.popupBox .swiper .swiper-slide {
			height: 350px;
			text-align: center;
			font-size: 18px;
			background: #fff;
			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}
		.popupBox .swiper .swiper-slide img {display: block;width: 100%;height: 100%;object-fit: cover;}
		.popupBox .swiper .swiper-button {display: flex;}
		.popupBox .swiper .swiper-button li {
			display: flex;
			align-items: center;
			justify-content: center;
			flex: 1;
			position: static;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 50px !important;
			border-top: 1px solid #ffffff;
			border-right: 1px solid #ffffff;
			box-sizing: border-box;
			color: #ffffff;
			background-color: rgba(0,0,0,0.7);
			cursor: pointer;
		}
		.popupBox .swiper .swiper-button li:last-child {border-right: none;}
		.popupBox .swiper .swiper-button li img {width: 16px;height: 16px;}
		.popupBox .swiper .swiper-button .swiper-button-prev,
		.popupBox .swiper .swiper-button .swiper-button-next {flex: 2;}
		/* start */
		.popupBox .swiper .swiper-button .swiper-button-stop,
		.popupBox .swiper .swiper-button .swiper-button-start {display: none;}
		.popupBox .swiper .swiper-button .swiper-button-stop.on,
		.popupBox .swiper .swiper-button .swiper-button-start.on {display: flex;}
		/* pagination */
		.popupBox .swiper .swiper-pagination  {position: absolute;top: 50%;left: auto;right: 5px;transform: translateX(-50%);width: max-content;height: max-content;}
		.popupBox .swiper .swiper-pagination span {display: block;margin: 5px 0;}
		.swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {height: 15px;border-radius: 5px;}
		.swiper-button-prev:after, .swiper-button-next:after {
			content: unset;
		}		
		@media (max-width: 1220px) {
			.popupBox {right: auto; left: 50%; transform: translateX(-50%);}
		}
	</style>
 
 
<div id="hd_pops_9999" class="popupBox">
  <div class="swiper popup-slide">
    <ul class="swiper-wrapper">

       

<?php 
for ($i=0; $nw=sql_fetch_array($result2); $i++)
{
	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $nw['nw_content'], $matches);
 
?>				
<li class="swiper-slide">
		<?php echo $nw['nw_content'] ?> 
</li>
<?php } ?>



   
<?php 


if ($i == 0)
{
  echo '<span class="sound_only">팝업레이어 알림이 없습니다.</span>';
  echo '<script> document.getElementById("hd_pops_9999").style.display = "none";</script>';
}
?>


</ul>

<div class="swiper-pagination"></div>
			<!-- If we need navigation buttons -->
			<ul class="swiper-button">
				<li class="swiper-button-prev"><img src="http://오롯하다가평.kr/images/popup/arrow_left2.png" alt="이전"></li>
				<li class="swiper-button-next"><img src="http://오롯하다가평.kr/images/popup/arrow_right2.png" alt="다음"></li>
				<li class="swiper-button-stop on"><img src="http://오롯하다가평.kr/images/popup/stop.png" alt="정지"></li>
				<li class="swiper-button-start"><img src="http://오롯하다가평.kr/images/popup/start.png" alt="시작"></li>
				<li class="swiper-button-close"><img src="http://오롯하다가평.kr/images/popup/close.png" alt="닫기"></li>
			</ul>


  </div>
</div>


<script>
 $("#hd_pops_9999").draggable();
</script> 
<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
    $("#hd").css("z-index", 1000);
});
</script>


	<!-- Initialize Swiper -->
    <script>
	  var swiper = new Swiper(".popup-slide", {
        slidesPerView: 1,
        loop: true,
		centeredSlides: true,
        autoplay: {
			delay: 2500,
			disableOnInteraction: false,
        },
        pagination: {
			el: ".swiper-pagination",
			clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

	  $(".swiper-button-stop").on("click", function() {
		  $(this).removeClass("on").next().addClass("on");
		  swiper.autoplay.stop();
	  })
	  $(".swiper-button-start").on("click", function() {
		  $(this).removeClass("on").prev().addClass("on");
		  swiper.autoplay.start();
	  })
	  $(".swiper-button-close").on("click", function() {
		$(this).parents(".popupBox").css("display", "none");
	  })
    </script>

<!-- } 팝업레이어 끝 -->






