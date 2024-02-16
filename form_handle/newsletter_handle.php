<?php
include_once "../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

if (isset($_POST['submit'])) {
    $insert = $bodyFunctionsObj->insertMail($_POST['mail']);
    if ($insert) {
        header('Location: ../index.php?status=1');
    } else {
        echo "Nebolo možné vložiť dáta.";
    }
}
?>