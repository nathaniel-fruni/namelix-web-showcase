<?php
include_once "../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

if (isset($_POST['submit'])) {
    $insert = $bodyFunctionsObj->insertContact($_POST['meno'], $_POST['telefon'], $_POST['email'], $_POST['predmet'], $_POST['sprava']);
    if ($insert) {
        header('Location: ../index.php?status=1');
    } else {
        echo "Nebolo možné vložiť dáta.";
    }
}
?>