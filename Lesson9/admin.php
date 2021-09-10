<?php
session_start();
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
    <title>Панель администрирования</title>
</head>
<body>

<?php
if (!empty($_SESSION['userName'])) {
    if ($_SESSION['userName'] != 'root') { ?>
        <div class="msg alert alert-danger" role="alert"><p>У вас нет прав!</p><p><a href="/Lesson9/index.php">На главную</a></p></div>;
        <?php die;
    }
}
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/services/functions.php';

$products = getProducts();
if ($products !== false) {
    $view = new View();
    $view->assign('products', $products);
    $view->display(__DIR__ . '/templates/admin.php');
} else {
    echo 'Ошибка при получении товаров';
}
?>

</body>
</html>