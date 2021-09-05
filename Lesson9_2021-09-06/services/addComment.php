<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/functions.php';

if (!empty($_POST['comment'])) {
    if (!empty($_SESSION['userName'])) {
        if (!empty($_POST['idProduct'])) {
            $id = getIdByUserName($_SESSION['userName']);
            if (false == setComment($id, $_POST['idProduct'], $_POST['comment'])) {
                echo 'Ошибка при добавлении комментария';
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
