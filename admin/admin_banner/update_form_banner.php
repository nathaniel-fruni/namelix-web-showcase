<?php
include_once "../auth/auth_check.php";
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

$bannerItem = $bodyFunctionsObj->getBannerItem($_GET['id']);

include_once "html_menu_banner.php";
?>
<form action="update_bannerItems.php" method="post">
    Prvý popis:<br>
    <input type="text" name="popis1" placeholder="Prvý popis" value="<?php echo $bannerItem['popis1']; ?>"><br>
    Druhý popis:<br>
    <input type="text" name="popis2" placeholder="Druhý popis" value="<?php echo $bannerItem['popis2']; ?>"><br>
    Názov obrázka:<br>
    <input type="text" name="picture_name" placeholder="Názov obrázka" value="<?php echo $bannerItem['picture_name']; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $bannerItem['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>