<?php
include_once "../auth/auth_check.php";
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
    ?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namelix - Admin</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/templatemo-breezed.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body class="admin-body">

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="../admin_home.php" class="logo">
                        .namelix - admin
                    </a>
                    <ul class="nav">
                        <li><a href="../admin_home.php" class="active">Domov</a></li>
                        <li><a href="../admin_projects/home_projects.php">Projekty</a></li>
                        <li><a href="home_team.php">Tím</a></li>
                        <li><a href="../admin_banner/home_banner.php">Banner</a></li>
                        <li><a href="../logout.php">Odhlásiť sa</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>

<div style="display: flex; flex-direction: column;">
<section class="section">
    <div class="container">
        <div style="width: 100%; text-align: center;">
            <h2 style="color:white; margin-bottom: 1.5em;">Vložiť člena tímu</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="contact-form">
                    <form action="home_team.php" method="post">
                        <div class="row text-center">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="meno" type="text" placeholder="Meno" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="priezvisko" type="text" placeholder="Priezvisko" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="pozicia" type="text" placeholder="Pozícia" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="picture_name" type="text" placeholder="Názov fotky" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" name="submit" class="main-button-icon">Vložiť <i class="fa fa-arrow-right"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div style="width: 100%; text-align: center; margin-top: 3em;">
            <a href="teamlist.php" class="main-filled-button">Zoznam členov tímu</a>
        </div>
    </div>
</section>

<?php
if(isset($_GET['status']) && $_GET['status'] == 1) {
    echo "<section style='text-align: center; margin-top: 3em;'><strong>Dáta vložené</strong></section>";
}
?>

</div>
<!-- jQuery -->
<script src="../../assets/js/jquery-2.1.0.min.js"></script>

<!-- Plugins -->
<script src="../../assets/js/owl-carousel.js"></script>
<script src="../../assets/js/scrollreveal.min.js"></script>
<script src="../../assets/js/slick.js"></script>
<script src="../../assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="../../assets/js/custom.js"></script>

</body>
</html>

    <?php
}
?>