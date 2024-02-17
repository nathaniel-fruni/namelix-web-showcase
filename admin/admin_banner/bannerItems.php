<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

$banner = $bodyFunctionsObj->getBanner();

include_once "html_menu_banner.php";

if(isset($_GET['status']) && $_GET['status'] == 2) {
    echo "<strong>Value updated correctly</strong><br><br>";
} elseif (isset($_GET['status']) && $_GET['status'] == 3) {
    echo "<strong>Value cannot be updated</strong><br><br>";
}
?>

<ul>
    <?php
    foreach ($banner as $key=>$bannerItem) {
        echo "<li>Prvý popis: ". $bannerItem['popis1'] . "<br> Druhý popis: " . $bannerItem['popis2'] . "<br> Názov obrázka: " .$bannerItem['picture_name'] ." ".
            '<a href="delete_bannerItem.php?id='.$bannerItem['id'].'">Delete</a> /
             <a href="update_form_banner.php?id='.$bannerItem['id'].'">Update</a>
            </li>
            <br>';
    }
    ?>
</ul>