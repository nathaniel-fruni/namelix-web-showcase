<?php
include_once "auth/auth_check.php";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namelix - Admin</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/templatemo-breezed.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body class="admin-body">

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="admin_home.php" class="logo">
                        .namelix - admin
                    </a>
                    <ul class="nav">
                        <li><a href="admin_home.php" class="active">Domov</a></li>
                        <li><a href="admin_projects/home_projects.php">Projekty</a></li>
                        <li><a href="admin_team/home_team.php">Tím</a></li>
                        <li><a href="admin_banner/home_banner.php">Banner</a></li>
                        <li><a href="logout.php">Odhlásiť sa</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>

<div style="width: 100%">
    <div class="buttons-container-admin">
        <div class="edit-btn-admin">
            <div>
                <div>
                    <a href="admin_projects/home_projects.php" class="main-filled-button">Upraviť projekty</a>
                </div>
            </div>
        </div>

        <div class="edit-btn-admin">
            <div>
                <div>
                    <a href="admin_team/home_team.php" class="main-stroked-button">Upraviť tím</a>
                </div>
            </div>
        </div>

        <div class="edit-btn-admin">
            <div>
                <div>
                    <a href="admin_banner/home_banner.php" class="main-filled-button">Upraviť banner</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../assets/js/jquery-2.1.0.min.js"></script>



<!-- Plugins -->
<script src="../assets/js/owl-carousel.js"></script>
<script src="../assets/js/scrollreveal.min.js"></script>
<script src="../assets/js/slick.js"></script>
<script src="../assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="../assets/js/custom.js"></script>

</body>
</html>
