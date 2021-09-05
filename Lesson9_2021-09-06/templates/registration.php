<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

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
    <p>Имя: <input type="text" name="firstName" value="<?php if (!empty($_POST['firstName'])) {
            echo $_POST['firstName'];
        } else {
            echo '';
        } ?>"/></p>
    <p>Фамилия: <input type="text" name="secondName" value="<?php if (!empty($_POST['secondName'])) {
            echo $_POST['secondName'];
        } else {
            echo '';
        } ?>"/></p>
    <p>Отчество: <input type="text" name="patronymic" value="<?php if (!empty($_POST['patronymic'])) {
            echo $_POST['patronymic'];
        } else {
            echo '';
        } ?>"/></p>
    <p>Адрес электронной почты: <input type="email" name="email" value="<?php if (!empty($_POST['email'])) {
            echo $_POST['email'];
        } else {
            echo '';
        } ?>"/></p>
    <p>Телефон для связи: <input type="tel" name="phone" value="<?php if (!empty($_POST['phone'])) {
            echo $_POST['phone'];
        } else {
            echo '';
        } ?>"/></p>
    <p>Придумайте логин: <input type="text" name="userName" value="<?php if (!empty($_POST['userName'])) {
            $_POST['userName'];
        } else {
            echo '';
        } ?>"/></p>
    <p>Пароль: <input type="password" name="password" value="<?php if (!empty($_POST['password'])) {
            echo $_POST['password'];
        } else {
            echo '';
        } ?>"/></p>
    <p>Повторите пароль: <input type="password" name="passwordRepeat"
                                value="<?php if (!empty($_POST['passwordRepeat'])) {
                                    echo $_POST['passwordRepeat'];
                                } else {
                                    echo '';
                                } ?>"/></p>
    <button type="submit">Регистрация</button>
</form>
</body>
</html>