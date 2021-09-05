<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/services/functions.php';

$products = getProducts();
if ($products === false) {
    echo 'Ошибка при получении товаров';
} elseif (count($products) == 0) {
    echo 'В базе данных нет товаров';
} else {
    $view = new View();
    $view->assign('products', $products);
    $view->display(__DIR__ . '/templates/main.php');
}