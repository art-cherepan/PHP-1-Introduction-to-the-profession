<?php
    //если файла нет, либо нет прав, создаем файл, пишем в него пару строк
    if (!is_readable(__DIR__ .'/guestBook.txt')) {
	    $handle = fopen(__DIR__ . '/guestBook.txt', 'w+');
	    fwrite($handle, 'строка1' . PHP_EOL);
	    fwrite($handle, 'строка2' . PHP_EOL);
	    fclose($handle);
    }

    include __DIR__.'/functions.php';
    //получаем массив записей
    $records = getFileRecords(__DIR__ . '/guestBook.txt');
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //выводим все записи из файла
        if ('array' === gettype($records)) {
            if (0 == count($records)) {
                ?><p>Нет ни одной записи</p><?php
               }
            else {
            foreach ($records as $record) {
    ?><p><?php echo $record; ?></p>
            <?php }}} else { ?><p>Ошибка при получении данных из файла</p><?php } ?>
    <form action="/Lesson4/writeCommentInFile.php" method="post">
        <input type="text" name="text">
        <button type="submit">Оставить комментарий</button>
    </form>
    
    <p><a href="/Lesson4/showPhotos.php">Показать фотографии</a></p>
    
    <form action="/Lesson4/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Отправить файл</button>
    </form>
</body>
</html>
