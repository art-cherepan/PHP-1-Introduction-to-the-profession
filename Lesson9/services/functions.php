<?php
session_start();

require_once __DIR__ . '/../classes/DB.php';
require_once __DIR__ . '/../classes/Models/Product.php';

function getProducts()
{
    $getProducts = 'SELECT * FROM products';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $queryProducts = $DB->query($getProducts, []);
    if ($queryProducts !== false) {
        $products = [];
        foreach ($queryProducts as $queryProduct) {
            $product = new Product($queryProduct['id'], $queryProduct['name'],
                $queryProduct['price'], $queryProduct['description'],
                $queryProduct['path']);
            $products[] = $product;
        }
        return $products;
    } else {
        return false;
    }
}

function getProduct($id)
{
    $getProduct = 'SELECT * FROM products WHERE id=:id;';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $queryProduct = $DB->query($getProduct, [':id' => $id]);
    if ($queryProduct !== false) {
        return $queryProduct[0];
    }
    return false;
}

function checkUserName($userName)
{
    $getUserName = 'SELECT * FROM users WHERE userName=:userName;';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $queryUserName = $DB->query($getUserName, [':userName' => $userName]);
    if ($queryUserName !== false) {
        if (count($queryUserName) == 1) {
            return true;
        }
    }
        return false;
}

function checkPhone($phone)
{
    $getUserPhone = 'SELECT * FROM users WHERE phone=:phone;';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $queryUserPhone = $DB->query($getUserPhone, [':phone' => $phone]);
    if ($queryUserPhone !== false) {
        if (count($queryUserPhone) > 0) {
            return true;
        }
    }
    return false;
}

function registrationUser($userName, $password, $firstName, $secondName, $patronymic, $email, $phone)
{
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $insert = 'INSERT INTO users (userName, passwordHash, firstName, secondName, patronymic, email, phone) VALUES ' . '(\'' . $userName . '\',\'' . $passwordHash . '\',\'' .  $firstName . '\',\'' . $secondName . '\',\'' . $patronymic . '\',\'' . $email . '\',\'' . $phone . '\')';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $executeInsert = $DB->execute($insert);
    if ($executeInsert !== false) {
        return true;
    }
    return false;
}

function checkPassword($userName, $password)
{
    $getPasswordHash = 'SELECT passwordHash FROM users WHERE userName=:userName';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $queryPasswordHash = $DB->query($getPasswordHash, [':userName' => $userName]);
    if ($queryPasswordHash !== false) {
        if (password_verify($password, $queryPasswordHash[0]['passwordHash'])) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function getIdByUserName($userName)
{
    $getId = 'SELECT id FROM users WHERE userName=:userName;';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $queryId = $DB->query($getId, [':userName' => $userName]);
    if ($queryId !== false) {
        return $queryId[0]['id'];
    }
    return false;
}

function setComment($idUser, $idProduct, $text)
{
    $insert = 'INSERT INTO reviews (id_user, id_product, date, text) VALUES ' . '(\'' . $idUser . '\',\'' . $idProduct . '\',\'' .  date('Y-m-d H:i:s') . '\',\'' . $text . '\')';
    $DB = new DB('localhost', 'natural_stone', 'root', 'root');
    $executeInsert = $DB->execute($insert);
    if ($executeInsert !== false) {
        return true;
    }
    return false;
}