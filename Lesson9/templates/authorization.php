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
    <!--собственные стили-->
    <link rel="stylesheet" href="/Lesson9/css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Bootstrap JS + Popper JS -->
    <script defer src="js/bootstrap.bundle.min.js"></script>
    <title>Авторизация</title>
</head>
<body>

<body>
<form action="/Lesson9/services/authorization.php" method="post">
    <p>Логин: <input type="text" name="userName" value="<?php
        echo $_POST['userName']; ?>"/></p>
    <p>Пароль: <input type="password" name="password" value="<?php
        echo $_POST['password']; ?>"/></p>
    <button type="submit">Войти</button>
</form>
</body>
</html>