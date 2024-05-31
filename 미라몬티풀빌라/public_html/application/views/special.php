<link rel="stylesheet" href="/css/special.css">
<link rel="stylesheet" href="/css/animate.css">
<style>
 
</style>
<?php
include('header.php');
?>
<?php
$folderName="special";
$topArea="special";
$cate = $_GET['cate'];
$pageNum="2$cate";
$subNum="$cate";
$src="/images/$folderName$cate/";
$nav = "special";
switch ($cate) {
    case "01":
		
		$title1 = "<h2>SWIMMING POOL<br><span>수영장 / 실내수영장</span></h2>";
		$title2 = "<h3>SWIMMING POOL<br><span>SPECIAL STORY OF MIRAMONTI</span></h3>";

        $info = "독채객실은 개별 야외수영장이 준비되어 있습니다.<br>※독채/풀빌라 야외수영장 이용시간<br>- 오전 9시~11시 / 오후 3시~8시<br><br>-야외수영장 2022년 운영종료";
        break;

        case "02":
		
            $title1 = "<h2>SWIMMING POOL<br><span>수영장 / 실내수영장</span></h2>";
            $title2 = "<h3>SWIMMING POOL<br><span>SPECIAL STORY OF MIRAMONTI</span></h3>";
    
            $info = "독채객실은 개별 야외수영장이 준비되어 있습니다.<br>※독채/풀빌라 야외수영장 이용시간<br>- 오전 9시~11시 / 오후 3시~8시<br><br>-야외수영장 2022년 운영종료";
            break;

            case "03":
		
                $title1 = "<h2>SWIMMING POOL<br><span>수영장 / 실내수영장</span></h2>";
                $title2 = "<h3>SWIMMING POOL<br><span>SPECIAL STORY OF MIRAMONTI</span></h3>";
        
                $info = "독채객실은 개별 야외수영장이 준비되어 있습니다.<br>※독채/풀빌라 야외수영장 이용시간<br>- 오전 9시~11시 / 오후 3시~8시<br><br>-야외수영장 2022년 운영종료";
                break;

                case "04":
		
                    $title1 = "<h2>SWIMMING POOL<br><span>수영장 / 실내수영장</span></h2>";
                    $title2 = "<h3>SWIMMING POOL<br><span>SPECIAL STORY OF MIRAMONTI</span></h3>";
            
                    $info = "독채객실은 개별 야외수영장이 준비되어 있습니다.<br>※독채/풀빌라 야외수영장 이용시간<br>- 오전 9시~11시 / 오후 3시~8시<br><br>-야외수영장 2022년 운영종료";
                    break;

                    case "05":
		
                        $title1 = "<h2>SWIMMING POOL<br><span>수영장 / 실내수영장</span></h2>";
                        $title2 = "<h3>SWIMMING POOL<br><span>SPECIAL STORY OF MIRAMONTI</span></h3>";
                
                        $info = "독채객실은 개별 야외수영장이 준비되어 있습니다.<br>※독채/풀빌라 야외수영장 이용시간<br>- 오전 9시~11시 / 오후 3시~8시<br><br>-야외수영장 2022년 운영종료";
                        break;

                        case "06":
		
                            $title1 = "<h2>SWIMMING POOL<br><span>수영장 / 실내수영장</span></h2>";
                            $title2 = "<h3>SWIMMING POOL<br><span>SPECIAL STORY OF MIRAMONTI</span></h3>";
                    
                            $info = "독채객실은 개별 야외수영장이 준비되어 있습니다.<br>※독채/풀빌라 야외수영장 이용시간<br>- 오전 9시~11시 / 오후 3시~8시<br><br>-야외수영장 2022년 운영종료";
                            break;

    }
?>
<div class="special_slide">
    <div class="textbox">
        <h2><?php echo $title1?></h2> 
    </div>
    <? include_once ('topArea.php'); ?>
</div>
<?php
include('subnav.php');
?>

<div class="special_contents">
    <div class="leftbox"><img src="<?php echo $src ?>img01.jpg" alt="" class="img01"><div class="textbox2  wow fadeIn"><?php echo $title2 ?><?php echo $info ?></div></div>
    <div class="rightbox"><img src="<?php echo $src ?>img02.jpg" alt="" class="img02"><img src="<?php echo $src ?>img03.jpg" alt="" class="img03 wow fadeInRight"><img src="<?php echo $src ?>img04.jpg" alt="" class="img04 wow fadeInRight"><img src="/images/special/deco1.png" alt="" class="deco"></div>
</div>

<?php
  include('footer.php');
?>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>