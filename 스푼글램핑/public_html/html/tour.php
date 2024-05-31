<?
	$categoryName="tour";
	$categoryNum="04";
	$folderName="tour";
	$topArea="topArea";
	$pageNum="41";
	$subNum="01";
	$pageTitle01="Travel";
	$pageTitle02="여행지안내";
	$imgNum01="1";
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
			<div class="subCon subCon02">
				<ul class="tourList">
					<?
						$sql = "select * from g5_write_p_tour order by wr_10 asc";
						$result = sql_query($sql);
						for($i=1; $row=sql_fetch_array($result); $i++) {
							$result1 = sql_query("select bf_file from g5_board_file where bo_table='p_tour' and wr_id='$row[wr_id]'");
							echo "<li>";
							for($k=1; $file_=sql_fetch_array($result1); $k++) {
								echo "<img src='../../data/file/p_tour/".$file_['bf_file']."' alt=''>";
							}
								echo "<dl><dt><strong>".$row['wr_subject']."</strong><span class='line'></span></dt>";
								echo "<dd>".$row['wr_content']." <p>".$row['wr_8']."</p><p>".$row['wr_9']."</p></dd></dl></li>";
						if($i%2=='0') echo "<li class='clear'></li>"; //리스트 두개마다 넣어주기
						}
					?>
				</ul>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
