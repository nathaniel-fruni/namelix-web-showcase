<?php
include_once "../auth/auth_check.php";
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

if(isset($_POST['submit'])) {
    $bodyFunctionsObj = new BodyFunctions();
    $update = $bodyFunctionsObj->updateTeamMember(
        $_POST['id'],
        $_POST['meno'],
        $_POST['priezvisko'],
        $_POST['pozicia'],
        $_POST['picture_name']
    );
    if($update) {
        header('Location: teamlist.php?status=2');
    } else {
        header('Location: teamlist.php?status=3');
    }
} else {
    header('Location: teamlist.php');
}