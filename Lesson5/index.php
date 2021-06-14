<?php

session_start();
include __DIR__ . '/functions.php';

if (!is_readable(__DIR__ .'/usersData.txt')) {
    $handle = fopen(__DIR__ . '/usersData.txt', 'w+');
    fwrite($handle, 'Петя|' . password_hash('123', PASSWORD_DEFAULT) . PHP_EOL);
    fwrite($handle, 'Вася|' . password_hash('456', PASSWORD_DEFAULT));
    fclose($handle);
}

?>
<a href="/Lesson5/login.php">Авторизация</a>
<a href="/Lesson5/showPhotos.php">Показать фотки</a>
<a href="/Lesson5/addPhotosToGallery.php">Добавить фотки</a>