<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content-index="IE=edge">
        <meta name="viewport" content-index="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Личный кабинет</title>
    </head>

    <?php
    include 'functions.php';

    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
    if (checkPassword($login, $password)) {
        session_start();
        $_SESSION['login'] = $login;
        header('Location: index.php');
        exit;
        }
    }
    ?>

    <body>
        <div class="container">

        <div class="spa-logo">
            <img src="img/spa-logo.jpg" alt="Логотип">
        </div>

        <div class="btn-login-index">
        <input type="button" value="На главную" onClick='location.href="index.php"'>
        </div>

    <?php 
    if (!getCurrentUser()) { ?>
        <form class="login-form" method="post">
            <input name="login" type="text" placeholder="Логин" required>
            <br>
            <input name="password" type="password" placeholder="Пароль" required>
            <br>
            <input name="submit" type="submit" value="Войти">
            <br>
            <div class="login-form-href">
                <a href="#">Регистрация</a><a href="#">Забыли Пароль?</a>
            </div>
        </form>
    <?php } ?>
        </div>
    </body>
</html>