<?php

require_once __DIR__ . '/classes/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/guestBook.txt');
$guestBook->append('Первый коммент');
$guestBook->append('Второй коммент');
$guestBook->append('Третий коммент');
$guestBook->save();
