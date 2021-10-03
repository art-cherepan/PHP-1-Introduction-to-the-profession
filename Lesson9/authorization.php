<?php
if (!isset($_SESSION)) {
    session_start();
} ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Lesson9/css/bootstrap.min.css">
    <!--собственные стили-->
    <link rel="stylesheet" href="/Lesson9/css/styles.css">
    <!-- Bootstrap JS + Popper JS -->
    <script defer src="/Lesson9/js/bootstrap.bundle.min.js"></script>
    <title>Страница авторизации</title>
</head>
<body>
<?php
require_once __DIR__ . '/classes/View.php';

$view = new View();
$view->display(__DIR__ . '/templates/authorization.php');
?>
</body>
</html>