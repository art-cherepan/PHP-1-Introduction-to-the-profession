<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<form action="/Lesson9/services/registration.php" method="post">
    <p>Имя: <input type="text" name="firstName" value="<?php
        echo $_POST['firstName']; ?>"/></p>
    <p>Фамилия: <input type="text" name="secondName" value="<?php
        echo $_POST['secondName']; ?>"/></p>
    <p>Отчество: <input type="text" name="patronymic" value="<?php
        echo $_POST['patronymic']; ?>"/></p>
    <p>Адрес электронной почты: <input type="email" name="email"
                                       value="<?php
                                       echo $_POST['email']; ?>"/></p>
    <p>Телефон для связи: <input type="tel" name="phone" value="<?php
        echo $_POST['phone']; ?>"/></p>
    <p>Придумайте логин: <input type="text" name="userName" value="<?php
        echo $_POST['userName']; ?>"/></p>
    <p>Пароль: <input type="password" name="password" value="<?php
        echo $_POST['password']; ?>"/></p>
    <p>Повторите пароль: <input type="password" name="passwordRepeat"
                                value="<?php
                                echo $_POST['passwordRepeat']; ?>"/></p>
    <button type="submit">Регистрация</button>
</form>
</body>
</html>