<?php

assert(true === existsUser('Петя'));
assert(true === existsUser('Вася'));
assert(false === existsUser('Даша'));
assert(true === checkPassword('Петя', '123'));
assert(true === checkPassword('Вася', '456'));
assert(false === checkPassword('Петя', '456'));
assert(false === checkPassword('Даша', '123'));

function getUsersList()
{
    if (is_readable(__DIR__ . '/usersData.txt')) {
        $data = file_get_contents(__DIR__ . '/usersData.txt');
        $records = explode(PHP_EOL, $data);
        $users = [];
        foreach ($records as $record) {
            $recordExplode = explode('|', $record);
            $users[$recordExplode[0]] = $recordExplode[1];
        }
        return $users;
    } else {
        return false;
    }
}

function existsUser($login)
{
    $users = getUsersList();
    if (false !== $users) {
        if (array_key_exists($login, $users)) {
            return true;
        } else {
            return false;
        }
    }
}

function checkPassword($login, $password)
{
    $users = getUsersList();
    if (false !== $users) {
        if (existsUser($login)) {
            if (password_verify($password, $users[$login])) {
                return true;
            }
        }
    }
    return false;
}

function getCurrentUser()
{
    if (isset($_SESSION['username'])) {
        if (existsUser($_SESSION['username'])) {
            return $_SESSION['username'];
        }
    }
    return null;
}

function getImgObjects($pathToFile)
{
    if (is_readable($pathToFile)) {
        return scandir($pathToFile);
    }
    else {
        return false;
    }
}