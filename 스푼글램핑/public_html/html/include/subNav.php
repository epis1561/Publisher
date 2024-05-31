<div class="subNav section">
				<ul style="display:<?=iif($categoryNum=="01","block","none")?>">
					<li class="<?=iif($pageNum=="11","this","")?>"><a href="/html/about.php">소개</a></li>
				</ul>
				<ul style="display:<?=iif($categoryNum=="02","block","none")?>">
					 <li class="<?=iif($pageNum=="200","this","")?>"><a href="/html/room_preview.php">미리보기</a></li>
					<li class="line">ㆍ</li> 
					<li class="<?=iif($pageNum=="201","this","")?>"><a href="/html/room.php?roomnum=01">스푼글램핑A1 ~ A6</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="202","this","")?>"><a href="/html/room.php?roomnum=02">스푼카라반B1 ~ B2</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="203","this","")?>"><a href="/html/room.php?roomnum=03">스푼카라반B3 ~ B7(개별스파)</a></li>
				</ul>
				<ul style="display:<?=iif($categoryNum=="03","block","none")?>">
					<li class="<?=iif($pageNum=="303","this","")?>"><a href="/html/special.php?cate=03" class="depth2">야외수영장</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="302","this","")?>"><a href="/html/special.php?cate=02" class="depth2">개별바베큐</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="304","this","")?>"><a href="/html/special.php?cate=04" class="depth2">매점</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="301","this","")?>"><a href="/html/special.php?cate=01" class="depth2">불멍</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="305","this","")?>"><a href="/html/special.php?cate=05" class="depth2">당일이용</a></li>
					
				</ul>
				<ul style="display:<?=iif($categoryNum=="04","block","none")?>">
					<li class="<?=iif($pageNum=="41","this","")?>"><a href="./tour.php">포천여행지</a></li>
				</ul>
				<ul style="display:<?=iif($categoryNum=="05","block","none")?>">
					<li class="<?=iif($pageNum=="51","this","")?>"><a href="./reserve.php?cate=01">예약안내</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="52","this","")?>"><a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="none1024">실시간예약</a><a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="in-block1024">실시간예약</a></li>
				</ul>
				
			</div>
			<h2 class="subTitle">
				<span class="title01">Spoon Glamping & Caravan</span>
				<span class="title_line"></span>
				<span class="title02"><?=$pageTitle01?></span>
				<span class="title03">|&nbsp; <?=$pageTitle02?> &nbsp;|</span>
			</h2>
