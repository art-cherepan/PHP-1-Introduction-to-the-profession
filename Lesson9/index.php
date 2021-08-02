<?php

include __DIR__ . '/classes/DB.php';

$DB = new DB('localhost', 'natural_stone', 'root', 'root');
$data = $DB->query('select * from products', []);
var_dump($data);