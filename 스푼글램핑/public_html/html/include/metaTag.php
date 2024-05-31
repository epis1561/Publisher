<?
$pensionTypo ="pension";
$subTypo01="pension";
$subTypo02="Rest assured rest and sensibility";
$mainTypo="<p>Romantic<br>ocean view</p>";

$meta_url ="http://스푼글램핑.kr";
$meta_keywords="경기도가볼만한곳, 포천가볼만한곳, 포천글램핑, 포천글램핑장, 포천카라반, 포천펜션, 포천오토캠핑, 경기도글램핑, 경기도글램핑장, 경기도카라반, 경기도펜션, 경기도오토캠핑, 포천노블글램핑, 포천낚시, 파주글램핑, 양주글램핑, 파주카라반, 양주카라반";
$meta_description="경기도가볼만한곳, 포천가볼만한곳, 포천글램핑, 포천글램핑장, 포천카라반, 포천펜션, 포천오토캠핑, 경기도글램핑, 경기도글램핑장, 경기도카라반, 경기도펜션, 경기도오토캠핑, 포천노블글램핑, 포천낚시, 파주글램핑, 양주글램핑, 파주카라반, 양주카라반";

if ($folderName=='main') {
	$pageTitle_meta = '';
} else {
	$pageTitle_meta = ''.$pageTitle02.' > ';
}
$siteinfo_query =  "SELECT * FROM site_info WHERE num = '1'";
$siteinfo = sql_fetch($siteinfo_query);
?>
<title><?=$pageTitle_meta?><? echo $config['cf_title'];?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<!--meta name="robots" content="index, follow"-->
<META NAME="ROBOTS" CONTENT="NOINDEX"> <!-- 모든 엔진 차단 -->
<meta name ="format-detection" content ="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=1, user-scalable=yes">
<meta name="keywords" content="<?=$meta_keywords?>">
<meta name="description" content="<?=$meta_description?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<? echo $config['cf_title'];?>">
<meta property="og:description" content="<?=$meta_description?>">
<meta property="og:url" content="<?=$meta_url?><?=$_SERVER ['REQUEST_URI'];?>">
<meta property="al:web:url" content="<?=$meta_url?><?=$_SERVER ['REQUEST_URI'];?>">
<link rel="canonical" href="<?=$meta_url?>">
<meta property="og:image" content="/html/images/common/image.jpg?ver=1">

<meta name="twitter:card" content="<?=$meta_description?>">
<meta name="twitter:title" content="<? echo $config['cf_title'];?>">
<meta name="twitter:description" content="<?=$meta_description?>">
<meta name="twitter:image" content="/html/images/common/image.jpg?ver=1">
<meta name="twitter:domain" content="<?=$meta_url?>">

<!-- font awsome cdn -->
<script src="https://kit.fontawesome.com/fd898959b6.js" crossorigin="anonymous"></script>
