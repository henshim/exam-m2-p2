<?php
namespace Model;
use PDO;

class DBConnecttion
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=testM2';
        $this->user='admin';
        $this->password='123456';
    }

    function connect(){
        try {
            return new PDO($this->dsn,$this->user,$this->password);
        }catch (\PDOException $PDOException){
            print_r($PDOException->getMessage());
        }
    }
}