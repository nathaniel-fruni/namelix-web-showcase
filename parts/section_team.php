<?php
include_once 'BodyFunctions.php';

use main\BodyFunctions;
$bodyFunctionsObj = new BodyFunctions();
$teamItems = $bodyFunctionsObj->getTeam();
?>

<section class="section" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>Náš Tím</h6>
                    <h2>mladí a talentovaní členovia</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <div class="owl-carousel owl-theme">
                    <?php
                    $bodyFunctionsObj->printTeam($teamItems);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>