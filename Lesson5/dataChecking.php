<?php

session_start();
include __DIR__ . '/functions.php';

if (!isset($_POST['login']) && !isset($_POST['password'])) {
    ?><p>Введите данные для входа на сайт!</p>
    <?php
} else if (!isset($_POST['login'])) {
    ?><p>Логин не введен!</p>
    <?php
} else if (!isset($_POST['password'])) {
    ?><p>Пароль не введен!</p>
    <?php
} else {
    if (checkPassword($_POST['login'], $_POST['password'])) {
        ?><p>Вы успешно вошли на сайт!</p><?php
        $_SESSION['username'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
    } else {
        ?><p>Логин или пароль не верные!</p><?php
    }
}