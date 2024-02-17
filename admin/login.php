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
        echo "Incorrect login <br>";
    }
} else {
    ?>
    <form action="" method="post">
        Meno: <br>
        <input type="text" name="meno" value="" placeholder="Username"><br>
        Heslo: <br>
        <input type="password" name="heslo" value="" placeholder="Password"> <br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php
}