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
</head>
<body>
<?php
require_once __DIR__ . '/../classes/View.php';

if (!empty($_POST['edit_product_select'])) {
    $productFields = explode('&&&', $_POST['edit_product_select']);
    $view = new View();
    $view->assign('productFields', $productFields);
    $view->display(__DIR__ . '/../templates/editProduct.php');
} else {
    echo 'Данные о товаре не переданы';
}
?>
</body>
</html>

