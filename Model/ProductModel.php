<?php


namespace Model;

use PDO;

class ProductModel
{
    protected $datebase;

    public function __construct()
    {
        $db = new DBConnecttion();
        $this->datebase = $db->connect();
    }

    function getAll()
    {
        $sql = 'select * from products';
        $stmt = $this->datebase->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function get($id)
    {
        $sql = 'select * from products where id=?';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function add($product)
    {
        $sql = 'insert into products(name,productLine,price,amount,dayCreate,description)
            values (?,?,?,?,?,?)';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->line);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->amount);
        $stmt->bindParam(5, $product->day);
        $stmt->bindParam(6, $product->description);
        return $stmt->execute();
    }

    function update($id, $product)
    {
        $sql = 'update products set name=?,productLine=?,price=?,amount=?,dayCreate=?,description=? where id=?';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->line);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->amount);
        $stmt->bindParam(5, $product->day);
        $stmt->bindParam(6, $product->description);
        $stmt->bindParam(7, $id);
        return $stmt->execute();
    }

    function delete($id){
        $sql='delete from products where id=?';
        $stmt=$this->datebase->prepare($sql);
        $stmt->bindParam(1,$id);
        return $stmt->execute();
    }

    function search($search){
        $sql="select * from products where name like '%$search%'";
        $stmt=$this->datebase->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}