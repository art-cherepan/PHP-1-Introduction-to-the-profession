<?php

//запускаем сессию
session_start();
include __DIR__ . '/functions.php';

if (getCurrentUser() !== null) {
    header('Location: /Lesson5/index.php');
} else {
    ?>
    <form action="/Lesson5/dataChecking.php" method="post">
        Логин: <input type="text" name="login">
        Пароль: <input type="text" name="password">
        <button type="submit">Войти</button>
    </form>
    <?php
}
