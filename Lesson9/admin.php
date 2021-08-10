<?php

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/services/functions.php';

$products = getProducts();
if ($products != false) {
    $view = new View();
    $view->assign('products', $products);
    $view->display(__DIR__ . '/templates/admin.php');
} else {
    echo 'Ошибка при получении товаров';
}
