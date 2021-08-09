<?php

class Review
{
    protected $id;
    protected $idUser;
    protected $idProduct;
    protected $date;
    protected $text;

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
}