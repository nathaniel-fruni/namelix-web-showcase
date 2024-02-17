<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

$teamItems = $bodyFunctionsObj->getTeam();

include_once "html_menu_team.php";

if(isset($_GET['status']) && $_GET['status'] == 2) {
    echo "<strong>Value updated correctly</strong><br><br>";
} elseif (isset($_GET['status']) && $_GET['status'] == 3) {
    echo "<strong>Value cannot be updated</strong><br><br>";
}
?>

<ul>
    <?php
    foreach ($teamItems as $key=>$TeamItem) {
        echo "<li>Meno: ". $TeamItem['meno'] . " " . $TeamItem['priezvisko'] . " Pozícia:" .$TeamItem['pozicia']. "  Názov fotky: " .$TeamItem['picture_name'] ." ".
            '<a href="delete_team.php?id='.$TeamItem['id'].'">Delete</a> /
             <a href="update_form_team.php?id='.$TeamItem['id'].'">Update</a>
            </li>';
    }
    ?>
</ul>
