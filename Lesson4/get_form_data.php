<?php
    if (isset($_POST['text'])) {
        include __DIR__.'/functions.php';
        if (is_readable(__DIR__.'/guest_book.txt')) {
            $arr_records = get_file_data(__DIR__.'/guest_book.txt');
            $arr_records[] = $_POST['text'];
            $arr_to_sting = implode(PHP_EOL, $arr_records);
            file_put_contents(__DIR__.'/guest_book.txt',$arr_to_sting );
            header('Location: /Lesson4');
        }
        else {
            echo 'the file is not exist or not readable!';
        }
    }
?>