<?php

//запускаем сессию
session_start();
include __DIR__ . '/functions.php';

if (isset($_SESSION['username']) and isset($_SESSION['password'])) {
    if (checkPassword($_SESSION['username'], $_SESSION['password'])) {
        ?>
        <form action="/Lesson5/upload.php" method="post"
              enctype="multipart/form-data">
            <input type="file" name="img">
            <button type="submit">Отправить файл</button>
        </form>
        <?php
    } else {
        ?><p>Авторизация не пройдена! Вернитесь на <a href="/Lesson5/login.php">страницу
                авторизации</a></p>
        <?php
    }
} else {
    ?><p>Пользователь не авторизован!</p><p><a href="/Lesson5/login.php">Войти
            на сайт</a></p> <?php
}
