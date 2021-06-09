<?php

//если с формы прилетели данные
if (isset($_POST['text'])) {
    //если прилетела не пустая строка
    if ('' != $_POST['text']) {
        include __DIR__ . '/functions.php';
        if (is_readable(__DIR__ . '/guestBook.txt')) {
            $records = getFileRecords(__DIR__ . '/guestBook.txt');
            if (false !== $records) {
                $records[] = $_POST['text'];
                $arrToSting = implode(PHP_EOL, $records);
                file_put_contents(__DIR__ . '/guestBook.txt', $arrToSting);
                ?><p>Комментарий успешно добавлен!</p>
                <?php
            } else {
                ?><p>Ошибка при чтении данных из файла!</p><?php
            }
        } else {
            ?> <p>Файл не существует, либо не доступен для чтения!</p> <?php
        }
    } else { ?> <p>Комментарий не должен быть пустым!</p> <?php
    }
} else {
    ?><p>Ошибка отправки данных с формы!</p> <?php
}
?>