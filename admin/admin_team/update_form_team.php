<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

$teamItem = $bodyFunctionsObj->getTeamMember($_GET['id']);

include_once "html_menu_team.php";
?>
<form action="update_team.php" method="post">
    Meno:<br>
    <input type="text" name="meno" placeholder="Meno" value="<?php echo $teamItem['meno']; ?>"><br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" placeholder="Priezvisko" value="<?php echo $teamItem['priezvisko']; ?>"><br>
    Pozícia:<br>
    <input type="text" name="pozicia" placeholder="Pozícia" value="<?php echo $teamItem['pozicia']; ?>"><br>
    Názov fotky:<br>
    <input type="text" name="picture_name" placeholder="Názov fotky" value="<?php echo $teamItem['picture_name']; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $teamItem['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>