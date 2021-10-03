<?php

require_once __DIR__ . '/../DB.php';

class ReviewProduct
{
    protected $id;
    protected $idUser;
    protected $idProduct;
    protected $date;
    protected $text;
    protected $DB;
    
    public function __construct($id, $idUser, $idProduct, $date, $text)
    {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->idProduct = $idProduct;
        $this->date = $date;
        $this->text = $text;
        $this->DB = new DB('localhost', 'natural_stone', 'root', 'root');
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

    public function insert()
    {
        $insert = 'INSERT INTO reviews_products (id_user, id_product, date, text) VALUES ' . '(\'' . $this->idUser . '\',\'' . $this->idProduct . '\',\'' . $this->date . '\',\'' . $this->text . '\')';
        return $this->DB->execute($insert);
    }

    public function delete()
    {
        $delete = 'DELETE FROM reviews_products WHERE id = ' . $this->id;
        return $this->DB->execute($delete);
    }
}