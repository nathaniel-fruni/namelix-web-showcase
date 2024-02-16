<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

if (isset($_GET['id'])) {
    $delete = $bodyFunctionsObj->deleteTeamMember($_GET['id']);
    if ($delete) {
        header('Location: teamlist.php');
    } else {
        echo "Error";
    }
} else {
    header('Location: teamlist.php');
}