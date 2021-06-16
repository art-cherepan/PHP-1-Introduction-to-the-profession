<?php

require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/Uploader.php';

$guestBook = new GuestBook(__DIR__ . '/guestBook.txt');
$guestBook->append('Первый коммент')->append('Второй коммент')->append('Третий коммент')->save();

?>
    <form action="/Lesson6/index.php" method="post"
          enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Отправить файл</button>
    </form>

<?php

$uploader = new Uploader('img');
if ($uploader->upload()) {
    ?><p>Файл успешно загружен!</p><?php } else { ?> <p>Не удалось загрузить
        файл!</p><?php
}
