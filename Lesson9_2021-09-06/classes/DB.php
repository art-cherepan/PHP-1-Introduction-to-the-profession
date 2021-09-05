<?php

class DB
{
    protected $host;
    protected $dbname;
    protected $login;
    protected $password;
    protected $dbh;
    protected $sth;

    public function __construct($host, $dbname, $login, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->login = $login;
        $this->password = $password;
        $this->dbh = new PDO(
            'mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->login, $this->password
        );
    }

    public function execute($sql) //для инсерта и делита
    {
        $this->sth = $this->dbh->prepare($sql);
        if ($this->sth->execute() == true) {
            return true;
        }
        else {
            return false;
        }
    }

    public function query($sql, $data) //для селекта
    {
        $this->sth = $this->dbh->prepare($sql);
        if ($this->sth->execute($data) == false) {
            return false;
        } else {
            return $this->sth->fetchall();
        }
    }
}