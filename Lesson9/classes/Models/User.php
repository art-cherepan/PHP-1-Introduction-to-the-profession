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
    protected $DB;

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

    public function insert()
    {
        $insert = 'INSERT INTO users (userName, passwordHash, firstName, secondName, patronymic, email, phone) VALUES ' . '(\'' . $this->userName . '\',\'' . $this->passwordHash . '\',\'' . $this->firstName . '\',\'' . $this->secondName . '\',\'' . $this->patronymic . '\',\'' . $this->email . '\',\'' . $this->phone . '\')';
        $executeInsert = $this->DB->execute($insert);
        if (false !== $executeInsert) {
            return true;
        }
        return false;
    }

    public function update()
    {
        $update = 'UPDATE users SET userName = ' . '\'' . $this->userName . '\'' . ', passwordHash = ' . '\'' . $this->passwordHash . '\'' . ', firstName = ' . '\'' . $this->firstName . '\'' . ', secondName = ' . '\'' . $this->secondName . '\'' . ', patronymic = ' . '\'' . $this->patronymic . '\'' . ', email = ' . '\'' . $this->email . '\'' . ', phone = ' . '\'' . $this->phone . '\'' . 'WHERE id = ' . $this->id;
        return $this->DB->execute($update);
    }

    public function delete()
    {
        $delete = 'DELETE FROM users WHERE id = ' . $this->id;
        return $this->DB->execute($delete);
    }
}