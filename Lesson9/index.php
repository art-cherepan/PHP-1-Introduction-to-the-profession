<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/Models/Products.php';
require_once __DIR__ . '/classes/Models/Services.php';

$products = new Products();
$products = $products->getProducts();

$services = new Services();
$services = $services->getServices();

if (false != $products && false != $services) {
    $view = new View();
    $view->assign('products', $products);
    $view->assign('services', $services);
    $view->display(__DIR__ . '/templates/main.php');
} else {
    echo 'Ошибка при получении товаров и услуг!';
}
