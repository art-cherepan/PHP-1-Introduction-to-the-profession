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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Lesson9/css/bootstrap.min.css" >
    <!--собственные стили-->
    <link rel="stylesheet" href="/Lesson9/css/styles.css">
    <!-- Bootstrap JS + Popper JS -->
    <script defer src="/Lesson9/js/bootstrap.bundle.min.js"></script>
    <title>Панель администрирования</title>
</head>
<body>

<?php
if (!empty($_SESSION['userName'])) {
    if ('root' != $_SESSION['userName']) { ?>
        <div class="msg alert alert-danger" role="alert"><p>У вас нет прав!</p><p><a href="/Lesson9/index.php">На главную</a></p></div>;
        <?php die;
    }
} else { ?>
    <div class="msg alert alert-danger" role="alert"><p>У вас нет прав!</p><p><a href="/Lesson9/index.php">На главную</a></p></div>;
<?php }
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/Models/Products.php';
require_once __DIR__ . '/classes/Models/Services.php';

$products = new Products();
$products = $products->getProducts();

$services = new Services();
$services = $services->getServices();

if ($products !== false) {
    $view = new View();
    $view->assign('products', $products);
    $view->assign('services', $services);
    $view->display(__DIR__ . '/templates/admin.php');
} else {
    echo 'Ошибка при получении товаров';
}
?>

</body>
</html>