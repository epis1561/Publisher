<?=$_POST[menu];?>
<?
    $menu=$_POST[menu];

	If (!$menu)
	{
	  If (!$_session[menu]){$menu=$_session[menu];}
	}
    Else
	{
       $_session[menu]=menu;
	}

   $menu_1=substr($menu,1);
   $menu_2=substr($menu,1,2);
   $menu_3=substr($menu,-1);
    Function iif($s1,$s2,$s3){
        If ($s1==true )
		{
			echo $s2;
		}
		Else
		{
			echo $s3;
		}
	}
?>




<div id="header" class="<?=$nav_open?>">
  <h1 class="logo">
    <a href="../">
      <img src="/html/images/common/logo.png" class="logoW">
      <img src="/html/images/common/logo_black.png" class="logoM">
    </a>
  </h1>
	<p id="skip"><a href="#contents">메뉴 건너뛰기</a></p>
	<a class="btn_nav <?=$nav_open?>">
		<span class="line">
			<span class="line01"></span>
			<span class="line02"></span>
			<span class="line03"></span>
		</span>
	</a>
  <div class="btnArea" data-test=<?php $siteinfo['reser_link'] ?>>
    <a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="btn_reser none1024">ㆍ실시간예약</a>
	<a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="btn_reser in-block1024">ㆍ실시간예약</a>
  </div>
	<div class="gnbArea">
		<ul class="gnb">
			<li class="gnb1<?=iif($categoryNum=="01"," this","")?>">
				<a href="/html/about.php" class="depth1">about</a>
				<span class="depth1_mobile">about</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="11","this","")?>"><a href="/html/about.php" class="depth2">소개</a></li>
				</ul>
			</li>
			<li class="gnb2<?=iif($categoryNum=="02"," this","")?>">
				<a href="/html/room.php?roomnum=01" class="depth1">rooms</a>
				<span class="depth1_mobile">rooms</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="200","this","")?>"><a href="/html/room_preview.php" class="depth2">미리보기</a></li>
					<li class="subBlock"></li>
					<li class="<?=iif($pageNum=="201","this","")?>"><a href="/html/room.php?roomnum=01" class="depth2">스푼글램핑A1 ~ A6</a></li>
					<li class="<?=iif($pageNum=="202","this","")?>"><a href="/html/room.php?roomnum=02" class="depth2">스푼카라반B1 ~ B2</a></li> 
					<li class="<?=iif($pageNum=="203","this","")?>"><a href="/html/room.php?roomnum=03" class="depth2">스푼카라반B3 ~ B7(개별스파)</a></li>
				</ul>
			</li>
			<li class="gnb3<?=iif($categoryNum=="03"," this","")?>">
				<a href="/html/special.php?cate=01" class="depth1">special</a>
				<span class="depth1_mobile">special</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="303","this","")?>"><a href="/html/special.php?cate=03" class="depth2">야외수영장</a></li>
					<li class="<?=iif($pageNum=="302","this","")?>"><a href="/html/special.php?cate=02" class="depth2">개별바베큐</a></li>
					<li class="<?=iif($pageNum=="304","this","")?>"><a href="/html/special.php?cate=04" class="depth2">매점</a></li>
					<li class="<?=iif($pageNum=="301","this","")?>"><a href="/html/special.php?cate=01" class="depth2">불멍</a></li>
					<li class="<?=iif($pageNum=="305","this","")?>"><a href="/html/special.php?cate=05" class="depth2">당일이용</a></li>

					
				</ul>
			</li>
			<li class="gnb4<?=iif($categoryNum=="04"," this","")?>">
				<a href="/html/tour.php" class="depth1">tour</a>
				<span class="depth1_mobile">tour</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="41","this","")?>"><a href="/html/tour.php" class="depth2">포천여행지</a></li>
				</ul>
			</li> 
			<li class="gnb5<?=iif($categoryNum=="05"," this","")?>">
				<a href="/html/reserve.php?cate=01" class="depth1 font">실시간 예약</a>
				<span class="depth1_mobile font">실시간 예약</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="51","this","")?>"><a href="/html/reserve.php?cate=01" class="depth2">예약안내</a></li>
					<li class="<?=iif($pageNum=="52","this","")?>"><a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="depth2 none1024">실시간예약</a><a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="depth2 in-block1024">실시간예약</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
