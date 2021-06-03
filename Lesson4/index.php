<?php
//    $handle = fopen(__DIR__ .'/guest_book.txt', 'w+');
//    fwrite($handle, 'строка1'.PHP_EOL);
//    fwrite($handle, 'строка2'.PHP_EOL);
//    fclose($handle );

    include __DIR__.'/functions.php';
    $data = get_file_data(__DIR__.'/guest_book.txt');
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
        if (gettype($data) === 'array') {
            foreach ($data as $record) {
    ?><p><?php echo $record; ?></p>
        <?php }} ?>
    <form action="/Lesson4/get_form_data.php" method="post">
        <input type="text" name="text">
        <button type="submit">Записать строку</button>
    </form>
    <p><a href="/Lesson4/show_photos.php">Показать фотки</a></p>
    <form action="/Lesson4/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
