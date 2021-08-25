<?php

class User
{
    protected $id;
    protected $userName;
    protected $passwordHash;
    protected $firstName;
    protected $secondName;
    protected $patronymic;
    protected $email;
    protected $phone;

    public function __construct($id, $userName, $passwordHash, $firstName, $secondName, $patronymic, $email, $phone)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->passwordHash = $passwordHash;
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
    public function getUserName()
    {
        return $this->userName;
    }
    
    /**
     * @return mixed
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
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