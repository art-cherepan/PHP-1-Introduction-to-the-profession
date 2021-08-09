<?php

class User
{
    protected $id;
    protected $firstName;
    protected $secondName;
    protected $patronymic;
    protected $email;
    protected $phone;

    public function __construct($id, $firstName, $secondName, $patronymic, $email, $phone)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->patronymic = $patronymic;
        $this->email = $email;
        $this->phone = $phone;
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
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->secondName;
    }
    
    /**
     * @return mixed
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
}