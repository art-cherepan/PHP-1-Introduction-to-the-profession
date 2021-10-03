<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../Models/ReviewProduct.php';
require_once __DIR__ . '/../Models/Users.php';

if (!empty($_POST['review'])) {
    if (!empty($_SESSION['userName'])) {
        if (!empty($_POST['idProduct'])) {
            $users = new Users();
            $idUser = $users->getIdByUserName($_SESSION['userName']);
            $reviewProduct = new ReviewProduct('',$idUser, $_POST['idProduct'], date('Y-m-d H:i:s'), $_POST['review']);
            if (false == $reviewProduct->insert()) {
                echo 'Ошибка при добавлении отзыва';
            } else {
                header('Location: /Lesson9/index.php');
            }
        } else {
            echo 'Не передан идентификатор товара';
        }
    } else {
        echo 'Пользователь не определен';
    }
} else {
    echo 'Текст комментария не передан';
}
