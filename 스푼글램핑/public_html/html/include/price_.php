<?
include_once('../html/_common.php');
// 요금 문자열 가공
function get_price($price) {
if (strpos($price,',') === false) return number_format($price);
else return $price;
return 0;
}
// 요금표 명칭정보 가져오기
$row = sql_fetch(" select * from yj_room ");
$row2 = sql_fetch(" select * from yj_room ");
// 요금표 목록 가져오기
if($roomnum) {
	$sql = " select * from yj_room where roomnum='$roomnum'";
} else {
	$sql = " select * from yj_room order by roomno asc";
}
	$result = sql_query($sql);
	$result2 = sql_query($sql);
?>

<? if($roomnum) { // 1개의 객실정보 출력
	for ($k=0; $k<=$i; $k++) {
	$row[$k][roomno] = sprintf('%02d',$k + 1); //반복문 반복된 횟수에 따라 생성되는 번호, $roomnum은 URL에서의 번호를 따옴
	if ($roomnum == $row[$k][roomno]) {
?>
	<? 
		$i = 1;				
		while ($row = sql_fetch_array($result, MYSQL_BOTH)) {
		//$row[anchorlink] = sprintf('%02d',$row[roomnum]); //링크변수 01, 02, 03.. 규칙으로 새로 생성하여 링크 바꿔줌
	?>
	<table class="reserTable">
		<colgroup>
			<col style="width:48%;">
			<col style="width:13%;">
			<col style="width:13%;">
			<col style="width:13%;">
			<col style="width:13%;">
		</colgroup>
		<thead>
			<tr>
				<th scope="col">객실</th>
				<th scope="col">시즌</th>
				<th scope="col">주중</th>
				<th scope="col">금요일</th>
				<th scope="col">주말<br>공휴일전날</th>
			</tr>
		</thead>		
		<tbody>
			<tr>
				<th rowspan="3" scope="rowgroup">
					<div class="reser_name">
						<div class="rTitle"><?echo $row[roomname]?></div>
						<div class="rCon">
							<p><?echo $row[memo1]?><p>
							(<?echo $row2[pyoung]?> / 기준 <?echo $row[mancount]?>명, 최대 <?echo $row[mancount_max]?>명 )

						</div>
					</div>
				</th>
				<th scope="row" class="seasonBg"><?echo $row[title1]?></th>
				<td><?echo get_price($row[pay_normal]);?></td>
				<td><?echo get_price($row[pay_fri]);?></td>
				<td><?echo get_price($row[pay_week]);?></td>
			</tr>
			<tr>
				<th scope="row" class="seasonBg"><?echo $row[title2]?></th>
				<td><?echo get_price($row[pay_jun_normal]);?></td>
				<td><?echo get_price($row[pay_jun_fri]);?></td>
				<td><?echo get_price($row[pay_jun_week]);?></td>
			</tr>
			<tr>
				<th scope="row" class="seasonBg"><?echo $row[title3]?></th>
				<td><?echo get_price($row[pay_high_normal]);?></td>
				<td><?echo get_price($row[pay_high_fri]);?></td>
				<td><?echo get_price($row[pay_high_week]);?></td>
			</tr>
			<!--
			<tr>
				<th scope="row" class="seasonBg"><?echo $row[title4]?></th>
				<td><?echo get_price($row[pay_max_normal]);?></td>
				<td><?echo get_price($row[pay_max_fri]);?></td>
				<td><?echo get_price($row[pay_max_week]);?></td>
			</tr>
			-->
		</tbody>		
	</table>
	<ul class="roomFa list01">
		<li><?echo $row[memo2]?></li>
	</ul>
	<? 
		$i++;
	} ?>

<? }
}
?>
<? } else { //전체출력?>
	<table class="reserTable">
		<colgroup>
			<col style="width:48%;">
			<col style="width:13%;">
			<col style="width:13%;">
			<col style="width:13%;">
			<col style="width:13%;">
		</colgroup>
		<thead>
			<tr>
				<th scope="col">객실</th>
				<th scope="col">시즌</th>
				<th scope="col">주중</th>
				<th scope="col">금요일</th>
				<th scope="col">주말<br>공휴일전날</th>
			</tr>
		</thead>
		<? 
			$i = 1;				
			while ($row = sql_fetch_array($result, MYSQL_BOTH)) {
			$row[anchorlink] = sprintf('%02d',$row[roomnum]); //링크변수 01, 02, 03.. 규칙으로 새로 생성하여 링크 바꿔줌

		?>
		<tbody>
			<tr>
				<th rowspan="3" scope="rowgroup">
					<div class="reser_name">
						<div class="rTitle"><?echo $row[roomname]?></div>
						<div class="rCon">
							<p><?echo $row[memo1]?><p>
							(<?echo $row2[pyoung]?> / 기준 <?echo $row[mancount]?>명, 최대 <?echo $row[mancount_max]?>명 )

						</div>
					</div>
					<div class="roomLink"><a href="./room.php?roomnum=<?echo $row[anchorlink]?>" title="객실 : <?echo $row[roomname]?>"><?echo $row[roomname]?></a></div>
				</th>
				<th scope="row" class="seasonBg"><?echo $row[title1]?></th>
				<td><?echo get_price($row[pay_normal]);?></td>
				<td><?echo get_price($row[pay_fri]);?></td>
				<td><?echo get_price($row[pay_week]);?></td>
			</tr>
			<tr>
				<th scope="row" class="seasonBg"><?echo $row[title2]?></th>
				<td><?echo get_price($row[pay_jun_normal]);?></td>
				<td><?echo get_price($row[pay_jun_fri]);?></td>
				<td><?echo get_price($row[pay_jun_week]);?></td>
			</tr>
			<tr>
				<th scope="row" class="seasonBg"><?echo $row[title3]?></th>
				<td><?echo get_price($row[pay_high_normal]);?></td>
				<td><?echo get_price($row[pay_high_fri]);?></td>
				<td><?echo get_price($row[pay_high_week]);?></td>
			</tr>
			<!--
			<tr>
				<th scope="row" class="seasonBg"><?echo $row[title4]?></th>
				<td><?echo get_price($row[pay_max_normal]);?></td>
				<td><?echo get_price($row[pay_max_fri]);?></td>
				<td><?echo get_price($row[pay_max_week]);?></td>
				
			</tr>
			-->
		</tbody>
		<? 
			$i++;
		} ?>
	</table>
<?
}
$dom=null;
?>
