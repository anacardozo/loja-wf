<?php
session_start(); 


$valid_username = "etec";
$valid_password_hash = md5("abacaxi"); 


$username = isset($_POST['campo_email']) ? $_POST['campo_email'] : '';
$password = isset($_POST['campo_senha']) ? $_POST['campo_senha'] : '';


if ($username === $valid_username && md5($password) === $valid_password_hash) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location:../view/index.php");
    exit();
} else {
    echo "Login inválido. <a href='../view/login.php'>Tente novamente</a>.";
}
?>
