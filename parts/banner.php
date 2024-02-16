<?php
include_once 'BodyFunctions.php';

use main\BodyFunctions;
$bodyFunctionsObj = new BodyFunctions();
$banner = $bodyFunctionsObj->getBanner();
?>

<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <?php
        $bodyFunctionsObj->printBanner($banner);
        ?>
    </div>
</div>
<div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
