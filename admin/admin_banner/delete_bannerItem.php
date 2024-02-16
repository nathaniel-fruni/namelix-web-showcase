<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

if (isset($_GET['id'])) {
    $delete = $bodyFunctionsObj->deleteBannerItem($_GET['id']);
    if ($delete) {
        header('Location: bannerItems.php');
    } else {
        echo "Error";
    }
} else {
    header('Location: bannerItems.php');
}
