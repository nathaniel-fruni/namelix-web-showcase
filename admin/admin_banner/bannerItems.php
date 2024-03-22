<?php
include_once "../auth/auth_check.php";
include_once "../../BodyFunctions.php";

use main\BodyFunctions;

$bodyFunctionsObj = new BodyFunctions();

$bannerItems = $bodyFunctionsObj->getBanner();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namelix - Admin</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/templatemo-breezed.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/owl-carousel.css">
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
                        <li><a href="../admin_team/home_team.php">Tím</a></li>
                        <li><a href="home_banner.php">Banner</a></li>
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
    <section class="section" id="testimonials-admin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Zoznam banner-ov</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <?php
                        foreach($bannerItems as $key => $item){
                            echo '<div class="item author-item">
                   <div class="member-thumb d-flex justify-content-center">
                    <img class="img-thumbnail" src="../../assets/images/'.$item['picture_name'].'" style="width: 30%; height: 30%;">
                   </div>
                   <h4>'.$item['popis1'].'</h4>
                   <span>'.$item['popis2'].'</span>
                   <div class="d-flex justify-content-center">
                   
                     <a href="update_form_banner.php?id='.$item['id'].'" class="main-filled-button m-1"><i class="fas fa-edit"></i></a>
                     <a href="delete_bannerItem.php?id='.$item['id'].'" class="main-filled-button m-1"><i class="fas fa-trash-alt"></i></a>
                   </div>
                  </div>'
                            ;
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div style="width: 100%; text-align: center; margin-top: 2em;">
                <a href="home_banner.php" class="main-filled-button">Vložiť banner</a>
            </div>
        </div>
    </section>

    <?php
    if(isset($_GET['status']) && $_GET['status'] == 2) {
        echo "<div class='text-center mt-5'><strong>Upravené úspešne</strong></div>";
    } elseif (isset($_GET['status']) && $_GET['status'] == 3) {
        echo "<div class='text-center mt-5'><strong>Nebolo možné upraviť</strong></div>";
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