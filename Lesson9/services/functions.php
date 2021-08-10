<?php

require_once __DIR__ . '/../classes/DB.php';
require_once __DIR__ . '/../classes/Models/Product.php';

function getProducts()
{
    $getAllProductsSQL = 'SELECT * FROM products';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $queryProducts = $DB->query($getAllProductsSQL, []);
    if ($queryProducts != false) {
        $products = [];
        foreach ($queryProducts as $queryProduct) {
            $product = new Product($queryProduct['id'], $queryProduct['name'],
                $queryProduct['price'], $queryProduct['description'],
                $queryProduct['path']);
            $products[] = $product;
        }
        return $products;
    } else {
        return false;
    }
}