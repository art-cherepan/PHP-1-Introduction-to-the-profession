<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/../classes/DB.php';

if (empty($_POST['userName'])) {
    echo 'Введите логин';
} elseif (empty($_POST['password'])) {
    echo 'Введите пароль';
} else {
    if (true == checkUserName($_POST['userName'])) {
        if (true == checkPassword($_POST['userName'], $_POST['password'])) {
            $_SESSION['userName'] = $_POST['userName'];
            $_SESSION['password'] = $_POST['password'];
            ?><p>Вы успешно вошли на сайт!</p><p><a href="/Lesson9/index.php">На главную</a></p><?php
        } else {
            ?><p>Пароль неверный</p><p><a href="/Lesson9/index.php">На главную</a></p><?php
        }
    }
    else {
        ?><p>Пользователь не найден</p><p><a href="/Lesson9/index.php">На главную</a></p><?php
    }
}