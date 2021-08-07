<?php

require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/Models/Product.php';

$product = new Product('test', 'test', 'test', 1);
$product->setId(1);
$product->getReviews();
var_dump($product);