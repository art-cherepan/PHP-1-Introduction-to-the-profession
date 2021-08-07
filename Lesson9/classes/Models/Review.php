<?php

class Review
{
    protected $id;
    protected $text;
    protected $date;
    protected $userId;

    public function __construct($date, $text, $userId)
    {
        $this->text = $text;
        $this->date = $date;
        $this->userId = $userId;
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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}