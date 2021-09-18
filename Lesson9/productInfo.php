<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/services/functions.php';

if (!empty($_GET['id'])) {
    $product = getProduct($_GET['id']);
    var_dump($product);
} else {
    echo 'Не передан идентификатор товара';
}
