<?php
include_once "../auth/auth_check.php";
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

if(isset($_POST['submit'])) {
    $bodyFunctionsObj = new BodyFunctions();
    $update = $bodyFunctionsObj->updateBannerItem(
        $_POST['id'],
        $_POST['popis1'],
        $_POST['popis2'],
        $_POST['picture_name']
    );
    if($update) {
        header('Location: bannerItems.php?status=2');
    } else {
        header('Location: bannerItems.php?status=3');
    }
} else {
    header('Location: bannerItems.php');
}