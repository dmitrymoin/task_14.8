<?php

// Функция, которая возвращает массив всех пользователей и их паролей
function getUsersList() {
    $users = array();
    include 'users.php'; // подключаем файл с массивом $usersArr
    foreach ($usersArr as $login => $password) {
        $users[$login] = $password; // добавляем логин и пароль в массив $users
    }
    return $users;
}

// Функция, которая проверяет, существует ли пользователь с указанным логином
function existsUser($login) {
    $users = getUsersList();
    return array_key_exists($login, $users);
}

// Функция, которая проверяет, правильный ли пароль введен пользователем
function checkPassword($login, $password) {
    $login = $_POST['login'] ?? null;
    $password = md5($_POST['password']) ?? null;
    $users = getUsersList();
    if (array_key_exists($login, $users)) { // проверяем, существует ли пользователь с указанным логином
        return $users[$login] === $password; // сравниваем пароль пользователя с введенным паролем
    }
    return false;
}

// Функция, которая возвращает текущего пользователя или null, если пользователь не авторизован
function getCurrentUser() {
    session_start();
    if (isset($_SESSION['login'])) {
        return $_SESSION['login'];
    }
    return null;
}

?>