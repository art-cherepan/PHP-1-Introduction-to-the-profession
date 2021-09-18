<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/../classes/DB.php';

if (empty($_POST['firstName'])) {
    echo 'Не заполнено имя пользователя';
} elseif (empty($_POST['secondName'])) {
    echo 'Не заполнена фамилия пользователя';
} elseif (empty($_POST['phone'])) {
    echo 'Не заполнен телефон пользователя';
} elseif (empty($_POST['userName'])) {
    echo 'Не заполнен логин';
} elseif (empty($_POST['password'])) {
    echo 'Не заполнен пароль';
} elseif (empty($_POST['passwordRepeat'])) {
    echo 'Не заполнен пароль повторно';
} elseif ($_POST['password'] != $_POST['passwordRepeat']) {
    echo 'Пароли не совпадают';
} elseif (true == checkUserName($_POST['userName'])) {
    echo 'Пользователь с таким имененм уже зарегестрирован';
} elseif (true == checkPhone($_POST['phone'])) {
    echo 'Пользователь с таким телефоном уже зарегестрирован';
} else {
    if (true == registrationUser($_POST['userName'], $_POST['password'],
            $_POST['firstName'], $_POST['secondName'], $_POST['patronymic'],
            $_POST['email'], $_POST['phone'])
    ) {
        $_SESSION['userName'] = $_POST['userName'];
        $_SESSION['password'] = $_POST['password'];
        ?><p>Пользователь успешно зарегестрирован!</p><p><a
                    href="/Lesson9/index.php">На главную</a></p><?php
    } else {
        ?><p>Ошибка при регистрации пользователя</p><p><a
                    href="/Lesson9/index.php">На главную</a></p><?php
    }
}