<?php
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

if(isset($_POST['submit'])) {
    $bodyFunctionsObj = new BodyFunctions();
    $update = $bodyFunctionsObj->updateProject(
        $_POST['id'],
        $_POST['partner'],
        $_POST['popis'],
        $_POST['sluzba']
    );
    if($update) {
        header('Location: projects.php?status=2');
    } else {
        header('Location: projects.php?status=3');
    }
} else {
    header('Location: projects.php');
}
