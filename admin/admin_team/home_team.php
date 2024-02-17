<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

if (isset($_POST['submit'])) {
    $insert = $bodyFunctionsObj->insertTeamMember($_POST['meno'],$_POST['priezvisko'],$_POST['pozicia'], $_POST['picture_name']);
    if ($insert) {
        header('Location: home_team.php?status=1');
    } else {
        echo "Nebolo možné vložiť dáta.";
    }
} else {
    include_once "html_menu_team.php";
    if(isset($_GET['status']) && $_GET['status'] == 1) {
        echo "<strong>Dáta vložené</strong><br><br>";
    }
?>

<form action="home_team.php" method="post">
    Meno: <br>
    <input type="text" name="meno" placeholder="Meno" value=""><br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" placeholder="Priezvisko" value=""><br>
    Pozícia:<br>
    <input type="text" name="pozicia" placeholder="Pozícia" value=""><br>
    Názov fotky:<br>
    <input type="text" name="picture_name" placeholder="Názov fotky" value=""><br>
    <input type="submit" name="submit" value="Vložiť"><br>
</form>
<?php
}
