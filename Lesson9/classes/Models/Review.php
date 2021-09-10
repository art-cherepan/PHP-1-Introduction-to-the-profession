<?php

require_once __DIR__ . '/../DB.php';
require_once __DIR__ . '/User.php';

class Review
{
    protected $id;
    protected $idUser;
    protected $idProduct;
    protected $date;
    protected $text;
    protected $user;
    
    public function __construct($id, $idUser, $idProduct, $date, $text)
    {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->idProduct = $idProduct;
        $this->date = $date;
        $this->text = $text;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
    
    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
    
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    
    public function setUser()
    {
        $DB = new DB('localhost', 'natural_stone', 'root', 'root');
        $select = 'SELECT * FROM users WHERE id=:id';
        $user = $DB->query($select, [':id' => $this->idUser]);
        if ($user != false) {
            $this->user = new User($user[0]['id'], $user[0]['userName'], $user[0]['passwordHash'], $user[0]['firstName'], $user[0]['secondName'], $user[0]['patronymic'], $user[0]['email'], $user[0]['phone']);
            return true;
        } else {
            return false;
        }
    }
}