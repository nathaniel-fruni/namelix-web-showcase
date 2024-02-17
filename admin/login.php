<?php
include_once "auth/Auth.php";

use admin\auth\Auth;

$auth = new Auth("localhost", 3306, "root", "", "namelix");

if(isset($_POST['login'])) {
    $login = $auth->login($_POST['meno'], $_POST['heslo']);
    if($login) {
        session_start();
        $_SESSION['login'] = true;
        header('Location: admin_home.php');
    } else {
        echo ('Incorrect login');
    }
} else {
    ?>

    <div style="font-family: 'Raleway', sans-serif; font-weight: 400;  background-image: linear-gradient(145deg, #339b9e 0%, #68cc98 100%); color: #fff; min-height: 100%;">
    <div class="py-3 text-center d-flex align-items-center justify-content-center" style="min-height: 100%;">
        <div class="container">
            <div class="row" >
                <div class="mx-auto p-4 col-md-5">
                    <h2 class="mb-4">Prihlásenie</h2>
                    <form action="" method="post">
                        <div class="form-group"> <input type="email" class="form-control" style="border-radius: 19px; border: 1px solid #fff; background-color: transparent; padding: 0px 20px; outline: none;" name="meno" placeholder="Email"></div>
                        <div class="form-group"> <input type="password" class="form-control" style="border-radius: 19px; border: 1px solid #fff; background-color: transparent; padding: 0px 20px; outline: none;" name="heslo" placeholder="Heslo"></div>
                        <button type="submit" name="login" class="main-button">Prihlásiť sa</button>
                    </form><br>
                    <a href="../index.php" class="text-light">Späť na stránku</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/templatemo-breezed.css">

    <?php
}
?>
