<?php

session_start();

require_once __DIR__ . '/../classes/DB.php';

if (!empty($_POST['delete_product_select'])) {
    $productFields = explode('&&&', $_POST['delete_product_select']);
    $deleteReviews = 'DELETE FROM reviews WHERE id_product = '
        . $productFields[0];
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    if (true == $DB->execute($deleteReviews)) {
        $deleteProduct = 'DELETE FROM products WHERE id = ' . $productFields[0];
        if (true == $DB->execute($deleteProduct)) {
            echo 'Товар успешно удален';
        } else {
            echo 'Произошла ошибка';
        }
    } else {
        echo 'Произошла ошибка';
    };
}
