<?php
if ($folderName=='main'){
    if($mobile) $directory = './images/'.$folderName.'/m/';
    else $directory = './images/'.$folderName.'/';
    $files = glob($directory . '01_*.jpg');
} 
elseif ($folderName=='about'){
    if($mobile) $directory = './images/'.$folderName.'/m/';
    else $directory = './images/'.$folderName.'/';
    $files = glob($directory . '01_*.jpg');
}
elseif ($folderName=='room'){
    if($mobile) $directory = './images/'.$folderName.$subNum.'/m/';
    else $directory = './images/'.$folderName.$subNum.'/';
    $files = glob($directory . '01_*.jpg');
}
elseif ($folderName=='special'){
    if($mobile) $directory = './images/'.$folderName.$subNum.'/m/';
    else $directory = './images/'.$folderName.$subNum.'/';
    $files = glob($directory . '01_*.jpg');
}
elseif ($folderName=='map') {
    if($mobile) $directory = './images/'.$folderName.'/m/';
    else $directory = './images/'.$folderName.'/';
    $files = glob($directory . '01_*.jpg');
}
elseif ($folderName=='tour') {
    if($mobile) $directory = './images/'.$folderName.'/m/';
    else $directory = './images/'.$folderName.'/';
    $files = glob($directory . '01_*.jpg');
}
?>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="/css/swiper.css">

<?php if ($topArea == 'main') { 
    
    ?>
<div class="swiper-wrap">
    <div class="swiper1">
        <div class="swiper-wrapper">
        <?php
            foreach ($files as $file) {
                echo "<div class='swiper-slide'><img src='" . $file . "'></div>";
            }
            ?>
        </div>
        <div class="slide_page">
            <div class="swiper-button-prev mainbtn1"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next mainbtn2"></div> 
        </div>
    </div>

</div>
<?php } ?>

<?php if ($topArea == 'about') { ?>
<div class="swiper-wrap">
    <div class="swiper5">
        <div class="swiper-wrapper">
        <?php
            foreach ($files as $file) {
                echo "<div class='swiper-slide'><img src='" . $file . "'></div>";
            }
            ?>
        </div>
        <div class="slide_page">
            <div class="swiper-button-prev aboutbtn1"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next aboutbtn2"></div> 
        </div>
    </div>
</div>
<?php } ?>

<?php if ($topArea == 'room') { ?>
<div class="swiper-wrap">
    <div class="swiper4">
        <div class="swiper-wrapper">
        <?php
            foreach ($files as $file) {
                echo "<div class='swiper-slide'><img src='" . $file . "'></div>";
            }
            ?>
        </div>
    <div class="slide_page">
    <div class="swiper-button-prev roombtn1"></div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next roombtn2"></div>
    </div>
    </div>
</div>
<?php } ?>

<?php if ($topArea == 'special') { ?>
<div class="swiper-wrap">
    <div class="swiper6">
        <div class="swiper-wrapper">
        <?php
            foreach ($files as $file) {
                echo "<div class='swiper-slide'><img src='" . $file . "'></div>";
            }
            ?>
        </div>
        <div class="slide_page">
    <div class="swiper-button-prev specialbtn1"></div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next specialbtn2"></div>
    </div>  
    </div>

</div>
<?php } ?>


<?php if ($topArea == 'map') { ?>
    <?php
            foreach ($files as $file) {
                echo "<img src='" . $file . "'>";
            }
            ?>
<?php } ?>

<?php if ($topArea == 'tour') { ?>
    <?php
            foreach ($files as $file) {
                echo "<img src='" . $file . "'>";
            }
            ?>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="/js/swiper.js"></script>