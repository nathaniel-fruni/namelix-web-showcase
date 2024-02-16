<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

if (isset($_GET['id'])) {
    $delete = $bodyFunctionsObj->deleteProject($_GET['id']);
    if ($delete) {
        header('Location: projects.php');
    } else {
        echo "Error";
    }
} else {
    header('Location: projects.php');
}
